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



 [ Image of files stagged, committed and pushed to github](https://private-user-images.githubusercontent.com/157472773/346268369-2c9a114a-524d-4f78-8d6a-37b4e6daef8e.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzI0NTcsIm5iZiI6MTcyMDM3MjE1NywicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY4MzY5LTJjOWExMTRhLTUyNGQtNGY3OC04ZDZhLTM3YjRlNmRhZWY4ZS5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzA5MTdaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1mYzdhZmZjOTA2MWFkMDNkOGZiOGUxMWUwMWE3M2YyMGFhNTk4NjczNWRjMjVhMzdmMmJkMTE2MmNhMDFmODQ3JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.02PDFAyuuc6rLAeVI3rVEyeIN9uU6Z4u2B23Hz1bdAQ)

[Image of files pushed to Elastic Cloud Registry](https://private-user-images.githubusercontent.com/157472773/346268119-f9cc6da2-9ab1-4655-bcd3-9cc5c436ebda.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzI0NTcsIm5iZiI6MTcyMDM3MjE1NywicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY4MTE5LWY5Y2M2ZGEyLTlhYjEtNDY1NS1iY2QzLTljYzVjNDM2ZWJkYS5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzA5MTdaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1iN2RkODAyZmVhNjViMWZkNDQxYzI5ZmYzY2FkMGNjZDNlNGQ4YWNiYThiZTA0NGZmNmRkZTZlNGU3YzJkMDczJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.StN9jmKjmwq1q6QiW0eMmDswS9vMD8clkYM-xWtUF0k)

[image of built docker](https://private-user-images.githubusercontent.com/157472773/346267700-da5b7514-c815-404f-ac80-28d943b97a80.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzMzMjAsIm5iZiI6MTcyMDM3MzAyMCwicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY3NzAwLWRhNWI3NTE0LWM4MTUtNDA0Zi1hYzgwLTI4ZDk0M2I5N2E4MC5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzIzNDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT01MDA1ZjlkMjI1MzkyNmNlMDA0NTJiZmViZmNlOTY4MjhkODcxYmQ5ZDVlYzg0MmIwZjAwNjAyNDAxZjE2Y2QxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.fdPDrWSd3lsTL0aUaRT545GCK5M0sxVA7fV34EG8CzM)

[image of Docker Repository](https://private-user-images.githubusercontent.com/157472773/346267661-77f45c17-0920-4cc0-af08-0152b234405b.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzMzMjAsIm5iZiI6MTcyMDM3MzAyMCwicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY3NjYxLTc3ZjQ1YzE3LTA5MjAtNGNjMC1hZjA4LTAxNTJiMjM0NDA1Yi5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzIzNDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04ZThlMzcwZjBkNzExYTA4MmY4N2I1NmU2OWExNjlkNzQzZjQyYmEyODJlMzdlZjUxMTYwZjAxY2M5MTA5YjVjJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.D55ojd-OSN-no7w9p7dwXHb-d6cBOT2SJ-ctTyi9AuY)

[image of active task definition](https://private-user-images.githubusercontent.com/157472773/346267438-4b3efc73-3918-42ef-9f83-9fb81c376fe2.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzMzMjAsIm5iZiI6MTcyMDM3MzAyMCwicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY3NDM4LTRiM2VmYzczLTM5MTgtNDJlZi05ZjgzLTlmYjgxYzM3NmZlMi5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzIzNDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT03ODVmNTE4MWRjN2E2MDU2NjlkZDc2NTNmNDBiMThhNDBhM2FjYjU1ZGE3MDAzNWE5ODczZGM3ZmJmOGY2ZjkxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.PbhBe9YzG2GFsWaolKBcSzkU46f9nAxLMOIQVDXMlMU)

[image of running task](https://private-user-images.githubusercontent.com/157472773/346266551-2e44a5e0-3d78-4a72-8e0b-954fb745a894.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzMzMjAsIm5iZiI6MTcyMDM3MzAyMCwicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY2NTUxLTJlNDRhNWUwLTNkNzgtNGE3Mi04ZTBiLTk1NGZiNzQ1YTg5NC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzIzNDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1iZTI5MmMxOTQ1YzA2ZmVhM2ZmNzdjMjMwZmFiYjRkYjdmZjUwOWFjZjkwM2Q2ZTJhOGM2NmNkZTliYjJiM2YyJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.BCLZvJN3rz__AXuuzSTSUEQbeVakhlKXwGZGXVWhYEE)

[image of launched login page ](https://private-user-images.githubusercontent.com/157472773/346267561-a413b076-0232-4d74-abea-91c16e544eb6.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzM2NDAsIm5iZiI6MTcyMDM3MzM0MCwicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MjY3NTYxLWE0MTNiMDc2LTAyMzItNGQ3NC1hYmVhLTkxYzE2ZTU0NGViNi5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzI5MDBaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04OGYzMzUzMmU0OWRhMzg5ZTg4YTIyYWFiODdjOWU2NjI1YWFjZDUzOGRjZTA0OGU0MzBiZTRlZmU0YmUzNzZkJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.Bu50uoncWVCrU0r5Qz7rG_lSATsI5piNKgBZgTDBFms)

[image of active service](https://private-user-images.githubusercontent.com/157472773/346353192-0529a3c7-2572-4e6c-925c-2425ed08f27b.JPG?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MjAzNzQxMDksIm5iZiI6MTcyMDM3MzgwOSwicGF0aCI6Ii8xNTc0NzI3NzMvMzQ2MzUzMTkyLTA1MjlhM2M3LTI1NzItNGU2Yy05MjVjLTI0MjVlZDA4ZjI3Yi5KUEc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNzA3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDcwN1QxNzM2NDlaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT02Mzg2MjJlMGJjZTFlMmZhOGRiNWEzN2ZjYzRiNjAyNTk4NGE4OTM0NjlhNDM4OTM5MTJlMGFjNWIyM2VhYzBiJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.2KRmJZgeWzEW5Dy-gKSnQ6X2DPVzfvpOVgChRo6H_ro)


