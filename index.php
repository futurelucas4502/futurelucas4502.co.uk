<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
<link rel="preload" href="./images/background.webp" as="image">
<link rel="preload" href="./images/background2.webp" as="image">
<!-- <link rel="preload" href="./images/background3.webp" as="image"> -->
</head>
<body>
<div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mainCarousel" data-slide-to="1"></li>
    <!-- <li data-target="#mainCarousel" data-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner">
  <div class="progressBar"></div>
    <div class="carousel-item active">
      <div class="hero-image1 hero-image"></div>
		<div class="carousel-caption d-none d-md-block">
    		<h5>Desktop Management Console</h5>
    		<p>Made: 2019-Current</p>
  		</div>
    </div>
    <div class="carousel-item">
		<div class="hero-image2 hero-image"></div>
    <div class="carousel-caption d-none d-md-block">
    		<h5>Mobile Management Console</h5>
    		<p>Made: 2020-Current</p>
  		</div>
    </div>
    <!-- <div class="carousel-item">
        <div class="hero-image3 hero-image"></div>
        <div class="carousel-caption d-none d-md-block">
    		<h5>Something...</h5>
    		<p>Made: unknown</p>
  		</div>
	</div> -->
	<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>
<div style="z-index:1" class="main-text d-none d-sm-block">
  <div class="col-md-12 text-center">
    <h1>Welcome to Lucas Wilson's Website/Portfolio</h1>
    <p>This website will be used to display my work and skills as a programmer/developer</p>
    <div class="">
			<a class="btn btn-clear btn-sm btn-min-block" href="#about">About me</a>
			<a class="btn btn-clear btn-sm btn-min-block" href="#contact">Contact me</a>
		</div>
  </div>
</div>
<?php include 'header.php';?>
<main class="text-center">
<h1>Welcome to my Portfolio!</h1>
<h5>To see examples of my work see <a href="https://futurelucas4502.github.io">here</a></h5>
</main>
<?php include "footer.php"?>
</body>
</html>