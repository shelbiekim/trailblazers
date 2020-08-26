<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Trailblazers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="about_us.html">Trailblazers</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="facts.html">Facts</a></li>
						<li><a href="carbon_footprint.html">Carbon Footprint</a></li>
						<li><a href="nutrient.php" class="active-page">Nutrient</a></li>
                        <li><a href="about_us.html">About Us</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Nutrient</h2>
					<p>Find out nutrition information</p>
				</header>
				<div class="container">
					<section>
                        <div class="row">
                            <h3>Choose nutrient</h3>  
                            <div>
                            <?php
                                $selected = "Calcium";
                                $options = array('Calcium','Carb','Fat','Fiber','Protein','Sugar','Vitamin A','Vitamin C', 'Vitamin E');
                                echo "<select>";                                
                                foreach($options as $option) {
                                    if($selected == $option) {
                                         echo "<option selected ='selected' value='$option'>$option</option>";
                                    }
                                    else {
                                         echo "<option value='$option'>$option</option>";
                                    }

                                }
                                echo "</select>";
                            ?>
                            </div>
                        </div>
                        <div class="row">
                            <h3>Choose food group</h3>
                            <div>
                                <?php

                                define('DB_SERVER','localhost');
                                define('DB_USERNAME','root');
                                define('DB_PASSWORD','');
                                define('DB_NAME','phpmyadmin');

                                $link = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

                                if($link == false) {
                                    die("Error: Could not connect." . mysqli_connect_error());
                                }

                                $sql = "SELECT * FROM Food_nutrition";
                                if($result = mysqli_query($link, $sql)) {
                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)){
                                            // echo $row['variable'];
                                        }   
                                    }
                                }

                                $options = array('Dairy and Egg Products','Red meat','White meat','Vegetables','Fruits','Legumes and Nuts','Seafood');
                                echo "<select>";                                
                                foreach($options as $option) {
                                    if($selected == $option) {
                                        echo "<option selected ='selected' value='$option'>$option</option>";
                                    }
                                    else {
                                         echo "<option value='$option'>$option</option>";
                                    }

                                }
                                echo "</select>";

                                ?>
                            </div>
                        </div>
                        
						<p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo.</p>
					</section>
					<hr class="major" />
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<h3>Mollis adipiscing nisl</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
								<h3>Neque ornare adipiscing</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>