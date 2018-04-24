<?php

$sector = intval( $_GET[ 'sct' ] );
$industry = intval( $_GET[ 'ind' ] );
$specialty = intval( $_GET[ 'spc' ] );
$subSpecialty = intval( $_GET[ 'sub' ] );

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

$sql_stmt = "SELECT MC_ID, MC_BUS_Name FROM Master_Companies, Company_NAICS WHERE MC_ID = CN_BUS_ID && CN_NAICS_Sector = $sector && CN_NAICS_Industry = $industry && CN_NAICS_Speciality = $specialty && CN_NAICS_Subspeciality = $subSpecialty";
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
?>