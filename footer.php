


<footer>
	<div class="container">
		<div class="footer-widgets">
			<div class="row">
				<div class="col-md-4">
					<div class="foo-block">
						<div class="widget widget-footer widget_text">
							<h5 class="widgettitle">Sobre</h5>
							<div class="textwidget">
								<p>
									
									<?php  echo get_theme_mod('sobre-set'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="foo-block">
						<div class="widget widget-footer widget_text">
							<h5 class="widgettitle">Contato</h5>
							<div class="textwidget">
								<p>
									
									<?php  echo get_theme_mod('endereco-set'); ?>
								</p>
								<p>
									<?php  echo get_theme_mod('telefone-set'); ?>
									<?php  echo get_theme_mod('email-set'); ?>
								</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="foo-block">
						<div class="widget widget-footer widget_text">
							<h5 class="widgettitle">Menu</h5>

							<?php if ( has_nav_menu( 'footer-menu' ) ) { 
								wp_nav_menu(array('theme_location' => 'footer-menu',  'container_class' => 'textwidget custom-html-widget')); 
							} ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="copyright">
			
		</div>
	</div>
</footer>


<script type="text/javascript" id="gleam-init-js-after">

	document.addEventListener('scroll', function(e) {
		var header = document.getElementById("main-header");
		//console.log(window.scrollY);
		if (window.scrollY > 1 ) {
			//console.log("add");
			header.classList.add("nav-fixed-top");
		} else {
			//console.log("rm");
			header.classList.remove("nav-fixed-top");
		}

	});
</script>
</body>
</html>