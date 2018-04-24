<?php

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
?>