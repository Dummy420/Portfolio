<?php
get_header();
?>

 <!-- home
   ================================================== -->
   <section id="home" style="background-image: url(<?= get_theme_mod('page-intro-bg'); ?>)">

   	<div class="overlay"></div><div class="gradient-overlay"></div>

   	<div class="home-content-table">		   

		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  			<div class="home-bottom-text">

			  				<h3 class="animate-intro">Hello, World.</h3>
				  			<h1 class="animate-intro">
								<?= get_theme_mod('page-presentation', '') ?>
				  			</h1>	

							<ul class="home-section-links">
								<li class="animate-intro">A <a href="#about" class="smoothscroll">Propos</a></li>
								<li class="animate-intro">Voir <a href="#portfolio" class="smoothscroll">Portfolio</a></li>
								<li class="animate-intro">Contact <a href="#contact" class="smoothscroll">Par Mail</a></li>								
							</ul>

			  			</div> <!-- end home-bottom-text -->
			   	</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<a href="#about" class="scroll-icon smoothscroll fa fa-arrow-down">		
		   <span class="icon-DownArrow"></span>
		</a>	
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="about-profile-bg" style="background-image: url(<?= get_theme_mod('page-about-bg'); ?>);"></div>

   	<div class="about-wrap">

   		<div class="about-profile">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">About</h3>
	   			<h1 class="animate-this">A propos de Moi.</h1>

	   			<p class="lead animate-this"><?= get_theme_mod('page-about-text'); ?></p>				
				</div>
   			<p>
   				<a href="<?= get_theme_mod('page-about-cv'); ?>" class="button full-width animate-this" target="_blank">Voir mon CV</a>
   			</p>  			

   		</div> <!-- end about-profile  -->	

   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
   <section id="skills" style="background-image: url(<?= get_theme_mod('page-skills-bg'); ?>);">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row wide">
   		<div class="col-skills">

   			<div class="section-intro">
   				<h3 class="animate-this">Compétences</h3>
   			   <h1 class="animate-this">Mes différentes compétences profesionelles</h1>
   			
   			   <p class="animate-this"></p>
   			</div>

   			<ul class="skill-bars">
					<?php 
						$skills = json_decode(get_theme_mod('page-skills-array'));
						foreach($skills as $skill) {
							echo('<li class="animate-this" data-animate="fadeInRight">');
							echo('<div class="progress percent' . $skill->{'level'} . '"><span>' . $skill->{'level'} . '%</span></div>');
							echo('<strong>' . $skill->{'label'} . '</strong>');
						}
					?>
				</ul>
   			
   		</div> <!-- end col-six -->
   	</div> <!-- end row wide -->

   </section> <!-- end skills -->


   <!-- credentials
   ================================================== -->
   <section id="credentials">

   	<div class="row narrow section-intro with-bottom-sep">
   		<div class="col-twelve">
   			<h3 class="animate-this">Crrière et Éducation</h3>
	   		<h1 class="animate-this">Mes experiences profesionelles et diplômes.</h1>  			
	   		
	   		<!--<p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>-->
   		</div>   		
   	</div> <!-- end section-intro -->

		<div class="row wide credentials-content">

			<div class="col-six tab-full left">

				<h2 class="animate-this">Experience</h2>

	   		<div class="timeline-wrap">
				
				 <?php
				 	$experiences = json_decode(get_theme_mod('page-credentials-experience-array'));
					 foreach($experiences as $experience) { 
						 echo '<div class="timeline-block animate-this"><div class="timeline-ico"><i class="fa fa-briefcase"></i></div><div class="timeline-header">';
						 echo '<p class="timeframe">' . $experience->{'time'} . '</p>';
						 echo '<h3>' . $experience->{'title'} . '</h3>';
						 echo '<h4>' . $experience->{'type'} . '</h4>';
						 echo '</div><div class="timeline-content"><p>' . $experience->{'description'} . '</p></div></div>';
					 }
				 ?>

   			</div> <!-- end timeline-wrap -->				
   		
	   	</div> <!-- end col-six -->

	   	<div class="col-six tab-full right">

	   		<h2 class="animate-this">Éducation</h2>

				<div class="timeline-wrap">

				<?php
				 	$experiences = json_decode(get_theme_mod('page-credentials-education-array'));
					 foreach($experiences as $experience) { 
						 echo '<div class="timeline-block animate-this"><div class="timeline-ico"><i class="fa fa-graduation-cap"></i></div><div class="timeline-header">';
						 echo '<p class="timeframe">' . $experience->{'time'} . '</p>';
						 echo '<h3>' . $experience->{'title'} . '</h3>';
						 echo '<h4>' . $experience->{'type'} . '</h4>';
						 echo '</div><div class="timeline-content"><p>' . $experience->{'description'} . '</p></div></div>';
					 }
				 ?>
   			</div> <!-- end timeline-wrap -->	   		
	   		
	   	</div> <!-- end col-six --> 			

		</div> <!-- end row wide -->    	  	

   </section> <!-- end credentials -->


   <!-- portfolio
   ================================================== -->
   <!-- <section id="portfolio">

   	<div class="row narrow section-intro with-bottom-sep">
   		<div class="col-twelve">
   			<h3 class="animate-this">Portfolio</h3>
	   		<h1 class="animate-this">Tous mes projets, récents ou pas</h1>  			
   		</div>   		
   	</div> 

   	<div class="row portfolio-content">
   		<div class="col-twelve">
   			<div id="folio-wrap" class="bricks-wrapper">					

   				<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="https://raw.githubusercontent.com/Dummy420/Charibo/master/charibo.png" data-sub-html="#01" > 	
	                  <a href="#" class="overlay">
	                  	<img src="https://raw.githubusercontent.com/Dummy420/Charibo/master/charibo.png" alt="Charibo">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      C#
		     					   </span>
		     					   <h3 class="folio-title">Charibo</h3>	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://github.com/Dummy420/Charibo" class='details-link' title="details">
	                  	<i class="icon-UpRightArrow"></i>
	                  </a>
	               </div>
						
						<div id="01" class='hide'>
							<h4>Charibo</h4>
							<p>Charibo est un combo Jeu/Formulaire <a href="https://github.com/Dummy420/Charibo">Details</a></p>
						</div>
	        		</div>

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-shutterbug.jpg" data-sub-html="#02"> 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/shutterbug.jpg" alt="Darwin_S">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      C#
		     					   </span>
		     					   <h3 class="folio-title">Darwin, Serveur</h3>  	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://github.com/Dummy420/Darwin_serveur" class='details-link' title="details">
	                  	<i class="icon-UpRightArrow"></i>
	                  </a>
	               </div> 

	               <div id="02" class='hide'>
							<h4>Darwin, Serveur</h4>
							<p>Le côté Serveur de mon application de Chat/Sociale Darwin <a href="https://github.com/Dummy420/Darwin_serveur">Details</a></p>
						</div>	               
	        		</div>

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-shutterbug.jpg" data-sub-html="#03"> 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/shutterbug.jpg" alt="Darwin_C">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      Php
		     					   </span>
		     					   <h3 class="folio-title">Darwin, Client</h3>  	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://github.com/Dummy420/Darwin_client" class='details-link' title="details">
	                  	<i class="icon-UpRightArrow"></i>
	                  </a>
	               </div> 

	               <div id="03" class='hide'>
							<h4>Darwin, Client</h4>
							<p>Le côté Client de mon application de Chat/Sociale Darwin <a href="https://github.com/Dummy420/Darwin_client">Details</a></p>
						</div>	               
	        		</div> 			

   			</div> 
   		</div> 
   	</div> 	

   </section>   -->
   
   	<!-- contact
   ================================================== -->
   <section id="contact" style="background-image: url(<?= get_theme_mod('page-contact-bg'); ?>)">
	 <div class="overlay"></div>

<div class="row narrow section-intro">
	 <div class="col-twelve">
		 <h3 class="animate-this">Contact</h3>
		 <h1 class="animate-this"><?= get_theme_mod('page-contact-title'); ?></h1>

		 <p class="lead animate-this"><?= get_theme_mod('page-contact-subtitle'); ?></p>
	 </div> 
 </div> <!-- end section-intro -->

 <div class="row contact-form">
	 <div class="col-twelve">

				<!-- form -->
				<!-- <form name="contactForm" id="contactForm" method="post">
				
				<div class="form-field animate-this">
					<input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required>
				</div>
				<div class="form-field animate-this">
					<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required>
				</div>
				<div class="form-field animate-this">
					<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
				</div>
				<div class="form-field animate-this">
					<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required></textarea>
				</div>
				<div class="form-field animate-this">
					<button class="submitform">Submit</button>
					<div id="submit-loader">
						<div class="text-loader">Sending...</div>
						<div class="s-loader">
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>
					</div>
				</div>
			</form>  -->

		  <div id="contactForm">
				<?= do_shortcode('[contact-form-7 id="49" title="Formulaire de contact"]') ?>
				<div id="submit-loader">
					<div class="text-loader">Sending...</div>
					<div class="s-loader">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div>
			</div>

				
			<!-- Form End -->

				<!-- contact-warning -->
				<!-- <div id="message-warning"></div>  -->

				<!-- contact-success -->
			<!-- <div id="message-success">
					 <i class="fa fa-check"></i>Your message was sent, thank you!<br>
			</div> -->

		 </div> <!-- end col-twelve -->   		
 </div> <!-- end row contact-form -->

   	<!-- <div class="row contact-info">

   		<div class="col-four tab-full">
   			<h5 class="animate-this">Où me trouver</h5>

   			<p class="animate-this">
            12bis rue Normande<br>
            28230<br>
            Epernon
            </p>
   		</div> 
		<div class="col-four tab-full collapse"> </div>
   		<div class="col-four tab-full ">
   			<h5 class="animate-this">Contactez-moi</h5>

   			<p class="animate-this">
   				clement.pavell@gmail.com			     
			   </p>
   		</div>

   		div class="col-four tab-full">
   			<h5 class="animate-this">Applez-moi</h5>

   			<p class="animate-this">
   				06 95 61 67 76
			   </p>
   		</div> 
   		
   	</div>  -->
		
	</section> <!-- end contact -->

<?php
get_footer();