<?php

// require 'Views/Login/view.login.php';
// $name = $_POST['usernames'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <?php foreach($datas as $dats): ?>
    <!-- <form action="./signout.php">
      <input type="" hidden value="<?php echo $data->id ?>" name="delete">
  <button class="signout"type="signout">SIGN OUT</button>
    </form> -->
    <?php endforeach ; ?>
    
    <section class="hero">
      <h1 class="webhead">Welcome to Our Website</h1>
      <h2>Hello,<?php echo $_SESSION['name']['username']; ?></h2>
      <img src="Views/welcome/vadivelu.jpg" alt="hii" class="img">
      <a href="/login" class="cta-btn">Log out</a>
    </section>
    <div class="container"  >
        <h1>Love Calculator</h1>
        <div class="form">
            <input  value="https://lovecalculator.site/love/10021179" disabled  id="text">
            <button class="gen" type="submit">Genrate QR</button>
        </div>
        <div class="qr-code">
            <img src="" alt="" id="qr-img">
        </div>
    </div>
    <script src="./qr.js"></script>
    

    <script>
      let alerts = document.querySelector(".cta-btn")

      alerts.addEventListener("click",(e)=>{
        alert("Are you sure?");
      })
    </script>
  </body>
</html>
