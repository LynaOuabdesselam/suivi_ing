<?php require_once "controllerUserData.php"; ?>

<?php 
$user=  $_SESSION['email'];
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>

  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Dashboard </a></li>
     <li class="breadcrumb-item active" aria-current="page">User Profile</li>
  </ol>

<?php 
  $query = mysqli_query($con, "SELECT * FROM `user` WHERE `email` ='$user';");
  $row = mysqli_fetch_array($query);

 ?>
<div class="row">
  <div class="col-sm-12">
    <table class="table table-bordered">
      <tr>
        <td>User ID</td>
        <td><?php echo $row['iduser']; ?></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><?php echo ucwords($row['name']); ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $row['email']; ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?php echo ucwords($row['status']); ?></td>
      </tr>
    </table>
  </div>
 
  
</div>
<div class="form-group text-center">
  <a class="btn btn-warning pull" href="index.php?page=edit-user&iduser=<?php echo base64_encode($row['iduser']); ?>">Edit Profile</a>
</div>



