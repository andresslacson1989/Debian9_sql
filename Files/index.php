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
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="https://phcyber.com">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="https://phcyber.com/support/">Contact Us</a>
	  </li>
	</ul>
</div>

<div class="container" id="main-content">
	<h2>PhCyber DEV Team</h2>
	<p>VPN Server</p>

	<p>Contact PhCyber Dev Team for more info about setting up your own VPN and VPN Server.
	<br> Official Website: <a href="https://phcyber.com">www.phcyber.com</a>
	<br> Official Discord Server: <a href="https://phcyber.com">https://discord.gg/urjvh5f</a>
	</p>
	
</div>

<div class="footer">
	&copy; <?php print date("Y");?>
</div>

</body>
</html>
