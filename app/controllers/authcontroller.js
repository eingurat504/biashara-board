var exports = module.exports = {}
 
exports.signup = function(req, res) {
  res.render('../auth/register');
}

exports.signin = function(req, res) {
    res.render('./auth/login');
}

exports.dashboard = function(req,res){
	res.render('home'); 
}

exports.logout = function(req,res){
  req.session.destroy(function(err) {
        res.redirect('./auth/login');
  });

}
