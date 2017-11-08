<?php include ('includes/head-section.php'); ?>
<?php include ('includes/menu-section.php'); ?>
<br /><br /><br /><br />

  <div class="container">
    <!-- Main component for a primary message or call to action -->
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
    			<div id="dashboard">
    				<button id="report-btn">Capture live scene</button>
            <div id="scene-set" style="display: none;">
              <video id="video" width="640" height="480" autoplay></video>
              <button id="snap">Recored</button>
              <canvas id="canvas" width="640" height="480"></canvas>
            </div>
        				
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