DROP DATABASE IF EXISTS employees_v2;
CREATE DATABASE IF NOT EXISTS employees_v2;

USE employees_v2;

CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    email VARCHAR(30) NOT NULL,
    gender VARCHAR (10),
    city VARCHAR (30),
    streetAddress VARCHAR (60),
    state VARCHAR (3),
    age VARCHAR (2),
    postalCode VARCHAR (5),
    phoneNumber VARCHAR (15)
);


CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(25) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
);


INSERT INTO employees (first_name, last_name, email, gender, city, streetAddress, state, age, postalCode, phoneNumber) 
VALUES (
        "John",
        "Doe",
        "jhondoe@foo.com",
        "man",
        "New York",
        "89",
        "WA",
        "34",
        "09889",
        "1283645645"
    ),
    (
        "Leila",
        "Mills",
        "mills@leila.com",
        "woman",
        "San Diego",
        "55",
        "CA",
        "29",
        "98765",
        "9983632461"
    ),
    (
        "Richard",
        "Desmond",
        "dismond@foo.com",
        "man",
        "Salt lake city",
        "90",
        "UT",
        "30",
        "21324",
        "90876987654"
    );


INSERT INTO users (name, email, password) 
VALUES (
    "admin",
    "admin@assemblerschool.com",
    "123456"
);