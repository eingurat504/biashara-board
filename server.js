// https://code.tutsplus.com/tutorials/using-passport-with-sequelize-and-mysql--cms-27537
// https://dev.to/darshanbib/user-management-for-node-js-mysql-using-sequelize-and-passportjs-44kj
const client = require('./app/config/config.js');
const express = require('express');
const passport = require('passport');
const session = require('express-session');
const sequelize = require('sequelize');
const exphbs  = require('express-handlebars');
const models = require("./app/models");
const User = require("./app/models/user.js");
const app = express();
const { expressValidator }  = require('express-validator');
var flash = require('connect-flash');
const path = require('path');

const appRouter = require('./app/routes/auth');

// For Passport
app.use(session({ secret: 'keyboard cat', resave: true, saveUninitialized: true, cookie: { maxAge: 60000 }})); //session secret key
app.use(passport.initialize());
app.use(passport.session()); // persistent login sessions

//connect flash
app.use(flash());

//setting global variables for the flash messages
app.use(function(req, res, next){
    res.locals.success_msg = req.flash('success_msg');
    res.locals.error_msg = req.flash('error_msg');
    res.locals.error = req.flash('error');
    next();
});

// Function to serve all static files
app.use(express.static(path.join(__dirname, 'public')));
// inside public directory.
app.use('/css', express.static('css'));
app.use('/img', express.static('img'));
app.use('/js', express.static('js'));
app.use('/lib', express.static('lib'));


// app.get('/', function(req, res) {
//     res.send('Welcome to Passport with Sequelize');
https://www.makeuseof.com/passport-authenticate-node-postgres/#create-database-helper-functions
// });


app.use('/', appRouter);


models.sequelize.sync().then(function() {
    console.log('Nice! Database looks fine')
}).catch(function(err) {
    console.log(err, "Something went wrong with the Database Update!")
});

client.connect();

app.engine('hbs', exphbs.engine({
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

app.set('views', path.resolve(__dirname, 'views'));

app.listen(8000, function(err) {
    if (!err)
        console.log('its working fine');
    else console.log(err)

});

module.exports = app;

