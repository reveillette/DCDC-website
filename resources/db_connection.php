<?php

  // Define constants
  define("DB_SERVER", "localhost");
  define("DB_USER", "admin");
  define("DB_PASS", "password");
  define("DB_NAME", "howtoguides");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
