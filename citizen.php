<?php include("configure.php");
session_start();
$row = $_SESSION["personalinfo"];

?>
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Citizen Id</a></h1>
			
			</header>

		<?php
		$search= $row["C_ID"];
		$qryStr =" SELECT * FROM personalinfo WHERE C_ID = '$search' ";
		$exec = mysqli_query($conn,$qryStr);
		
			$row= mysqli_fetch_array($exec);
		?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Citizen Details</h2>
                    </header>

					<!-- Table -->
						<section>
									<h4>Personal Information</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
											<td>C_ID</td>
											<td>Name</td>
											<td>DOB</td>
											<td>Contact</td>
											<td>Email</td>
											<td>Address</td>
											<td>Hospital of Birth</td>
											<td>DOD</td>
											<td>Parent 1 ID</td>
											<td>Parrent 2 ID</td>
									</thead>
									<tbody>
									
											<td><?php echo $row["C_ID"] ?></td>
											<td><?php echo $row["CName"] ?></td>
											<td><?php echo $row["DOB"] ?></td>
											<td><?php echo $row["Contact"] ?></td>
											<td><?php echo $row["Email"] ?></td>
											<td><?php echo $row["Address"] ?></td>
											<td><?php echo $row["HOB"] ?></td>
											<td><?php echo $row["DOD"] ?></td>
											<td><?php echo $row["P1_CID"] ?></td>
											<td><?php echo $row["P2_CID"] ?></td>
										
								</tbody>
								</table>
							</div>
						</section>


			<?php
		
		$qryStr =" SELECT * FROM medical WHERE C_ID = '$search' ";
		$exec = mysqli_query($conn,$qryStr);
		
			$row= mysqli_fetch_array($exec);
		?>

		
						<section>
						<h4>Medical Information</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
											
											<td>Hospital ID</td>
											<td>Symptoms</td>
											<td>Treatment Undergone</td>
											<td>Start Date</td>
											<td>End Date</td>
											
									</thead>
									<tbody>
									
											
											<td><?php echo $row["H_ID"] ?></td>
											<td><?php echo $row["Symptoms"] ?></td>
											<td><?php echo $row["Treatment_Undergone"] ?></td>
											<td><?php echo $row["S_Date"] ?></td>
											<td><?php echo $row["E_Date"] ?></td>
											
										
								</tbody>
								</table>
							</div>
						</section>

						

			<?php
		
		$qryStr =" SELECT * FROM education WHERE C_ID = '$search' ";
		$exec = mysqli_query($conn,$qryStr);
		
			$row= mysqli_fetch_array($exec);
		?>

		
						<section>
						<h4>Education Information</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
											
											<td>10th Board</td>
											<td>10th %</td>
											<td>10th Pass Year</td>
											<td>12th Board</td>
											<td>12th %</td>
											<td>12th Pass Year</td>
											<td>UG Board</td>
											<td>UG %</td>
											<td>UG Pass Year</td>
											<td>PG Board</td>
											<td>PG %</td>
											<td>PG Pass Year</td>
									</thead>
									<tbody>
									
											
											<td><?php echo $row["10_BName"] ?></td>
											<td><?php echo $row["10_Percentage"] ?></td>
											<td><?php echo $row["10_PY"] ?></td>
											<td><?php echo $row["12_BName"] ?></td>
											<td><?php echo $row["12_Percentage"] ?></td>
											<td><?php echo $row["12_PY"] ?></td>
											<td><?php echo $row["UG_BName"] ?></td>
											<td><?php echo $row["UG_Percentage"] ?></td>
											<td><?php echo $row["UG_PY"] ?></td>
											<td><?php echo $row["PG_BName"] ?></td>
											<td><?php echo $row["PG_Percentage"] ?></td>
											<td><?php echo $row["PG_PY"] ?></td>
										
								</tbody>
								</table>
							</div>
						</section>


						<?php
		
		$qryStr =" SELECT * FROM marriage WHERE C_IDM = '$search' Or C_IDF = '$search' ";
		$exec = mysqli_query($conn,$qryStr);
		
			$row= mysqli_fetch_array($exec);
		?>

		
						<section>
						<h4>Marriage Information</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
											
											<td>Application Date</td>
											<td>Registration Date</td>
											<td>ID of Male</td>
											<td>ID of Female</td>
											<td>ID of Register</td>
											<td>ID of Witness 1</td>
											<td>ID of Witness 2</td>
											<td>ID of Witness 3</td>
											
									</thead>
									<tbody>
									
											
											<td><?php echo $row["A_date"] ?></td>
											<td><?php echo $row["R_Date"] ?></td>
											<td><?php echo $row["C_IDM"] ?></td>
											<td><?php echo $row["C_IDF"] ?></td>
											<td><?php echo $row["C_IDR"] ?></td>
											<td><?php echo $row["C_IDW1"] ?></td>
											<td><?php echo $row["C_IDW2"] ?></td>
											<td><?php echo $row["C_IDW2"] ?></td>
										
								</tbody>
								</table>
							</div>
						</section>


						<?php
		
		$qryStr =" SELECT * FROM employment WHERE C_ID = '$search' ";
		$exec = mysqli_query($conn,$qryStr);
		
			$row= mysqli_fetch_array($exec);
		?>

		
						<section>
						<h4>Employment Information</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
											
											<td>Employment Type</td>
											<td>Salary</td>
											<td>Yearly Income</td>
											<td>Present Experience</td>
											<td>Total Experince</td>
											<td>Designation</td>
											
									</thead>
									<tbody>
									
											
											<td><?php echo $row["E_Type"] ?></td>
											<td><?php echo $row["Salary"] ?></td>
											<td><?php echo $row["Yearly_Income"] ?></td>
											<td><?php echo $row["P_Experience"] ?></td>
											<td><?php echo $row["T_Experience"] ?></td>
											<td><?php echo $row["Designation"] ?></td>
											
										
								</tbody>
								</table>
							</div>
						</section>

				</div>
			</section>
		 		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
