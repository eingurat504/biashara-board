var exports = module.exports = {}
 
exports.signup = function(req, res) {
	res.render('../app/views/register.hbs', { 
		layout: false 
	});
}

exports.signin = function(req, res) {
	res.render('../app/views/login.hbs', { 
		layout: false 
	});
}

exports.dashboard = function(req,res){
	res.render('../app/views/home.hbs'); 
}

exports.logout = function(req,res){
  req.session.destroy(function(err) {
	res.redirect('../app/views/login.hbs', {
		layout: false 
	});
  });

}
