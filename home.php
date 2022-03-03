<?php require_once "controllerUserData.php"; ?>
<style>
body{
  background-image : url("https://galilee.univ-paris13.fr/wp-content/uploads/36.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  width : 450px;
  padding: 20px;
  margin: 20px;
  text-align: center;
  background-color: #343A40;
  opacity : 0.8;
}
.card h4{
  color : OrangeRed;
}
</style>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>


<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>
<br>


<!-- ________________________________________ -->

<div class="row">
  <!-- <div class="column"> -->
    <a href="index.php?page=listeStudents">
      <div class="card">
        <h4>Réseaux et Télécommunication 1ére année</h4>
      </div>
    </a>
  <!-- </div> -->
</div>
<div class="row">
  <!-- <div class="column"> -->
    <a href="index.php?page=listeStudents">
      <div class="card">
        <h4>Réseaux et Télécommunication 2éme année</h4>
      </div>
    </a>
  <!-- </div> -->
</div>
<div class="row">
  <!-- <div class="column"> -->
    <a href="index.php?page=listeStudents">
        <div class="card">
        <h4>Réseaux et Télécommunication 3éme année</h4>
      </div>
    </a>
  <!-- </div> -->
</div>
<!-- ________________________________________ -->
  <div class="col-md-9">
      <div class="content">
          <?php 
            if (isset($_GET['page'])) {
            $page = $_GET['page'].'.php';
            }else{
              $page = 'dashboard.php';
            }

            if (file_exists($page)) {
              require_once $page;
            }else{
              require_once '404.php';
            }
          ?>
      </div>
</div>

</body>
</html>