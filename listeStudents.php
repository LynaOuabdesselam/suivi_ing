 <?php require_once "controllerUserData.php"; ?>

    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="home.php">Dashboard </a></li>
      <li class="breadcrumb-item active" aria-current="page"> Telecommunication 3rd year </li>
    </ol>

    <!--
      <?php 
          if(isset($_GET['delete']) || isset($_GET['edit'])) {
        ?>
            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade"
                            data-autohide="true" data-animation="true" data-delay="2000">
              <div class="toast-header">
                <strong class="mr-auto">Student Insert Alert</strong>
                <small><?php echo date('d-M-Y'); ?></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="toast-body">
                <?php 
                  if (isset($_GET['delete'])) {
                    if ($_GET['delete']=='success') {
                      echo "<p style='color: green; font-weight: bold;'>Student Deleted Successfully!</p>";
                    }  
                  }
                  if (isset($_GET['delete'])) {
                    if ($_GET['delete']=='error') {
                      echo "<p style='color: red'; font-weight: bold;>Student Not Deleted!</p>";
                    }  
                  }
                  if (isset($_GET['edit'])) {
                    if ($_GET['edit']=='success') {
                      echo "<p style='color: green; font-weight: bold; '>Student Edited Successfully!</p>";
                    }  
                  }
                  if (isset($_GET['edit'])) {
                    if ($_GET['edit']=='error') {
                      echo "<p style='color: red; font-weight: bold;'>Student Not Edited!</p>";
                    }  
                  }
                ?>
              </div>
            </div>
          <?php 
        } 
      ?>
    -->
    
  <table class="table  table-striped table-hover table-bordered" id="data" style="width:100%;">
    <thead class="thead-dark">
      <tr>
      <th scope="col"></th>
          <th scope="col">Student_Number</th>
          <th scope="col">Name</th>
          <th scope="col">Surname</th>
          <th scope="col">Date_of_birth</th>
          <th scope="col">Year</th>
          <th scope="col"> Email </th>
          <th scope="col"> Adresse </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $query=mysqli_query($con,'SELECT * FROM `etudiant` ORDER BY `etudiant`.`EtudiantNom` DESC;');
        $i=1;
        while ($result = mysqli_fetch_array($query)) 
          {
      ?>
            <tr>
      <?php 
            echo '<td>'.$i.'</td>
              <td>'.$result['EtudiantNumero'].'</td>
              <td>'.ucwords($result['EtudiantNom']).'</td>
              <td>'.ucwords($result['EtudiantPrenom']).'</td>
              <td>'.$result['EtudiantDateNais'].'</td>
              <td>'.$result['StageAnnee'].'</td>
              <td>'.$result['EtudiantMail'].'</td>
              <td>'.ucwords($result['EtudiantAdresse']).'</td>
              <td>

              &nbsp; <a class="btn btn-xs btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="index.php?page=delete&EtudiantNumero='.base64_encode($result['EtudiantNumero']).'">
              <i class="fas fa-trash-alt"></i></a></td>';
        ?>
            </tr>  
        <?php 
          $i++;} 
        ?>
    </tbody>
  </table>
<script type="text/javascript">
  function confirmationDelete(anchor)
  {
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
  }
</script>
       