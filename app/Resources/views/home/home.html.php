<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>
<head><meta name="viewport" content="width=device-width, initial-scale=1"><style>
* {box-sizing: border-box}
body { font-family: 'Sofia';font-size: 22px;}
.mySlides {display: none}
img {vertical-align: middle;}

ul {
  list-style-type: none;
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
.column {
  float: left;
  width: 33.33%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f2f2f2; 
  margin-top: 200px;
  /* opacity: 0.2; */
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style></head>
<h4><?= $this->input("headline") ?></h4>
<div>
<?= $this->wysiwyg("specialContent"); ?>
</div>
<body>
 

<!-- <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://img.wallpapersafari.com/desktop/1600/900/21/58/iL7ayk.jpg" style="width:100%">
  <div class="text">Tasty, Fresh Bread Baked Daily</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://c0.wallpaperflare.com/preview/575/399/602/bakery-shop-food-sweets.jpg" style="width:100%">
  <div class="text">Finding A Home For Every Bread</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://buzzbakeshop.com/wp-content/uploads/2020/01/BuzzImage-1024x470.jpg" style="width:100%">
  <div class="text">Welcome to The Bakery Shop</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); 
}
</script>
<br/>
</br/>



<div class="product-info">
    
    <div id="product">
        
     



     <?php $prod = new \Pimcore\Model\DataObject\Category\Listing(); 
     
     
     
     ?>
      <?php 
      $prod->setCondition('active = ?',1); 
     
     
     
     ?>
        <?php
        foreach($prod as $product) 
        {
            ?>
               
			<div class="row">
			  <div class="column">
			    <div class="card">	
								<div class="avatar">
						<?php $picture = $product->getImage();
            				  if($picture instanceof \Pimcore\Model\Asset\Image):

					    /** @var \Pimcore\Model\Asset\Image $Image */
					    ?>
					    <?= $picture->getThumbnail()->getHtml(["width" =>400,"height" => 300])?> 
					    </div>
                 
                      				  <a href="#"><?=$product->getName(); ?></a>
						  
						 
					<?=$product->getDescription(); ?>  
				</div>
</div>             <?php endif;
            
            ?>  <?php
     } 
     ?>  </div></div></div>

</body>
