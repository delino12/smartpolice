<!DOCTYPE html>
<html>
<head>
	<title>Smart Police | Login </title>
	<!-- Added Ajax for Javascript functions -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<!-- Added link for Style Sheet -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Account kit SDK -->
	<!-- HTTPS required. HTTP will give a 403 forbidden response -->
  	<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">

  	<style type="text/css">
  		.error{
			color: red;
		}

			.form-signin
		{
		    max-width: 330px;
		    padding: 15px;
		    margin: 0 auto;
		}
		.form-signin .form-signin-heading, .form-signin .checkbox
		{
		    margin-bottom: 10px;
		}
		.form-signin .checkbox
		{
		    font-weight: normal;
		}
		.form-signin .form-control
		{
		    position: relative;
		    font-size: 16px;
		    height: auto;
		    padding: 10px;
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;
		}
		.form-signin .form-control:focus
		{
		    z-index: 2;
		}
		.form-signin input[type="text"]
		{
		    margin-bottom: -1px;
		    border-bottom-left-radius: 0;
		    border-bottom-right-radius: 0;
		}
		.form-signin input[type="password"]
		{
		    margin-bottom: 10px;
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		}
		.account-wall
		{
		    margin-top: 20px;
		    padding: 40px 0px 20px 0px;
		    background-color: #f7f7f7;
		    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}
		.login-title
		{
		    color: #555;
		    font-size: 18px;
		    font-weight: 400;
		    display: block;
		}
		.profile-img
		{
		    width: 96px;
		    height: 96px;
		    margin: 0 auto 10px;
		    display: block;
		    -moz-border-radius: 50%;
		    -webkit-border-radius: 50%;
		    border-radius: 50%;
		}
		.need-help
		{
		    margin-top: 10px;
		}
		.new-account
		{
		    display: block;
		    margin-top: 10px;
		}
		body{
		    min-height:30em;background: url(smartpolice/images/action.jpg)no-repeat 0px 0px;background-size: cover;    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover;-ms-background-size: cover;background-attachment:fixed;
		}
  	</style>
</head>
<body>