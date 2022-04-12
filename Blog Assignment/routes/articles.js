const express = require('express')
const Article = require('./../models/article')
const router = express.Router()

/*
attempt to get a new route to create a new article
the page will then render a new article page and grant access to the route
*/
router.get('/new', (req, res) => {
    res.render('articles/new', {article: new Article() })
})

router.get('/edit/:id', async (req, res) => {
    const article = await Article.findById(req.params.id)
    res.render('articles/edit', {article: article })
})

/*
created route for when user is redirected to article slug url after saving
an id will then be displayed on a new page.
call async property as it is an asynchronous function and use await
to wait for the article.
if page does not render properly, an if function is used to render the home
page instead.
*/
router.get('/:slug', async (req, res) => {
    const article = await Article.findOne({slug: req.params.slug})
    if (article == null) res.redirect('/')
    res.render('articles/show', {article: article})
})

router.post('/', async (req, res, next) => {
    req.article = new Article()
    next()
}, saveArticleRedirect('new'))

/*
created a PUT router for when editing articles
*/
router.put('/:id', async (req, res, next) => {
    req.article = await Article.findById(req.params.id)
    next()
}, saveArticleRedirect('edit'))
/*
create new router to delete older articles.asynchronously.
waits to find article by its id and proceed to delete it.
user will then be redirected.
*/
router.delete('/:id', async (req, res) => {
    await Article.findByIdAndDelete(req.params.id)
    res.redirect('/')
})  
/*
creation of form specifications of new articles.
create requests so that paramaters may be accessed.
set function to asynchronous so that it may be saved by article.save()
*/
function saveArticleRedirect(path) {
    return async (req, res) => {
        let article = req.article
        article.title = req.body.title
        article.description = req.body.description
        article.markdown = req.body.markdown
        try {
//if the save is successful, user will be redirected to article slug url.
            article = await article.save()
            res.redirect(`/articles/${article.slug}`)
/*
catch exception to tell the user if there is an error and could not save.
if there is an error, the current page needs to be rendered out.
pass in previous article to the newly rendered article so that information may be parsed.
*/
        } catch (e) {
            res.render(`articles/${path}`, {article: article}
            )
        }   
    }
}

module.exports = router