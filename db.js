const Sequelize = require('sequelize');
const sequelize = new Sequelize('laravel', 'root', 'mv1advdq', {dialect: 'mysql', host: 'localhost',

define: {
    timestamps: false
  },

});
 
module.exports = sequelize; 