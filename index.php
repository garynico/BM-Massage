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
    .accordion {
      background-color: #eee;
      color: #444;
      cursor: pointer;
      padding: 5px;
      width: 80%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
    }

    .accordion:hover {
        background-color: #ccc; 
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }
    .foo {
      float: left;
      width: 10px;
      height: 10px;
      margin: 5px;
      border: 1px solid rgba(0, 0, 0, .2);
    }


    .skin {
      background: #ff9966;
    }

    .red {
      background: #cc3300;
    }

    .green {
      background: #47d147;
    }
    input[type=text] {
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('searchicon.png');
      background-position: 10px 10px; 
      background-repeat: no-repeat;
      padding: 6px  10px 6px 20px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
        width: 66%;
    }
  </style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
</ul>

<div class = "text">
  <br><h5>
    Current Time: 
    <p id="demo"></p>
    <script>
      var d = new Date();
      var n = d.toLocaleString();
      document.getElementById("demo").innerHTML = n;
    </script>
  </h5><br>
  
  <h3>Ongoing Orders</h3>

  <button class="accordion">OrderID:5b752d83e8566d06167af960</button>
  <div class="panel">
    <p>
      Massage: Paket Anak Ceria <br>
      Massage Place: Jakarta Massage Center <br>
      City: Jakarta <br>
      Adress: Jalan jelambar baru, dekat borobudur <br>
    </p>
    <p style="color:red">
      Will expire on August 16, 2018 16:53:39
    </p>
  </div>

  <button class="accordion">OrderID:5b752d83e8566d06167af960</button>
  <div class="panel">
    <p>
      Massage: Paket Anak Ceria <br>
      Massage Place: Jakarta Massage Center <br>
      City: Jakarta <br>
      Adress: Jalan jelambar baru, dekat borobudur <br>
    </p>
    <p style="color:red">
      Will expire on August 16, 2018 16:53:39
    </p>
  </div>

  <button class="accordion">OrderID:5b752d83e8566d06167af960</button>
  <div class="panel">
    <p>
      Massage: Paket Anak Ceria <br>
      Massage Place: Jakarta Massage Center <br>
      City: Jakarta <br>
      Adress: Jalan jelambar baru, dekat borobudur <br>
    </p>
    <p style="color:red">
      Will expire on August 16, 2018 16:53:39
    </p>
  </div>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
  </script> 

  <br><br><h3>
    Massage Place
    <input type="text" name="search" placeholder="Search.."><br><br>
  </h3>

  <h4>Filler by city </h4>
  <input type="checkbox" name="city" value="jakarta">Jakarta<br>
  <input type="checkbox" name="city" value="bogor">Bogor<br>
  <input type="checkbox" name="city" value="bandung">Bandung<br>
  <input type="checkbox" name="city" value="batam">Batam<br><br>

  <div class="foo green"></div> Available <br>
  <div class="foo skin"></div> Almost full <br>
  <div class="foo red"></div> Full
  <br><br>

  <table>
  <tr>
  
    <th bgcolor="#ff9966">
      <h4>Jakarta Massage Center</h4><br>
      <h6>DETAILS</h6>
      <h6>Capacity : 5/10 person (s) </h6>
      <div class="input-group">
        <button type="submit" class="btn">Choose</button>
      </div>
      <h6> City:Jakarta </h6>
      <h6> Adress: Jalan jelambar baru, dekat borobudur </h6>
    </th>
    <th bgcolor=" #cc3300"> 
      <h4>Jakarta Spa</h4><br>
      <h6>DETAILS</h6>
      <h6>Capacity : 5/5 person (s) </h6>
      <div class="input-group">
        <button type="submit" class="btn">Full</button>
      </div>
      <h6> City:Jakarta </h6>
      <h6> Adress: Syahdan</h6>
    </th>
    <th  bgcolor=" #47d147">
      <h4>Syahdan Massage Center</h4><br>
      <h6>DETAILS</h6>
      <h6>Capacity : 0/10 person (s) </h6>
      <div class="input-group">
        <button type="submit" class="btn">Choose</button>
      </div>
      <h6> City:Jakarta </h6>
      <h6> Adress: Syahdan</h6>
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