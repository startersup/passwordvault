 <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Smart Construction Management | Gold N' Bell</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/images/helmet.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/index.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Open+Sans:400,600,700|Muli:400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
 <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css" />
 <link rel="stylesheet" type="text/css" href="../assets/css/media.css" />
    </head>
 <body>
   <?php include('../navbar/index.php'); ?>
<div class="sitesdiv">     

<input type="text" id="myInput" class="controls" onkeyup="myFunction()" placeholder="Search for Employees.." style="width:30%;margin-bottom:10px;" >
 <table >
                      <thead class="header">
                    
                        <th>Name</th>
                        <th>Number</th>
                           <th>Email</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                      <tbody id="myTable">
                        
                           <tr>
                          <td>vinodhan thunderbolt</td>
                          <td>7904204902</td>
                          <td>vinodhan@gmail.com</td>
                          <td> mudhichur road, mudichure, tambaram chennai-600099.</td>
                          <td>Developer</td>
                          <td><span>Active</span></td>
                          <td><button data-toggle="modal" data-target="#EMP1560008208323" class="btn btn-default">Edit</button></td>
                        </tr>
                        
                           <tr>
                          <td>deepak</td>
                          <td>1234567891</td>
                          <td>deepak@gmail.com</td>
                          <td> no.4/364a</td>
                          <td>Labor</td>
                          <td><span>Active</span></td>
                          <td><button data-toggle="modal" data-target="#EMP1560012697817" class="btn btn-default">Edit</button></td>
                        </tr>
                        
                           <tr>
                          <td>Sai charan</td>
                          <td>9551936390</td>
                          <td>saicharan@gmail.com</td>
                          <td>no 1 1st street</td>
                          <td>Admin</td>
                           <td><span>Active</span></td>
                          <td><button data-toggle="modal" data-target="#EMP165789234" class="btn btn-default">Edit</button></td>
                        </tr>
                        
                          </tbody> </table>
    
     </div></body>
 <script>
                              $(document).ready(function(){
                                $("#myInput").on("keyup", function() {
                                  var value = $(this).val().toLowerCase();
                                  $("#myTable tr").filter(function() {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                  });
                                });
                              });
                              </script>

</html>
