// https://code.tutsplus.com/tutorials/using-passport-with-sequelize-and-mysql--cms-27537

const express = require('express');
const app = express();
const passport = require('passport');
const session = require('express-session');
const bodyParser = require('body-parser');
const exphbs  = require('express-handlebars');
var models = require("./app/models");
// const { expressValidator } = require('express-validator');
var flash = require('connect-flash');
var path = require('path');


// For Passport
app.use(session({ secret: 'keyboard cat', resave: true, saveUninitialized: true, cookie: { maxAge: 60000 }})); //session secret key
app.use(passport.initialize());
app.use(passport.session()); // persistent login sessions


// //Express Validator
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
app.use(express.static(path.join(__dirname, '/public')));

app.get('/', function(req, res) {
    res.send('Welcome to Passport with Sequelize');
});

// //Routes
var authRoute = require('./app/routes/auth.js')(app,passport);

//load passport strategies
require('./app/config/passport/passport.js')(passport, models.user);

// Sync Database
models.sequelize.sync().then(function() {
    console.log('Nice! Database looks fine')
}).catch(function(err) {
    console.log(err, "Something went wrong with the Database Update!")
});

// app.set('views', path.join(__dirname, 'views'));
// app.engine('hbs', exphbs({ extname: '.hbs', defaultLayout: 'main' }));
// app.set('view engine', 'hbs');
app.engine('hbs', exphbs({
    defaultLayout: 'main',
    extname: '.hbs',
    helpers: {
        getShortComment(comment) {
            if (comment.length < 64) {
                return comment;
            }

            return comment.substring(0, 64) + '...';
        }
    }
}));

app.set('view engine', 'hbs');


app.listen(5000, function(err) {
    if (!err)
        console.log("Site is live");
    else console.log(err)

});
