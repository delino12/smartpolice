<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>

<script>
	// init the sdk
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '363224617437206',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.10'
    });
      
    // FB.AppEvents.logPageView();   

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


	// check status change call back
	function statusChangeCallback(response){

	    if(response.status === 'connected'){
	    	setElements(true);
	      	console.log('login');
	      	testApi();
	    }else{
	    	setElements(false);
	      	console.log('logout');
	    }

	    // console.log(response);
	}

  	// check user logged in status
  	function checkLoginState() {
	    FB.getLoginStatus(function(response) {
	      statusChangeCallback(response);
	    });
  	}


  	// test api
  	function testApi(){
  		FB.api('/me?fields=name,email,location,birthday,gender', function(response){
  			if(response && !response.error){
  				$(".name").text(response.name);
  				$(".email").text(response.email);
  				$(".gender").text(response.gender);
  				$(".birthday").text(response.birthday);
  				$(".location").text(response.location);
  				console.log(response);
  			}
  		});
  	}

  	// do logout
  	function logoutUser()
  	{
  		FB.logout(function (response){
  			setElements(false);
  		});
  	}



  // do login check on page

  function setElements(isLoggedIn)
  {
  	if(isLoggedIn){
  		document.getElementById("dashboard").style.display = 'block';
		document.getElementById("welcome-div").style.display = 'none';
  		document.getElementById("fb-btn").style.display = 'none';
  		document.getElementById("logout").style.display = 'block';


      $("#start").click(function (){
      	startSnip(true);
      });


      $("#stop").click(function (){
      	startSnip(true);
      });

      function startSnip(data){
      	if(data){
      		// if only users is logged in
		    // Grab elements, create settings, etc.
		    var video = document.getElementById('video');

		      // Get access to the camera!
		      if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
		          // Not adding `{ audio: true }` since we only want video now
		          navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
		              video.src = window.URL.createObjectURL(stream);
		              video.play();
		          });
		      }

		      // Elements for taking the snapshot
		      var canvas = document.getElementById('canvas');
		      var context = canvas.getContext('2d');
		      var video = document.getElementById('video');

		      // Trigger photo take
		      document.getElementById("snap").addEventListener("click", function() {
		        context.drawImage(video, 0, 0, 640, 480);
		      });
      	}else{
      		// if only users is logged in
		    // Grab elements, create settings, etc.
		    var video = document.getElementById('video');

		      // Get access to the camera!
		      if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
		          // Not adding `{ audio: true }` since we only want video now
		          navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
		              video.src = window.URL.createObjectURL(stream);
		              video.stop();
		          });
		      }
      	}
      }



  	}else{
  		document.getElementById("dashboard").style.display = 'none';
		document.getElementById("welcome-div").style.display = 'block';
  		document.getElementById("fb-btn").style.display = 'block';
  		document.getElementById("logout").style.display = 'none';
  	}
  }
</script>

<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCTNiNQw6x5sCq4A9rLB2IJwZrArUIW-OY",
    authDomain: "smartpolice-96c79.firebaseapp.com",
    databaseURL: "https://smartpolice-96c79.firebaseio.com",
    projectId: "smartpolice-96c79",
    storageBucket: "smartpolice-96c79.appspot.com",
    messagingSenderId: "832454313927"
  };
  firebase.initializeApp(config);
</script>
<div id="dashboard" style="color:#FFF;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="lead">Welcome to Smart Police </h1>
				<!-- <button id="stop" class="btn btn-warning">Stop</button> <button id="start" class="btn btn-warning">Start</button> -->
				<div class="row">
					<div class="col-sm-2">
						<b>Name </b>
					</div>
					<div class="col-sm-6">
						<span class="name"></span>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-2">
						<b>Email </b>
					</div>
					<div class="col-sm-6">
						<span class="email"></span>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-2">
						<b>Gender </b>
					</div>
					<div class="col-sm-6">
						<span class="email"></span>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-2">
						<b>Birthday </b>
					</div>
					<div class="col-sm-6">
						<span class="birthday"></span>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-2">
						<b>Location </b>
					</div>
					<div class="col-sm-6">
						<span class="location"></span>
					</div>
				</div>
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



