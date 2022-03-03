<?php require_once "controllerUserData.php"; ?>
<style>
body{
  background-image : url("https://galilee.univ-paris13.fr/wp-content/uploads/36.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
/* Float four columns side by side */
.column {
  float: left;
  width: 30%;
  padding: 0 15px;
  box-sizing: border-box;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 20px;
  text-align: center;
  background-color: #343A40;
  /* opacity : 1; */
}
.card h3{
  color : #fff;
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
<div class="container">
  <div class="col-sm-6">
      <h3>Suivi en ligne d'élèves ingénieur</h3>
  </div>
</div>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<!-- ________________________________________ -->

<div class="row d-flex justify-content-center">
  <div class="column">
    <a href="index.php?page=listeStudents">
      <div class="card">
        <h3>Télécommunication 1</h3>
      </div>
    </a>
  </div>

  <div class="column">
    <a href="index.php?page=listeStudents">
      <div class="card">
        <h3>Télécommunication 2</h3>
      </div>
    </a>
  </div>
  
  <div class="column">
    <a href="index.php?page=listeStudents">
        <div class="card">
        <h3>Télécommunication 3</h3>
      </div>
    </a>
  </div>
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