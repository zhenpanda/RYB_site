<?php
require_once('content/header.inc'); 
?>

<div class="hidden-xs">
<!-- Desktop Tablets display hidden on mobile display -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="logo" href="/"><img src="/images/homepage_img_folder/logo.png" alt="logo" /></a>
      </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="ryb-navbar">
          <ul class="nav navbar-nav">
            <?php foreach($header_links as $count => $link): ?>
              <li><a href="/<?=$link ?>"><?=$header_titles[$language][$count]?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
  </nav>
</div>

<div class="visible-xs hidden-sm hidden-md hidden-lg">
<!-- Mobile display hidden on desktop display-->
  <nav class="navbar navbar-moblie" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#ryb-navbar-mobile">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="mobile-logo pull-right" href="#">
          <img src="images/mobile Img Folder/mobile-logo.png" alt="logo" />
        </a>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ryb-navbar-mobile">
      <ul class="nav navbar-nav">
        <?php foreach($header_links as $count => $link): ?>
          <li><a href="/<?=$link ?>"><?=$header_titles[$language][$count]?></a></li>
        <?php endforeach; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
</div>