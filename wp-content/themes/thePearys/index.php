<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Foundation 4</title>


	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


	<script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<div class="row">
		<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name"></li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
      <?php wp_list_pages(); ?>
    </ul>
  </section>
</nav>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h1><?php bloginfo('name'); ?></h1>
		</div>
	</div>
<div class="slideshow-wrapper">
	<div class="preloader"></div>
	<ul data-orbit>
		<li>
			<img src="http://lorempixel.com/1600/400/nature/" />
			<div class="orbit-caption">...</div>
		</li>
		<li>
			<img src="http://lorempixel.com/1600/400/nature/" />
			<div class="orbit-caption">...</div>
		</li>
		<li>
			<img src="http://lorempixel.com/1600/400/nature/" />
			<div class="orbit-caption">...</div>
		</li>
	</ul>
</div>
	
	<div class="row">
		<div class="small-12 columns">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, amet, neque quos molestias magnam fugiat ullam ipsam rem nemo aliquid numquam voluptatem autem laudantium iusto architecto sed dignissimos quam expedita eveniet fugit inventore impedit quis. Rerum, mollitia, pariatur cumque labore rem a iusto quisquam velit eius laboriosam. Quia, facere, ducimus, iure expedita commodi nulla provident reprehenderit aut neque mollitia ipsa aspernatur incidunt magnam dolorum libero officiis sit animi accusantium laudantium nisi voluptatum architecto pariatur fugit doloribus similique a quibusdam. Dolorem, nobis, quisquam natus neque corporis eos quos voluptate illum minus in dolores placeat et nostrum itaque repellendus molestias vitae molestiae cumque fugit beatae ex labore maiores quae facere vel non enim praesentium tempora doloribus!</p>
		</div>

		<div class="row sub-nav-items">
			<div class="small-12 large-4 columns">
				<div class="panel gallery">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, placeat, neque, vero dicta porro nihil id laboriosam facilis distinctio reiciendis enim atque consequatur accusantium labore dolores nostrum repudiandae reprehenderit itaque quod vitae fugit amet ullam. Voluptatibus, dolorum, ullam, sed officiis ipsum repellat eligendi voluptas tempore pariatur iusto amet corporis eum?
				</div>
			</div>
			<div class="small-12 large-4 columns">
				<div class="accom">
					<img src="<?php bloginfo('template_directory'); ?>/images/kalyana-home.jpg" alt="Villa Kalyana">
				</div>
			</div>
			<div class="small-12 large-4 columns">
				<div class="panel rsvp">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, at, fugit consectetur obcaecati quis quod tenetur dicta velit ratione exercitationem pariatur iste. Incidunt veniam molestias ad nemo. Iure, recusandae, blanditiis, voluptatibus neque vitae libero culpa doloremque ullam rem dolorum quo minima illo. Inventore, sed labore numquam totam ullam deserunt eveniet.
				</div>
			</div>
		</div>
	</div>


	<script>
	document.write('<script src=' +
		('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
		'.js><\/script>')
	</script>

	<script src="js/foundation.min.js"></script>
	<script src="js/main.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
-->

<script>
$(document).foundation();
</script>
</body>
</html>
