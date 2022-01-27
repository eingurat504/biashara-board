var express = require('express');
var app = express();
var passport = require('passport')
var session = require('express-session')
var bodyParser = require('body-parser')
const { engine } = require('express-handlebars')
var models = require("./app/models");
// var expressValidator = require('express-validator');
var flash = require('connect-flash');
var path = require('path');


 //For Passport
app.use(session({ secret: 'keyboard cat', resave: true, saveUninitialized: true, cookie: { maxAge: 60000 }})); //session secret key
app.use(passport.initialize());
app.use(passport.session()); // persistent login sessions


//Express Validator
// app.use(expressValidator({
//     errorFormatter: function(param, msg, value){
//         var namespace = param.split(',')
//         , root = namespace.shift()
//         , formParam = root;

//         while(namespace.length){
//             formParam += '[' + namespace.shift() + ']';
//         }
//         return{
//             param: formParam,
//             msg: msg,
//             value :value
//         };
//     }
// }));

//connect flash
app.use(flash());

//setting global variables for the flash messages
app.use(function(req, res, next){
    res.locals.success_msg = req.flash('success_msg');
    res.locals.error_msg = req.flash('error_msg');
    res.locals.error = req.flash('error');
    next();
});

//set static folder
app.use(express.static(path.join(__dirname, 'public')));



app.get('/', function(req, res) {
    res.send('Welcome to Passport with Sequelize');
});

//Routes
var authRoute = require('./routes/auth.js')(app,passport);

//load passport strategies
require('../config/passport/passport.js')(passport, models.user);

// Sync Database
models.sequelize.sync().then(function() {
    console.log('Nice! Database looks fine')
}).catch(function(err) {
    console.log(err, "Something went wrong with the Database Update!")
});

// //For Handlebars
app.engine('handlebars', engine({ extname: '.hbs', defaultLayout: 'main' }));
app.set('view engine', '.hbs');

app.set('views', './app/views');

app.listen(5000, function(err) {
    if (!err)
        console.log("Site is live");
    else console.log(err)

});