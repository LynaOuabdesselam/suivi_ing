 <?php require_once "controllerUserData.php";
       //require_once "readCSV.php";
 ?>

    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=home">Dashboard </a></li>
      <li class="breadcrumb-item active" aria-current="page"> Telecommunication 2nd year </li>
    </ol>

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
        $query=mysqli_query($con,'SELECT * FROM `students` ORDER BY `students`.`nom`;');
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
    </br>
    <div class="outer-container">
      <form action="readCSV.php" method="post"
        name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
        <div>
          <label>Importer un fichier ExcelFile</label> 
          <input type="file" name="file" id="file" accept=".csv, .xls,.xlsx">
          <button type="submit" id="submit" name="import" class="btn-submit">Import</button> 
        </div>
      </form>
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    </br>
    <!-- ************************ -->  
<script type="text/javascript">
  function confirmationDelete(anchor)
  {
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
  }
</script>
       