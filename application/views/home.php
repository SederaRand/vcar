
		<?php
		foreach($news as $n)
		{
			?>

<body class="">
	<div class="container-fluid card animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<!-- Logo et avatar end-->
				<div id="header">
					<div class="row ">
						<div class="col-lg-12 logo_content">
							<img class="logo" src="<?php echo base_url('assets/img/logo_iad.png') ?>"><!-- logo image -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 avatar_content">
								<img class="avatar animated rollIn" src="<?php echo site_url('uploads/thumbnail/'.$n->image);?>"> <!-- avatar image -->
						</div>
					</div>
				</div>

				<!-- Logo et avatar end-->
				<hr class="mx-auto header-divider" style="">
				<!-- About/information begin-->
				<div id="about">
					<div class="row nom">
						<!-- Nom & Prenom -->
						<div class="col-lg-12">
								<h1 class="title"> <?php echo $n->nom; ?> <?php echo $n->prenom; ?> </h1><!-- nom -->
					</div>
				</div>

			<div class="row post">
				<div class="col-lg-12">
					<h2 class="title"><?php echo $n->title; ?></h2><!-- description -->
				</div>
			</div>

			<div class="row localise">
				<div class="col-lg-12">
					<h3 class="title"><i class="fa fa-map-marker"><?php echo $n->localisation; ?></i><br></p></h3>

				</div>
			</div>
		</div>
				<!-- About/information end-->
				<hr class="mx-auto" style="width: 60%">

				<!-- Contact begin-->
			<div id="contact">

				<div class="row contact_icons">
					<div class="col-md-12 message">
							<div class="">
								<p>Un message rapide ?</p>
							</div>
							<!-- text rapide end-->
							<!-- button Message rapide-->
							<a href="sms:<?php echo base_url('assets/img/icons8_message_96px_1.png') ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-comments fa-stack-1x"></i></span>
							</a>

							<a href="mailto:<?php echo base_url('assets/img/icons8_gmail_96px_1.png') ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x"></i></span>
							</a>

							<a href="<?php echo base_url('assets/img/icons8_whatsapp_96px_1.png') ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-whatsapp fa-stack-1x"></i></span>
							</a>

							<a href="<?php echo base_url('assets/img/icons8_facebook_messenger_96px_1.png') ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-facebook-messenger fa-stack-1x" aria-hidden="true"></i></span>
							</a>
					</div>
				</div>

				<hr class="mx-auto" style="width: 60%">
				<!-- buttum Contact begin-->

				<div class="row button_contact">
						<div class="col-lg-12">
							<div class="row call_me">
								<div class="col-md-12">

									<a href="tel:<?php echo $n->numero; ?>" class="button blue"><i class="fa fa-phone"></i>&nbsp;Appelez-moi</a>
								</div>
								<div class="col-md-12">
								 	<a href="tel:<?php echo $n->numero; ?>" >(+33) 06 67 17 04 44</a>
								</div>
							</div>
							<div class="row mail_me">
								<div class="col-md-12">
									<a href="mailto:<?php echo $n->email; ?>" class="button blue"><i class="fa fa-envelope"></i>&nbsp; Ecrivez-moi</a>
								</div>
								<div class="col-md-12">
									<a href="mailto:<?php echo $n->email; ?>">ouipouahestla@gmail.com</a>

								</div>
							</div>
							<div class="row add_me">
								<div class="col-md-12">
									<a href="<?php echo base_url('assets/pouah-estla/pouah-estla.vcf')?>" class="button blue"><i class="fa fa-user-plus"></i>&nbsp; Ajoutez-moi</a>
								</div>
								<div class="col-md-12">
									<a href="<?php echo base_url('assets/pouah-estla/pouah-estla.vcf')?>">Télécharger ma carte de visite</a>
								</div>
							</div>
						</div>
					</div>
						<!-- buttum Contact end-->
				</div>
			<!-- button bien immobilier begin-->

			<div id="mes_biens_immo">
					<div class="row">
						<div class="col-lg-12">
							<a href="<?php
							$biensimmo = "https://www.iadfrance.fr/conseiller/";
							echo $biensimmo; ?>" class="button orange"><i class="fa fa-home"></i>&nbsp;Mes biens immobiliers</a>
						</div>
						<div class="col-lg-12">
							<a href="<?php echo $biensimmo; ?>" class="">Découvrez mes biens en vente</a>
						</div>
					</div>
				</div>

				<!-- button bien immobilier end-->

			<hr class="mx-auto" style="width: 60%"> <!-- separation -->

<!-- réseaux sociaux begin-->

<div id="reseau">
		<div class="row">
			<div class="col-lg-12">
				<!-- text reseau begin -->
				<div class="col-lg-12">
					<p>Suivez-moi sur les réseaux sociaux</p>
				</div>
				<!-- text reseau end -->
				<!--button facebook follow -->
				<?php

					$fblink = "https://www.facebook.com/Pouah-Estla-Conseiller-Immobilier-263756767620900/";
					$twitterlink = "https://twitter.com/charlieestla";
					$linkedinlink ="https://www.linkedin.com/in/j%C3%A9r%C3%A9my-perez-b33a972a/";
					$instalink= "https://www.instagram.com/jeremy_perez_iad_france/";
				?>


				<a href="<?php echo $fblink; ?>" class="round_icons">
					<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span>
				</a>
				<?php
					if (empty($twitterlink))
						  echo '';
					  else
						  echo '

							<a href="'.$twitterlink.'" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span>
							</a>
							';
					if (empty($linkedinlink))
						  echo '';
					  else
						  echo '

							<a href="'.$linkedinlink.'" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span>
							</a>
							';
					if (empty($instalink))
						  echo '';
					  else
						  echo '

							<a href="'.$instalink.'" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span>
							</a>
							';
				?>
			</div>
		</div>

		<hr class="mx-auto" style="width: 60%"> <!-- separation -->


					 <!-- share row begin -->

				<div class="row">
					<!-- share text begin -->
						<div class="col-lg-12">
							<p>Partagez mes coordonnées</p>
						</div>
					<!-- share text begin -->
						<div class="col-md-12 share">
					<!-- button Message rapide -->
					<?php
						$message= "mess" ;
						$url_actuelle= "http://pouah-estla.mon-conseiller-immobilier.com/";

						$texte = 'https://www.facebook.com/Pouah-Estla-Conseiller-Immobilier-263756767620900/';

					?>
							<a href="sms:+33;?&body=<?php echo $message . ' ' . $url_actuelle; ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x sms_color"></i><i class="fa fa-comments fa-stack-1x sms_color"></i></span>
							</a>

					<!-- button mail rapide -->
							<a href="mailto:?subject=Partage des coordonnées de mon conseiller immo&body=<?php echo $message . ' ' . $url_actuelle; ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x email_color"></i><i class="fa fa-envelope-o fa-stack-1x email_color"></i></span>
							</a>

					<!-- button whatsapp rapide -->
							<a href="https://wa.me/<?php echo $message . ' ' . $url_actuelle; ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x whatsapp_color"></i><i class="fa fa-whatsapp fa-stack-1x whatsapp_color"></i></span>
							</a>

					<!-- button messenger rapide -->
							<a href="<?php echo $texte = preg_replace('#(https?://www.facebook.com//?)#', 'https://m.me/', $texte); ?>" class="round_icons">
								<span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x messenger_color"></i><i class="fa fa-facebook-messenger fa-stack-1x messenger_color" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
				</div>
					<!-- réseaux sociaux end -->

				<hr class="mx-auto" style="width: 60%"> <!-- separation -->
			<!-- avis begin -->
			<div id="avis" class="">
					<?php
					$immodvisorapi ="5WR4-8GD74-VY3A9-H7L5H8-ZN1C";
						if (empty($immodvisorapi)){
	  						echo '';}
						  else{
						  $this->load->view('immodvisor');

						  }?>
				</div>
						<!-- avis end -->
				</div>
			</div>
		</div>
	</div>
</body>



			<?php
		}
		?>


