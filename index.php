<?php

  error_reporting(0);
require_once('config.php');

 if(isset($_POST['username'])  && isset($_POST['password'])) {
 $e = $_POST['username'];
 $p = $_POST['password'];

 $sql = "SELECT name FROM login_form WHERE name = '$e' AND password = '$p'";

 //echo "<p>$sql</p>";

 $stmt = $conn->query($sql);
 $row = $stmt->fetch(PDO::FETCH_ASSOC);

 var_dump($row);

 echo $row;
               }


if($row == TRUE){
  echo "login Succesfull!";
    header('Location: home_page.php');
    $logged_in = true;
}
?>
<html>
<head>
  <Script>
    function AutoRefresh( t ){
      setTimeout("location.reload(true);", t);
    }
  </Script>
 <meta charset="utf-8">
 <title>arduinokitty(Home)</title>
</head>
<style>
  div{
    height: 90px;
  }
    nav{
                    background-color:#E0FFFF;
                    border-radius:5000px;
                    width: 500px;
                    text-align: center;
                    align: center;
                    margin-left: auto;
                    margin-right: auto;
               }
                  body {
                     padding-top: 40px;
                     padding-bottom: 40px;
                     background-color: black;
                        text-align: center;
                  }

                  form{
                   
                       text-align: auto;
                     max-width: 330px;
                     padding: 15px;
                     margin: 0 auto;
                     color: black;
                     background-color: white;
                     border-radius: 5000px;            
                      }
                    input{
                      width:250px;
                      hight:500px;
                      border-radius:5000px;
                    }

                  h2{
                     text-align: center;
                     color:black;
                  }
  }
  </style>
    <body onload="JavaScript:Autorefresh(5000)">
   <nav>
       
<a href=""> Projects </a>
        
<a href=""> How stuff works</a>
        
<a href="">Code</a>
<a href="registrasion.php">Sign Up</a>

</nav>

<div>
  </div>



                             <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>
        
      
    </div1>
</body>
</html> 