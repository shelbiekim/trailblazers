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
        <script src="js/Chart.min.js"></script>
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
                                <select id="nutrient" onchange="filterNutrient()">
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
                                <select id="foodgroup" onchange="filterGroup()">
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
                        <br />
                        <ul class="actions">
                            <li><a class="button alt" onclick="validateInput()">Submit</a></li>
                        </ul>
                        <div class="row">
                            <canvas id="myChart" width="100" height="50"></canvas>
                        </div>
                        <script type ="text/javascript">
                                var original_data = <?php echo json_encode($data); ?>;
                                var food_data = original_data;
                                var data_filter = "";
                                var select_nutrient = "";
                                var select_group = "";
                                var myChart;
                                var chartExist = false;

                                function filterNutrient() {
                                    var nutrient = document.getElementById("nutrient").value;
                                    if (nutrient === "calcium") {
                                        select_nutrient = "Calcium_mg";
                                    } else if (nutrient === "carb") {
                                        select_nutrient = "Carb_g";
                                    } else if (nutrient === "fat") {
                                        select_nutrient = "Fat_g";
                                    } else if (nutrient === "fiber") {
                                        select_nutrient = "Fiber_g";
                                    } else if (nutrient === "protein"){
                                        select_nutrient = "Protein_g";
                                    } else if (nutrient === "sugar") {
                                        select_nutrient = "Sugar_g";
                                    } else if (nutrient === "vitaminA") {
                                        select_nutrient = "VitA_mcg";
                                    } else if (nutrient === "vitaminC") {
                                        select_nutrient = "VitC_mg";
                                    } else if (nutrient === "vitaminE") {
                                        select_nutrient = "VitE_mg";
                                    }
                                }

                                function filterGroup() {
                                    var group = document.getElementById("foodgroup").value;
                                    if (group === "dairyegg") {
                                        select_group = "Dairy and Egg Products";
                                    } else if (group === "fruits") {
                                        select_group = "Fruits";
                                    } else if (group === "legumesnuts") {
                                        select_group = "Legumes and Nuts";
                                    } else if (group === "redmeat"){
                                        select_group = "Red meat";
                                    } else if (group === "seafood") {
                                        select_group = "Seafood";
                                    } else if (group === "vegetables") {
                                        select_group = "Vegetables";
                                    } else if (group === "whitemeat") {
                                        select_group = "White meat";
                                    }
                                }

                                function validateInput() {
                                    if (select_nutrient.length > 0 && select_group.length > 0 && chartExist === true)  {
                                        myChart.destroy();
                                        food_data = food_data.filter(d => d.nutrient_type === select_nutrient);
                                        food_data = food_data.filter(d => d.food_group === select_group);
                                        showFood();
                                    } else if (select_nutrient.length > 0 && select_group.length > 0) {
                                        food_data = food_data.filter(d => d.nutrient_type === select_nutrient);
                                        food_data = food_data.filter(d => d.food_group === select_group);
                                        showFood();
                                    }
                                }

                                function showFood() {

                                    // descending order
                                    food_data.sort(function(a, b) {
                                        return b.value - a.value;
                                    });

                                    var top_ten = food_data.slice(0,10);
                                    var chart_x = [];
                                    var description_x = [];
                                    var chart_y = [];
                                    for(var i in top_ten) {
                                        description_x.push(top_ten[i].short_descrip);
                                        var splitString = top_ten[i].short_descrip.split(',');
                                        chart_x.push(splitString[0]); // get the first word
                                        chart_y.push(top_ten[i].value);
                                    }

                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var config = {
                                        type: 'bar',
                                        data: {
                                            labels: chart_x,
                                            tooltipText: description_x,
                                            datasets: [{
                                                label:  'The Amount of '+ select_nutrient,
                                                data: chart_y,
                                                // bootstrap colors
                                                // https://i.pinimg.com/originals/b8/70/f6/b870f6c3cf2f275906616de26cffaa52.png
                                                backgroundColor: 'rgba(0,150,136,0.7)',
                                                hoverBackgroundColor: 'rgba(255,152,0,0.7)'
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            tooltips: {
                                                callbacks: {
                                                    title: function(tooltipItem, data) {
                                                        var title = data.tooltipText[tooltipItem[0].index];
                                                        return title;
                                                    }
                                                }
                                            }

                                        }
                                    };
                                    //Chart.defaults.font.size = 14;
                                    myChart = new Chart(ctx, config);
                                    chartExist = true;
                                    // reset data
                                    console.log(chart_x);
                                    food_data = original_data;
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