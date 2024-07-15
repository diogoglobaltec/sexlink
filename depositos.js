const Sequelize = require('sequelize');
const database = require('./db');
 
const Deposito = database.define('users', {
    id: {
        type: Sequelize.BIGINT.UNSIGNED,
        autoIncrement: true,
        allowNull: false,
        primaryKey: true
    },
    name: {
        type: Sequelize.STRING(255),
        allowNull: false
    },

    email: {
        type: Sequelize.STRING(255),
        allowNull: false
    },

     password: {
        type: Sequelize.STRING(255),
        allowNull: false
    },


 
            })
 
module.exports = Deposito;

