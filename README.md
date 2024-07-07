### **This Repo is my Devops Engineering Project Version (2)**
------
### The version is developed using Ubuntu Desktop and AWS CLI installed. The main aim is to provision a working Docker image deployed on AWS and running on Fargete 
  -----

- ### _Dockerfile was created from apache with port 80 exposed as shown below_

``` Dockerfile
FROM php:7.4-apache

COPY . /var/www/html/

EXPOSE 80
```


- ### version (2) php file 
``` php

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "<h2>Form Data Received</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
} else {
    echo "Invalid request method.";
}
?>
```
- ### _The html file for the project_
 
 ```html

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>
    <h2>Sample Form</h2>
    <form action="process.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
 ```





