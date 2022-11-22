<?php
include 'dbconfig.php';
include 'session-patient.php';
## Read value
$username=$_SESSION['username'];
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
    $searchQuery = " and (Username like '%".$searchValue."%' or 
        user_lastname like '%".$searchValue."%' or 
        user_firstname like '%".$searchValue."%' or
        issues like '%".$searchValue."%' or 
        course like'%".$searchValue."%' ) ";
}

## Total number of records without filtering
$sel = mysqli_query($conn,"SELECT count(*) as allcount from student where Username = '$username' ");
$records = mysqli_fetch_array($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($conn,"SELECT count(*) as allcount from student where Username = '$username' ".$searchQuery);
$records = mysqli_fetch_array($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$patientQuery = "SELECT * from student where Username = '$username' ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$patientRecords = mysqli_query($conn, $patientQuery);
$data = array();

while ($row = mysqli_fetch_array($patientRecords)) {
    $data[] = array(
            "id"=>$row['id'],
            "Username"=>$row['Username'],
            "Fullname"=>$row['Fullname'],
            "date"=>$row['date'],
            "issues"=>$row['issues'],
            "others"=>$row['others'],
            "Status"=>$row['Status'],
            "link"=>$row['link'],
            "yearlevel"=>$row['yearlevel'],
            "time"=>$row['time'],
            "course"=>$row['course'],
            "user_lastname"=>$row['user_lastname'],
            "user_firstname"=>$row['user_firstname'],
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
