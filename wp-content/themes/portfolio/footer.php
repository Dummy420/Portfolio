    <footer>
     	<div class="row">

     		<div class="col-twelve tab-full social">
     			<ul class="footer-social">        
			      <!-- <li><a href="#">Facebook</a></li>
			      <li><a href="#">Twitter</a></li>
			      <li><a href="#">Behance</a></li>
			      <li><a href="#">Dribble</a></li>
			      <li><a href="#">Instagram</a></li> -->

						<?php
							wp_nav_menu([
								'theme_location' => 'socials-menu',
								'container' => '',
								'items_wrap'  => '%3$s'
							]);
						?>
			   </ul> 	      		
	      </div>

      	<div class="col-twelve tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Howdy 2016.</span> 		        	         	
		      </div>		                  
	      </div>      	

      </div> <!-- end row -->

      <div id="go-top">
		   <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-arrow-up"></i></a>
		</div>		
   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
  
  <?= wp_footer(); ?>  
</body>
</html>