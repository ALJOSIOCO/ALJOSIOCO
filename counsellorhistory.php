<?php
include 'session-counsellor.php';
?>
<?php 
  if(isset($_POST['done']))
      {
        $query=mysqli_query($conn,"UPDATE student set link = '".$_POST['link']."', subject = '".$_POST['subject']."', message = '".$_POST['message']."',status = '2', result = '1' where id = '".$_GET['followup']."' ");
        $message = "Booked.";
      }
?>
<!DOCTYPE html>
<html>
  <head><?php include "dbconfig.php"; ?>
    <title>Making Lives Better - <?php echo $_SESSION['user_lastname'];  ?>, <?php echo $_SESSION['user_firstname']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.js"></script>
<style type="text/css">
  
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
          <li class="nav-item">
            <a class="nav-link"  href="table.php" style="color: black;">Appointment Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="counsellorhistory.php" style="color: black;">Appointment History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="counsellorsettings.php" style="color: black;"><?php echo $_SESSION['fullnames'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="logout-counsellor.php" style="color: black;">Logout</a>
          </li>
          
          </ul>
        </form>
      </div>
      </div>
    </nav>
    </header>
  <body>
<div class="content">
  <div class="content">    
          <div class="card">
              <div class="card-header text-center" style="background-color: lightgreen;">
                  <h1><i class="fa fa-clock"></i>Your History</h1>
              </div>  
              <script>alert('You finished patient's appointment.');</script>
          <div class="card-body">
              <table id='view-counsellor-history' class='display dataTable table table-hover' style="width: 100%;">
                  <thead>
                  <tr>
                    <th style="background-color: #4CAF50;">ID</th>
                    <th style="background-color: #4CAF50;">FULLNAME</th>
                    <th style="background-color: #4CAF50;">YEAR LEVEL</th>
                    <th style="background-color: #4CAF50;">COURSE</th>
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
                    $('#view-counsellor-history').DataTable({
                         dom: 'Bfrtip',
                          buttons: [
                              'copy', 'excel', 'pdf', 'print'
                          ],
                        'processing': true,
                        'serverSide': true,
                        'serverMethod': 'post',
                        'ajax': {
                            'url':'counsellor-history-table.php',                    
                        },
                        'language':{ 
                          'searchPlaceholder': 'Fullname, date, issues','sSearch': '' 
                        },
                        'columns': [
                            { data: 'sid' },
                            { data: 'fullname' },
                            { data: 'yearlevel' },
                            { data: 'course' },
                            { data: 'date' },
                            { data: 'issues' },
                            { data: 'others' },
                            { data: 'time' },
                            { data: 'status',
                                render: function ( data, type, row ) {
                                   if(row.status === '0')
                                   {
                                    return '<a class="btn btn-success" href=linkapproval.php?approve='+row.sid+'>View</a>';
                                   }
                                   if(row.status === '1')
                                   {
                                    return '<a class="btn btn-success" href=done-counsellor.php?sid='+row.sid+'>Done</a> <a class="btn btn-success" href=followupcheckup.php?followup='+row.sid+'>View</a> ';
                                   }
                                   if(row.status === '2')
                                   {
                                    return '<a class="btn btn-success" href=done-counsellor.php?sid='+row.sid+'>Done</a> <a class="btn btn-success" href=followupcheckup.php?followup='+row.sid+'>View</a> ';
                                   }
                                   if(row.status === '3')
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
</div>
  </body>
</html>