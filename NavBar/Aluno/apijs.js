const express = require('express');
const mysql = require('mysql2');
const app = express();

// MySQL
const connection = mysql.createConnection({
    host: 'ctesp.dei.isep.ipp.pt',
    user: '2022_DSOS_G2',
    password: 'Er5ohRSHiLqLFf#',
    database: '2022_DSOS_G2',
});

connection.connect();


//get all projects
app.get('/project', (req, res) => {
    connection.query('SELECT * FROM Projeto', (err, rows) => {
        if(err) res.send(err);
        res.json(rows);
    });
});
//get all estagios
app.get('/estagio', (req, res) => {
    connection.query('SELECT * FROM Estagio', (err, rows) => {
        if(err) res.send(err);
        res.json(rows);
    });
});


//get user by id
app.get('/product/:id', (req, res) => {
    const sql = `SELECT * FROM Product WHERE product_id = ${req.params.id}`;
    connection.query(sql, (err, results) => {
        if(err) res.send(err);
        res.json(results);
    });
});

//insert method
app.post('/add/:v1/:v2', (req, res) => { 
    const sql = 'INSERT INTO Product (product_name, product_price) VALUES' + `('${req.params.v1}', '${req.params.v2}')`;
    const data = req.body;
    connection.query(sql, data, (err, results) => {
        if(err) res.send(err);
        res.json(results);
    });
});

//update method
app.put('/update/:id', (req, res) => {
    const sql = `UPDATE Product SET product_price = 100010 WHERE product_id = ${req.params.id}`;
    const data = req.body;
    connection.query(sql, data, (err, results) => {
        if(err) res.send(err);
        res.json(results);
    });
});

//delete method
app.delete('/delete/:id', (req, res) => {
    const sql = `DELETE FROM Product WHERE product_id = ${req.params.id}`;
    connection.query(sql, (err, results) => {
        if(err) res.send(err);
        res.json("Deleted successfully!");
    });
});

//listen
app.listen(3307, () => {
    console.log('Server running on port 3307');
});