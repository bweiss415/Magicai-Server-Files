require('dotenv').config();
const express = require('express');
const mysql = require('mysql');

const app = express();
const port = process.env.PORT || 3000;

// MySQL connection
const db = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USERNAME,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
});

db.connect((err) => {
    if (err) throw err;
    console.log('Connected to the MySQL server.');
});

app.get('/', (req, res) => {
    res.send('Hello from appsofai.com!');
});

app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});
