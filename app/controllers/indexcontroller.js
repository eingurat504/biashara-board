const express = require("express");
const router = express();

async function index(req, res) {  
    res.send('Welcome to Passport with Sequelize');
}

module.exports = {
  index
}