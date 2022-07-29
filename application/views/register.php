<!DOCTYPE html>
<html lang="en">


<head>
    <title>Register - Mobile Corner</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <?php
    $this->load->view('headerlink');
    ?>
</head>
<body>

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="loader">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<?php
    $this->load->view('header');
    ?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>register</h2>
                        <ul>
                            <li><a href="<?php echo base_url('home'); ?>" style="color: #007bff;">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                
                <div class="theme-card">
                    <h3 class="text-center">Create an account</h3>
                     <form class="theme-form" method="post" action="" name="register">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">Name</label>
                                <input type="text" name="name" class="form-control" id="fname" placeholder="First Name" value="<?php
                                           if (!isset($success) && set_value('name'))
                                           {
                                               echo set_value('name');
                                           }
                                ?>">
                                <div class="text-danger">
                                    <?php
                                        echo form_error('name');
                                    ?>
                                </div>                                    
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="email">email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php
                                           if (!isset($success) && set_value('email'))
                                           {
                                               echo set_value('email');
                                           }
                                ?>" >
                                <div class="text-danger">
                                    <?php
                                        echo form_error('email');
                                    ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-row">

                            <div class="col-md-12 form-group">
                                <label for="review">Mobile No</label>
                                <input type="text" name="mobile" class="form-control" id="lname" placeholder="Mobile No" value="<?php
                                           if (!isset($success) && set_value('mobile'))
                                           {
                                               echo set_value('mobile');
                                           }
                                ?>">
                                <div class="text-danger">
                                    <?php
                                        echo form_error('mobile');
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password</label>
                                <div class="input-group"  >                                
                                    <input type="password" name="ps" class="form-control" id="txt1" placeholder="Password"  style="border-width: 1px 0px 1px 1px;" value="<?php
                                           if (!isset($success) && set_value('ps'))
                                           {
                                               echo set_value('ps');
                                           }
                                ?>">
                                    <div class="input-group-addon" style="padding: 10px 10px 0;background: #fff;border: 1px  solid lightgrey; border-width: 1px 1px 1px 0px;  cursor: pointer;" >
                                        <i  class="icofont-eye icofont-2x" id="show_pass" ></i>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    <?php
                                        echo form_error('ps');
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review"> Confirm Password</label>
                                <div class="input-group"  >                                
                                    <input type="password" name="cps" class="form-control" id="txt3" placeholder="Password"  style="border-width: 1px 0px 1px 1px;">
                                    <div class="input-group-addon" style="padding: 10px 10px 0;background: #fff;border: 1px  solid lightgrey; border-width: 1px 1px 1px 0px; cursor: pointer;" >
                                        <i  class="icofont-eye icofont-2x" id="cshow" ></i>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    <?php
                                        echo form_error('cps');
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <p style="margin-bottom: 15px">
                                    <input type="checkbox"  name="cd" > I accept all <a href="<?php echo base_url(); ?>terms-and-condition">terms & condition</a>
                                </p>
                                <div class="text-danger">
                                    <?php
                                    if(isset($cd))
                                    {
                                        echo $cd;
                                    }
                                        
                                    ?>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="submit" href="#" name="register" class="btn btn-normal" value="create Account">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 ">
                                    <p > <a href="<?php echo base_url(); ?>login" class="txt-default">Have you already account?</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->


<!--footer start-->
<?php
    $this->load->view('footer');
    ?>
<!--footer end-->

<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->

<!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="<?php echo base_url(); ?>assets/images/layout-4/product/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="<?php echo base_url(); ?>assets/images/layout-4/product/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="<?php echo base_url(); ?>assets/images/layout-4/product/3.jpg"></a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4><span>1 x $ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="cart.html" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->

<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" >
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" id="review" placeholder="Enter your password" >
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-rounded btn-block ">Login</a>
            </div>
            <div>
                <h5 class="forget-class"><a href="forget-pwd.html" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="register.html" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>
</div>
<!-- Add to account bar end-->

<!-- Add to wishlist bar -->
 <?php
         $this->load->view('wish');
       ?>
<!-- Add to wishlist bar end-->

<!-- add to  setting bar  start-->
<div id="mySetting" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my setting</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeSetting()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="setting-block">
            <div >
                <h5>language</h5>
                <ul>
                    <li><a href="#">english</a></li>
                    <li><a href="#">french</a></li>
                </ul>
                <h5>currency</h5>
                <ul>
                    <li><a href="#">uro</a></li>
                    <li><a href="#">rupees</a></li>
                    <li><a href="#">pound</a></li>
                    <li><a href="#">doller</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Add to setting bar end-->

<!-- latest jquery-->
<?php
    $this->load->view('footerscript');
    ?>
</body>


</html>
