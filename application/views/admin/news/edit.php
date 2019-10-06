
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
                      <?php echo $news->nom.$news->prenom;?>
                   </span>
                   <?php
                          $path='uploads/thumbnail/';
                          $url = base_url().$path.$news->image;
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

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Personnalise ta vcard</h1>
</div>
<form action="<?php echo site_url('admin/news/update/'.$news->id);?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-xl-5">
                    <div class="card mb-4 py-3 border-top-primary">
                        <div class="card-body">
                            <div class="col-lg-12 avatar_content">
								<div class="col-md-9">

									<?php if($news->image){?>
									<img class="avatar animated rollIn" src="<?php echo site_url('uploads/'.$news->image);?>" width="150">
									<input type="file" name="image" class="form-control">
                                    <?php }?>
								</div>

                            </div>

                        </div>
                    </div>
    </div>

	<div class="col-xl-6" >

                    <div class="card mb-4 py-3 border-top-primary">
                        <div class="card-body">
                            description
                            <div class="col-lg-12">
                                <div class="row">

                                    <div class="col-sm-push-1">
                                        <label for="nom" class="col-sm-12 col-form-label">Nom</label>

                                    </div>
                                        <input id="InputCur" type="text" class="form-control col-form-label " name="nom" required='true'  value="<?php echo $news->nom;?>">

                                    <div class="col-sm-push-1">
                                        <label for="prenom" class="col-sm-12 col-form-label">Prenom</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="prenom" required='true'  value="<?php echo $news->prenom;?>">

                                    <div class="col-sm-push-1">
                                        <label for="titre" class="col-sm-12 col-form-label">Title</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="title" required='true' value="<?php echo $news->title;?>">

                                    <div class="col-sm-push-1">
                                        <label for="localisation" class="col-sm-12 col-form-label">Localisation</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="localisation" required='true' value="<?php echo $news->localisation;?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 py-3 border-top-primary">
                        <div class="card-body">
                            contact
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-push-1">
                                        <label for="email" class="col-sm-12 col-form-label"><br>Email</br></label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="email" required='true' value="<?php echo $news->email;?>">

                                    <div class="col-sm-push-1">
                                        <label for="numero" class="col-sm-12 col-form-label">Numero de téléphone</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="numero" required='true' value="<?php echo $news->numero;?>">

                                    <div class="col-sm-push-1">
                                        <label for="liens_bien" class="col-sm-12 col-form-label">Liens de mes biens</label>
                                    </div>
                                    <input type="text" class="form-control col-form-label" name="lien_bien"  required='true' value="<?php echo $news->lien_bien;?>">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 py-3 border-top-primary">
                        <div class="card-body">
                            Réseaux sociaux
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-push-1">
                                        <label for="fb" class="col-sm-12 col-form-label">Facebook</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="fb" required='true' value="<?php echo $news->fb;?>">

                                    <div class="col-sm-push-1">
                                        <label for="twitter" class="col-sm-12 col-form-label">Twitter</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="twitter" required='true' value="<?php echo $news->twitter;?>">

                                    <div class="col-sm-push-1">
                                        <label for="linkedin" class="col-sm-12 col-form-label">LinkeDin</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="linkedin" required='true' value="<?php echo $news->linkedin;?>">

                                    <div class="col-sm-push-1">
                                        <label for="instagram" class="col-sm-12 col-form-label">Instagram</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="instagram" required='true' value="<?php echo $news->instagram;?>">

                                </div>
                            </div>
                        </div>
                    </div>
    </div>

	<div class="my-2"></div>

	<div class="row col-lg-12">
			<div class="col-lg-12 btn-modif">
				<input type="submit" class="btn btn-primary btn-icon-split btn-lg" name="submit" value="Sauvegarder">

			</div>

	</div>


</div>
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>

$(document).ready(function() {

    $('#InputCur').focus();
});

</script>