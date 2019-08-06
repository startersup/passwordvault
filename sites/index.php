   
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
    
    <div class="row">
            <div class="col-md-4 col-sm-6"><div class="site-card" data-toggle="modal" data-target="#modal1">
        <i class="fa fa-plus-square"></i>
        <h3>Add New Sites</h3> 
        <br><br><br><br>
    </div></div>
    <div class="col-md-4 col-sm-6"><div class="site-card">
        <img src="../assets/images/construction-site-l.jpg" class="medimage">
        <h3>Alandur Site</h3> 
        <p>Site Lead: Mr.Ramanathan</p>
    </div></div>
    <div class="col-md-4 col-sm-6"><div class="site-card">
        <img src="../assets/images/construction-site-2.jpg" class="medimage">
        <h3>RK Nagar Site</h3> 
        <p>Site Lead: Mr.Murugesan</p>
    </div></div>
    </div>
    </div>
     <div class="modal right fade in" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="white" aria-hidden="true">×</span></button>
            <h4 class="modal-title title" id="myModalLabel2">Employee Information :<span class="green"> EMP2345</span></h4>
          </div>
  
          <div class="modal-body">
               <img class="empimg" src="/emp_photo/EMP1560008208323.png"> <br><br>
              <form action="/empdata" method="post" enctype="multipart/form-data"> 
               <input type="hidden" name="empid" class="text" value="EMP1560008208323">
              <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>Employee Photo :</td>
                      <td>
                          <input type="file" class="controls" name="EMP" accept="image/*">
                          </td>
                    </tr>
                    <tr>
                      <td class="first">Employee Name :</td>
                      <td class="first"><input type="text" name="name" class="text" value="vinodhan thunderbolt"></td>
                      </tr>
                    <tr>
                      <td>Employee Contact :</td>
                      <td><input type="text" class="text" onkeypress="return isNumber(event)" name="number" value="7904204902"></td>
                    </tr>
    
                           <tr>
                      <td>Employee Email:</td>
                      <td><input type="text" class="text" name="mail" value="vinodhan@gmail.com"></td>
                    </tr>
                      <tr>
                      <td>Resident Address : </td>
                          <td><textarea name="address" class="textarea address"> mudhichur road, mudichure, tambaram chennai-600099.</textarea></td>
                    </tr>
                    <tr>
                      <td>Joined Date :</td>
                      <td><input type="date" format="mm-dd-yyyy" class="text" name="joindate" value="2019-06-15"></td>
                    </tr>
                     <tr>
                      <td>CTC :</td>
                      <td><input type="text" onkeypress="return isNumber(event)" class="text" name="ctc" value="20000000000000"></td>
                    </tr>
                    <tr>
                        <td>Designation :</td>
                        <td><input type="text" class="text" name="designation" value="Developer"></td>
                      </tr>
                      <!--<tr>-->
                      <!--    <td>Years in Experince :</td>-->
                      <!--    <td><input typ="text" class="text" value="1 year"></td>-->
                  
                      <!--  </tr>-->
                        <tr>
                            <td>Employee Status</td>
                    <td>
                        <select name="status" class="selectit"> 
                         <option value="Active">Active</option>  
                          <option value="Inactive">Inactive</option> 
                        </select>
                        </td> </tr>
                        <tr>
                            <td>Authorization Level</td>
                    <td>
                        <select name="auth" class="selectit"> 
                          
                            <option value="1" selected="">Super Admin</option> 
                         <option value="2">Labor</option>
                         
                        </select>
                        </td> </tr>
                        <tr><td>
                            
                              <button class="buttonadd" style="margin-top:10px;">UPDATE</button>
                        </td>
                  
</tr></tbody></table>  
    </form>
              
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
      </div><!-- modal --></div>
    </body></html>