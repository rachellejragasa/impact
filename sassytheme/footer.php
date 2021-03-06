  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l2 s12">
          <h5 class="white-text">Impact Dance</h5>
          <?php
            if(is_active_sidebar('footer-sidebar-1'))
            {
              dynamic_sidebar('footer-sidebar-1');
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
        <div class="col l6 s12">
            <h5 class="white-text">Around the web</h5>
            <ul class="social-media">
              <li>
                <a href="https://www.facebook.com/Impact-Youth-Dance-Company-1912612922144724/">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/Impact_Dance1">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/impactdanceyouth/">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCYU7ImEBHKrQCWYGdzoT4aQ">
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