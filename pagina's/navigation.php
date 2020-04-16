<?php session_start();
session_gc(); ?>


<nav id="NavBar" class="navbar navbar-expand-lg navbar-dark z-index">
  <a class="navbar-brand" href="index.php?content=home">Doof</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php  
    if(isset($_SESSION["id"])){

      switch($_SESSION["userrole"]){
        
        case'customer':
          echo '<li class="nav-item active">
          <a class="nav-link" href="index.php?content=c-home">Home</a>
        </li>';
      break;

      case'admin':
          echo '<li class="nav-item active">
          <a class="nav-link" href="index.php?content=a-home">Home</a>
        </li>';
      break;

      case'root':
       echo '<li class="nav-item active">
       <a class="nav-link" href="index.php?content=r-home">Home</a>
     </li>';
      break;

      case'moderator':
          echo '<li class="nav-item active">
          <a class="nav-link" href="index.php?content=m-home">Home</a>
        </li>';
      break;
      
      default;

    break;
      }      

      } else{
        echo '<li class="nav-item active">
        <a class="nav-link" href="index.php?content=home">Home</a>
      </li>';
      }?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?content=informatie">Informatie</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?content=contact">contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?content=game">game</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?content=faq">faq</a>
      </li>

      <?php 
      if(isset($_SESSION["id"])){
        switch($_SESSION["userrole"]){
        
          case'customer':
            
        break;

        case'admin':
            echo '<li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              admin links
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="./index.php?content=a-users">users</a>
            </div>
          </li>';
        break;

        case'root':
         echo '<li class="nav-item">
         <a class="nav-link" href="index.php?content=rootpage">rootpage</a>
       </li>';
        break;

        case'moderator':
            
        break;
        
        default;

      break;
        }

        echo '<button class="btn btn-outline-success float-left" type="submit" id="buttonregistreren" onclick="uitloggen()">uitlogen</button>';
      }else{
        echo'<button class="btn btn-outline-success float-left" type="submit" id="buttonlogin" onclick="regisreren()">Registreren</button>
              <button class="btn btn-outline-success float-left" type="submit" id="buttonregistreren" onclick="login()">login</button>';
      }
      
      ?>



    </ul>




  </div>
</nav>