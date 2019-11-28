# Calculator using PHP

With this calculator you can add, subtract, multiply, divide and find out if the numbers are odd or even. 

## Database/Server

In order to connect your own database connection you may add a new file and use the following code. Just insert your own servername, username, password and database. 

```
<?php
// connect to database
$conn = mysqli_connect('servername', 'username', 'password', 'database');

// Check Connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>
```

For this project I used XAMPP as a web server solution. XAMPP contains Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.

## Web App Images

[![calculator-using-PHP.png](https://i.postimg.cc/kXLKcWHM/calculator-using-PHP.png)](https://postimg.cc/VdBJs012)