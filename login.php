<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>
  <div class="container">
    <!-- Main component for a primary message or call to action -->
    <div class="jumbotron">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-2">
          <input value="+1" id="country_code" />
          <input placeholder="phone number" id="phone_number"/>
          <button onclick="smsLogin();">Login via SMS</button>
          <div>OR</div>
          <input placeholder="email" id="email"/>
          <button onclick="emailLogin();">Login via Email</button>
    		</div>
    	</div>
    </div>
  </div> <!-- /container -->
<?php include ('includes/foot-section.php'); ?>