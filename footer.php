<!-- section begin -->
            <section id="logo-full">
                <div class="container">
                    <!-- logo carousel -->
                    <div class="row">
                        <div class="logo-carousel">
                            <ul id="logo-carousel" class="slides">
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/1.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/2.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/3.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/4.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/5.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/6.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/7.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-2">
                                        <img src="<?php bloginfo('template_url')?>images/logo/8.png" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- logo carousel close -->
                    </div>

                </div>
            </section>
            <!-- section close -->
  <!-- section begin -->
            <section id="section-contact" class="dark" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="animated" data-animation="fadeInUp">Contact <span class="id-color">Us</span>
                                <span class="small-border animated" data-animation="fadeInUp"></span>
                            </h1>
                            <p class="animated" data-animation="fadeIn">
                                Get in touch with us. Feel Free to use contact below.
                            </p>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-8 animated" data-animation="fadeInUp" data-delay="200" data-speed="5">
                            <!--<form action='https://formspree.io/f/xeqnggep' class='ct-form contactForm' id='ct-form' method='post' name='contact-form'> -->
                            <form name="contactForm" id='contact_form' method="post"
                                action='https://formspree.io/f/xeqnggep'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='email' name='email' id='email' class="form-control"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control"
                                                placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                    <div id='mail_success' class='success'>Your message has been sent successfully.
                                    </div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your
                                        message.</div>
                                    <div class="col-md-12">
                                        <p id='submit'>
                                            <!--<input type='submit' id='send_message' value='Submit Form' class="btn btn-border"> -->
                                            <button class="btn post-btn"
                                                expr:id="data:widget.instanceId + &quot;_contact-form-submit&quot;"
                                                expr:value="data:contactFormSendMsg"
                                                style="color: black; text-decoration: none;" onclick:"validateForm();">
                                                Send Message
                                            </button>

                                        </p>
                                    </div>
                                </div>
                            </form>
                            <script>
                                function validateForm() {
                                    var nameInput = document.getElementById('name');
                                    var emailInput = document.getElementById('email');

                                    // Check if name and email are not empty
                                    if (nameInput.value.trim() === '' || emailInput.value.trim() === '') {
                                        alert('Name and Email are required!');
                                        return false;
                                    }

                                    // Check if the email format is valid
                                    if (!isValidEmail(emailInput.value)) {
                                        alert('Invalid email address!');
                                        return false;
                                    }

                                    // If all validations pass, you can submit the form or perform other actions
                                    alert('Form submitted successfully!');
                                }

                                function isValidEmail(email) {
                                    // Regular expression for a simple email validation
                                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                    return emailRegex.test(email);
                                }

                            </script>
                        </div>

                        <div class="col-md-4">
                            <address>
                                <span><i class="fa fa-map-marker fa-lg"></i>Shikh Baccu Tower, Tongi , Gazipur</span>
                                <span><i class="fa fa-phone fa-lg"></i>(208) 333 9296</span>
                                <span><i class="fa fa-envelope-o fa-lg"></i><a
                                        href="<?php bloginfo('template_url')?>/mailto:contact@cubic-studio.com">contact@Softdeft.com</a></span>
                                <span><i class="fa fa-globe fa-lg"></i><a href="<?php bloginfo('template_url')?>/#">www.softdeft.com</a></span>
                            </address>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close --> 
  <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="social-icons">
                                <a href="<?php bloginfo('template_url')?>/#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="<?php bloginfo('template_url')?>/#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="<?php bloginfo('template_url')?>/#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="<?php bloginfo('template_url')?>/#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="<?php bloginfo('template_url')?>/#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="<?php bloginfo('template_url')?>/#"><i class="fa fa-dribbble fa-lg"></i></a>
                            </div>
                            <div class="spacer-single"></div>
                            © Copyright 2023 - Softdeft
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer close -->
        </div>
    </div>


     <!-- Javascript Files
    ================================================== -->
    <script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jpreLoader.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/easing.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.ui.totop.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.scrollto.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.countTo.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/classie.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/video.resize.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/validation.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.stellar.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/designesia.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
</body>

<!-- Mirrored from www.madebydesignesia.com/themes/cubic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 03:39:14 GMT -->

</html>