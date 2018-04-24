<?php

//define( "DATABASE_HOST", "web212.mccdgm.net" );
//define( "DATABASE_USERNAME", "web212spr18" );
//define( "DATABASE_PASSWORD", "W3B212-Spr18" );
//define( "DATABASE_NAME", "web212sp_Master_Database" );

function get_sector() {
	define( "DATABASE_HOST", "trhode-design.com" );
	define( "DATABASE_USERNAME", "trhodede_web212" );
	define( "DATABASE_PASSWORD", "Iceland66!" );
	define( "DATABASE_NAME", "trhodede_web212sp_Master_Database" );
	$dbcon = mysqli_connect( DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME );

	// if the connecton fails, display appropriate error message
	if ( !$dbcon ) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {

	}

	$sql_stmt = "SELECT NSE_Sector_ID, NSE_Sector_Name FROM NAICS_Sector";
	$result = mysqli_query( $dbcon, $sql_stmt );

	mysqli_select_db( $dbcon, "web212sp_Master_Database" );

	$str = '<option value="00" name="sct_opt_00" id="sct_opt_00">Select a Sector</option>';

	while ( $row = mysqli_fetch_row( $result ) ) {
		$str .= '<option value="' . $row[ 0 ] . '" name="sct_opt_' . $row[ 0 ] . '" id="sct_opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') &nbsp' . $row[ 1 ] . '</option>';
	}

	echo $str;

	$result = mysqli_query( $dbcon, $sql_stmt );
	$dbarray = mysqli_fetch_array( $result );
	return $dbarray;

	mysqli_close( $dbcon );
}

function get_industry() {
	define( "DATABASE_HOST", "trhode-design.com" );
	define( "DATABASE_USERNAME", "trhodede_web212" );
	define( "DATABASE_PASSWORD", "Iceland66!" );
	define( "DATABASE_NAME", "trhodede_web212sp_Master_Database" );
	$dbcon = mysqli_connect( DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME );

	// if the connecton fails, display appropriate error message
	if ( !$dbcon ) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {

	}

	mysqli_select_db( $dbcon, "web212sp_Master_Database" );

	$sql_stmt = "SELECT NI_Industry_ID, NI_Industry_Name FROM NAICS_Industry WHERE NI_Sector_ID = 44";
	$result = mysqli_query( $dbcon, $sql_stmt );

	$str = '<option value="0" name="ind_opt_0 id="ind_opt_0"><i>Select an Industry</i></option>';

	while ( $row = mysqli_fetch_row( $result ) ) {
		$str .= '<option value="' . $row[ 0 ] . '" name="ind_opt_' . $row[ 0 ] . '" id="ind_opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') &nbsp' . $row[ 1 ] . '</option>';
	}

	echo $str;

	$result = mysqli_query( $dbcon, $sql_stmt );
	$dbarray = mysqli_fetch_array( $result );
	return $dbarray;

	mysqli_close( $dbcon );
}

function get_specialty() {
	define( "DATABASE_HOST", "trhode-design.com" );
	define( "DATABASE_USERNAME", "trhodede_web212" );
	define( "DATABASE_PASSWORD", "Iceland66!" );
	define( "DATABASE_NAME", "trhodede_web212sp_Master_Database" );
	$dbcon = mysqli_connect( DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME );

	// if the connecton fails, display appropriate error message
	if ( !$dbcon ) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {

	}

	mysqli_select_db( $dbcon, "web212sp_Master_Database" );

	$sql_stmt = "SELECT NSP_Speciality_ID, NSP_Speciality_Name FROM NAICS_Speciality WHERE NSP_Sector_ID = 44 AND NSP_Industry_ID = 8";
	$result = mysqli_query( $dbcon, $sql_stmt );

	$str = '<option value="0" name="spc_opt_0 id="spc_opt_0"><i>Select a Specialty</i></option>';

	while ( $row = mysqli_fetch_row( $result ) ) {
		$str .= '<option value="' . $row[ 0 ] . '" name="spc_opt_' . $row[ 0 ] . '" id="spc_opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') &nbsp' . $row[ 1 ] . '</option>';
	}

	echo $str;

	$result = mysqli_query( $dbcon, $sql_stmt );
	$dbarray = mysqli_fetch_array( $result );
	return $dbarray;

	mysqli_close( $dbcon );
}

function get_subSpecialty() {
	define( "DATABASE_HOST", "trhode-design.com" );
	define( "DATABASE_USERNAME", "trhodede_web212" );
	define( "DATABASE_PASSWORD", "Iceland66!" );
	define( "DATABASE_NAME", "trhodede_web212sp_Master_Database" );
	$dbcon = mysqli_connect( DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME );

	// if the connecton fails, display appropriate error message
	if ( !$dbcon ) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {

	}

	mysqli_select_db( $dbcon, "web212sp_Master_Database" );

	$sql_stmt = "SELECT NSU_Subspeciality_ID, NSU_Subspeciality_Name FROM NAICS_Subspeciality WHERE NSU_Sector_ID = 44 AND NSU_Industry_ID = 8 AND NSU_Speciality_ID = 1";
	$result = mysqli_query( $dbcon, $sql_stmt );

	$str = '<option value="0" name="sub_opt_0 id="sub_opt_0"><i>Select a Sub-Specialty</i></option>';

	while ( $row = mysqli_fetch_row( $result ) ) {
		$str .= '<option value="' . $row[ 0 ] . '" name="sub_opt_' . $row[ 0 ] . '" id="sub_opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') ' . $row[ 1 ] . '</option>';
	}

	echo $str;

	$result = mysqli_query( $dbcon, $sql_stmt );
	$dbarray = mysqli_fetch_array( $result );
	return $dbarray;

	mysqli_close( $dbcon );
}

function get_businesses() {
	define( "DATABASE_HOST", "trhode-design.com" );
	define( "DATABASE_USERNAME", "trhodede_web212" );
	define( "DATABASE_PASSWORD", "Iceland66!" );
	define( "DATABASE_NAME", "trhodede_web212sp_Master_Database" );
	$dbcon = mysqli_connect( DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME );

	// if the connecton fails, display appropriate error message
	if ( !$dbcon ) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {

	}

	mysqli_select_db( $dbcon, "web212sp_Master_Database" );

	$sql_stmt = "SELECT MC_ID, MC_BUS_Name FROM Master_Companies, Company_NAICS WHERE MC_ID = CN_BUS_ID && CN_NAICS_Sector = 44 && CN_NAICS_Industry = 8 && CN_NAICS_Speciality = 1 && CN_NAICS_Subspeciality = 1";
	$result = mysqli_query( $dbcon, $sql_stmt );

	$str = '<option value="0" name="ind_opt_0 id="ind_opt_0"><i>Select a Business</i></option>';

	while ( $row = mysqli_fetch_row( $result ) ) {
		$str .= '<option value="' . $row[ 0 ] . '" name="opt_' . $row[ 0 ] . '" id="opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') &nbsp' . $row[ 1 ] . '</option>';
	}

	echo $str;

	$result = mysqli_query( $dbcon, $sql_stmt );
	$dbarray = mysqli_fetch_array( $result );
	return $dbarray;

	mysqli_close( $con );
}

function get_transactions() {
	define( "DATABASE_HOST", "trhode-design.com" );
	define( "DATABASE_USERNAME", "trhodede_web212" );
	define( "DATABASE_PASSWORD", "Iceland66!" );
	define( "DATABASE_NAME", "trhodede_web212sp_Master_Database" );
	$dbcon = mysqli_connect( DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME );

	// if the connecton fails, display appropriate error message
	if ( !$dbcon ) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {

	}

	$purchases_sql_stmt = "SELECT CT_Purchases FROM  Company_Transactions WHERE CT_Sector = 44 && CT_Industry = 8 && CT_Specoality = 1 && CT_Subspeciality = 1";
	$sales_sql_stmt = "SELECT CT_Sales FROM  Company_Transactions WHERE CT_Sector = 44 && CT_Industry = 8 && CT_Specoality = 1 && CT_Subspeciality = 1";
	$years_sql_stmt = "SELECT CT_Year FROM  Company_Transactions WHERE CT_Sector = 44 && CT_Industry = 8 && CT_Specoality = 1 && CT_Subspeciality = 1";


	$sales = mysqli_query( $dbcon, $sales_sql_stmt );
	$sales_array = array();

	while ( $row = mysqli_fetch_row( $sales ) ) {
		array_push( $sales_array, $row[ 0 ] );
	}

	$purchases = mysqli_query( $dbcon, $purchases_sql_stmt );
	$purchases_array = array();

	while ( $row = mysqli_fetch_row( $purchases ) ) {
		array_push( $purchases_array, $row[ 0 ] );
	}

	$years = mysqli_query( $dbcon, $years_sql_stmt );
	$years_array = array();

	while ( $row = mysqli_fetch_row( $years ) ) {
		array_push( $years_array, $row[ 0 ] );
	}

	$threeArrays = array( $years_array, $sales_array, $purchases_array );

	return $threeArrays;

	mysqli_close( $dbcon );
}

?>

<!doctype html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company Dashboard</title>

	<!-- Bootstrap 4 -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- My Stylesheet -->
	<link rel="stylesheet" href="../../styles/_main.css">
	<link rel="stylesheet" href="styles.css">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		/* GET DROPDOWNS */
		$( document ).ready( function () {

			/* Set the first four dropdowns to the proper default values */
			$( '#sct' ).val( '44' ); //        Sector = 44
			$( '#ind' ).val( '8' ); //      Industry = 08
			$( '#spc' ).val( '1' ); //     Specialty = 01
			$( '#sub' ).val( '1' ); // Sub-Specialty = 01

			/* Google Charts */

			google.charts.load( 'current', {
				packages: [ 'corechart', 'bar' ]
			} );
			google.charts.setOnLoadCallback( initChart );

			function initChart() {

				// Create the data table.

				var data = <?php echo json_encode(get_transactions());?>;
				var years = data[ 0 ];
				var sales = data[ 1 ];
				var purchases = data[ 2 ];
				var tableArray = new Array();

				for ( var i = 0; i < data[ 0 ].length; i++ ) {
					tableArray.push( new Array() )
					tableArray[ i ].push( [ Number( years[ i ] ), Number( sales[ i ] ), Number( purchases[ i ] ) ] )
				}

				var table = new google.visualization.DataTable();
				table.addColumn( 'number', 'Year' );
				table.addColumn( 'number', 'Sales' );
				table.addColumn( 'number', 'Purchases' );

				for ( var i = 0; i < tableArray.length; i++ ) {
					table.addRow( tableArray[ i ][ 0 ], tableArray[ i ][ 1 ], tableArray[ i ][ 2 ] );
				}

				// Set chart options
				var options = {
					title: "Sales & Purchases for Men's Clothing Stores",
					titleTextStyle: {
						fontName: "'Ubuntu'"
					},
					hAxis: {
						title: 'Year',
						fontName: "'Ubuntu'",
						format: '',
						viewWindow: {
							min: [ 7, 30, 0 ],
							max: [ 17, 30, 0 ]
						}
					},
					vAxis: {
						fontName: "'Ubuntu'",
						format: '$#,###'
					}
				};

				// Instantiate and draw our chart, passing in some options.
				var chart = new google.charts.Bar( document.getElementById( "chart" ) );
				chart.draw( table, google.charts.Bar.convertOptions( options ) );
			}
		} );

		// Add sectors after the page loads
		function showSector() {

			if ( window.XMLHttpRequest ) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
			}
			xmlhttp.onreadystatechange = function () {
				if ( this.readyState == 4 && this.status == 200 ) {
					document.getElementById( "sct" ).innerHTML = this.responseText;
				}
			};
			xmlhttp.open( "GET", "dropdown/getSector.php", true );
			xmlhttp.send();
		}

		// Add industries when a sector is picked
		function showIndustry() {
			// Get sector value from dropdown
			var sct = document.getElementById( "sct" ).value;

			// Remove specialty and sub-specialty if industry is changed
			document.getElementById( "spc" ).innerHTML = "";
			document.getElementById( "sub" ).innerHTML = "";

			if ( sct == "" ) {
				document.getElementById( "ind" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "ind" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "dropdown/getIndustry.php?sct=" + sct, true );
				xmlhttp.send();
			}
		}

		// Add specialties when an industry is picked
		function showSpecialty() {
			// Get sector and industry from dropdowns
			var sct = document.getElementById( "sct" ).value;
			var ind = document.getElementById( "ind" ).value;

			// Remove sub-specialty if specialty is changed
			document.getElementById( "sub" ).innerHTML = "";

			if ( ind == "" ) {
				document.getElementById( "spc" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "spc" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "dropdown/getSpecialty.php?sct=" + sct + "&ind=" + ind, true );
				xmlhttp.send();

			}
		}

		// Add sub-specialties when a specialty is picked
		function showSubSpecialty() {
			// Get values from dropdowns
			var sct = document.getElementById( "sct" ).value;
			var ind = document.getElementById( "ind" ).value;
			var spc = document.getElementById( "spc" ).value;

			if ( spc == "" ) {
				document.getElementById( "sub" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "sub" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "dropdown/getSubSpecialty.php?sct=" + sct + "&ind=" + ind + "&spc=" + spc, true );
				xmlhttp.send();
			}
		}

		// Add businesses after the submit button is clicked
		function showBusinesses() {
			// Get dropdown values
			var sct = document.getElementById( "sct" ).value;
			var ind = document.getElementById( "ind" ).value;
			var spc = document.getElementById( "spc" ).value;
			var sub = document.getElementById( "sub" ).value;

			// Add business names to the business select tag
			if ( sub == "" ) {
				document.getElementById( "bus" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "bus" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "dropdown/getBusiness.php?sct=" + sct + "&ind=" + ind + "&spc=" + spc + "&sub=" + sub, true );
				xmlhttp.send();
			}
		}

		function findBusiness() {
			findInfo();
			findLocation();
		}

		// Display business info when business is selected from dropdown
		function findInfo() {
			// Get business from dropdown menu
			var bus = document.getElementById( "bus" ).value;

			if ( bus == "" ) {
				document.getElementById( "busInfo" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "busInfo" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "info/info.php?bus=" + bus, true );
				xmlhttp.send();
			}
		}

		// Find coordinates of business and print on screen
		function findLocation() {
			// Get business from dropdown menu
			var bus = document.getElementById( "bus" ).value;

			if ( bus == "" ) {
				document.getElementById( "busLocation" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "busLocation" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "info/location.php?bus=" + bus, true );
				xmlhttp.send();
			}
		}
	</script>
</head>

<body>
	<header id="title" class="jumbotron-fluid">
		<h1 class="fnt-display">DASHBOARD</h1>
	</header>
	<main class="container-fluid">
		<section class="col-sm-6">
			<form id="dataForm" class="form-horizontal">
				<div class="form-group">
					<label for="sct" class="control-label col-sm-3">Sector:</label>
					<div class="col-sm-6">
						<select name="sct" id="sct" class="form-control" onload="showSector()" onchange="showIndustry()">
							<?php echo get_sector();?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="ind" class="control-label col-sm-3">Industry:</label>
					<div class="col-sm-6">
						<select name="ind" id="ind" class="form-control" onchange="showSpecialty()">
							<?php echo get_industry();?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="spc" class="control-label col-sm-3">Specialty:</label>
					<div class="col-sm-6">
						<select name="spc" id="spc" class="form-control" onchange="showSubSpecialty()">
							<?php echo get_specialty();?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="spc" class="control-label col-sm-3">Sub-Specialty:</label>
					<div class="col-sm-6">
						<select name="sub" id="sub" class="form-control"><br>
							<?php echo get_subSpecialty();?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<input type="button" value="Submit" class="btn btn-primary" onclick="newChart()">
					</div>
				</div>
				<script>
					/* Google Charts */
					function newChart() {

						// Load the Visualization API and the piechart package.
						google.charts.load( 'current', {
							'packages': [ 'bar' ]
						} );

						// Set a callback to run when the Google Visualization API is loaded.
						google.charts.setOnLoadCallback( showChart );

						// Callback that creates and populates a data table, 
						// instantiates the pie chart, passes in the data and
						// draws it.

						function showChart() {

							var sct = document.getElementById( "sct" ).value;
							var ind = document.getElementById( "ind" ).value;
							var spc = document.getElementById( "spc" ).value;
							var sub = document.getElementById( "sub" ).value;

							if ( sub == "" ) {
								document.getElementById( "chart" ).innerHTML = "";
								return;
							} else {
								// url is ready to go with elements
								var xURL = "info/chart.php?sct=" + sct + "&ind=" + ind + "&spc=" + spc + "&sub=" + sub;
								//use ajax to go get the document and return text
								var jsonData = $.ajax( {
									url: xURL,
									dataType: 'json',
									async: false
								} ).responseText;

							}

							// Create the data table.

							var data = JSON.parse( jsonData ); // parsed into arrays so below works

							if ( data[ 0 ] == 0 ) {
								alert( "ERROR: No data available for this field. Please choose another." );
							} else {
								showBusinesses();
							}

							// if you used a true JSON file you wouldn't need to do the below but no worries for this time

							var years = data[ 0 ];
							var sales = data[ 1 ];
							var purchases = data[ 2 ];
							var tableArray = new Array();


							for ( var i = 0; i < data[ 0 ].length; i++ ) {
								tableArray.push( new Array() )
								tableArray[ i ].push( [ Number( years[ i ] ), Number( sales[ i ] ), Number( purchases[ i ] ) ] )

							}

							var table = new google.visualization.DataTable();
							table.addColumn( 'number', 'Year' );
							table.addColumn( 'number', 'Sales' );
							table.addColumn( 'number', 'Purchases' );

							for ( var i = 0; i < tableArray.length; i++ ) {
								table.addRow( tableArray[ i ][ 0 ], tableArray[ i ][ 1 ], tableArray[ i ][ 2 ] );
							}


							// Get the sub-specialty name that is currently selected
							var select = document.getElementById( "sub" );
							var str = select.options[ select.selectedIndex ].text;
							var title = str.slice( 4, str.length );

							// Set chart options
							var options = {
								animation: {
									duration: 1000,
									easing: 'inAndOut'
								},
								title: "Sales & Purchases for Men's Clothing Stores",
								titleTextStyle: {
									fontName: "'Ubuntu'"
								},
								hAxis: {
									title: 'Year',
									fontName: "'Ubuntu'",
									format: '',
									viewWindow: {
										min: [ 7, 30, 0 ],
										max: [ 17, 30, 0 ]
									}
								},
								vAxis: {
									fontName: "'Ubuntu'",
									format: '$#,###'
								}
							};

							// Instantiate and draw our chart, passing in some options.
							var chart = new google.charts.Bar( document.getElementById( "chart" ) );
							chart.draw( table, google.charts.Bar.convertOptions( options ) );
						}

						$( window ).resize( function () {
							showChart();
						} );
					}
				</script>
			</form>
		</section>
		<section class="col-sm-6">
			<form id="busForm" class="form-horizontal">
				<div class="form-group">
					<label for="bus" class="control-label col-sm-3">Business:</label>
					<div class="col-sm-6">
						<select name="bus" id="bus" class="form-control" onchange="findBusiness()">
							<?php echo get_businesses(); ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<input type="button" value="Submit" class="btn btn-primary" id="submit" onclick="showMap()">
					</div>
				</div>
				<div class="form-group">
					<h3>Business Info</h3>
					<div class="row" id="busInfo">
					</div>
					<div class="row" id="busLocation"></div>
				</div>
			</form>
		</section>
	</main>
	<main class="container-fluid">
		<section class="col-sm-6">
			<div id="chart"></div>
		</section>
		<section class="col-sm-6">

			<div class="row">
				<div id="map" style="width:90%;height:400px;"></div>
				<script>
					function myMap() {
						var mapProp = {
							center: new google.maps.LatLng( 40, -99 ),
							zoom: 3.666,
							mapTypeId: google.maps.MapTypeId.HYBRID
						};
						var map = new google.maps.Map( document.getElementById( "map" ), mapProp );

						var geocoder = new google.maps.Geocoder();
						document.getElementById( 'submit' ).addEventListener( 'click', function () {
							geocodeAddress( geocoder, map );
						} );

						function geocodeAddress( geocoder, resultsMap ) {
							var address = document.getElementById( 'address' ).textContent;
							geocoder.geocode( {
								'address': address
							}, function ( results, status ) {
								if ( status === 'OK' ) {
									resultsMap.setCenter( results[ 0 ].geometry.location );
									resultsMap.setZoom( 6.666 )
									var marker = new google.maps.Marker( {
										map: resultsMap,
										position: results[ 0 ].geometry.location
									} );
								} else {
									alert( 'Location not found: ' + status );
								}
							} );
						}
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTJkv_EwrAz0HhxcTxL7v70DDRUyIKK5U&callback=myMap"></script>
			</div>
		</section>
	</main>
	<footer class="jumbotron-fluid">
		<p>Click <a href="/projects/index.html">HERE</a> to return to the projects page.</p>
	</footer>
</body>

</html>