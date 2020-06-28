<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php'; ?>
  <link rel="preload" href="/images/background.webp" as="image">
  <link rel="preload" href="/images/background2.webp" as="image">
  <!-- <link rel="preload" href="./images/background3.webp" as="image"> -->
</head>

<body>
  <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators d-flex">
      <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mainCarousel" data-slide-to="1"></li>
      <!-- <li data-target="#mainCarousel" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="progressBar"></div>
      <div class="carousel-item active">
        <div class="hero-image1 hero-image"></div>
        <div class="carousel-caption">
          <h5>Desktop Management Console</h5>
          <p>Made: 2019-Current</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="hero-image2 hero-image"></div>
        <div class="carousel-caption">
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
  <div style="z-index:1" class="main-text">
    <div class="col-md-12 text-center">
      <h1>Lucas Wilson's Portfolio</h1>
      <p>This website will be used to display my work and skills as a developer</p>
      <div class="col">
        <a class="btn btn-clear btn-sm btn-min-block" href="#about">About me</a>
        <a class="btn btn-clear btn-sm btn-min-block" href="#contact">Contact me</a>
      </div>
    </div>
  </div>
  <?php include 'header.php' ?>
  <main class="text-center">
    <h1>Welcome to my Portfolio!</h1>
    <h5>To see examples of my work see <a href="https://futurelucas4502.github.io">here</a></h5>
    <div id="about" class="mb-5"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm" style="margin:30px 0px">
          <!-- Left -->
          <div class="card">
            <div class="card-img-top">
              <img src="https://media-exp1.licdn.com/dms/image/C5603AQHKcnR3jcuzfg/profile-displayphoto-shrink_200_200/0?e=1598486400&amp;v=beta&amp;t=2JiJUFlkN0gYqmgtuBEvYJ2_gK77z4g90Vlzxop88bg" class="shadow-lg" alt="Image of Lucas Wilson">
            </div>
            <div class="card-body">
              <h5 class="card-title">Hi there! I'm Lucas Wilson a junior developer.</h5>
              <p class="card-text">I freelance making websites, mobile apps and desktop applications!</p>
            </div>
          </div>
        </div>
        <div class="col-sm" style="margin:30px 0px">
          <!-- Right -->
          <div class="card bg-primary text-white text-center p-3">
            <p class="mb-0">I have an A Level in Computer Science and a Level 3 National Extended Diploma in IT and have created many bespoke apps and websites so I know what I'm doing.</p>
          </div>
        </div>
      </div>
    </div>



    <!-- Template code: -->

    <!-- <div class="card-columns">  
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hi there! I'm Lucas Wilson a developer.</h5>
      <p class="card-text">I freelance making websites, mobile/desktop applications and more!</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>I have an A Level in Computer Science and a Level 3 National Extended Diploma in IT so I know what I'm doing.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>I have an A Level in Computer Science and a Level 3 National Extended Diploma in IT so I know what I'm doing.</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> -->
  </main>
  <?php include "footer.php" ?>
</body>

</html>