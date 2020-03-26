<?php
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>

<link rel="stylesheet" href="./css/styleRegistreren.css">

<div class="row container">
  <div class="col-12 col-sm-6">
    <form action="./index.php?content=activate_script" method="post">
      <h1>Registeren</h1>
      <p>Vul dit in om een account te maken.</p>
      <hr>
      <div class="form-group">
      <label for="inputpassword"><b>Wachtwoord</b></label>
      <input name="password" type="password" placeholder="Voer uw wachtwoord in" >
      </div>

      <div class="form-group">
      <label for="inputpasswordcheck"><b>Wachtwoord</b></label>
      <input name="password" type="password" placeholder="Voer nogmaals uw wachtwoord in" >
      </div>

      <p>Bij het maken van uw account gaat u akkoord met de <a href="index.php?content=regelsvoorwaarde">Regeltjes</a> van GeenGehoor.</p>

      <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
      <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
      
      <button type="submit" class="registerbtn">Register</button>

      <!-- <div class="container signin">
        <p>heb je al een account? <a href="#">Log In</a>.</p>
      </div> -->
    </form>
  </div>>