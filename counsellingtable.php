<?php
include 'session-patient.php';
?>
<!DOCTYPE html>
<html>
  <head><?php include "dbconfig.php"; ?>
    <title>Making Lives Better</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<style type="text/css">
  .form-head{
    background-color: #807428;
    color: white;
  }
  .date{
    border: 1px solid black;
  }
  .form-button{
    color: white;
    background-color: green;
    width: 100px;
    margin-left: 500px;
    height: 40px;
  }



button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .submitbtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
  width: 200px;
  margin-left: 100px;
  margin-top: 10px;
  height: 50px;
}

/* Add a color to the delete button */
.submitbtn {
  background-color: #4CAF50;
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
  height: 250px;
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

li a:hover, .dropdown:hover .dropbtn {
    background-color: lightgreen;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: green}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
  </head>
  <body style="background-image: url(qwer.png);
  background-attachment: fixed;
  max-width: 100%;  
  background-position: 0px 0px;
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
        <li class="dropdown">
          <a class="nav-link" href="counselling.php" style="color: black;">Book Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="counsellingtable.php" style="color: black;">Appointment History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentsettings.php" style="color: black;"><?php echo $_SESSION['fullname']; ?></a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="color: black;">Logout</a>
        </li>
              
        </ul>
        </form>
      </div>
      </div>
    </nav>
  </header>
  <body>
    <div class="container">
      <div class="card">
              <div class="card-header text-center" style="background-color: lightgreen;">
                  <h1><i class="fa fa-clock"></i>Your Appointments</h1>
              </div>  
          <div class="card-body">
              <table id='your-appointments' class='display dataTable table table-hover' style="width: 100%;">
                  <thead>
                  <tr>
                    <th style="background-color: #4CAF50;">DATE</th>
                    <th style="background-color: #4CAF50;">ISSUES</th>
                    <th style="background-color: #4CAF50;">OTHERS</th>
                    <th style="background-color: #4CAF50;">TIME</th>
                    <th style="background-color: #4CAF50;">STATUS</th>
                  </tr>
                  </thead>                
              </table>
            </div>
             <script>
                 $(document).ready(function(){
                  $.fn.DataTable.ext.classes.sFilterInput = "form-control";
                    $('#your-appointments').DataTable({
                        'processing': true,
                        'serverSide': true,
                        'serverMethod': 'post',
                        'ajax': {
                            'url':'patient-appointment-table.php',                    
                        },
                        'language':{ 
                          'searchPlaceholder': 'Enter Last Name, E-mail, Contact','sSearch': '' 
                        },
                        'columns': [
                            
                            { data: 'date' },
                            { data: 'issues' },
                            { data: 'others' },
                            { data: 'time',
                                render: function ( data, type, row ) {
                                    return ''+row.time+'';
                                }
                            },
                            { data: 'Status',
                                render: function ( data, type, row ) {
                                   if(row.Status === '0')
                                   {
                                    return 'Pending';
                                   }
                                   if(row.Status === '1')
                                   {
                                     return '<b><a href = letter.php?approve='+row.id+'>Scheduled</a> by '+row.user_firstname+' '+row.user_lastname+'</b>';
                                   }
                                   if(row.Status === '11')
                                   {
                                    return '<b><a href = studentcheckup.php?followup='+row.id+'>Follow-up</a> by '+row.user_firstname+' '+row.user_lastname+'</b>';
                                   }
                                   if(row.Status === '2')
                                   {
                                    return '';
                                   }
                                   if(row.Status === '3')
                                   {
                                    return 'Done by '+row.user_firstname+' '+row.user_lastname+'';
                                   }
                                }
                            }

                            
                        ]

                    });
                });
              </script>
    </div>
    </div>
  </body>
</html>