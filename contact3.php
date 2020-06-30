<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name']; 
    $email_id = $_POST['email']; 
    $mobile_no = $_POST['phone']; 
    $msg = $_POST['message']; 
     
    $to = "keerthiputty40@gmail.com"; 
    $subject = "'$name' has been sent a mail"; 
     
    
    $message ="
    <html>
        <body>
            <table style='width:600px;'>
                <tbody>
                    <tr>
                        <td style='width:150px'><strong>Name: </strong></td>
                        <td style='width:400px'>$name</td>
                    </tr>
                    <tr>
                        <td style='width:150px'><strong>Email ID: </strong></td>
                        <td style='width:400px'>$email_id</td>
                    </tr>
                    <tr>
                        <td style='width:150px'><strong>Mobile No: </strong></td>
                        <td style='width:400px'>$mobile_no</td>
                    </tr>
                    <tr>
                        <td style='width:150px'><strong>Message: </strong></td>
                        <td style='width:400px'>$msg</td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

   
    $headers .= 'From: Admin <keerthi@web.com>' . "\r\n"; 
   
     
    if(mail($to,$subject,$message,$headers)){
      
        echo "<script>
                alert('Mail has been sent Successfully.');
            </script>";
    }

    else{
        
        echo "<script>
                alert('EMAIL FAILED');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/f7dc55c75a.js" crossorigin="anonymous"></script>
        
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
*{
    box-sizing: border-box;
    
}
body{
    background-image: url("images/bg9.jpg");
}
.container{
    background-color:white;
    padding-left: 10px;
     width:40%;
    margin:auto;
    padding: 10px;
    margin-top: 100px;
    height:400px;
    border-radius:20px;
}
h3{
text-align: center;
background-color: olive;
border-radius: 10px;
color:white;
width:80%;
}
.contact{
padding-left: 60px;
margin-top:40px;

}
.topform{
    padding-left:80px;
    margin-top: 30px;
}
.topform input[type="text"]{
    border-radius: 5px;
    width:auto;
    height:auto;
    padding-left: 5px;
}

.middleform input[type="text"]{
    width: 350px;
    height:auto;
    border-radius: 5px;
    padding-left: 5px;
 
}
.middleform{
    padding-left:80px;
  
}
.bottomform{
    padding-left: 80px;
    
 
}
.bottomform textarea{
    border-radius: 5px;
    width:70%;
    height:100px;
    border:2px solid green;
}
.submit{
padding-left:25%;
margin-bottom: 70px;

}
.submit input[type="submit"]{
border-radius: 20px;
width:60%;
height:35px;
background-color:olive;
color:white;
}

@media screen and (max-width: 700px) {
    .container{
     padding-left:5px;
     width:70%;
     height:80%;
    margin-left:60px;
  
}
    .topform input[type="text"] {
    width: 80%;
    margin-top: 0;
    margin-left: 0;
    display: block;
    padding:5px;
    height: 100%;
    padding-top: 10px;
  }
  .middleform input[type="text"] {
    width: 80%;
    margin-top: 0;
    margin-left: 0;
    display: block;
    padding:5px;
    height: 100%;
    
  }
  .bottomform input[type="text"] {
    width: 100%;
    margin-top: 0;
    margin-left: 0;
    display: block;
    padding:5px;
    height: 100%;

  }
  textarea{
    width: 100%;
    margin-top: 0; 
   padding-top: 10px;
   padding-left: 10px;
   height: 100%;
   
  }
  .submit{
    padding-left: 80px; 
    height: 80%; 
  }
  .contact{
      padding-left:80px;
  }
}  
</style>
    </head>
    <body>
  <?php
  include "navbar.php";
  ?>
     
    <div class="container">
    
            <form name="con_form" method="POST" action="">
                 
                <div class="contact">
                    <h3>Contact Me!</h3>
                </div>
               
                <div class="topform">
                    
                 <input type="text" id="name" name="name" placeholder="YOUR NAME" required > 
                     &nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" id="phone" name="phone" placeholder="(xxx)-(xxx)-(xxxx)" required>  
                     </div>
                     
                     <br>
                <div class="middleform">
                    
                    <input type="text" id="email" name="email" placeholder="abc@gmail.com" required>
                </div>
         
                <br>
                   


                   <div class="bottomform"> 
                        
                        Message:
                        <br>
                    <textarea id="message" name="message" placeholder="Leave a Message Here"></textarea>
                
                     </div>
                     <br>
                     
                     <div class="submit">
                     <input type="submit"id="submit" name="submit" >
                    </div>
                </div>
                
                </form> 
            
        </div>

        
        </body>
        </html>