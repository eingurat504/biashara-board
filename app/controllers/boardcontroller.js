const db = require('../models');
const Board = db.boards;

async function create(req,res){

    const title = req.body.title;
    const description = req.body.description;
    const status = req.body.status;

    //validation implementation
    req.checkBody('title', 'Title is required').notEmpty();

    const errors = req.validationErrors();
    
    if(errors){
        res.render('./card/create',{
            errors:errors
        });
    }else{

        const data = {
            title: req.body.title,
            description: req.body.description,
            status: req.body.status
        };


        Board.create(data).then(function(newEmail, created){
            if(!newEmail){
                return done(null, false);
            }
            if(newEmail){
                return done(null, newEmail);
            }
        });
            
        res.redirect('/dashboard');
    }
 
}

module.exports = {
    create
}
