SQL Injection Demo - Understanding Web Security Vulnerabilities

I created a demo to show how SQL injection attacks can exploit weak web application security. By manipulating input fields like usernames and passwords, attackers can bypass authentication and access sensitive data in the database. The goal is to educate on the importance of securing web applications against SQL injection and safeguarding user data.
To use the provided files to demonstrate the SQL injection vulnerability follow these steps:

1- Set up the database:
Use the testthesql.sql file to create a database and a table with sample user data. Import this file into your MySQL database using phpMyAdmin or any MySQL client.

2- View the login form:
Open the form.html file in a web browser. This file shows a simple login form asking for a username and password. When a user enters their credentials and clicks Login, it sends the data to sql_injection.php.

3- PHP Script Vulnerability:
The script sql_injection.php processes the data. The code is vulnerable to SQL injection because it directly inserts user input into the database query without any checks.

4- How to see the SQL injection:
Enter a valid username (like Shahad) and password (like password123) to log in  ,To test SQL injection, try typing '' OR '1'='1 in the username field and leave the password field empty. You’ll be able to bypass the login and see all user data from the students table, even without the correct password.
