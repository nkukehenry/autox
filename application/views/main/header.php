<?php
defined('BASEPATH') or exit('No direct script access allowed');

$data = $this->session->userdata();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="title" content="<?php echo settings()->meta_title; ?>">
  <meta name="description" content="<?php echo settings()->meta_description; ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo.png">
  <meta name="keywords" content="<?php echo settings()->meta_key_words; ?>">
  <title><?php echo settings()->meta_title; ?></title>

  <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>">
  <!-- Price RangeBar CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/nouislider.css'; ?>">

  <!-- Custom Fonts for this CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

  <!-- owl carousel css -->
  <link rel='stylesheet' href="<?php echo base_url() . 'assets/css/owl.carousel.min.css'; ?>">
  <link rel='stylesheet' href="<?php echo base_url() . 'assets/css/owl.theme.default.min.css'; ?>">

  <!-- Custom Stylesheet For this template -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/creative.css'; ?>">

  <!-- Bootstrap core javascript -->
  <script src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/popper.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>

  <style type="text/css">
      .brand-centered {
        display: flex;
        justify-content: center;
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
      }
      .navbar-brand {
        display: flex;
        align-items: center;
      }

      .navbar-left{

          float: left!important;
      }
      .navbar-toggler,#navbarResponsive,.number{
        z-index: 100;
      }

      @media (max-width: 768px) {
              .hidden-xs{
                display: none;
       }
       .navbar{
        height: auto;
       }
   }

   .pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}
  </style>

</head>

<body>

  <header class="header-absolute" >

    <!-- Top NavBar -->

    <div class="top-bar" style="height:45px; background-color: #000;color:orange;">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-lg-12">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-2"><i class="fas fa-headset"></i> Call/Whatsapp <?php echo settings()->phone_number; ?></li>
              <li class="list-inline-item border-left px-3 d-none d-sm-inline">Save your time, call or send a whatsapp.
            </ul>
          </div>
        </div>
      </div>
    </div>



    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-airy fixed-top py-lg-3 px-lg-5 text-uppercase mb-2 bg-white" id="mainNav" data-toggle="affix" style="border-bottom: 2px orange solid;">
      <div class="container-fluid" id="main-navbar">
          <div class="brand-centered">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img class="logo" src="<?php echo base_url(); ?>assets/img/logo.png" width="100px">
          </a>
         </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  navbar-left" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'products'; ?>">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'contact'; ?>">Contact</a>
            </li>
          </ul>

          </div>
           
            <div class="pull-right hidden-xs hidden-sm number">
              <a href="tel:+<?php echo settings()->phone_number; ?>" class="btn btn-dark text-white">CALL <?php echo settings()->phone_number; ?></a>      
            </a>
            </div>
        </div>
      </div>
    </nav>
  </header>



  <div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content" id="login">
        <!--Header-->
        <div class="modal-header text-center border-0">
          <h3 class="modal-title w-100 font-weight-bold my-3" id="myModalLabel"><strong>Login</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->

        <form action="#" method="post">
          <!-- <?php echo base_url() . 'user/login/'; ?> -->
          <div class="modal-body mx-4">

            <div class='text-danger text-center mb-4' id="loginError"></div>
            <!--Body-->

            <div class="mb-3">
              <label data-error="wrong" for="Form-email1">Email&nbsp;/&nbsp;Mobile No.</label>
              <input type="text" id="loginInput" name="loginInput" class="form-control" required>
            </div>

            <div class="pb-3">
              <label data-error="wrong" for="Form-pass1">Password</label>
              <input type="password" id="loginPassword" class="form-control" name="loginPassword" required>
              <span toggle="#loginPassword" class="fas fa-eye field-icon togglePassword"></span>
            </div>
            <div class="font-small blue-text d-flex justify-content-between flex-row flex-wrap">
              <label for="checkbox" class="form-check-label">
                <input type="checkbox" name="loginCheckbox" id="loginCheckbox" value="checked">
                Remember me?
              </label>

              <p>Forgot <a href="#" class="blue-text">
                  Password?</a></p>
            </div>
            <div class="text-center mb-3">
              <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" id="submitLogin">Login</button>
            </div>
            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Login
              with:</p>

            <div class="row my-3 d-flex justify-content-center">
              <!--Facebook-->
              <button type="button" class="btn btn-white mr-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
              <!--Google +-->
              <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
            </div>
          </div>
        </form>
        <!--Footer-->
        <div class="modal-footer pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#registerButton" id="registerButton" class="blue-text ml-1">
              Register</a></p>
        </div>
      </div>
      <!--/.Content-->

      <!-- Register -->
      <div class="modal-content d-none" id="register">
        <!--Header-->
        <div class="modal-header text-center border-0">
          <h3 class="modal-title w-100 font-weight-bold my-3" id="myModalLabel"><strong>Register</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <form method="post" action="#" id="registration">

          <!-- <?php echo base_url() . 'user/register/'; ?> -->
          <div class="modal-body mx-4">

            <div class='text-danger text-center mb-4' id="error">

            </div>
            <!--Body-->
            <div class="mb-3">

              <label data-error="wrong" data-success="right" for="Form-email1">Email&nbsp;/&nbsp;Mobile No.</label>
              <input type="text" id="regInput" name="regInput" class="form-control" required minlength="10">
              <!-- <ul class="input-requirement">
                <li>Please Enter A Valid Email Address</li>
              </ul> -->
            </div>

            <div class="pb-3">
              <label data-error="wrong" data-success="right" for="Form-pass1">Password</label>
              <input type="password" id="regPass" name="regPass" class="form-control" minlength="8" maxlength="50" required>
              <ul class="input-requirement">
                <li>Atleast 8 Characters Long (and less then 50 characters)</li>
                <li>Contains atleast 1 number</li>
                <li>Contains atleast 1 lowercase letter</li>
                <li>Contains atleast 1 uppercase letter</li>
                <li>Contains a special character (e.g. @!)</li>
              </ul>
            </div>

            <div class="pb-3">
              <label data-error="wrong" data-success="right" for="Form-pass2"> Confirm Password</label>
              <input type="password" id="regPass2" name="regPass2" class="form-control" minlength="8" maxlength="50" required>
            </div>
            <div class="form-check form-check-inline"><label class="form-check-label">Gender :</label></div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="m">
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="f">
              <label class="form-check-label" for="female">Female</label>
            </div>

            <div class="text-center my-3">
              <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" id="submitRegister">Register</button>
            </div>
            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Register
              with:</p>

            <div class="row my-3 d-flex justify-content-center">
              <!--Facebook-->
              <button type="button" class="btn btn-white mr-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
              <!--Google +-->
              <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
            </div>
          </div>

        </form>
        <!--Footer-->
        <div class="modal-footer pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Already a member? <a href="#loginButton" class="blue-text ml-1" id="loginButton">
              Login</a></p>
        </div>
      </div>



    </div>
  </div>
  <!-- Modal -->


  <script>
    let registerButton = document.querySelector('#submitRegister');

    $(registerButton).click(function() {

      displayRegisterErrors();

    });

    function displayRegisterErrors() {

      let regInput = document.getElementById('regInput').value;
      let regPass = document.getElementById('regPass').value;
      let regPass2 = document.getElementById('regPass2').value;
      let regGender = document.querySelector('input[type ="radio"]').value;

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>user/register',
        dataType: "JSON",
        data: {
          regInput: regInput,
          regPass: regPass,
          regPass2: regPass2,
          gender: regGender
        },

        success: function(data) {
          JSON.stringify(data);
          if (data.error != undefined) {
            $('#error').html(data.error);
          } else {
            window.location.href = data.url;
          }

          // $('#numRows').html(data.row);
          // $('#ajaxData').html(data.products);
        },
        error: function(jqXhr, textStatus, errorMessage) {
          console.log("Error: ", errorMessage);
        }
      });
    }

    let loginButton = document.querySelector('#submitLogin');
    $(loginButton).click(function() {

      displayLoginErrors();

    });


    function displayLoginErrors() {
      let loginInput = document.getElementById('loginInput').value;
      let loginPassword = document.getElementById('loginPassword').value;
      let checkBox = document.querySelector('input[type ="checkbox"]').checked;

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>user/login',
        dataType: "JSON",
        data: {
          loginInput: loginInput,
          loginPassword: loginPassword,
          checkBox: checkBox
        },

        success: function(data) {
          JSON.stringify(data);
          if (data.error != undefined) {
            $('#loginError').html(data.error);
          } else {
            window.location.href = data.url;
          }
        },
        error: function(jqXhr, textStatus, errorMessage) {
          console.log("Error: ", errorMessage);
        }
      });
    }
  </script>