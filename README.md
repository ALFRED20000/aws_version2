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


