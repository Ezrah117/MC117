//impports
const express = require('express')
const mongoose = require('mongoose')
const Article = require('./models/article')
const articleRouter = require('./routes/articles')
const methodOverride = require('method-override')
const app = express()

//establishing the mongoose connection to a local server
mongoose.connect('mongodb://localhost/Blog', {
    useNewUrlParser: true,
    useUnifiedTopology: true,
})

//set the apps view engine to read the ejs files
app.set('view engine', 'ejs')

/*
tell app to use encoded url to access all paramaters from
article form inside article route.
app is then told to use a method override to allow for 
deletion of old articles
*/
app.use(express.urlencoded({extended: false}))
app.use(methodOverride('_method'))

app.get('/', async (req, res) => {

//finds and displays articles in descending order
    const articles = await Article.find().sort({createdAt: 'desc'})
//renders the index page to the user 
    res.render('articles/index', {articles: articles})
})

//tell app to use the article router
app.use('/articles', articleRouter)

//listen for connection
app.listen(5000)