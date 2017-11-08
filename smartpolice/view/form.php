<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../boots/js/jquery-3.2.1.min.js"></script>
    <script src="../boots/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    body {width: 100%;position: fixed;background-image: url('../images/action.jpg');}
    label {color: white;}

    </style>
    
</head>
  <body >
  <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
                  <a class="navbar-brand" href="">Smart Police</a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="">Home</a></li>
                      <li><a href="">Reports</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                          <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">Accounts <span class="caret"></span></a>
                          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                              <div class="col-lg-12">
                                  <div class="text-center"><ul class="dropdown" style="list-style: none;background-color: black;" >
                                      <li><a href="#" style="text-decoration: none; color: white;">Login</a></li>
                                      <li><a href="#" style="text-decoration: none;">Logout</a></li>
                                      
                                  </ul></div>
                                  
                              </div>
                          </ul>
                      </li>
                      
                  </ul>
              </div>
          </div>
      </nav>
      
  <div class="row">
  <div class="col-md-offset-4 col-md-5 col-sm-offset-4 col-sm-4">
  	
  	<form action="update.php" enctype="multipart/form-data" method="post">
  		 <div class="form-group" style="text-align: center;">
      
    </div>
    
  <section style="background: rgba(0,0,0,0.80);padding:.02em .4em; margin: -2em 1em 1em 1em;">
  	<h4 style="color: white; text-align: center;">Form</h4>
        <div >
    <div class="form-group">
       <label for="subject"><b>Name</b></label>
       <input type="text" class="form-control"   name="name" required placeholder="name">
       
    </div>
    </div>
     <div >
    <div class="form-group">
       <label for="subject"><b>Age</b></label>
       <input type="text" maxlength="2"  class="form-control"   name="Age" placeholder="Age">
       
    </div>
    </div>
     <div >
    <div class="form-group">
       <label for="subject"><b>Email</b></label>
       <input type="text" class="form-control"   name="email" required placeholder="email">
       
    </div>
    </div>

     <div >
    <div class="form-group">
       <label for="subject"><b>Rescue Number</b></label>
       <input type="text" class="form-control" maxlength="19"  name="Rescuenumber" placeholder="rescue number">
       
    </div>
    </div>
    <div >
    <div class="form-group">
       <label for="subject"><b>Address</b></label>
       <input type="text" class="form-control"   name="Address"  placeholder="Address">
       
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
    </div>
    </section>
    <div style="text-align: center;">
    </form> 
    
  </div>
  </div>
  
  </body>
</html>
    
   