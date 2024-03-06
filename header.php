<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Reallite</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>

    <style>
				a{
					font-family: sans-serif;
				}
        #navigation {
          background: white;
        }
        #header {
          background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,180,219,1) 35%, rgba(0,212,255,1) 100%);
        }
        #footer {
					margin-top: 400px;
					margin-left: 100px;
					margin-right: 100px;
					background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,180,219,1) 35%, rgba(0,212,255,1) 100%);
        	color: #1E1F29;
        }
        #bottom-footer {
					background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,180,219,1) 35%, rgba(0,212,255,1) 100%);
					color: white;
        }
        .footer-links li a {
          color: white;
        }
        .mainn-raised {

            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .glyphicon{
				    display: inline-block;
				    font: normal normal normal 14px/1 FontAwesome;
				    font-size: inherit;
				    text-rendering: auto;
				    -webkit-font-smoothing: antialiased;
				    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        		content:"\f053"
    }
    .glyphicon-chevron-right:before{
        		content:"\f054"
    }




        </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">

				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo" style="margin-top: 20px;">
								<img src="img/logo.png" alt="" width="40px" height="40px">
								<a href="#" class="logo" style="color: white;font-size: 20px;">
									Reallite Electronic Shop
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Lights</option>
										<option value="1">Appliances</option>
									</select>
									<input class="input" id="search" type="text" placeholder="Search here">
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<ul class="header-links pull-right">
									<li><a href="#"><span>Ksh.</span></a></li>
									<li><?php
			                             include "db.php";
			                            if(isset($_SESSION["uid"])){
			                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
			                                $query = mysqli_query($con,$sql);
			                                $row=mysqli_fetch_array($query);

			                                echo '
			                               <div class="dropdownn">
			                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
			                                  <div class="dropdownn-content">
			                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
			                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>

			                                  </div>
			                                </div>';

			                            }else{
			                                echo '
			                                <div class="dropdownn">
			                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
			                                  <div class="dropdownn-content">
			                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
			                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>

			                                  </div>
			                                </div>';

			                            }
			                                             ?>

			                                </li>
								</ul>

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">


										</div>

										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>

										</div>
									</div>

									</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation'>
			<!-- container -->
            <div class="container" id="get_category_home">

            </div>
				<!-- responsive-nav -->

			<!-- /container -->
		</nav>


		<!-- NAVIGATION -->

		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";

                            ?>

                            </div>

                          </div>

                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";

                            ?>

                            </div>

                          </div>

                        </div>
                      </div>
