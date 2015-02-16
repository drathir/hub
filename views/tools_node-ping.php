<?php
require('../inc/autoload.php');
$page = 'Nodes';

$error = false;
$error_msg = null;
$page = isset($_GET['page']) ? filter_var($_GET['page'], FILTER_VALIDATE_INT, $page_options) : 1;
$ip = (isset($_POST['ip'])) ? filter_var($_POST['ip']) : false;
if(isset($_POST['ip'])) { 
	if(strlen($ip) !== 39 OR substr($ip, 0,2) !== 'fc') {
	$error = true;
	$error_msg = 'Invalid IP Address';
	}
	$capi = new Cjdns("s2qqqmu0xw3941ufybg936c2u4vfzlb");
	$resp = array('latency'=>$capi->call("RouterModule_pingNode",array("path"=>$ip, "timeout"=>20000))['ms'].' ms');
	$ping = json_encode($resp, JSON_PRETTY_PRINT);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/favicon.ico">
<title><?=$page?> - Hub</title>
<?=$template->getCss('default')?>

</head>
<body role="document">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/"><?=appName?></a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<?=$template->getNav(null,$page, null)?>
</ul>
</div>
</div>
</div>
<div class="promo promo-nodes">
<div class="container">
<div class="text-center">
<h1>Node Tools</h1>
<p class="lead">Ping node.</p>
</div>
</div>
</div>
<div class="container" role="main">
<div class="col-xs-12 col-md-8 col-md-offset-2" style="padding:40px 0;">
<?php if($error === true) { ?>
<p class="text-danger lead"><?=htmlentities($error_msg)?></p>
<?php } ?>
<form method="POST" class="form-horizontal">
<div class="form-group">
<label class="col-sm-3 control-label">IP</label>
<div class="col-sm-9">
<input class="form-control" placeholder="fc01:..." value="" type="text" name="ip" />
</div>
</div>
<hr>
<div class="form-group text-center">
<button class="btn btn-success" type="submit">Submit</button>
</div>
</form>
<hr>
<?php if($ip !== false) { ?>
<div>
<div class="page-header"><h3>RouterModule_pingNode() Results:</h3></div>
<pre><?=$ping?></pre>
</div>
<?php } ?>
</div>
</div>
<?=$template->getJs('default')?>
</body>
</html>