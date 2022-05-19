const { Model } = require('sequelize');

module.exports = function(sequelize, Sequelize) {

    class Card extends Model{
        
    };

     Card.init({

        id: {
            autoIncrement: true,
            primaryKey: true,
            type: Sequelize.INTEGER
        },

        title: {
            type: Sequelize.STRING,
            notEmpty: true
        },

        description: {
            type: Sequelize.STRING,
            notEmpty: true
        },

        status: {
            type: Sequelize.ENUM('active', 'inactive'),
            defaultValue: 'active'
        }


    },{
        sequelize,
        tableName: 'cards',
        modelName: 'Card'
    });

    return Card;

}