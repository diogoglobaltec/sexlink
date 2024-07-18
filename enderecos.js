const Sequelize = require('sequelize');
const database = require('./db');


const endereco = database.define('enderecos',{


id:{

    type: Sequelize.BIGINT.UNSIGNED,
    autoIncrement: true,
    allowNull: false,
    primaryKey: true
},

id_acompanhante:{
    type: Sequelize.BIGINT.UNSIGNED,
},

name:{

    type: Sequelize.STRING(255),
    allowNull: false
},

telefone:{
    type: Sequelize.STRING(255),
    allowNull: false
},

estado:{
    type: Sequelize.STRING(255),
    allowNull: false
},
cidade:{
    type: Sequelize.STRING(255),
    allowNull: false
},
regiao:{
    type: Sequelize.STRING(255),
    allowNull: false
},
bairro:{
    type: Sequelize.STRING(255),
    allowNull: false
},
rua:{
    type: Sequelize.STRING(255),
    allowNull: false
},
numero:{
    type: Sequelize.INTEGER(11),
    allowNull: false
},


})

module.exports = endereco;



