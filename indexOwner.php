<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>BM Massage</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #9370DB;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #663399;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
   </style>
</head>
<body>

<ul>
  <li><a class="active" href="indexOwner.php">Home</a></li>
  <li><a href="#news">Member Control</a></li>
  <li><a href="#contact">Reporting</a></li>
</ul>

<div class = "text">
  <br><h3> Home </h3><br>
  <p> 
    Select city to manage 
    <select>
     <option value="jakarta">Jakarta</option>
     <option value="bogor">Bogor</option>
      <option value="bandung">Bandung</option>
      <option value="batam">Batam</option>
    </select>
  </p><br>
  <h4>These are your massage places for city: Jakarta</h4><br>

  <table>
  <tr>
    <th>
      <h4>Jakarta Massage Center</h4><br>
      <h6>DETAILS</h6>
      <h6>Admins : 1 admins</h6>
      <h6>Capacity : 10 person (s) </h6>
      <h6>Adress : Jalan jelambar baru, dekat borobudur </h6><br>
      <div class="input-group">
        <button type="submit" class="btn">View place detail</button>
      </div>
    </th>
    <th>
      <h4>Jakarta Spa</h4><br>
      <h6>DETAILS</h6>
      <h6>Admins : 1 admins</h6>
      <h6>Capacity : 5 person (s) </h6>
      <h6>Adress : Syahdan </h6><br>
      <div class="input-group">
        <button type="submit" class="btn">View place detail</button>
      </div>
    </th>
    <th>
       <h4>Syahdan Massage Center</h4><br>
      <h6>DETAILS</h6>
      <h6>Admins : 1 admins</h6>
      <h6>Capacity : 5 person (s) </h6>
      <h6>Adress : Syahdan </h6><br>
      <div class="input-group">
        <button type="submit" class="btn">View place detail</button>
      </div>
    </th>
  </tr>
  </table>
</div><br><br>

<div class="content2">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>