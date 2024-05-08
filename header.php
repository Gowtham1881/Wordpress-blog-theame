<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
    
	<?php
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header text-center">	    
	<?php echo '<a href="' . get_home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
             <?php
			 $custom_logo_id = get_theme_mod( 'custom_logo' );
			 $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			 if ( has_custom_logo() ) {
				echo '<img class="mb-3 mx-auto logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
				 echo '<h1>' . get_bloginfo('name') . '</h1>';
			 }

			 
			 ?>		
				<?php
                 wp_nav_menu(
					array(
					'menu'=> 'primary',
					'container'=>'', 	
					'theme_location'=>'primary',
					'item_wrap'=>'<ul class="navbar-nav flex-column text-sm-center text-md-left">$3$s</ul>'
					)
					);
				 


				?>
				
				<hr>
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul>

			</div>
		</nav>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

    </header>

    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>