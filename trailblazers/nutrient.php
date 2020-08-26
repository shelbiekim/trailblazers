 <?php
    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','phpmyadmin');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($link == false) {
        die("Error: Could not connect. " . mysqli_connect_error());
    }
    //query to get data from the table "Food_nutrition"
    $query = "SELECT * FROM Food_nutrition";
    //execute query
    $result = mysqli_query($link, $query);
    //create an empty array
    $data = array();
    //loop through the returned data
    foreach ($result as $row) {
        $data[] = $row;
    }
    //free memory associated with result
    $result -> close();
    //close connection
    $link -> close();
    //print json_encode($data);
?>

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
                        <h3>TOP 10 FOODS HIGHEST IN SELECTED NUTRIENT</h3><br />
                        <div class="row">
                            <h4>Choose nutrient&nbsp;&nbsp;&nbsp;&nbsp;</h4>  
                            <div>
                                <select id="nutrient" onchange="getSelectValue()">
                                    <option>Select</option>
                                    <option value="calcium">Calcium</option>
                                    <option value="carb">Carb</option>
                                    <option value="fat">Fat</option>
                                    <option value="fiber">Fiber</option>
                                    <option value="protein">Protein</option>
                                    <option value="sugar">Sugar</option>
                                    <option value="vitaminA">Vitamin A</option>
                                    <option value="vitaminC">Vitamin C</option>
                                    <option value="vitaminE">Vitamin E</option>

                                </select>
                            </div> 
                        </div>
                        <br />
                        <div class="row">
                            <h4>Choose food group</h4>
                            <div>
                                <select class="foodgroup">
                                    <option>Select</option>
                                    <option value="dairyegg">Dairy and Egg Products</option>
                                    <option value="fruits">Fruits</option>
                                    <option value="legumesnuts">Legumes and Nuts</option>
                                    <option value="redmeat">Red meat</option>
                                    <option value="seafood">Seafood</option>
                                    <option value="vegetables">Vegetables</option>
                                    <option value="whitemeat">White meat</option>
                                </select>
                            </div>
                        </div>
                        <script type ="text/javascript">
                                var nutrient = "";
                                var foodgroup = "";
                                var fooddata = <?php echo json_encode($data); ?>;
                                console.log("Test");
                            
                                function getSelectValue() {
                                    var selectedValue = document.getElementById("nutrient").value;
                                    if (selectedValue == "Calcium") {
                                        selectedValue = "Calcium_mg"; 
                                    } else if (selectedValue == "Carb") {
                                        selectedValue = "Carb_g"; 
                                    } else if (selectedValue == "Fat") {
                                        selectedValue = "Fat_g"; 
                                    } else if (selectedValue == "Fiber") {
                                        selectedValue = "Fiber_g"; 
                                    } else if (selectedValue == "Protein"){
                                        selectedValue = "Protein_g";                         
                                    } else if (selectedValue == "Sugar") {
                                        selectedValue = "Sugar_g";
                                    } else if (selectedValue == "Vitamin A") {
                                        selectedValue = "VitA_mcg";
                                    } else if (selectedValue == "Vitamin C") {
                                        selectedValue = "VitC_mg";
                                    } else if (selectedValue == "Vitamin E") {
                                        selectedValue = "VitE_mg";
                                    }   
                                    return "test";
                                    
                                }
                            </script>
                        
					</section>
					<hr class="major" />

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