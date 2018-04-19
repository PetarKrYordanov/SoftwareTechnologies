const Article = require('../models').Article;
const User = require('../models').User;

module.exports = {
    createGet:(req,res)=>{
        res.render('article/create')
    },

    createPost:(req,res) =>{
        //take values from request
        req.body;
        const title = req.body.title;
        const content = req.body.content;

        let errorMsg=false;

        if(!req.isAuthenticated()){
            errorMsg = 'You must logged in before creating articles';
        }else if (!title){
            errorMsg = 'Title cannot be empty';
        }else if(!content){
            errorMsg = 'Content cannot be empty';
        }

        if (errorMsg){
            res.render('article/create',{error: errorMsg});
            return;
        }
        //find author
       const authorId = req.user.id;

        const article = {
            title,
            content,
            authorId
        };

        //record values
        Article.create(article).then(article => {
            res.redirect('/');
        }).catch(e=>{
            console.log(e.message);
            res.render('article/create',{error: e.message});
        })

        //redirect to /
    },

    details: (req,res)=>{
        // get article ID
        const articleId = Number(req.params.id);

        // get form Db by id
        Article.findById(articleId, {
            include: [{
                model:User
            }]
        }).then(article=> {
            if (article===null) {
                throw  new Error('Article not fount: '+ articleId);
            }
            console.log(article);
            res.render('article/details', article.dataValues)
        }).catch(e =>{
            console.log(e.message);
            res.redirect('/404');
        });

        // render template with date
    }
};