
  <?php
  $servername = "localhost";
  $username = 'php_admin';
  $password = 'MyAdminPass';
  $dbname = "php_admin";

    if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = INSERT INTO login_form (name, password, email)
    VALUES (:name, :password, :email)";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ':name' => $_POST['name'],
      ':password' => $_POST['password'],
        ':email' => $_POST['email'],
  ));

    $conn->exec($sql);

    echo("New Account Created");
  }
 catch(PDOException $e) {
 }
$conn = null;
}

  ?>
  <html><head></head><body>
    <style>
    body{
      background-image: url(https://i.pinimg.com/originals/a6/75/ad/a675ad84d42c0a26c96e5371fd101b2d.jpg);
    }
    </style>
    <a href="Delete_Account.php">Delete My Info</a>
<form method="post">
  <p>name:
    <input type="text" name="name">
  </p>

</form>
</body>
</html>
