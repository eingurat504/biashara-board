const { Model } = require('sequelize');

module.exports = function(sequelize, Sequelize) {

    class Board extends Model {

    };

    Board.init({

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
        tableName: 'boards',
        modelName: 'Board'
    });

    return Board;

}