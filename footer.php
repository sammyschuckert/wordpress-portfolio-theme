
    <!-- Footer Section -->
    <footer id="contact" class="content-section">
    <div class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-2"> 
              <h3>Contact</h3>
          </div>
          <div class="col-xs-12 col-sm-10"> 
              <div class="row contact-link">
                <div class="col-xs-12 col-sm-10">
                <table class="table table-condensed">
                <tbody>
                <tr>
                  <th class="icon"><i class="fa fa-paper-plane fa-lg"></i></th> 
                   <td class="link"><a href="mailto:me@sammyschuckert.de">me@sammyschuckert.de</a></td>
                    </tr>
          
                 <tr class="abstand">
                  <th class="icon"><i class="fa fa-twitter fa-lg"></i></th>
                   <td class="link"><a href="http://twitter.com/sammyschuckert" target="_blank">twitter.com/sammyschuckert</a></td>
                   </tr>
          
              <tr class="abstand">
                  <th class="icon"><i class="fa fa-facebook fa-lg"></i></th>
                   <td class="link"><a href="http://facebook.com/sammy.schuckert" target="_blank">facebook.com/sammy.schuckert</a></td>
                   </tr>
                <tr class="abstand">

                  <th class="icon"><i class="fa fa-behance fa-lg"></i></th>
                   <td class="link"><a href="http://behance.net/sammyschuckert" target="_blank">behance.net/sammyschuckert</a></td>
                </tr>
               <tr class="abstand">
                  <th class="icon"><i class="fa fa-xing fa-lg"></i></th>
                   <td class="link"><a href="http://xing.com/profile/sammy_schuckert" target="_blank">xing.com/profile/sammy_schuckert</a></td>
                </tr>
               <tr class="abstand">
                  <th class="icon"><i class="fa fa-linkedin fa-lg"></i></th>
                   <td class="link"><a href="http://linkedin.com/in/sammyschuckert" target="_blank">linkedin.com/in/sammyschuckert</a></td>
                </tr>
                  </tbody>
                   </table>
                </div>
              </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 credit">
              <p>&copy; <?php echo date('Y'); ?> crafted with <i class="fa fa-heart fa-fw"></i> by <a href="mailto:me@sammyschuckert.de">Sammy Schuckert</a>. All rights reserved. <a href="/imprint/">Imprint</a>. <a href="/privacy-policy/">Privacy Policy</a>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 credit">
              <p>I've made my theme publicly available under the GNU General Public License Version 3 on <a href="https://github.com/sammyschuckert/wordpress-portfolio-theme" target="_blank">GitHub</a>.<p>
            </div>
      </div><!-- /container -->
      </div>
    </footer>

    <!-- Footer -->

    <!-- jQuery -->
    <script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/main.js"></script> <!-- Resource jQuery -->

    <!-- Bootstrap JavaScript -->
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="<?php bloginfo('template_url');?>/js/javascript.js"></script>

<!-- Load Social Popup -->
<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
</script>

<!-- Google Analytics -->
<script>
var gaProperty = 'UA-67834854-1';
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
  window[disableStr] = true;
}
function gaOptout() {
  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
  window[disableStr] = true;
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67834854-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>   
<!-- Google Analytics Ende-->

</body>

</html>
