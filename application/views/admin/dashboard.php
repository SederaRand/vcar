<?php
$this->load->view('admin/header');
?>
  <?php
  //var_dump($news);
  foreach($news as $n)
  {
    ?>


<body id="page-top">

  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                   <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                      <?php echo $n->nom.$n->prenom;?>
                   </span>
                   <?php
                          $path='uploads/thumbnail/';
                          $url = base_url().$path.$n->image;
                              ?>
                    <img class="img-profile rounded-circle" src="<?php echo $url;?>">
              </a>


              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('admin/dashboard/logout')?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

  <!-- Page Wrapper -->

        <!-- Begin Page Content -->

        <div class="row dash1">
            <div class="col-lg-12">
				<img src="<?php echo base_url('assets/img/salut.png')?>" alt="">
					<div class="row">
						<div class="col-lg-12">
							<h1> Salut Poah ! </h1>
						</div>
					</div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
              <div class="card mb-4 py-3 border-left-primary shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                  <h6>PRESONNALISER</h6>
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Personnalise ta vcard</div>
                      <div class="h5 mb-0 font-weight text-gray-800">
                        Personnalise ta photo de prolfil, ta photo de couverture, ainsi que toutes tes autres informations
                          <p></p>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-edit fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
             <div class="card mb-4 py-3 border-left-primary shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body ">
                  <h6>PARAMETRES</h6>
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Paramètre ta vcard</div>
                      <div class="h5 mb-0 font-weight text-gray-800">
                        Ici tu peut modifier ton mot de passe :)
                        très bientôt  tu pourras choisir les avis d'immodvisor,
                        facebook, google business et un system d'avis interne.
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cog fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>

              </div>
             </div>
            </div>


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('admin/dashboard/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>


</body>
<?php
  }
  ?>

<?php
$this->load->view('admin/footer');
?>

