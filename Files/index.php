<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "VPN SERVER!";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" /> 
<?php } ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
	#main-content {
		margin-top:20px;
	}
	.footer {
		font-size: 14px;
		text-align: center;
	}
</style>
</head>
<body>

<div class="jumbotron">
	<h1>VPN SERVER</h1>
</div>
<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	
	</ul>
</div>

<div class="container" id="main-content">
	<h2>Wifitunnel DEV Team</h2>
	<p>VPN Server</p>

	<p>Wifitunnel VPN Official Server.
	<br>Email: <a href="mailto:wifitunnel1@gmail.com">wifitunnel1@gmail.com</a><br> 
	</p>
	
</div>

<div class="footer">
	&copy; <?php print date("Y");?>
	<br> Developer: <a href="https://phcyber.com">Cyber</a>
	<br> Copyright 2019
</div>

</body>
</html>
