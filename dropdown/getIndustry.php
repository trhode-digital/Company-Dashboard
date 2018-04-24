<?php

$sector = intval( $_GET[ 'sct' ] );

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

$sql_stmt = "SELECT NI_Industry_ID, NI_Industry_Name FROM NAICS_Industry WHERE NI_Sector_ID = $sector";
$result = mysqli_query( $dbcon, $sql_stmt );

$str = '<option value="0" name="ind_opt_0 id="ind_opt_0"><i>Select an Industry</i></option>';

while ( $row = mysqli_fetch_row( $result ) ) {
	$str .= '<option value="' . $row[ 0 ] . '" name="ind_opt_' . $row[ 0 ] . '" id="ind_opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') &nbsp' . $row[ 1 ] . '</option>';
}

echo $str;

$result = mysqli_query( $dbcon, $sql_stmt );
$dbarray = mysqli_fetch_array( $result );
return $dbarray;

mysqli_close( $con );
?>