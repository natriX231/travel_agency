<?php
include 'header.php';
?>
        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->

        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Our Location</h3>
                        <div class="map-holder"></div>
                        <div class="contact-infos">
                            <ul>
                                <li>987 Nay Yar Street, Analog Estate</li>
                                <li>Yangon 10440, Myanmar</li>
                                <li>Tel: 090-090-0880</li>
                                <li>Email: <a href="mailto:info@company.com">info@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                    <main>
    <h3 class="widget-title">Contact Us</h3>
    <div class="contact-form">
        <form name="contactform" id="contactform" action="" method="POST">
            <p>
                <input name="name" type="text" id="name" placeholder="Your Name" required>
            </p>
            <p>
                <input name="email" type="email" id="email" placeholder="Your Email" required>
            </p>
            <p>
                <input name="subject" type="text" id="subject" placeholder="Subject" required>
            </p>
            <p>
                <textarea name="message" id="message" placeholder="Message" required></textarea>
            </p>
            <input type="submit" class="mainBtn" id="submit" value="Send Message">
        </form>
    </div>
    <!-- form.php -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        echo "<p>Thank you, $name. Your message has been received.</p>";
    }
    ?>
</main>
                    </div>
                </div>
            </div>
        </div>

        <div class="partner-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner1.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner2.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner3.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner1.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/partner2.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item last">
                            <img src="images/partners/partner3.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->


<?php
include 'footer_contact.php'
?>