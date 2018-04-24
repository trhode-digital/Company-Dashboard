<?php
// Nothing but DATA
// this just gets data and echos it to the console

$sector = intval( $_GET[ 'sct' ] );
$industry = intval( $_GET[ 'ind' ] );
$specialty = intval( $_GET[ 'spc' ] );
$subSpecialty = intval( $_GET[ 'sub' ] );


// should use an include file here	
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

$purchases_sql_stmt = "SELECT CT_Purchases FROM Company_Transactions WHERE CT_Sector = $sector && CT_Industry = $industry && CT_Specoality = $specialty && CT_Subspeciality = $subSpecialty";
$sales_sql_stmt = "SELECT CT_Sales FROM Company_Transactions WHERE CT_Sector = $sector && CT_Industry = $industry && CT_Specoality = $specialty && CT_Subspeciality = $subSpecialty";
$years_sql_stmt = "SELECT CT_Year FROM Company_Transactions WHERE CT_Sector = $sector && CT_Industry = $industry && CT_Specoality = $specialty && CT_Subspeciality = $subSpecialty";


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

// you also must free the result set - this will free the memory used
mysqli_free_result( $purchases );
mysqli_free_result( $sales );
mysqli_free_result( $years );

// this is not formatted in JSON format really
$jsonData = json_encode( $threeArrays );

echo $jsonData;

mysqli_close( $dbcon );

?>