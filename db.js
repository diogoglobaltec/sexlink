const Sequelize = require('sequelize');
const sequelize = new Sequelize('u638300323_Laravel', 'u638300323_Mestre', 'Mv1advdq!', {dialect: 'mysql', host: '193.203.175.84',

define: {
    timestamps: false
  },

});

module.exports = sequelize;
