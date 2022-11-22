<?php
include 'dbconfig.php';
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($conn,$_POST['search']['value']); // Search value

## Search 
$searchQuery = " ";
if($searchValue != ''){
    $searchQuery = " and (studentfeedback like '%".$searchValue."%') ";
}

## Total number of records without filtering
$sel = mysqli_query($conn,"SELECT count(*) as allcount from feedback  ");
$records = mysqli_fetch_array($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($conn,"SELECT count(*) as allcount from feedback WHERE 1 ".$searchQuery);
$records = mysqli_fetch_array($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$patientQuery = "SELECT * from feedback WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$patientRecords = mysqli_query($conn, $patientQuery);
$data = array();

while ($row = mysqli_fetch_array($patientRecords)) {
    $data[] = array(
            "id"=>$row['id'],
            "studentfeedback"=>$row['studentfeedback'],
            
        );
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
