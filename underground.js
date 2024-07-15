const Sequelize = require('sequelize');
const database = require('./db');


const underground = database.define('undergrounds',{


id:{

    type: Sequelize.BIGINT.UNSIGNED,
    autoIncrement: true,
    allowNull: false,
    primaryKey: true
},

id_acompanhante:{
    type: Sequelize.BIGINT.UNSIGNED,
},

galeria :{
    type: Sequelize.INTEGER(1),
    allowNull: false
},


statusPagamento :{
    type: Sequelize.STRING(255),
    allowNull: false
},
statusDeEntrada :{
    type: Sequelize.STRING(255),
    allowNull: false
},

dataDeEntrada :{
    type: Sequelize.DATE,
    allowNull: false
},
pagoNaData :{
    type: Sequelize.DATE,
    allowNull: false
},
iniciaAnuncio :{
    type: Sequelize.DATE,
    allowNull: false
},
terminaAnuncio :{
    type: Sequelize.DATE,
    allowNull: false
},




})

module.exports = underground;



