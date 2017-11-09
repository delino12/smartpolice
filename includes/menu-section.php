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
                <li>
                    <a href="#" id="fb-btn">
                        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button> 
                        or Signup via Facebook
                    </a>
                </li>
                <li><span class="email"></span></li>
                <li><a href="#" onclick="logoutUser()" id="logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>