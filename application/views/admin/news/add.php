<?php
$this->load->view('admin/header');
?>


<h1>Profils</h1>
<form action="<?php echo site_url('admin/news/save');?>" method="post" enctype="multipart/form-data">
	<div class="col-md-7">
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">Nom</label>
				<div class="col-md-9">
					<input type="text" name="nom" class="form-control">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">Prenom</label>
				<div class="col-md-9">
					<input type="text" name="prenom" class="form-control">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">title</label>
				<div class="col-md-9">
					<textarea name="title" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">localisation</label>
				<div class="col-md-9">
					<textarea name="localisation" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">email</label>
				<div class="col-md-9">
					<textarea name="email" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">numero</label>
				<div class="col-md-9">
					<textarea name="numero" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">lien bien</label>
				<div class="col-md-9">
					<textarea name="lien_bien" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">facebook</label>
				<div class="col-md-9">
					<textarea name="fb" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">twitter</label>
				<div class="col-md-9">
					<textarea name="twitter" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">linkedin</label>
				<div class="col-md-9">
					<textarea name="linkedin" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">Instagram</label>
				<div class="col-md-9">
					<textarea name="instagram" class="form-control"></textarea>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-3">Image</label>
				<div class="col-md-9">
					<input type="file" name="image" class="form-control">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-info" value="Save News">
	</div>
	<div class="clearfix"></div>
</form>
<?php
$this->load->view('admin/footer');
?>