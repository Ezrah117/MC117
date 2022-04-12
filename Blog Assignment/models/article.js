//mongoose import
const mongoose = require('mongoose')
const marked = require('marked')
const slugify = require('slugify')
/*
html purification libraries to sanatize the marked down html
*/
const domPurifier = require('dompurify')
const { JSDOM } = require('jsdom')
const dompurify = domPurifier(new JSDOM().window)
/*
create new article schema constructor to hold the different 
columns of the article
*/
const articleSchema = new mongoose.Schema({
    title: {
        type: String,
        required: true
    },
    description: {
        type: String
    },
    markdown: {
        type: String,
        required: true
    },
    /*
    default property passes function to give a new 
    article the current date
    */
    createdAt: {
        type: Date,
        default: () => Date.now()
    },
    /*
    create unique slug urls for articles instead of long id's
    */
    slug: {
        type: String,
        required: true,
        unique: true
    },
    /*
    create the html sanitation column
    */
    sanitizedHtml: {
        type: String,
        required: true
    }
});
/*
some validation and before attributes.
function will be called and used as validation when editing, deleting,
updating and submitting new posts
*/
articleSchema.pre('validate', function(next) {
    /*
    if statement to set slug url of the title and converts slug url to lowercase
    and force slugify to remove chars that do not fit in a url
    */
    if (this.title) {
        this.slug = slugify(this.title), {lower:true,
        strict: true}
    }
    /*
    if statement to check if any marked down HTML has been processed and then 
    proceeds to sanitize it to project site from malicious injections.
    */
    if (this.markdown) {
        this.sanitizedHtml = dompurify.sanitize(marked(this.markdown))
    }
    next()
})

//export the current schema for the articles
module.exports = mongoose.model('Article', articleSchema)