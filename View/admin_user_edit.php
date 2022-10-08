<?php

require_once('../Controller/controller.php');

class admin_users{
    protected $ac;

  public function __construct() {
    $this->ac = new admin_user_controller();
  }

  public function head(){
      echo '<!DOCTYPE html>
      <html>
      <head>
          <title></title>
      
          <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
          <link
              href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">
      
          <!-- Custom styles for this template -->
          <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
      
          <!-- Custom styles for this page -->
          <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
          <link href="../assets/css/admin.css" rel="stylesheet">
      
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
      
          
          <!-- Bootstrap core JavaScript-->
          <script src="../assets/vendor/jquery/jquery.min.js"></script>
          <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      
          <!-- Core plugin JavaScript-->
          <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
      
          <!-- Page level plugins -->
          <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
          <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      
          <script src="../assets/js/admin.js"></script>
      
      </head>';
  }
  public function main(){
      try {
          $users = $this->ac->get_users_controller();
          $us = $this->ac->get_user_controller($_GET['id_user']);
          echo '<body>
                <!-- Dashboard -->
                <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
                    <!-- Vertical Navbar -->
                    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
                        <div class="container-fluid">
                            <!-- Toggler -->
                            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                                <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
                            </a>
                            
                            <!-- Collapse -->
                            <div class="collapse navbar-collapse" id="sidebarCollapse">
                                <!-- Navigation -->
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="adminpage.php">
                                            <i class="bi bi-house"></i> Accueil
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="admin_users.php">
                                            <i class="bi bi-people"></i> Utilisateurs
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_ann.php">
                                            <i class="bi bi-bar-chart"></i> Annonces
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_news.php">
                                            <i class="bi bi-newspaper"></i> News
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_contenu.php">
                                            <i class="bi bi-bookmarks"></i> Contenu
                                        </a>
                                    </li>
                                    
                                </ul>
                                <!-- Divider -->
                                <hr class="navbar-divider my-5 opacity-20">
                                <!-- Navigation -->
                                
                                <!-- Push content down -->
                                <div class="mt-auto"></div>
                                <!-- User (md) -->
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="bi bi-person-square"></i> Account
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_login.php">
                                            <i class="bi bi-box-arrow-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- Main content -->
                        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
                            <!-- Header -->
                            <header class="bg-surface-primary border-bottom pt-6">
                                <div class="container-fluid">
                                    <div class="mb-npx">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                                <!-- Title -->
                                                <h1 class="h2 mb-0 ls-tight">Utilisateurs</h1>
                                            </div>
                                            <!-- Actions -->
                                            <div class="col-sm-6 col-12 text-sm-end">
                                                <div class="mx-n1">
                                                    <a href="admin_add_user.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                                        <span class=" pe-2">
                                                            <i class="bi bi-plus"></i>
                                                        </span>
                                                        <span>Ajouter</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Nav -->
                                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                                            <li class="nav-item ">
                                                <a href="admin_users.php" class="nav-link active">Tous</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="admin_users_d.php" class="nav-link font-regular">Demande validation</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </header>
                            <!-- Main -->
                            <main class="py-6 bg-surface-secondary">
                            <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details -- '.$us["Role"].'</div>
                                <div class="card-body">
                                    <form action="'.$this->update($us["Role"], $_GET['id_user']).'" method="POST">
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputFirstName">Nom</label>
                                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="'.$us["First_Name"].'" name="first-name">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastName">Prénom</label>
                                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="'.$us["Last_Name"].'" name="last-name">
                                            </div>
                                        </div>
                                        <!-- Form Row        -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (organization name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputOrgName">Téléphone</label>
                                                <input class="form-control" id="inputOrgName" type="tel" placeholder="Enter your organization name" value="'.$us["Phone"].'" name="telephone">
                                            </div>
                                            <!-- Form Group (location)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLocation">Adresse</label>
                                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="'.$us["Adress"].'" name="adress">
                                            </div>
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="'.$us["Email"].'" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Enter your email address" value="'.$us["Password"].'" name="password">
                                        </div>';

                                        if($us["Role"] == "transporte") {echo'
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputCert">Certificarion</label>
                                            <select class="form-control" name="certification" id="select-btn" placeholder="Etat">
                                                <option value="1"'; if($us["Certification"] == "1") echo ' selected '; echo'>Non_certifié</option>
                                                <option value="2"'; if($us["Certification"] == "2") echo ' selected '; echo'>En_Attente</option>
                                                <option value="3"'; if($us["Certification"] == "3") echo ' selected '; echo'>Certifié</option>
                                            </select>
                                        </div>';}

                                        echo'


                                        
                                        <!-- Save changes button-->
                                        <button class="btn btn-primary" type="submit" name="sauv">Sauvegarder</button>
                                        <button class="btn btn-primary" type="submit" name="supp">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </main>
                    </div>
                </div>
                </body>
                </html>';


      }catch(Exception $e){
        echo 'erreur' .$e->getMessage();
      }
  }

  public function update($role, $id){
    if(isset($_POST['sauv']))
    {    
        $first = $_POST['first-name'];
        $last = $_POST['last-name'];
        $mobile = $_POST['telephone'];
        $adress = $_POST['adress'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($role == "transporte") {
            $certification = $_POST['certification'];
            $this->ac->admin_update_t_controller($first, $last, $mobile, $adress, $email, $password, $certification, $id);
        }
        else{
            $this->ac->admin_update_controller($first, $last, $mobile, $adress, $email, $password, $id);
        }

        header('Location: admin_users.php'); 
        
    }

    if(isset($_POST['supp']))
    {    
        $this->ac->admin_deleteuser_controller($id);

        header('Location: admin_users.php'); 
        
    }
  }

}

$aff = new admin_users();

$aff->head();
$aff->main();
?>