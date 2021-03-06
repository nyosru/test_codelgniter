<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ("in_head.php"); ?>

        <title>Welcome to CodeIgniter</title>

    </head>
    <body>

        <?php include ("header.php"); ?>

        <div class="container">

            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Страница welcome</h1>
                <p class="lead">Это тестовый сайт построенный на CodeIgniter 3</p>
                <p>репозиторий с кодом на гите <a href="https://github.com/nyosru/test_codelgniter.git" >https://github.com/nyosru/test_codelgniter.git</a></p>
                <p class="lead">+ Маршрутизация и странички</p>
            </div>

            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
<!--                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>-->
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
<!--                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>-->
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
<!--                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>-->
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">

                    <h1>Welcome to CodeIgniter!</h1>

                    <div id="body">
                        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

                        <p>If you would like to edit this page you'll find it located at:</p>
                        <code>application/views/welcome_message.php</code>

                        <p>The corresponding controller for this page is found at:</p>
                        <code>application/controllers/Welcome.php</code>

                        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
                    </div>

                    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
                </div>
            </div>

        </div>
    </div>


    <?php include ("footer.php"); ?>

</body>

<?php include ("footer_script.php"); ?>

</html>