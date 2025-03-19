# Login_N_Signup_Php_Temp
A simple Signup and Login Template with Authentication and Storage



## 🚀 Features
- User authentication (Login & Register)
- Database connection using MySQL
- CRUD (Create, Read, Update, Delete) operations
- Responsive design with Bootstrap
- Secure password hashing with `password_hash()`
- Error handling and validation
- Storage to store the registered users

## ⚠️ Todo
-In mysql input the following sql commands

Insert this code there:

CREATE DATABSE demo_data;
USE demo_data

CREATE TABLE users(
id INT NOT NULL PRIMARY KEY,
username VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL
)

and click on go.


