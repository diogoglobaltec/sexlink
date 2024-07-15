const Sequelize = require('sequelize');
const database = require('./db');


const foto = database.define('fotos',{

    id:{

        type: Sequelize.BIGINT.UNSIGNED,
        autoIncrement: true,
        allowNull: false,
        primaryKey: true
    },


id_acompanhante:{
    type: Sequelize.BIGINT.UNSIGNED,
},

foto:{

    type: Sequelize.STRING(255),
    allowNull: false
},

pasta:{

    type: Sequelize.STRING(255),
    allowNull: false
},

capa:{

    type: Sequelize.STRING(255),
    allowNull: false
},

descricao:{

    type: Sequelize.STRING(255),
    allowNull: false
},



})

module.exports = foto;
