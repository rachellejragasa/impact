<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l3 s12">
          <h5 class="white-text">Impact Dance</h5>
          <?php
            if(is_active_sidebar('footer-sidebar-1'))
            {
              dynamic_sidebar('footer-sidebar-1');
            }
          ?>
        </div>
        <div class="col l5 s12">
          <h5 class="white-text">Join our mailing list</h5>
          <?php
            if(is_active_sidebar('footer-sidebar-2'))
            {
              dynamic_sidebar('footer-sidebar-2');
            }
          ?>
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Connect</h5>
          <?php
            if(is_active_sidebar('footer-sidebar-3'))
            {
              dynamic_sidebar('footer-sidebar-3');
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col l12 s12">
            <h5 class="white-text">Around the web</h5>
            <ul class="social-media">
              <li>
                <a href="https://www.facebook.com/The-Official-Impact-Dance-Company-1411144122532026/?fref=ts">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/Impact_Dance1">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/officialimpactdance/">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCr4xY6cBvlJjRUp2S_rANzg">
                  <i class="fa fa-fw fa-youtube"></i>
                </a>
              </li>
            </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <p class="center">Copyright © Impact 2017</p>
      </div>
    </div>
  </footer>
  </div>
