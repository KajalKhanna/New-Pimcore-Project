
<?php
echo $this->ta;
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>
<head> 
<style>
*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  background-image: url('https://i.pinimg.com/originals/82/02/e1/8202e125746516dfbe14bd428f2d4e0b.jpg');
  background-size: cover;
  background-position: center;
  font-size: 12px;
}

body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}

.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #cac3b2;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #fc4647 ;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: white;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: white;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: white;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}
* {
  box-sizing: border-box;
  
     background-repeat: no-repeat;
   background-attachment: fixed;
  background-size: 100% 100%;
}
table {
  border-collapse: collapse;
  width: 100%;
} 



table.d {
  table-layout: fixed;
  width: 100%;  
}

th,td {
  border: 1px solid white;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4d4d4f;
  color: white;
  cursor: pointer;
}


p {
  font-family: "Sofia", sans-serif;
  font-size: 30px;
  text-shadow: 3px 3px 3px #ababab;
}
   
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #1D243A;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
</head>

<?= $this->wysiwyg("specialContent"); ?>
     
<div class="background">
  <div class="container"><div class="screen">
     <div class="screen-header">
               <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
 
    <div class="screen">
    
<div class="product-info">
    <?php 
    if($this->editmode):
       
    else: ?>

    <div id="product">
    
        
         <?php
          $pageLimit = 8;

          if (isset($_GET["page"])) {
            $page  = $_GET["page"];    
          }    
          else {
            $page = 1;    
          } 
          $offset = ($page-1) * $pageLimit; 
  
        $prod = new \Pimcore\Model\DataObject\Product\Listing();

        $products = count($prod);
        $prod->setLimit($pageLimit);
        if($offset > 0){
          $prod->setOffset($offset);
        }
        else{
          $prod->setOffset(0);
        }
        ?>
        <table class="d">
            <tr>
            	 <th  >SKU</th>
                <th  >Name</th>
                <th  >Weight</th>
                <th  >Price</th>
                <th  >Nutrition</th>
                <th  >Calorie Content</th>
                <th  >Category</th>
                
                <th  >Image</th>
                
            </tr>            
        </table>
        
 <div class="screen-body">
       <table class="d">
       <tbody>
       <?php
        foreach($prod as $product) 
        {
            ?>
            
            <tr >
            <td ><?=$product->getSku(); ?></td>
            <td ><?=$product->getName(); ?></td>
             <td ><?=$product->getWeight(); ?></td>
             <td ><?=$product->getPrice(); ?></td>
             <td ><?=$product->getNutritionalValue(); ?></td>
             <td ><?=$product->getCalories(); ?></td>
              <td><?=$product->getCategoryType(); ?></td>
           
            
            <?php


            $picture = $product->getImage();
              if($picture instanceof \Pimcore\Model\Asset\Image):

            /** @var \Pimcore\Model\Asset\Image $Image */
            ?>

         <td><?= $picture->getThumbnail()->getHtml(["width" => 100,"height" => 100])?> </td>
            
           
            <?php endif;
            
            ?>
            
            </tr>
        <?php
     } 
     ?>  
       </tbody>          
        </table></div></div>
    </div> </div>
    <?php endif; ?>
 <div class="pagination" >    
      <?php
      if(!$this->editmode) {
        echo "</br>";     
        $pageCount = ceil($products / $pageLimit);     
        $gotoPage = "";       
      
        if($page >= 2){   
            echo "<a href='http://bakery.local/productList?page=".($page-1)."'>  Prev </a>";   
        }       
                    
        for ($i = 1; $i <= $pageCount; $i++) {
              
          if ($i == $page) {   
              $gotoPage .= "<a class = 'active' href='http://bakery.local/productList?page=".$i."'>".$i." </a>";   
          }         
          else  {   
              $gotoPage .= "<a href='http://bakery.local/productList?page=".$i."'>".$i." </a>";     
          }   
        };     
        echo $gotoPage;
            
        if($page<$pageCount){   
            echo "<a href='http://bakery.local/productList?page=".($page+1)."'>  Next </a>";   
        }
      }
      ?>    
      </div>
</div>
</div>
