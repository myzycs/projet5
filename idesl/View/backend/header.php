<header>
   <div class="header-area">
      <div id="sticky-header" class="main-header-area">
         <div class="header-menu">   
            <div class="logo">
               <a href="index.php?action=accueil">
                  <img src="public/images/infirmiere.png" alt="Logo infirmiere">
               </a>
            </div>
               
            <div class="main-menu">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container-fluid">
                     <a class="navbar-brand" href="index.php?action=accueil">Retour a l'accueil</a>

                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                           <!--OBSOLETE SUITE CHANGEMENT DANS BACKEND TEMPLATE -->
                           <?php if ($_SESSION['role']=="1") { ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Demande de droits</a>
                              </li>
                           <?php    
                           }
                           ?>

                           <?php if ($_SESSION['role']=="2") { ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php?action=patientList">Nos Patients</a>
                              </li>
                              
                           <?php    
                           }
                           ?>

                           <?php if ($_SESSION['role']=="3") { ?>

                              <li class="nav-item">
                                 <a class="nav-link" href="index.php?action=patientList">Nos Patients</a>
                              </li>
                       
                              
                           <?php    
                           }
                           ?>

                           <?php if ($_SESSION['role']=="4") { ?>

                              <li class="nav-item">
                                 <a class="nav-link" href="index.php?action=patientList">Nos Patients</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php?action=newPatient">Ajouter un patient</a>
                              </li>
                              
                          <?php    
                          }
                          ?>

                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
           

            <div class="col-xxl-1 col-xl-1 col-sm-1">
               <div class="contact">
                  <button class="book_btn"><?php echo $_SESSION['name']; ?></button>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</header>