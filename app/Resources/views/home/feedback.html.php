<?php /**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>
<head>
<title> Bakery </title>
    <link rel="stylesheet" type="text/css" href="/static/css/global.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    
<style>
*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  background-image: url('https://wallpapercave.com/wp/wp2004032.jpg');
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
  padding: 40px;
}

.screen {
  position: relative;
  background: #de9031;
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
  background: #63240a;
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

</style>
</head><div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>Give Us Your</span>
            <span>Valuable Feedback</span>
          </div>
          <div class="app-contact">CONTACT INFO : 123 456 789</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
          <form action="#" onsubmit="return validation()" method = "post">
            <div class="app-form-group">
              <input class="app-form-control" type="text"  name="firstname" placeholder="FIRST NAME" >
            </div>
              <div class="app-form-group">
              <input class="app-form-control" type="text" name="lastname" placeholder="LAST NAME">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="text" name="email"  placeholder="EMAIL">
            </div>
 
            <div class="app-form-group message">
              <input class="app-form-control" type="text" name="comment" placeholder="MESSAGE">
            </div>
           
              <input type="submit" name="submit" value="submit" class="app-form-button">
            
          </div>
        </div>
      </div>
    </div>
     </form>
           
    
  </div>
</div>


    
        <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

           

            if(isset($firstname) && isset($lastname) 
            && isset($email) && isset($comment)) {
                $feedback = new \Pimcore\Model\DataObject\Feedback();
        
                $feedback->setKey($firstname); 
                $feedback->setPublished(true); 
                $feedback->setParentId(25); 
                $feedback->setFirstname($_POST['firstname']); 
                $feedback->setLastname($_POST['lastname']); 
                $feedback->setEmail($_POST['email']); 
                $feedback->setComment($_POST['comment']); 
                $feedback->save();



                $mail = new \Pimcore\Mail();
                $mail->addTo('kajalkhanna803@gmail.com');
                $mail->setSubject('Products Feedback');
                $mail->setDocument('/feedbackEmail');
                // $mail->setParams($params);
                $mail->send();

               
            }
            
            // dump ($firstname);
            // dump ($lastname);
            // dump ($email);
            // dump ($comment);
            // die();  
        ?>  

    <h1><?= $this->input("headline", ["width" => 540]); ?></h1>

    <?php while ($this->block("contentblock")->loop()) { ?>
        <h2><?= $this->input("subline"); ?></h2>
        <?= $this->wysiwyg("content"); ?>
    <?php } ?>


