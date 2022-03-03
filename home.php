<?php require_once "controllerUserData.php"; ?>
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
  <div class="col-sm-4">
    <!-- <div class="card text-white bg-primary mb-3"> -->
      <div class="card-header">
        <div class="col-sm-6">
          <h4>SUIVI INGENIEUR</h4>
        </div>
      </div>
  <!-- </div> -->
  </div>
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