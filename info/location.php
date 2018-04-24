<?php

$business = intval( $_GET[ 'bus' ] );

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

mysqli_select_db($dbcon,"web212sp_Master_Database");

$sql_stmt = "SELECT MC_ID, MC_BUS_Name, MC_BUS_Address, MC_BUS_City, MC_BUS_State FROM Master_Companies WHERE MC_ID = $business";
$result = mysqli_query( $dbcon, $sql_stmt );

while ( $row = mysqli_fetch_row( $result ) ) {
	$str .= '<p id="address">' . $row[ 2 ] . ' ' . $row[ 3 ] . ', ' . $row[ 4 ] . '</p>';
}

echo $str;

$result = mysqli_query( $dbcon, $sql_stmt );
$dbarray = mysqli_fetch_array( $result );
return $dbarray;

mysqli_close( $con );
?>