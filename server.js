var express = require('express');
const app = express();
var passport = require('passport')
var session = require('express-session')
var bodyParser = require('body-parser')
// var env = require('dotenv').load()
var exphbs = require('express-handlebars')
var models = require("./app/models");

app.get('/', function(req, res) {
    res.send('Welcome to Passport with Sequelize');
});

// Sync Database
models.sequelize.sync().then(function() {
    console.log('Nice! Database looks fine')
}).catch(function(err) {
    console.log(err, "Something went wrong with the Database Update!")
});

// //For Handlebars
app.set('views', './app/views')
app.engine('hbs', engine({ extname: '.hbs' , defaultLayout: 'main'}));
app.set('view engine', 'hbs');

app.listen(5000, function(err) {
    if (!err)
        console.log("Site is live");
    else console.log(err)

});
