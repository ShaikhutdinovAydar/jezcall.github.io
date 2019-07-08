var express = require('express')
var bodyParser = require('body-parser')
 
var app = express()
 
// create application/x-www-form-urlencoded parser
var urlencodedParser = bodyParser.urlencoded({ extended: false })
 
// POST /login gets urlencoded bodies
app.post('/about', urlencodedParser, function (req, res) {
  if (!req.body) return res.sendStatus(400)
  console.log(req.body)
  res.send('welcome, ' + req.body.username)
})