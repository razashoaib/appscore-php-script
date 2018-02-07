# Overview
The purpose of this script is to accept form input data, input it into a database and send back a status response.

The script is to accept form data for a new product submission. The product data is:

Name - text
Description - text
Price - decimal number

## Requirements:

The script is to accept the above product data. Note it does not have a form that will send the data or any HTML, it is just script that processes the inputs.

The script is to place the data into a database. Note that this is an imaginary database.

The script is to respond to the request with the status of the database operation, i.e. if it was successful.

## Example Request

### Example URL
http://localhost:8080/appscore-php-script/formProcessing.php?name=Smiths&desc=BestChips&price=3.50

#### Example Successful Response
{"status":"New record created successfully"}

#### Example Unsuccessful Response
{"status":"[Incomplete parameters] Unable to process the request"}

## Acknowledgements

- [W3Schools](https://www.w3schools.com/)
- [PHP Documentation](http://php.net/docs.php)
- [XAMPP](https://www.apachefriends.org/index.html)
