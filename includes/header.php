<?php
require_once('content/header.inc'); 
?>

<nav class="navbar navbar-default" role="navigation">

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ryb-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="logo" href="#">
      	<img src="images/logoFull2.png" alt="logo" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ryb-navbar">
      <ul class="nav navbar-nav">
        <?php foreach($header_links as $count => $link): ?>
          <li><a href="/<?=$link ?>"><?=$header_titles[$language][$count]?></a></li>
        <?php endforeach; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>