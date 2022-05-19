const express = require('express');
const passport = require('passport');
const router = express();

var indexController = require('../controllers/indexcontroller.js');
var authController = require('../controllers/authController.js');

router.get('/', indexController.index);

/**
 * Authenticate
 */
router.get('/signup', authController.signup);
router.post('/signup', passport.authenticate('local-signup', {
        successRedirect: '/dashboard',
        failureRedirect: '/signup'
    }
));

router.get('/signin', authController.signin);
router.post('/signin', passport.authenticate('local-signin', {
    successRedirect: '/dashboard',
    failureRedirect: '/signin'
}
));

router.get('/dashboard', isLoggedIn, authController.dashboard);
router.get('/logout', authController.logout);

function isLoggedIn(req, res, next) {
    if (req.isAuthenticated())
        return next(); 
    res.redirect('/signin');
}

// router.get('/email', isLoggedIn, emailController.email);
// router.get('/compose', isLoggedIn, emailController.compose);
// router.post('/compose', isLoggedIn, emailController.send);
// router.get('/email', isLoggedIn, emailController.email);
// router.get('/compose', isLoggedIn, emailController.compose);
// router.post('/compose', isLoggedIn, emailController.send);
// router.get('/email', isLoggedIn, emailController.email);
// router.get('/compose', isLoggedIn, emailController.compose);
// router.post('/compose', isLoggedIn, emailController.send);
// router.get('/email', isLoggedIn, emailController.email);
// router.get('/compose', isLoggedIn, emailController.compose);
// router.post('/compose', isLoggedIn, emailController.send);
// router.get('/email', isLoggedIn, emailController.email);
// router.get('/compose', isLoggedIn, emailController.compose);
// router.post('/compose', isLoggedIn, emailController.send);


module.exports = router;