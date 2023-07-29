<?php
//header("Cache-Control", "no-cache, no-store, must-revalidate");
session_start();
include("admin_login_header.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>confirm</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
 <link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
 <style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

  .login-page {
   width: 560px;
   padding: 3% 0 0;
   margin: auto;
  }

  .form {
   position: relative;
   z-index: 1;
   background: #bee5bd;
   max-width: 560px;
   margin: 200px auto;
   padding: 45px;
   text-align: center;
   align-content: center;
   align-items: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 40px;
  }

  .form input {
   font-family: "Roboto", sans-serif;
   outline: 0;
   background: #f2f2f2;
   width: 100%;
   border: 0;
   margin: 0 0 15px;
   padding: 15px;
   box-sizing: border-box;
   font-size: 14px;
   border-radius: 20px;
  }

  .form button {
   font-family: "Roboto", sans-serif;
   text-transform: uppercase;
   outline: 0;
   background: #337ab7;
   width: 100%;
   border: 0;
   padding: 15px;
   color: #FFFFFF;
   font-size: 14px;
   -webkit-transition: all 0.3 ease;
   transition: all 0.3 ease;
   cursor: pointer;
   border-radius: 20px
  }
 </style>

</head>

<body>
 <form action="admin-rate-confirm.php" method="post" class="form">
  <label for="pid" style="color: black; font-size: larger">Confirm product id once: </label>
  <input type="text" name="ppid" id="" style="width: 300px; border-radius: 20px;">
  <button style="width: 300px; border-radius: 20px;">submit</button>
 </form>
</body>

</html>