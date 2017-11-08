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
      document.getElementById("scene-set").style.display = 'block';
      document.getElementById("welcome-div").style.display = 'none';
      document.getElementById("fb-btn").style.display = 'none';
      document.getElementById("logout").style.display = 'block';

      $("#report-btn").click(function (e){
        e.preventDefault()

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
      });

      
    }else{
      document.getElementById("dashboard").style.display = 'none';
      document.getElementById("scene-set").style.display = 'none';
      document.getElementById("welcome-div").style.display = 'block';
      document.getElementById("fb-btn").style.display = 'block';
      document.getElementById("logout").style.display = 'none';
    }
  }