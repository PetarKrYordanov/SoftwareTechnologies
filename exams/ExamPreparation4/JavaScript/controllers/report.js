const Report = require('../models').Report;

module.exports = {
    index: (req, res) => {
        Report.findAll().then(reports=>{
            res.render('report/index',{'reports': reports})

    });
        },
    createGet: (req, res) => {
        res.render('report/create');
    },
    createPost: (req, res) => {
        let arg = req.body;
        console.log(arg);
        Report.create(arg).then(()=>{
            res.redirect("/");
        })
    },
    detailsGet: (req, res) => {
       let id = req.params.id;
        console.log(id);
        Report.findById(id).then(report =>{
           res.render('report/details', report.dataValues)
       })
    },
    deleteGet: (req, res) => {
        let id = req.params.id;
        console.log(id);
        Report.findById(id).then(report =>{
            res.render('report/delete', report.dataValues)
        })

    },
    deletePost: (req, res) => {
        let id = req.params.id;
        let args = req.body;

        Report.findById(id).then(report =>{
            report.destroy(args).then(()=>
            res.redirect("/"))
        })
    }
};