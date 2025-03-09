# CRUD-PHP
CRUD PROJECT USING PHP

<h2>SQL QUERIES THAT USED IN THIS PROJECT:</h2>
CREATE DATABASE employee_management_system;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    position VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

<h2>APPLICATION USED IN THIS PROJECT:</h2>
VS Code
Xampp


<h2>Disclaimer:</h2>

All information used in this project will be collected and used solely for the purpose of this experiment. 
Your personal information will be kept confidential and will not be shared with anyone outside of this project.
Participation is voluntary, and you can withdraw at any time without consequence.
