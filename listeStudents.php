 <?php require_once "controllerUserData.php";
        //require_once "readCSV.php";
 ?>
 
    <script>
      $(document).ready(function() {
        $('#myModal .go-back-button').click(function() {
            $('#myModal').modal('hide');
        });

        // Hide modal if "Okay" is pressed
        $('#myModal .okay-button').click(function() {
            $('#myModal').modal('hide');
            $('form').submit();
        });
      });
    </script>  
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=home">Dashboard </a></li>
      <li class="breadcrumb-item active" aria-current="page"> Telecommunication 2nd year </li>
    </ol>
    </br>
    <!-- <div class="outer-container"> -->
      <form action="readCSV.php" method="post">
        <div>
          <input  type="file" name="file" id="file" accept=".csv, .xls,.xlsx">
          <button type="button" name="import" class="btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-download"></i></button>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">attention !</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body">
                  <p>Cette action suprimera les données sauvegardées en base de donneés.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default okay-button" data-dismiss="modal">OUI</button>
                  <button type="button" class="btn btn-default go-back-button" data-dismiss="modal">NON</button>
                </div>
              </div>
          </div>
        </div>
      </form>
    <!-- </div> -->
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    </br>
  <table class="table  table-striped table-hover table-bordered" id="data" style="width:100%;">
    <thead class="thead-dark">
      <tr>
          <th scope="col">N° Étudiant</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      <?php 
        $query=mysqli_query($con,'SELECT * FROM `juryT2` ORDER BY `juryT2`.`nom`;');
        while ($result = mysqli_fetch_array($query)) 
          {
            
      ?>
            <tr> 
      <?php 
            echo '
            <td> <a href= "index.php?page=studentDetails&idEtudiant='.$result['idEtudiant'].'">'.$result['idEtudiant'].'</td>
              <td> <a href= "index.php?page=studentDetails&idEtudiant='.$result['idEtudiant'].'">'.ucwords($result['nom']).'</td>
              <td> <a href= "index.php?page=studentDetails&idEtudiant='.$result['idEtudiant'].'">'.ucwords($result['prenom']).'</td>
              <td>&nbsp; <a class="btn btn-xs btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="index.php?page=delete&idEtudiant='.$result['idEtudiant'].'">
              <i class="fas fa-trash-alt"></i></a></td>';
        ?>
            </tr>  
        <?php 
          } 
        ?>
    </tbody>
  </table>

    <!-- ************************ -->    
 
    <!-- ************************ -->  
<script type="text/javascript">
  function confirmationDelete(anchor)
  {
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
  }
</script>

       