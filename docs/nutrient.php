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
						<li><a href="carbon_footprint.php">Carbon Footprint</a></li>
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
                        <h3>TOP FOODS HIGHEST IN SELECTED NUTRIENT</h3><br />
                        <div class="row">
                            <h4>Choose nutrient&nbsp;&nbsp;&nbsp;&nbsp;</h4>  
                            <div>
                                <select id="nutrient" onchange="filterNutrient()">
                                    <option>Select</option>
                                    <option value="Calcium_mg">Calcium</option>
                                    <option value="Carb_g">Carb</option>
                                    <option value="Fat_g">Fat</option>
                                    <option value="Fiber_g">Fiber</option>
                                    <option value="Protein_g">Protein</option>
                                    <option value="Sugar_g">Sugar</option>
                                    <option value="VitA_mcg">Vitamin A</option>
                                    <option value="VitC_mg">Vitamin C</option>
                                    <option value="VitE_mg">Vitamin E</option>

                                </select>
                            </div> 
                        </div>
                        <br />
                        <div class="row">
                            <h4>Choose food group</h4>
                            <div>
                                <select id="foodgroup" onchange="filterGroup()">
                                    <option>Select</option>
                                    <option value="Dairy and Egg Products">Dairy and Egg Products</option>
                                    <option value="Fruits">Fruits</option>
                                    <option value="Legumes and Nuts">Legumes and Nuts</option>
                                    <option value="Red meat">Red meat</option>
                                    <option value="Seafood">Seafood</option>
                                    <option value="Vegetables">Vegetables</option>
                                    <option value="White meat">White meat</option>
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
                                var topLimit;

                                function filterNutrient() {
                                    select_nutrient = document.getElementById("nutrient").value;
                                }

                                function filterGroup() {
                                    select_group = document.getElementById("foodgroup").value;
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

                                    topLimit = 10;

                                    for (var i=0; i<10;i++){
                                        if (food_data[i].value === '0') {
                                            topLimit = i;
                                            break;
                                        }
                                    }

                                    var top_ten = food_data.slice(0,topLimit);
                                    var chart_x = [];
                                    var description_x = [];
                                    var chart_y = [];
                                    for(var i in top_ten) {
                                        description_x.push(top_ten[i].descrip);
                                        var splitString = top_ten[i].descrip.split(',');
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
                                                label:  select_nutrient + ' per 100g of Food',
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
                                    Chart.defaults.global.defaultFontSize = 18;
                                    myChart = new Chart(ctx, config);
                                    chartExist = true;
                                    // reset data
                                    console.log(chart_x);
                                    showTable(food_data);
                                    food_data = original_data;
                                }

                                function showTable(fdata){
                                    var table = document.getElementById("myTable");
                                    table.innerHTML = "";
                                    for (var i=0; i<topLimit;i++){
                                        var j = i+1;
                                        var row = `<tr>
                                                        <td>${j}</td>
                                                        <td>${fdata[i].descrip}</td>
                                                        <td>${fdata[i].nutrient_type}</td>
                                                        <td>${fdata[i].value}</td>
                                                    </tr>`
                                        table.innerHTML += row;
                                    }
                                }

                        </script>
                        <br /><br />
                        <table id="table">
                            <tr>
                                <th>Ranking</th>
                                <th>Description</th>
                                <th>Nutrient_unit</th>
                                <th>Value</th>
                            </tr>
                            <tbody id="myTable">

                            </tbody>
                        </table>
					</section>
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