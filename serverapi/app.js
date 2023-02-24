const express = require('express')
const mysql = require('mysql')
const bodyParser = require('body-parser')
const port = process.env.PORT || 3002 
const app = express()
const csvtojson = require('csvtojson')

app.use(bodyParser.urlencoded({extended:false}))
app.use(bodyParser.json())

const conn = mysql.createConnection({
    host : 'localhost', 
    user : 'root', 
    password : '', 
    database : 'turtle'
})


app.post('/Upload', (req, res) => {

    const fileName = req.body.fileName;

    csvtojson().fromFile(fileName).then(source => {
  
        // Fetching the data from each row and inserting to the table "products"
        for (var i = 0; i < source.length; i++) {
            var code = source[i]["code"],
                fname = source[i]["fname"],
                mname = source[i]["mname"],
                lname = source[i]["lname"],
                address = source[i]["address"],
                dob = source[i]["dob"],
                age = source[i]["age"],
                contact = source[i]["contact"],
                email = source[i]["email"],
                ref = source[i]["ref"],
                sponmem = source[i]["sponmem"],
                category = source[i]["category"],
                type = source[i]["type"],
                status = source[i]["status"]
      
            var insertStatement = "INSERT INTO registration (code, fname, mname, lname, address, dob, age, contact, email, ref, sponmem, category, type, status) values (?, ?, ?, ?, ?, ?, ?, ? , ? , ? , ?, ?, ?, ?)";
            var items = [code, fname, mname, lname, address, dob, age, contact, email, ref, sponmem, category, type, status];
              
            // Inserting data of current row into database
            conn.query(insertStatement, items, 
                (err, results, fields) => {
                if (err) {
                    console.log("Unable to insert item at row ", i + 1);
                    return console.log(err);
                }
            });
        }
        console.log("products inserted into database successfully...!!", [items]);
        res.send("Records inserted into database successfully...!!"); 
    });
    
})


app.listen(port, ()=> {
    console.log('App is listening to the port ' + port)
})