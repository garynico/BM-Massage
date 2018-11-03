# BM-Massage
BM-Massage is a web based application for the owner to open and control the massage business. People can also register and login to become a member.

### Project Structure

Make a 'register' database in phpMyAdmin and create two table : 'users', 'owner'  (without the ' ')

users:
- id INT(11) PRIMARY KEY and AUTO_INCREMENT
- username VARCHAR(100)
- gender VARCHAR(100)
- email VARCHAR(100)
- password VARCHAR(100)

owner (add values to owner table -> username: owner and password: owner):
- id INT(11) PRIMARY KEY and AUTO_INCREMENT
- username VARCHAR(100)
- password VARCHAR(100)

COMPONENT LIST: 
1. login.php -> login page with username and password, you can login as the owner (username: owner & password: owner) or member. If you haven't made an account yet, you can press the register button          
2. index.php -> home page for the user which contains ongoing orders, search bar, and massage places informations.
3. indexOwner.php -> home page for the owner to manage massage places
4. register.php -> register page, member must fill username, gender, email, password
5. server.php -> connecting web page to phpMyAdmin database
6. errors.php
6. style.css
7. register.sql -> database

### Built With

1. [XAMPP](https://www.apachefriends.org/download.html)
2. PHP Version 5.6.38
3. Database: PHPMyAdmin
4. Webserver: Apache 2.0 Handler

## Development
1. Adding 'Confirm Password' on register page
2. MD5 hashing password to database
3. Adding 'Already a member? Sign in' feature on register page
4. Adding logout in index page

## Authors

* **Gary Nico** - [garynico](https://github.com/garynico)


