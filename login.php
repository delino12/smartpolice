<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>
  <br /><br /><br /><br />

  <div class="container">
    <!-- Main component for a primary message or call to action -->
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
          <!-- <form id="login_success" method="post" action="/login_success.php"> -->
            <input id="csrf" type="hidden" name="csrf" />
            <input id="code" type="hidden" name="code" />
            <div class="form-group">
              <input class="form-control" value="+1" id="country_code" class="form-control" />
            </div>

            <div class="form-group">
              <input class="form-control" placeholder="phone number" id="phone_number"/>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" onclick="smsLogin();">Login via SMS</button>
            </div>

            <div class="form-group">
              <div class="lead">OR</div>
            </div>

            <div class="form-group">
              <input class="form-control" placeholder="email" id="email"/>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" onclick="emailLogin();">Login via Email</button>
            </div>
          <!-- </form> -->
    	</divs>
    </div>
  </div> <!-- /container -->



    <script>
      // initialize Account Kit with CSRF protection
      AccountKit_OnInteractive = function(){
        AccountKit.init(
          {
            appId:'363224617437206', 
            state:"smartpolicetoken", 
            version:"v1.0",
            fbAppEventsEnabled:true,
            redirect:"https://smart-police.herokuapp.com/login.php"
          }
        );
      };

      // login callback
      function loginCallback(response) {
        if (response.status === "PARTIALLY_AUTHENTICATED") {
          var code = response.code;
          var csrf = response.state;
          // Send code to server to exchange for access token
          console.log(code);
        }
        else if (response.status === "NOT_AUTHENTICATED") {
          // handle authentication failure
          console.log('fail to authenticate');
        }
        else if (response.status === "BAD_PARAMS") {
          // handle bad parameters
          console.log('bad parameters injected');
        }
      }

      // phone form submission handler
      function smsLogin() {
        var countryCode = document.getElementById("country_code").value;
        var phoneNumber = document.getElementById("phone_number").value;
        AccountKit.login(
          'PHONE', 
          {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
          loginCallback
        );
      }


      // email form submission handler
      function emailLogin() {
        var emailAddress = document.getElementById("email").value;
        AccountKit.login(
          'EMAIL',
          {emailAddress: emailAddress},
          loginCallback
        );
      }
    </script>

        
<?php include ('includes/foot-section.php'); ?>