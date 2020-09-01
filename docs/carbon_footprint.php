<?php
    define("DB_server","localhost");
    define("DB_user","root");
    define("DB_password","");
    define("DB_name","phpmyadmin");
    function db_connect(){
        $connection = mysqli_connect(DB_server,DB_user,DB_password,DB_name);
        return $connection;
    };
    $db = db_connect();
    $query = "SELECT Food_product,Stage,Emission
    FROM Food_emission";
    $result = mysqli_query($db,$query);
    $emparray = array();

    while($row =mysqli_fetch_assoc($result)){
        $emparray[]=$row;
    }
    // echo json_encode($emparray);
?>

<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Carbon Footprint - Trailblazers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- Slideshow -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        <script src="js/Chart.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="512x512" href="/favicon_io/android-chrome-512x512.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/favicon_io/android-chrome-192x192.png">
        <link rel="manifest" href="/favicon_io/site.webmanifest">
        <link rel="mask-icon" href="/favicon_io/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Style for Slideshow -->
        <style>
        * {box-sizing: border-box}


        /* Slides */
        .mySlides {
            position: relative;
            width:500px;
            height:300px;
          padding: 25px;
          text-align: center;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: relative;
          width: auto;
          margin-top: 0px;
          padding: 16px;
          color: #555f66;
          font-weight: 300;
          font-size: 20px;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
          position: relative;
          right: -410px;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
          color: white;
        }

        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 15px;
            background: #ddd;
            width: 500px;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        /* Add a background color to the active dot/circle */
        .active, .dot:hover {
          background-color: #555f66;
        }

            
        </style>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
                <h1>Trailblazers</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="facts.html" >Facts</a></li>
						<li><a href="carbon_footprint.php" class="active-page">Carbon Footprint</a></li>
						<li><a href="nutrient.php">Nutrient</a></li>
                        <li><a href="about_us.html">About Us</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<header class="major">
					<h2>Carbon Footprint</h2>
					<p>Where do emissions from food come from?</p>
				</header>
                <div class="container">
                <div class="row">
                    <div class="6u">

                        <h3>Greenhouse gas emissions<br>across different stages<br/>in the food production lifecycle</h3>
                        <p>Carbon footprint is the quantity of greenhouse gas in carbon dioxide equivalent (CO2e) which is
                            generated across the supply chain of the product. It requires energy to grow, process, package, transport,
                            and warehouse the food we consume. Knowing how carbon footprint is emitted across this chain helps<br>
                            you plan a nutritious diet in a sustainable way.<br><br>
                            Select the food and hover over the bar chart to see details.<br>* Negative value can be observed when the carbon dioxide
                            absorbed by the plant’s photosynthesis is more than that released by its respiration.<br>
                            * e.g. the carbon emissions value of nuts in the land use change stage is - 2.0.
                        </p>
                        <div class="row">
                            <h4>Choose a type of food</h4>
                                <div>
                                    <select id="Food_name">
                                        <option>Select</option>
                                        <option value="Apples">Apple</option>
                                        <option value="Maize (Meal)">Maize meal</option>
                                        <option value="Rice">Rice</option>
                                        <option value="Wheat & Rye (Bread)">Bread(Wheat&Rye)</option>
                                        <option value="Barley (Beer)">Beer(Barley)</option>
                                        <option value="Oatmeal">Oatmeal</option>
                                        <option value="Potatoes">Potatoes</option>
                                        <option value="Cassava">Cassava</option>
                                        <option value="Cane Sugar">Cane Sugar</option>
                                        <option value="Beet Sugar">Beet Sugar</option>
                                        <option value="Other Pulses">Other Pulses(Not in list)</option>
                                        <option value="Peas">Peas</option>
                                        <option value="Nuts">Nuts</option>
                                        <option value="Groundnuts">Groundnuts</option>
                                        <option value="Soymilk">Soymilk</option>
                                        <option value="Tofu">Tofu</option>
                                        <option value="Soybean Oil">Soybean Oil</option>
                                        <option value="Palm Oil">Palm Oil</option>
                                        <option value="Sunflower Oil">Sunflower Oil</option>
                                        <option value="Rapeseed Oil">Rapeseed Oil</option>
                                        <option value="Olive Oil">Olive Oil</option>
                                        <option value="Tomatoes">Tomatoes</option>
                                        <option value="Onions & Leeks">Onions&Leeks</option>
                                        <option value="Root Vegetables">Root Vegetables</option>
                                        <option value="Brassicas">Brassicas</option>
                                        <option value="Other Vegetables">Other Vegetables</option>
                                        <option value="Citrus Fruit">Citrus Fruit</option>
                                        <option value="Bananas">Bananas</option>
                                        <option value="Berries & Grapes">Berries & Grapes</option>
                                        <option value="Wine">Wine</option>
                                        <option value="Other Fruit">Other Fruit</option>
                                        <option value="Coffee">Coffee</option>
                                        <option value="Dark Chocolate">Dark Chocolate</option>
                                        <option value="Beef (beef herd)">Beef(beef herd)</option>
                                        <option value="Beef (dairy herd)">Beef(dairy herd)</option>
                                        <option value="Lamb & Mutton">Lamb&Mutton</option>
                                        <option value="Pig Meat">Pork</option>
                                        <option value="Poultry Meat">Poultry Meat</option>
                                        <option value="Milk">Milk</option>
                                        <option value="Cheese">Cheese</option>
                                        <option value="Eggs">Eggs</option>
                                        <option value="Fish (farmed)">Fish</option>
                                        <option value="Shrimps (farmed)">Shrimps</option>
                                    </select>
                                </div>
                        </div><br /> <!-- row for CHOOSE A TYPE OF FOOD-->

                    <ul class="actions">
                        <li><a class="button alt" onclick="validateInput()">Submit</a></li>
                    </ul> <br />

                    </div> <!-- first 6u -->
                    <script type ="text/javascript">
                        var dataset = <?php echo json_encode($emparray);?>;
                        var select_data=dataset;
                        var select_food;
                        var myChart;
                        var chartExist = false;


                        function validateInput(){
                            if (chartExist === true)  {
                                myChart.destroy();
                                select_data=dataset
                                select_food=document.getElementById("Food_name").value;
                                select_data = select_data.filter(d => d.Food_product === select_food);
                                showfood();

                            } else if (chartExist === false) {
                                select_food=document.getElementById("Food_name").value;
                                select_data = select_data.filter(d => d.Food_product === select_food);
                                chartExist = true;
                                showfood();
                            }
                        }

                        function showfood(){
                            var chart_x=[];
                            var chart_y=[];

                            for(var i in select_data){
                                chart_x.push(select_data[i].Stage);
                                chart_y.push(select_data[i].Emission);
                            }
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var config={
                                type:'bar',
                                data:{
                                    labels:chart_x,
                                    datasets:[{
                                        label:"Emissions (Kg CO2 - equivalents per kg product)",
                                        data:chart_y,
                                        backgroundColor: 'rgba(0,150,136,0.7)',
                                        hoverBackgroundColor: 'rgba(255,152,0,0.7)'
                                    }]
                                }
                            }
                            Chart.defaults.global.defaultFontSize = 18;
                            myChart = new Chart(ctx, config);
                            chartExist = true;
                            // reset data
                            select_data = dataset;
                        }
                    </script>
                     <div class="6u">
                         <br><br>
                        <div class="row">
                            <canvas id="myChart" width="100" height="50"></canvas>
                        </div>
                    </div> <!-- 2nd 6u -->
                </div> <!-- 1st row -->
                    <hr class="major" />
                <div class="row">
                    <div class="6u">
                        <h3>Carbon footprint across supply chains</h3>
                        <!-- <a class="image"><img src="images/supplychain.png" alt="" /></a> -->
                            <div class="mySlides slide1">
                                <br>
                                <q>Above ground changes in biomass from deforestation,<br />and below ground changes in soil carbon<br /><br /><strong>Land Use Change</strong></q><br />
                            </div>
                            <div class="mySlides slide2">
                                <q>Methane emissions from cows, methane from rice,<br />emissions from fertilizers, manure, and farm machinery.<br /><br /><strong>Farm</strong></q>
                            </div>
                            <div class="mySlides slide3">
                                <q>On-farm emissions from crop production and<br />its processing into feed for livestock.<br /><br /><strong>Animal Feed</strong></q>
                            </div>
                            <div class="mySlides slide4">
                                <q>Emissions from energy use in the process of<br />converting raw agricultural products into final food items.<br /><br /><strong>Processing</strong></q>
                            </div>
                            <div class="mySlides slide5">
                                <q>Emissions from energy use in the transport of<br />food items in-country and internationally.<br /><br /><strong>Transport</strong></q>
                            </div>
                            <div class="mySlides slide6">
                                <q>Emissions from energy use in refrigeration<br />and other retail processes.<br /><br /><strong>Retail</strong></q>
                            </div>
                            <div class="mySlides slide7">
                                <q>Emissions from the production of packaging materials,<br />material transport and end-of-life disposal.<br /><br /><strong>Packaging</strong></q>
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                        <!-- slideshow-container -->

                        <div class="dot-container">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                            <span class="dot" onclick="currentSlide(6)"></span>
                            <span class="dot" onclick="currentSlide(7)"></span>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                                showSlides(slideIndex += n);
                            }

                            function currentSlide(n) {
                                showSlides(slideIndex = n);
                            }

                            function showSlides(n) {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("dot");
                                if (n > slides.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = slides.length}
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex-1].style.display = "block";
                                dots[slideIndex-1].className += " active";
                            }
                        </script>
                        <br>
                    </div>
                </div>
            </div> 	<!-- 1st Container -->
            </div> 	<!-- main wrapper -->
        </section>
        
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="copyright">
						<li>Copyright &copy; 2020 Trailblazers.</li>
                        <li>Design: TEMPLATED</li>
                        <li>Images: Pexels</li>
					</ul>
				</div>
			</footer>

	</body>
</html>