<?php
  // create database
$sql = "CREATE DATABASE IF NOT EXISTS $database";

if ($conn->query($sql) === TRUE) {
  echo "
  <script>
    console.log('database created successfully');
  </script>
  ";
} else {
  echo "
  <script>
    console.log('error creating database . $conn->error  .');
  </script>
  ";
}

// select databse
$conn->select_db($database);

// create table users
$sql = "CREATE TABLE IF NOT EXISTS users(
  id int(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  gender VARCHAR(10),
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
  echo "
    <script>
      console.log('table users created successfully');
    </script>
  ";
} else {
  echo "
  <script>
    console.log('error creating table users . $conn->error  .');
  </script>
  ";
}

// create table blogs
$sql = "CREATE TABLE IF NOT EXISTS blogs(
  id int(6) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50) NOT NULL,
  description VARCHAR(255),
  image VARCHAR(255),
  createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

// //-- Define created_at column with TIMESTAMP data type and default value

if ($conn->query($sql) === TRUE) {
  echo "
    <script>
      console.log('table blogs created successfully');
    </script>
  ";
} else {
  echo "
  <script>
    console.log('error creating table blogs . $conn->error  .');
  </script>
  ";
}
