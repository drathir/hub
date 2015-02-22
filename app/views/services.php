<?php 

$this->layout('template', ['title' => 'Services']);


include_once(__DIR__.'/../config/app.php');
include_once(__DIR__.'/../classes/Service.php');

$ip = (isset($_SERVER['REMOTE_ADDR'])) ? filter_var($_SERVER['REMOTE_ADDR']) : false;

?>

    <div class="promo promo-services">
      <div class="container">
        <div class="text-center">
          <h1>Services</h1>
          <p class="lead">Active services on the network.</p>
        </div>
      </div>
    </div>
<div class="container" role="main">
<div class="col-xs-12 col-md-8 col-md-offset-2 centered-pills" style="padding:40px 0;">
<ul class="nav nav-pills nav-pills-services">
  <li role="presentation" class="active"><a href="/services">All</a></li>
  <li role="presentation"><a href="/services/recent">Recently Added</a></li>
  <li role="presentation"><a href="/services/search">Search</a></li>
  <li role="presentation"><a href="/services/tags">Tags</a></li>
  <li role="presentation"><a href="/services/me">My Services</a></li>
  <li role="presentation"><a href="/services/add">Add New</a></li>
</ul>
<hr>
</div>
<div class="row">
<div class="col-xs-12 col-md-8 col-md-offset-2">
  <?= $service->getAll(1, 1) ?>
</div>
</div>

</div>

