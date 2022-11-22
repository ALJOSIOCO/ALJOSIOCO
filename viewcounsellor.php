<?php 
include 'session-admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIEW COUNSELLOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">

<style type="text/css">
  <style type="text/css">

  th{
  border: 4px solid black;
  color: white;
  text-align: left;
}
tr,td{
  border: 4px solid black;
  background-color: white;
  color: black;
}
  .nav-item{
    margin-right: 50px;
  }
  .header {
    width: 30%;
    margin: 0px auto 10px;
    color: white;
    background: whitesmoke;
    text-align: center;
    border: 1px solid #B0C4D3;
    border-bottom: none;
    border-radius: 0px 0px 10px 10px;
    padding: 20px;
    margin-right: 10px;
  }
  .vieww{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left:700px;
    margin-top: 30px;
  }

  button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
  width: 200px;
  margin-left: 90px;
  margin-top: 10px;
  height: 50px;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
  color: black;
  margin-top: 10px;
  height: 50px;
  width: 200px;

}

/* Add padding and center-align text to the container */


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 150px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  max-width: 40%;
  height: 200px;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.css"/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.js"></script>
</head>
<link rel="stylesheet" href="styles.css">
<body style="background-image: url(bg.jpg);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: 0px -200px;
  background-size: cover;">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="logo.png">PHINMA-UPANG Online Student Counselling</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-item"></a>
        </li>
        </ul>
        <form class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" class="<?php if($page=='home')?>" href="view_user.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" class="<?php if($page=='About')?>"  aria-current="page"href="viewcounsellor.php">Counsellor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" class="<?php if($page=='home')?>" href="feedback.php">Feedback</a>
        </li>
          <a class="nav-link" class="<?php if($page=='countact')?>" href="logout.php">Logout</a>
        </form>
      </div>
      </div>
    </nav>
  </header>

    <div class="content">    
          <div class="card">
              <div class="card-header text-center" style="background-color: lightgreen;">
                  <h1><i class="fa fa-clock"></i>COUNSELLORS</h1>
                  <a  class="btn btn-success" href="addcounsellor.php">ADD COUNSELLOR</a>
              </div>  
              <script>alert('You finished patient's appointment.');</script>
          <div class="card-body">
              <table id='counsellor-table' class='display dataTable table table-hover' style="width: 100%;">
                  <thead>
                  <tr>
                    <th style="background-color: #4CAF50;">No.</th>
                    <th style="background-color: #4CAF50;">EMPLOYEE ID</th>
                    <th style="background-color: #4CAF50;">LAST NAME</th>
                    <th style="background-color: #4CAF50;">FIRST NAME</th>
                    <th style="background-color: #4CAF50;">MIDDLE NAME</th>
                    <th style="background-color: #4CAF50;">CONTACT</th>
                    <th style="background-color: #4CAF50;">E-MAIL</th>
                    <th style="background-color: #4CAF50;">OPTIONS</th>
                    <th style="background-color: #4CAF50;"></th>                  
                  </tr>
                  </thead>                
              </table>
            </div>
             <script>
                 $(document).ready(function(){
                  $.fn.DataTable.ext.classes.sFilterInput = "form-control";
                    $('#counsellor-table').DataTable({
                        'processing': true,
                        'serverSide': true,
                        'serverMethod': 'post',
                        'ajax': {
                            'url':'view-counsellor-table.php',                    
                        },
                        'language':{ 
                          'searchPlaceholder': 'Search Last Name','sSearch': '' 
                        },
                        'columns': [
                            { data: 'id' },
                            { data: 'user_employee' },
                            { data: 'user_lastname' },      
                            { data: 'user_firstname' },     
                            { data: 'user_middlename' },              
                            { data: 'user_contact' }, 
                            { data: 'user_email' },
                            { 
                             "data": null,
                             "render": function(data, type, row, meta)
                             {
                                if(type === 'display')
                                {
                                    data = '<a class="btn btn-danger" href="delete-counsellor.php?del=' + row.id + '">DELETE</a>';                    
                                }
                                return data;
                             }
                            },
                            { 
                             "data": null,
                             "render": function(data, type, row, meta)
                             {
                                if(type === 'display')
                                {
                                    data = '<a class="btn btn-success" href="edit.counsellor.php?edit=' + row.id + '">EDIT</a>';                    
                                }
                                return data;
                             }
                            }, 
                        ]

                    });
                });
              </script>
    </div>
  </div>
</div>

</body>
</html>
