<?php require_once "controllerUserData.php"; ?>

<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
    
    $iduser = base64_decode($_GET['iduser']);
  if (isset($_POST['userupdate'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];


  	$query = "UPDATE `user` SET `name`='$name', `email`='$email' WHERE `iduser`= $iduser";
  	if (mysqli_query($con,$query)){
  		header('Location: index.php?page=user-profile&edit=success');
  	}else{
  		header('Location: index.php?page=user-profile&edit=error');
  	}
  }?>

  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Dashboard </a></li>
     <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=user-profile">User Profile </a></li>
     <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
  </ol>

	<?php
		if (isset($iduser)) {

			$query = "SELECT  `name`, `email` FROM `user` WHERE `iduser`=$iduser;";
			$result = mysqli_query($con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-12">
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="name">Full Name</label>
		    <input name="name" type="text" class="form-control" iduser="name" value="<?php echo $row['name']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="email">Email</label>
		    <input name="email" type="email" class="form-control"  iduser="email" value="<?php echo $row['email']; ?>" required="">
	  	</div>
	  	<br>
	  	<div class="form-group text-center">
		    <input name="userupdate" value="Update Profile" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>