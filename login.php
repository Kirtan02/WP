<?php
include 'process.php';
?>


<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Kirtan Bhatt">
  <meta name="description" content="Car and Bike Renting">
  <title> Tripling | Rent </title>
  <link rel="stylesheet" href="./css/login.css">
  <script type="text/javascript">
    function display() {
      window.location="https://www.w3schools.com/";
    }


  </script>
</head>
<body>

  <header>
    <div class="container" id="opac">
      <div id="branding">
        <center><h1><a href="index.php">Tripling</a></h1></center>
      </div>
    </div>
  </header>
  <section>
    <div class="tab" id="sec">
        <a href="#" onclick="display()">Sign Up</a>
        <a href="#">Login</a>
    </div>

  </section>
<section>
  <div class="container" id="form_1">
    <form name="Login" method="post" action="">
        <input type="text"  id="Name"  name="Name" placeholder="User Name">
        <input type="password" id="Password" name="Password" placeholder="Password">
        <input type="submit" name="submit" value="Submit">
        <div class="alert">
          <span><?php echo $error; ?></span>
        </div>
        <input type="email" id="E_mail" value="" placeholder="Email">
        <input type="text" id="Phn_no"  value="" placeholder="Phone Number">
      </form>

  </div>

  <div class="container">



  </div>

</section>
      <footer>
        <p>Tripling Copyright &copy; 2017</p>
      </footer>

</body>
</html>
