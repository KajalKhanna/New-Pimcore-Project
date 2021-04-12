<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <style>
 .section {
position: relative;
height: 100vh;
}

.section .section-center {
position: absolute;
top: 50%;
left: 0;
right: 0;
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
}
hr.new3 {
  border-top: 1px dotted #888888;
}
body {
font-family: "Sofia";
background-color: #d9d9d9;
background-image: url('https://www.itl.cat/pngfile/big/10-103353_food-wallpaper.jpg');
 background-size: cover;
  background-position: center;

}

.box-layout, .form {
position: relative;
width: 100%;
margin: auto;
background: #fff;
-webkit-box-shadow: 0px 5px 10px -5px rgba(0, 0, 0, 0.3);
box-shadow: 0px 5px 10px -5px rgba(0, 0, 0, 0.3);
}

.signup-form{
max-width: 600px;
}

.login-form{
max-width: 400px;
margin-top: 5%;
}

.form>.booking-bg {
position: absolute;
left: 0px;
top: 0px;
bottom: 0px;
width: 250px;
background-image: url('https://www.itl.cat/pngfile/big/10-103353_food-wallpaper.jpg');
background-size: cover;
background-position: center;
}

.form>form {
padding: 30px;
border: 1px solid #f9fafc;
border-left: 0px;
}

.form .form-header {
margin-bottom: 30px;
}

.form .form-header h2 {
margin: 0;
margin-bottom: 0px;
font-weight: 700;
color: #122244;
font-size: 35px;
text-transform: capitalize;
}

.form .form-group {
position: relative;
margin-bottom: 20px;
}

.form .form-control {
background-color: #f7f9fa;
height: 40px;
padding: 0px 10px;
border-radius: 0px;
-webkit-transition: 0.2s;
transition: 0.2s;
color: #122244;
border: 0px;
font-size: 16px;
font-weight: 700;
-webkit-box-shadow: inset 0 1px 4px rgba(181, 193, 204, 0.3);
box-shadow: inset 0 1px 4px rgba(181, 193, 204, 0.3);
}

.form .form-control::-webkit-input-placeholder {
color: #dde3e8;
}

.form .form-control:-ms-input-placeholder {
color: #dde3e8;
}

.form .form-control::placeholder {
color: #dde3e8;
}

.form .form-control:focus {
-webkit-box-shadow: inset 0 1px 4px rgba(181, 193, 204, 0.3);
box-shadow: inset 0 1px 4px rgba(181, 193, 204, 0.3);
}

.form input[type="date"].form-control:invalid {
color: #dde3e8;
}

.form select.form-control {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}

.form select.form-control+.select-arrow {
position: absolute;
right: 0px;
bottom: 4px;
width: 32px;
line-height: 32px;
height: 32px;
text-align: center;
pointer-events: none;
}

.form select.form-control+.select-arrow:after {
content: '\279C';
display: block;
-webkit-transform: rotate(90deg);
transform: rotate(90deg);
color: #dddee9;
font-size: 14px;
}

.form .form-label {
color: #b5c1cc;
font-weight: 700;
-webkit-transition: 0.2s;
transition: 0.2s;
text-transform: uppercase;
line-height: 24px;
height: 24px;
font-size: 14px;
z-index: 1;
}

.form .form-btn {
margin-top: 10px;
}

.form .submit-btn {
color: #fff;
background-color: #6499ff;
font-weight: 700;
padding: 13px 35px;
font-size: 16px;
border: none;
width: 100%;
}

@media only screen and (max-width: 480px) {
.form>.booking-bg {
display: none;
}
.form>form {
margin-left: 0px;
}
}

.p-20x{
padding: 20px;
}
.form-check-label{
position: relative;
top: -2px;
font-weight: normal;
}
.form-group ul {
    list-style: none;
    padding: 0;
}

.form-group ul li:before {
    content: "ERROR";
    background: #B0413E;
    font-size: 10px;
    padding: 2px 5px;
    color: #fff;
    margin-right: 10px
}
.edit-link{
color: #000000;
font-size: 16px;
border: 1px solid #eeeeee;
width: 30px;
display: inline-block;
text-align: center;
}

.delete-link{
color: #B0413E;
font-size: 16px;
border: 1px solid #eeeeee;
width: 30px;
display: inline-block;
text-align: center;
}
 
h1.b {
  font-family: "Sofia", sans-serif;
}
 .myDiv {
  border: 5px outset #e4651f;
  background-color: #f2f2f2 ;    
  box-shadow: 5px 10px 8px #888888;
  text-align: center;
}
 

ul {
  list-style-type: none;
  text-align: center;
  display: inline-block;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #f2f2f2 ;
  box-shadow: 5px 10px 8px #888888;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: #3a211d;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #e4651f;
}
h4 {
  color: #56301d;
}
 .navbar {
  width: 100%;
  background-color: #f2f2f2;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: #3a211d;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #e4651f;
}

.navbar a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}

.icon-bar {
  position: fixed;
  top: 20%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
 </style>
    <meta charset="UTF-8">
    <title>The Bakery Shop</title>
    <link rel="stylesheet" type="text/css" href="/static/css/global.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<div styles ="background-image: url('https://www.itl.cat/pngfile/big/10-103353_food-wallpaper.jpg"> 

    <div class="myDiv">
 
    
            <div class="claim"><h1 class="b"> The Bakery Shop</h1><i class="material-icons" style="font-size:36px">cake</i>
        

           <img src="MyAssets/Bakerylogo.jpg" height="200" > <i class="material-icons" style="font-size:36px">cake</i>
         
         
           
      <div class="navbar">
        <a href=" http://teambakery.local/Home">Home</a>
	<a href="http://teambakery.local/productList">Products </a>
	<a href="http://teambakery.local/feedback">Feedback </a>
	<a href="http://teambakery.local/feedback">Contact Us</a>

 </div> 
 </div>
</div>
        <div class="info">
            <?php $this->slots()->output('_content') ?>
        </div>
    </div>
       <div>     
</div>
<footer>
<div class="container text-center p-20x">&copy;Group 3 Copyright 2020, All Rights Reserved
</div></footer>

</body>
</html>
