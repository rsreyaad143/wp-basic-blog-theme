<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body>
        <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-fire"></span> 
                	LOGO
                </a>
            </div>
            <!-- Navbar links -->
            
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
					<li class="dropdown">
						<a href="#">Services</a>
						
					</li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul> -->

            <?php 
                wp_nav_menu(array(
                    'theme-location' => 'main-menu',
                    'menu_class' => 'nav navbar-nav navbar-right'
                ));
            ?>    
           
        </div><!-- /.container -->
    </nav>