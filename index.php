<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>

<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCkJK2lC1IXsRwWLMopryZEN_dE5naZgfU",
    authDomain: "smart-police-842ce.firebaseapp.com",
    databaseURL: "https://smart-police-842ce.firebaseio.com",
    projectId: "smart-police-842ce",
    storageBucket: "smart-police-842ce.appspot.com",
    messagingSenderId: "918797484478"
  };
  firebase.initializeApp(config);

  var db = firebase.database();
  var ref = db.ref('Reports');

  // Attach an asynchronous callback to read the data at our posts reference
	ref.on("value", function(snapshot) {
	  // console.log(snapshot.val());
	  $.each(snapshot.val(), function (index, value){
	  	var crimeDate = value.crime_date;
	  	var crimeDetails = value.crime_details;
	  	var crimeImage = value.crime_image;
	  	var crimeLocation = value.crime_location;
	  	var crimeType = value.crime_type;

	  	$(".reports").append(`
	  		<div class="panel panel-primary">
				<div class="panel-heading">
					Incomming Reporting: `+crimeType+`
				</div>
				<div class="panel-body">
					<span class="small">Crime Image</span><br />
					<img src="`+crimeImage+`" width="200" height="200" class="img-rounded" /><br />

					<p>`+crimeDetails+`</p>
					<table class="table">
						<tr>
							<td>Location</td>
							<td>`+crimeLocation+`</td>
						</tr>
						<tr>
							<td>Date</td>
							<td>`+crimeDate+`</td>
						</tr>
					</table>
				</div>

			</div>
	  	`);

	  	console.log(value);
	  });

	}, function (errorObject) {
	  console.log("The read failed: " + errorObject.code);
	});

</script>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="reports">
				
			</div>
			
		</div>
	</div>
</div>

<div id="dashboard" style="color:#FFF;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="lead">Welcome to Smart Police </h1>
				
			</div>
			<div class="col-md-6">
				<video id="video" width="640" height="480" autoplay></video>
				<button id="snap">Cover a Crime</button>
				<canvas id="canvas" width="640" height="480"></canvas>
			</div>
		</div>
	</div>
</div>
<div id="welcome-div">
	<div style="display: table;width: 100%;height: 50%;" >
		<div style="vertical-align: middle;display: table-cell;text-align: center;background: rgba(0,0,0,0.15);padding:5em 2em; margin: 5em 3em 0em 2em;">
	        <div class="col-sm-12 col-md-4 col-md-offset-4" style="display: inline-block;text-align: left;padding: ;border: ">
	            <h1 class="text-center login-title" style="font-weight: bolder; color: #C24F55;font-size: 2em;">Smart Police</h1>
	            <div class="account-wall">
	                <div style="text-align: center;">
	                	<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button> 
	                        Signup with Facebook
	                </div>
	                <div style="font-weight: bold;font-size: 1.5em; text-align: center;">OR</div>
	                <div style="text-align: center;font-weight: bolder;margin-bottom: 3px;">sign up with email</div>
	                    <form action="" method="post" class="form-signin" >
		                <input type="email" class="form-control" placeholder="Email" name="mail2" required autofocus>
		                <input type="password" class="form-control" placeholder="Password" name="pwrd2" required>
		                <button class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>
		                <br />
		                Already signup ? <a href="#" class=""> Sign in </a><span class="clearfix"></span>
	                	<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
	                </form>
	            </div>
	            <a href="#" class="text-center new-account">Contact us </a>
	        </div>
	    </div>
	</div>
</div>
<?php include ('includes/foot-section.php'); ?>


















