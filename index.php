<?php
require('inc/autoload.php');
$page = 'Home';

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
    <?=$template->getCss()?>
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
            <?=$template->getNav(null, $page, null)?>
          </ul>
        </div>
      </div>
    </div>
    <div class="promo" style="margin-top:-5px;height:240px;">
      <div class="container">
        <div class="text-center">
          <h1>Peer Insight</h1>
          <p class="lead">Hub is a network information utility for Hyperboria.</p>
        </div>
      </div>
    </div>

    <div class="container" style="padding-top:40px;" role="main">
      <div class="row">
        <div class="page-header">
          <p class="lead text-center">We leverage the cjdns admin API to give context and insight into the Hyperboria network in an accessible and easy to use website.</p>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="panel panel-warning text-center">
            <div class="panel-heading">
              <h4>Nodes</h4>
            </div>
            <div class="panel-body">
              <ul class="text-left">
                <li>Node Info Directory</li>
                <li>Detailed node info, stats and more</li>
                <li>Add/Edit your node</li>
              </ul>
              <p><a href="/node/browse" class="btn btn-default">Nodes</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h4>People</h4>
            </div>
            <div class="panel-body">
              <ul class="text-left">
                <li>Human Directory</li>
                <li>PGP, Social Directory</li>
                <li>Add/Edit your profile</li>
              </ul>
              <p class="text-muted small">Coming Soon!</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="panel panel-success text-center">
            <div class="panel-heading">
              <h4>Services</h4>
            </div>
            <div class="panel-body">
              <ul class="text-left">
                <li>Services Directory</li>
                <li>Public irc servers, web servers, mail servers</li>
                <li>Add/Edit your service</li>
              </ul>
              <p><a href="/services" class="btn btn-default">Services</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?=$template->getJs('basic')?>
  </body>
</html>