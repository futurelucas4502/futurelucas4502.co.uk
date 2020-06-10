<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/picturefill.min.js"></script>
<script type="text/javascript" src="./js/modernizr-3.6.0-webp-setclasses.js"></script>
<script type="text/javascript" src="./index.js"></script>
<script>
    Modernizr.on('webp', function (result) {
        if (result) {
            // supported
        } else {
            // not-supported
        }
    });
</script>

<footer class="site-footer">
<div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">My name is Lucas Wilson and futurelucas4502.co.uk is a website designed to show my current and previous work to potential employees or clients. I can currently program using: VB.net, Node.js, Express.js, Electron.js (macOS, Windows, Linux), PHP, Flutter (Android, iOS, Websites, macOS, Windows & Linux support coming soon), HTML, CSS, JS, MySQL, Python, AutoIT 3, Jekyll and Unreal Engine 4.
            </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="">Electron.js</a></li>
              <li><a href="">Flutter</a></li>
              <li><a href="">PHP</a></li>
              <li><a href="">Express.js</a></li>
              <li><a href="">Jekyll</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="./index#about">About Me</a></li>
              <li><a href="./index#contact">Contact Me</a></li>
              <li><a href="./contribute">Contribute</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">&copy; <?php echo date("Y") ?> Lucas Wilson.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="github" href="https://github.com/futurelucas4502"><i class="fab fa-github"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>