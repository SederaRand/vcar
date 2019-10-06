<?php
$this->load->view('admin/header');
?>


	<?php
	//var_dump($news);
	foreach($news as $n)
	{
		?>



<div class="wrapper" id="indexAjax">

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

<?php
if($this->session->flashdata('success'))
{
    ?>

<div class="alert alert-success" role="alert">
  <?php
    echo $this->session->flashdata('success');
    ?>
</div>
<?php
}?>
<?php
if($this->input->get('keyword'))
{
    ?>
    <b>Search Result For "<?php echo $this->input->get('keyword');?>"</b>
    <?php
}
?>

<!-- <div class="loader" id="load"> Update Porifls </div> -->
<div class="row">
                <div class="col-xl-5">
                    <div class="card mb-4 py-3 border-top-primary">
                        <div class="card-body">
                            <div class="col-lg-12 avatar_content">
                            	<?php
                            		$path='uploads/thumbnail/';
                					$url = base_url().$path.$n->image;
                            	?>
                                <img type="logo" name="pdp" class="avatar animated rollIn" src="<?php echo $url;?>"> <!-- avatar image -->
                            </div>

                            <!-- /.modal-dialog -->
                            <div class="modal"id="myModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Changer de photo de profil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                </div>
                                        <div class="modal-body">
                                            <form action="post" id="image_form" encotype="multipart/form-data">
                                                <p><label> Choisir une image</label>
                                                <input type="file" name="image" id="image"/></p></br>
                                                <input type="hidden" name="action" id="action" value="insert"/>
                                                <input type="hidden" name="image_id" id="image_id"/>

				</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">

                    <div class="card mb-4 py-3 border-top-primary">
                        <div class="card-body">
                            description
                            <div class="col-lg-12">
                                <div class="row">
                                        <label for="nom" class="col-sm-2 col-form-label" style="display:none" >Numero d'identification</label>
                                        <input type="text" class="form-control col-form-label" style="display:none" name="id" value="">

                                    <div class="col-sm-push-1">
                                        <label for="nom" class="col-sm-12 col-form-label">Nom</label>

                                    </div>
                                        <input type="text" class="form-control col-form-label " name="nom" required='true' disabled="disabled" value="<?php echo $n->nom;?>">

                                    <div class="col-sm-push-1">
                                        <label for="prenom" class="col-sm-12 col-form-label">Prenom</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="prenom" required='true' disabled="disabled" value="<?php echo $n->prenom;?>">

                                    <div class="col-sm-push-1">
                                        <label for="titre" class="col-sm-12 col-form-label">Title</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="title" required='true' disabled="disabled" value="<?php echo $n->title;?>">

                                    <div class="col-sm-push-1">
                                        <label for="localisation" class="col-sm-12 col-form-label">Localisation</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="localisation" required='true' disabled="disabled" value="<?php echo $n->localisation;?>">
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
                                        <input type="text" class="form-control col-form-label" name="email" required='true' disabled="disabled" value="<?php echo $n->email;?>">

                                    <div class="col-sm-push-1">
                                        <label for="numero" class="col-sm-12 col-form-label">Numero de téléphone</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="numero" required='true' disabled="disabled" value="(+33)<?php echo $n->numero;?>">

                                    <div class="col-sm-push-1">
                                        <?php $lien_what="https://wa.me/";?>
                                        <label for="whatshapp" class="col-sm-12 col-form-label">Whatshapp</label>
                                    </div>
                                    <input type="text" class="form-control col-form-label" name="whatshapp" required='true' disabled="disabled" value="<?php echo $lien_what.$n->numero;?>">

                                    <div class="col-sm-push-1">
                                        <label for="liens_bien" class="col-sm-12 col-form-label">Liens de mes biens</label>
                                    </div>
                                    <input type="text" class="form-control col-form-label" name="lien_bien"  required='true' disabled="disabled" value="<?php echo $n->lien_bien;?>">

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
                                        <?php
                                        $lien_fb ="https://www.facebook.com/";
                                        $lien_messenger="https://m.me/";
                                        $lien_twitter="https://twitter.com/";
                                        $lien_linkedin="https://www.linkedin.com/in/";
                                        $lien_insta="https://www.instagram.com/";

                                    ?>
                                        <label for="fb" class="col-sm-12 col-form-label">Facebook</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="fb" required='true' disabled="disabled" value="<?php echo $lien_fb.$n->fb;?>">
                                    <div class="col-sm-push-1">
                                        <label for="messenger" class="col-sm-12 col-form-label">Messenger</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="messenger" required='true' disabled="disabled" value="<?php echo $lien_messenger.$n->fb;?>">

                                    <div class="col-sm-push-1">
                                        <label for="twitter" class="col-sm-12 col-form-label">Twitter</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="twitter" required='true' disabled="disabled" value="<?php echo $lien_twitter.$n->twitter;?>">

                                    <div class="col-sm-push-1">
                                        <label for="linkedin" class="col-sm-12 col-form-label">LinkeDin</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="linkedin" required='true' disabled="disabled" value="<?php echo $lien_linkedin.$n->linkedin;?>">

                                    <div class="col-sm-push-1">
                                        <label for="instagram" class="col-sm-12 col-form-label">Instagram</label>
                                    </div>
                                        <input type="text" class="form-control col-form-label" name="instagram" required='true' disabled="disabled" value="<?php echo $lien_insta.$n->instagram;?>">


                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

				<div class="my-2"></div>
				     <div class="row btn-modif">
				       	<div class="col-lg-6">
					       	<a href="#" class="btn btn-success"  id="btnModif">
				           		<span class="icon text-white-50">
                            		<i class="fas fa-check"></i>
                        		</span>
                    				<input type="submit" class="btn btn-success" name="Modifier" value="Modification">
				                </span>

				            </a>
				     	</div>
						<div class="col-lg-6">
				            <a href="#" class="btn btn-danger">
				                <span class="icon text-white-50">
				                    <i class="fas fa-trash"></i>
				                </span>
				                    <input class="btn btn-danger" name="Modifier" value="Annuler modification">
				                </a>
						</div>
					</div>
</div>
</div>

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



	<?php
	}
	?>


<script>

$(function (){
    $("#btnModif").on("click", function(){
        $.get("<?php echo site_url('admin/news/edit/'.$n->id)?>",function (response){
            $("#indexAjax").html(response);
       });
    });
})


</script>

<?php
$this->load->view('admin/footer');
?>