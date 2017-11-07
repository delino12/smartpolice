<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>
<br /><br /><br /><br />


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
	    }else{
	    	setElements(false);
	      	console.log('not logged in !');
	    }
	}

  	// check user logged in status
  	function checkLoginState() {
	    FB.getLoginStatus(function(response) {
	      statusChangeCallback(response);
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
  		document.getElementById("dashboard").style.display = 'none';
		  document.getElementById("welcome-div").style.display = 'block';
  		document.getElementById("fb-btn").style.display = 'block';
  		document.getElementById("logout").style.display = 'none';
  	}
  }
</script>
  <div class="container">
    <!-- Main component for a primary message or call to action -->
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
    			<div id="dashboard">
    				<h3>Capture live scene</h3>
    				<video id="video" width="640" height="480" autoplay></video>
					<button id="snap">Recored</button>
					<canvas id="canvas" width="640" height="480"></canvas>
    			</div>

    			<div id="welcome-div">
    				<h1 class="lead">Welcome to Smart Police Rescue</h1>
	    			<ul class="list-group">
	    				<li class="list-group-item">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
	    				<li class="list-group-item">Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
	    				<li class="list-group-item">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
	    				<li class="list-group-item">Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
	    			</ul>
    			</div>
    			
        	</div>
    	</div>
    </div>
  </div> <!-- /container -->
<?php include ('includes/foot-section.php'); ?>