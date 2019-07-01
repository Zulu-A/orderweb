let mysql = require('mysql');

let connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '123',
    database: 'orderweb'
});

let id = process.argv[2]; // pass argument to query
let sql = 'SELECT * FROM inventory' ;

connection.query(sql, (error, results, fields) => {
    if (error) {
        return " tt"+console.error(error.message);
    }
    console.log(results[1]);
    document.getElementById('abt1').innerHTML = results[0].item_id;
});
/*connection.connect(function(err) {
    if (err) {
        return console.error('error: ' + err.message);
    }

    console.log('Connected to the MySQL server.');
});*/

/*
connection.end(function(err) {
    if (err) {
        return console.log('error:' + err.message);
    }
    console.log('Close the database connection.');
});*/
