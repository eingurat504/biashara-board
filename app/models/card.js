const { Model } = require('sequelize');

module.exports = function(sequelize, Sequelize) {

    class Card extends Model{
        static associate({Board}) {
            this.belongsTo(Board, {foreignKey: 'boardId', as: 'boards' })
        }
    };

     Card.init({
        id: {
            autoIncrement: true,
            primaryKey: true,
            type: Sequelize.INTEGER
        },
        userId: {
            type: Sequelize.INTEGER,
            notEmpty: true
        },
        boardId: {
            type: Sequelize.INTEGER,
            notEmpty: true
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
        tableName: 'cards',
        modelName: 'Card'
    });

    return Card;

}