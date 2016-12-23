<?php

/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/


session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}

?>





<head>
        <meta charset="utf-8" />
        <title>MAXLLOYD ADMIN | LOG IN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/maxlloyd_1.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post" id="login-form">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <a href="pages-forget-password.html" class="text-muted pull-right font-14">Forgot your password?</a>
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                                            </div>
                                        </div>

                                        <div class="form-group m-b-30">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                                                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                                                    </button> 
                                            </div>
                                        </div>

                                    </form> 
									
									<!-- <form class="form-signin" method="post" id="login-form">
      
										<h2 class="form-signin-heading">ADMIN Log In</h2><hr />
										
										<div id="error">
										error will be shown here !
										</div>
										
										<div class="form-group">
										<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
										<span id="check-e"></span>
										</div>
										
										<div class="form-group">
										<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
										</div>
									   
										<hr />
										
										<div class="form-group">
											<button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
											<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
											</button> 
										</div>    
									  
									  </form>-->

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="pages-register.php" class="text-dark m-l-5" >Sign Up</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
			<div class="container" style="text-align: center;">
			<p>Copyright 2016, &nbsp; <span style="color:#00ffea; font-size: 15pt; font-weight: bold; text-shadow: 3px 2px 2px #7c7c7c;">MAXLLOYD TECHNOLOGIES SOLUTION</span></p>
			</div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>


		<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
		<script type="text/javascript" src="validation.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/simple/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2016 08:56:02 GMT -->
</html>






