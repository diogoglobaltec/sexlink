const Sequelize = require('sequelize');
const database = require('./db');


const acompanhante = database.define('acompanhantes',{




id_acompanhante:{
    type: Sequelize.BIGINT.UNSIGNED,
},

username:{

    type: Sequelize.STRING(255),
    allowNull: false
},

Genero:{
    type: Sequelize.CHAR(255),
    allowNull: false
},
valor:{
    type: Sequelize.INTEGER(11),
    allowNull: false
},
idade:{
    type: Sequelize.DATE(6),
    allowNull: false
},
OralSemCamisa:{
    type: Sequelize.CHAR(5),
    allowNull: false
}, 

FinalizaOral:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
DuplaPenetracao:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
Anal:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
Grupal:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
Lesbianismo:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
ChuvaDourada:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
Filma:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
Fotografa:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
Viaja:{
    type: Sequelize.CHAR(5),
    allowNull: false
},  
descricao:{
    type: Sequelize.TEXT('long'),
    allowNull: false
},  



})

acompanhante.removeAttribute('id');
module.exports = acompanhante;



