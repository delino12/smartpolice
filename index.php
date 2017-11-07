<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>
  <br /><br /><br /><br />


<script>
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
  function statusChangeCallback(response)
  {
    if(response.status === 'connected'){
      console.log('login');
    }else{
      console.log('not logged in !');
    }
  }

  
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
</script>
  <div class="container">
    <!-- Main component for a primary message or call to action -->
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
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
  </div> <!-- /container -->
<?php include ('includes/foot-section.php'); ?>