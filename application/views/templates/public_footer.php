<!-- ==========Newslater-Section========== -->
<footer class="footer-section">
    <div class="newslater-section padding-bottom">
        <div class="container">
            <div class="newslater-container bg_img" data-background="<?php echo base_url() ?>publicassets/images/newslater/newslater-bg01.jpg">
                <div class="newslater-wrapper">
                    <h5 class="cate">subscribe to Etcinema </h5>
                    <h3 class="title">to get exclusive benifits</h3>
                    
                    <form action="subscribe" method="POST" class="newslater-form">
                        <input type="text" name="email" placeholder="Your Email Address">
                        <button type="submit">subscribe</button>
                    </form>
                    <div class="text-danger">
                            <?php echo form_error('email'); ?>
                        </div>
                    <p>We respect your privacy, so we never share your info</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="logo">
                <a href="home">
                    <img src="<?php echo base_url() ?>publicassets/images/footer/footer-logo.png" alt="footer">
                </a>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="#0" class="text-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#0" class="active">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-area">
                <div class="left">
                    <p>&copy;<?php echo date("Y"); ?>.All Rights Reserved By <a href="<?php echo base_url() ?>publicpages">Etcinema </a></p>
                </div>
                <ul class="links">
                    <li>
                        <a href="#0">About</a>
                    </li>
                    <li>
                        <a href="#0">Terms Of Use</a>
                    </li>
                    <li>
                        <a href="#0">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#0">FAQ</a>
                    </li>
                    <li>
                        <a href="#0">Feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ==========Newslater-Section========== -->
<script src="<?php echo base_url() ?>publicassets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/modernizr-3.6.0.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/plugins.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/heandline.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/wow.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/countdown.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/odometer.min.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/viewport.jquery.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/nice-select.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/all.js"></script>
<script src="<?php echo base_url() ?>publicassets/js/main.js"></script>
</body>

</html>