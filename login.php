<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>
  <br /><br />
  <div class="container">
    <!-- Main component for a primary message or call to action -->
    	<div class="row">
    		<div class="col-md-6 col-md-offset-2">

          <div class="form-group">
            <input class="form-control" value="+1" id="country_code" class="form-control" />
          </div>

          <div class="form-group">
            <input class="form-control" placeholder="phone number" id="phone_number"/>
            <button class="btn btn-primary" onclick="smsLogin();">Login via SMS</button>
          </div>

          <div class="form-group">
            <div class="lead">OR</div>
          </div>

          <div class="form-group">
            <input class="form-control" placeholder="email" id="email"/>
            <button class="btn btn-primary" onclick="emailLogin();">Login via Email</button>
          </div>
          
    		</div>
    	</div>

  </div> <!-- /container -->
<?php include ('includes/foot-section.php'); ?>