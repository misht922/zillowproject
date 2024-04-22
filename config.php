<?php
  $dbhost = "localhost";

  $dbuser = "root";

  $dbpass = "mysql";

  $dbname = "zillowproject";

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if($connection) {
    echo"success";
  }
  else {
    die("Error" . mysqli_connect_error());
  }

