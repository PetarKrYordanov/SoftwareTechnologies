const Sequelize = require('sequelize');

module.exports = function (sequelize) {
    let Project = sequelize.define('Project', {
        title:{
            type: Sequelize.STRING,
            allowNull: false,
            required: true
        },
        description:{
            type:Sequelize.TEXT,
            allowNull:false,
            required: true
        },
        budget:{
            type: Sequelize.INTEGER,
            allowNull: false,
            required: true
        }
    }, { timestamps:false
    }

);
    return Project;
};