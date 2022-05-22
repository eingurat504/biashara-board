const { Model } = require('sequelize');

module.exports = function(sequelize, Sequelize) {

    class Board extends Model {
        static associate({User}) {
            this.belongsTo(User, {foreignKey: 'userId', as: 'users' })
        }
        static associate({Card}) {
            this.hasMany(Card, {foreignKey: 'cardId',  as: 'cards' })
        }
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
        },
        createdBy: {
            type: Sequelize.INTEGER,
            notEmpty: true
        }
    },{
        sequelize,
        tableName: 'boards',
        modelName: 'Board'
    });

    return Board;

}