var exports = module.exports = {}

exports.create = function(req,res){

    var title = req.body.title;
    var description = req.body.description;
    var status = req.body.status;

    var Card = require('../models/card.js');

    var testing = Card.create();

    // console.log(Card);

    //validation implementation
    req.checkBody('title', 'Title is required').notEmpty();

    var errors = req.validationErrors();
    
    if(errors){
        res.render('./card/create',{
            errors:errors
        });
    }else{

        var data = {
            title: req.body.title,
            description: req.body.description,
            status: req.body.status
        };


        Card.create(data).then(function(newEmail, created){
            if(!newEmail){
                // return done(null, false);
                console.log('failed to insert into the emails table');
            }
            if(newEmail){
                return done(null, newEmail);
            }
        });
            
    //     req.flash('success_msg','You are registered and can now login');   
        res.redirect('/dashboard');
    }
 
}