<?php

$sector = intval( $_GET[ 'sct' ] );
$industry = intval( $_GET[ 'ind' ] );

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

$sql_stmt = "SELECT NSP_Speciality_ID, NSP_Speciality_Name FROM NAICS_Speciality WHERE NSP_Sector_ID = $sector AND NSP_Industry_ID = $industry";
$result = mysqli_query( $dbcon, $sql_stmt );

$str = '<option value="0" name="spc_opt_0 id="spc_opt_0"><i>Select a Specialty</i></option>';

while ( $row = mysqli_fetch_row( $result ) ) {
	$str .= '<option value="' . $row[ 0 ] . '" name="spc_opt_' . $row[ 0 ] . '" id="spc_opt_' . $row[ 0 ] . '">(' . $row[ 0 ] . ') &nbsp' . $row[ 1 ] . '</option>';
}

echo $str;

$result = mysqli_query( $dbcon, $sql_stmt );
$dbarray = mysqli_fetch_array( $result );
return $dbarray;

mysqli_close( $con );
?>