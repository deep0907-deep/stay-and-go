<!--FOOTER-->
<footer class="footer-sky">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <div class="icon-email">
                        <a href="#" title="Email"><img src="images/Home-1/footer-top-icon-l.png" alt="Email"
                                class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5">
                    <div class="textbox">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your email address"
                                        aria-label="Search for...">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="ion-android-send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 text-right">
                    <div class="footer-icon-l">
                        <a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" title="Tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a href="#" title="Isnstagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /footer-top -->
    <div class="footer-mid">
        <div class="container">
            <div class="row padding-footer-mid">
                <div class="col-12">
                    <div class="footer-logo text-center list-content">
                        <a href="index.php" title="Skyline"><img src="images/logo.png" alt="Image"></a>
                    </div>
                </div>

            </div>
            <div class="footer-bottom">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                    Copyright © 2024 by <a href="#" title="">EngoTheme.</a> Stay N go Hotel Theme crafted with love
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                    <div class="payments text-right">
                        <ul>
                            <li>
                                <a href="#" title="Paypal"><img src="images/Home-1/Paypal.png" alt="Paypal"></a>
                            </li>
                            <li>
                                <a href="#" title="Visa"><img src="images/Home-1/Visa.png" alt="Visa"></a>
                            </li>
                            <li>
                                <a href="#" title="Master"><img src="images/Home-1/Master-card.png" alt="Master"></a>
                            </li>
                            <li>
                                <a href="#" title="Discover"><img src="images/Home-1/Discover.png" alt="Discover"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END / FOOTER-->
<!--SCOLL TOP-->
<a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--END / SROLL TOP-->
<!-- LOAD JQUERY -->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vit-gallery.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.min.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/jquery.littlelightbox.js"></script>
<script type="text/javascript"
    src="../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="js/sky.js"></script>

<script>
    jQuery(document).ready(function ($) {
        var bookingDetails = {
            roomType: '',
            name: '',
            phone: '',
            checkin: '',
            checkout: '',
            budget: '',
            payment: '',
            idProof: ''
        };
        var step = 0;

        jQuery(document).on('click', '.iconInner', function (e) {
            jQuery(this).parents('.botIcon').addClass('showBotSubject');
            $("[name='msg']").focus();
        });

        jQuery(document).on('click', '.closeBtn, .chat_close_icon', function (e) {
            jQuery(this).parents('.botIcon').removeClass('showBotSubject');
            jQuery(this).parents('.botIcon').removeClass('showMessenger');
        });

        jQuery(document).on('submit', '#botSubject', function (e) {
            e.preventDefault();

            jQuery(this).parents('.botIcon').removeClass('showBotSubject');
            jQuery(this).parents('.botIcon').addClass('showMessenger');
        });

        /* Chatbot Code */
        $(document).on("submit", "#messenger", function (e) {
            e.preventDefault();

            var val = $("[name=msg]").val().toLowerCase();
            var mainval = $("[name=msg]").val().trim();
            nowtime = new Date();
            nowhoue = nowtime.getHours();

            function userMsg(msg) {
                $('.Messages_list').append('<div class="msg user"><span class="avtr"><figure style="background-image: url(https://mrseankumar25.github.io/Sandeep-Kumar-Frontend-Developer-UI-Specialist/images/avatar.png)"></figure></span><span class="responsText">' + msg + '</span></div>');
            };
            function appendMsg(msg) {
                $('.Messages_list').append('<div class="msg"><span class="avtr"><figure style="background-image: url(https://mrseankumar25.github.io/Sandeep-Kumar-Frontend-Developer-UI-Specialist/images/avatar.png)"></figure></span><span class="responsText">' + msg + '</span></div>');
                $("[name='msg']").val("");
            };

            userMsg(mainval);

            if (step === 0) {
                if (val.indexOf("book a room") > -1 || val.indexOf("reserve a room") > -1 || val.indexOf("room booking") > -1) {
                    appendMsg("We have the following rooms available:");
                    appendMsg("1. Family Room: $5000 per day");
                    appendMsg("2. Deluxe Room: $10000 per day");
                    appendMsg("3. Luxury Room: $15000 per day");
                    appendMsg("Which room would you like to book?");
                    step++;
                } else {
                    appendMsg("Hi! How can I assist you today?");
                }
            } else if (step === 1) {
                if (mainval.match(/(family|deluxe|luxury)/i)) {
                    bookingDetails.roomType = mainval;
                    appendMsg("Great choice! Please provide your name.");
                    step++;
                } else {
                    appendMsg("Please choose a valid room type: Family Room, Deluxe Room, or Luxury Room.");
                }
            } else if (step === 2) {
                bookingDetails.name = mainval;
                appendMsg("Thanks, " + bookingDetails.name + "! Could you provide your phone number?");
                step++;
            } else if (step === 3) {
                bookingDetails.phone = mainval;
                appendMsg("Got it. What is your check-in date? (Format: YYYY-MM-DD)");
                step++;
            } else if (step === 4) {
                bookingDetails.checkin = mainval;
                appendMsg("And what is your check-out date? (Format: YYYY-MM-DD)");
                step++;
            } else if (step === 5) {
                bookingDetails.checkout = mainval;
                appendMsg("What is your preferred payment method? (e.g., Credit Card, Debit Card, PayPal)");
                step++;
            } else if (step === 6) {
                bookingDetails.payment = mainval;
                appendMsg("Please provide your ID proof (e.g., Passport, Driver's License).");
                step++;
            } else if (step === 7) {
                bookingDetails.idProof = mainval;
                appendMsg("Thank you for providing the details. Here is a summary of your booking:");
                appendMsg("Room Type: " + bookingDetails.roomType);
                appendMsg("Name: " + bookingDetails.name);
                appendMsg("Phone: " + bookingDetails.phone);
                appendMsg("Check-in Date: " + bookingDetails.checkin);
                appendMsg("Check-out Date: " + bookingDetails.checkout);
                appendMsg("Payment Method: " + bookingDetails.payment);
                appendMsg("ID Proof: " + bookingDetails.idProof);
                appendMsg("Is everything correct? (yes/no)");
                step++;
            } else if (step === 8) {
                if (val.indexOf("yes") > -1) {
                    appendMsg("Thank you! Your booking has been confirmed. We look forward to welcoming you at Stay_N_Go.");
                    saybye();
                    step = 0;
                } else {
                    appendMsg("Let's start over. Which room would you like to book?");
                    step = 1;
                }
            } else {
                appendMsg("I'm sorry, I didn't understand that. Can you please provide more details or ask another question?");
            }

            function saybye() {
                if (nowhoue <= 10) {
                    appendMsg("Have a nice day! :)");
                } else if (nowhoue >= 11 && nowhoue <= 20) {
                    appendMsg("Goodbye!");
                } else {
                    appendMsg("Good night!");
                }
            }

            var lastMsg = $('.Messages_list').find('.msg').last().offset().top;
            $('.Messages').animate({ scrollTop: lastMsg }, 'slow');
        });
        /* Chatbot Code */
    })

</script>
</body>

</html>