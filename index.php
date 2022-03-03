<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link href="styleCal.css" rel="stylesheet" type="text/css">
    <link href="calendar.css" rel="stylesheet" type="text/css">  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">   
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/script.js"></script>  
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
      nav{
          padding-left: 50px!important;
          padding-right: 50px!important;
          font-family: 'Poppins', sans-serif!important;
      } 
      nav a.navbar-brand{
          color: black!important;
          font-size: 20px!important!important;
          font-weight: 500;!important;
      }
      nav a{
        color: #fff!important;
        padding: 15px!important;
      }
      a{
        color: black;
        cursor: pointer;
      }
      a:hover{
        color: #000002;
        text-decoration: none;
        cursor: mouse;
      }
      ul.dropdown-menu a{
        color: black!important;
      }
      h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
      }
    </style>
  </head>
  <body>
    <div class="container clearfix">
      <div class="row">
        <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container" style="padding:0px!imprtant;">
              <div class="navbar-header" style="padding:20px!imprtant;">
                <a href="index.php?page=home">
                <img class="login" src="css/galilee.png" href="index.php?page=home" >
                </a>
              </div>
              <ul class="nav navbar-inverse" style="background-color:#343A40;">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
                      href="#"> <i class="fa fa-users"></i> Étudiants </a>
                  <ul class="dropdown-menu">
                    <li><a href="index.php?page=listeStudents"> Telecom 1</a></li>
                    <li><a href="index.php?page=listeStudents"> Telecom 2</a></li>
                    <li><a href="index.php?page=listeStudents"> Telecom 3</a></li>
                  </ul>
                </li>
                <li><a href="index.php?page=user-profile"> <i class="fa fa-user"></i> Profil </a></li>
                <li><a href="index.php?page=formNewStudent"> <i class="fa fa-plus"></i> Plus </a></li>
                <li><a href="index.php?page=all-users"> <i class="fa fa-users"></i> Stages </a></li>
                <li><a href="logout-user.php"> <i class="fa fa-power-off"></i> Logout </a></li>
              </ul>
            </div>
          </nav>
            
          <br>
          <div class="content" style="width:100%;">
            <?php 
              if (isset($_GET['page'])) {
                $page = $_GET['page'].'.php';
              }else{
                $page = 'index.php?page=home';
              }

              if (file_exists($page)) {
                require_once $page;
              }else{
                require_once '404.php';
              }
            ?>
          </div> 
        </div>
      </div>
    </div>
  </body>
</html>
