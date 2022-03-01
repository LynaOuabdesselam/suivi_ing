<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title><?php echo $fetch_info['name'] ?> | Home</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link 
    href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
    rel="stylesheet"  type='text/css'>

    <link href="styleCal.css" rel="stylesheet" type="text/css">
    <link href="calendar.css" rel="stylesheet" type="text/css">  
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
      nav{
          padding-left: 50px!important; 
          padding-right: 50px!important;
          font-family: 'Poppins', sans-serif;
      } 
      nav a.navbar-brand{
          color: black;
          font-size: 20px!important;
          font-weight: 500;
      }
      nav a{
        color: #fff;
        padding: 15px;;
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
        color: black;
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
            <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                <img class="login" src="css/galilee.png" href="index.php" >
                </a>
              </div>
              <ul class="nav navbar-inverse">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
                      href="#"> <i class="fa fa-users"></i> Étudiants <span class="caret"> </span></a>
                  <ul class="dropdown-menu">
                    <li><a href="index.php?page=listeStudents"> Telecom 1</a></li>
                    <li><a href="index.php?page=listeStudents"> Telecom 2</a></li>
                    <li><a href="index.php?page=listeStudents"> Telecom 3</a></li>
                  </ul>
                </li>
                <li class="active"><a href="index.php?page=user-profile"> <i class="fa fa-user"></i> Profil </a></li>
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
