const { Model } = require('sequelize');

module.exports = function(sequelize, Sequelize) {

    class User extends Model{

        static associate({Board}) {
            this.hasMany(Board, {foreignKey: 'userId',  as: 'boards' })
        }
        static associate({Card}) {
            this.hasMany(Card, {foreignKey: 'createdBy', as: 'cards' })
        }

    };

    User.init({

        id: {
            autoIncrement: true,
            primaryKey: true,
            type: Sequelize.INTEGER
        },

        firstname: {
            type: Sequelize.STRING,
            notEmpty: true
        },

        lastname: {
            type: Sequelize.STRING,
            notEmpty: true
        },

        username: {
            type: Sequelize.TEXT
        },

        about: {
            type: Sequelize.TEXT
        },

        email: {
            type: Sequelize.STRING,
            validate: {
                isEmail: true
            }
        },

        password: {
            type: Sequelize.STRING,
            allowNull: false
        },

        last_login: {
            type: Sequelize.DATE
        },

        status: {
            type: Sequelize.ENUM('active', 'inactive'),
            defaultValue: 'active'
        }

    },{
        sequelize,
        tableName: 'users',
        modelName: 'User'
    });

    return User;

}