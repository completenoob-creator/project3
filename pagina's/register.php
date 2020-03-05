<form action="#">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstname"><b>Voornaam</b></label>
    <input type="text" placeholder="Voor voornaam in" name="voornaam" required>

    <label for="infix"><b>Tussenvoegsel</b></label>
    <input type="text" placeholder="Voor tussenvoegsel in" name="tussenvoegsel">

    <label for="lastname"><b>Achternaam</b></label>
    <input type="text" placeholder="Voor achternaam in" name="achternaam" required>

    <label for="streetname"><b>Straatnaam</b></label>
    <input type="text" placeholder="Voor straatnaam in" name="straatnaam" required>

    <label for="zip code"><b>Postcode</b></label>
    <input type="text" placeholder="Voor postcode in" name="postcode" required>

    <label for="place"><b>Plaatsnaam</b></label>
    <input type="text" placeholder="Voor plaatsnaam in" name="plaatsnaam" required>

    <label for="phonenumber"><b>Telefoon nummer</b></label>
    <input type="number" placeholder="Voor telefoon nummer in" name="telefoon nummer" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>