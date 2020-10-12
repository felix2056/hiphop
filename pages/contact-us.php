<?php include_once('../includes/header.php'); ?>

<div id="site-wrapper">
    <div id="site-canvas" class="snappy">
        <?php include_once('../includes/nav.php'); ?>

        <nav id="breadcrumb" class="navbar navbar-static-top navigation-default">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="homepage-link">
                        <a href="https://hiphop-1304.myshopify.com" title="Back to the frontpage">Home</a>
                    </li>

                    <li class="current">
                        <a href="#">Contact us</a>
                    </li>
                </ol>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div id="main" role="main" class="col-sm-6">

                    <h1>Contact us</h1>


                    <div class="rte">
                        <p><strong>GET IN TOUCH.</strong></p>
                        <p>Have a question, or you simply want an update on your order?</p>
                        <p>Feel free to&nbsp;drop us an email.&nbsp;We're always happy to help!</p>
                        <p>Our hours are Mon - Sat, 9am - 6.30pm EST. We aim to respond to most emails within 24-48
                            business hours (if you&nbsp;have not received&nbsp;a response from us after then, please
                            check your spam bin.)</p>
                    </div>
                </div>

                <div class="col-sm-6 contact-form-wrap">


                    <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                        class="contact-form"><input type="hidden" name="form_type" value="contact"><input type="hidden"
                            name="utf8" value="✓">







                        <div class="form-group">
                            <label for="ContactFormName" class="hidden-label">Name</label>
                            <input type="text" id="ContactFormName" class="form-control" name="contact[name]"
                                placeholder="Name" autocapitalize="words" value="">
                        </div>

                        <div class="form-group">
                            <label for="ContactFormEmail" class="hidden-label">Email</label>
                            <input type="email" id="ContactFormEmail" class="form-control" name="contact[email]"
                                placeholder="Email" autocorrect="off" autocapitalize="off" value="">
                        </div>


                        <div class="form-group">
                            <label for="ContactFormPhone" class="hidden-label">Phone Number</label>
                            <input type="tel" id="ContactFormPhone" class="form-control" name="contact[phone-number]"
                                placeholder="Phone Number" pattern="[0-9\-]*" value="">
                        </div>

                        <div class="form-group">
                            <label for="ContactFormMessage" class="hidden-label">Message</label>
                            <textarea rows="10" id="ContactFormMessage" class="form-control" name="contact[body]"
                                placeholder="Message"></textarea>
                        </div>

                        <input type="submit" class="btn btn-default" value="Send">

                        <input name="recaptcha-v3-token" type="hidden"
                            value="03AGdBq245e88YrMI5X9kWh7NZ9muXuF7tyENQNTPPYt8Oqu0Xr_Rf6rh4T0pQ7-UKWR85IbCQtEiWAyOsJtLpYIqFi2dHfu4KbVFdRofPccKJ_1fPEJRAkneSIHdhgNkNo3KeXzGLSTOsVhQDwqQUcag_tq0RntCD6Tiv-YERg739kgsklqzJeCsUmKB3arazIy8pbwmsGlJvpcrdV4cg8Z_4YMUcJY7kdhEAeJKw512IfZoP8tJRyylk1s2tHJfQ76UVQ7OPbXTSf4iQAv8ZJ11E9svdMW8xRfFamRjM1sSPU_xw8jSC_bZ3vybnKaqlMwpNnFyf7gNi4-EIFa2CbtTQk8xI1e3njVcyBQNvAe3euJsqraoa1i3wpJoy-PB3vAnFiRZ11V_3Fj42rYuakt3GBwXCj0V_0UptsAVc2JeOFoNF5wFdeRWIVCwy321ttqkiUOHEXEbuQAELIjD1tJ9kHbAS5628Mw">
                    </form>
                </div>

            </div>
        </div>

        <?php include_once('../includes/footer.php'); ?>
    </div>
</div>