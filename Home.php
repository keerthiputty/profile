<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        * {
    box-sizing: border-box;
}
        body{
            margin-top: 0;
            margin: 0;
     background-image: url("images/bg2.jpg");
        }
       
img{
height:150px;
width:150px;
margin:10px;
border-radius: 10px;
float: left;
}
.main_content{
  width:80%;
  height: 100%;
  padding-left: 20%;

 
}
p{
  padding:20px;
font-family: cursive;
text-indent: 30px;
word-spacing: 10px;
color:white;


}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
   height:50px;
}

div.img_gallery{
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width:180px;
}
div.img_gallery:hover{
 border: 1px solid black;

}
div.gallery img{
  width:100%;
  height: auto;
}
div.desc{
  padding:15px;
  text-align: center;
}
.img_container{
  padding-left: 20%;
}
h2{
  padding-left: 20%;
}
      </style>
    
    
    </head>
    <body>
      <?php
      include "navbar.php";
      ?>
            <div class="main_content">          
    <img src="images/img3.jpg">
    

  <p>My name is keerthi putty ,i have completed my batchelors in electronics and communications
  from acharya nagarjuna university.i have 2 years of experience as a software  developer 
  in NI-ERP software consulting services,hyderabad.I'm certified web developer from saltlake community
  college.I have passion for devleloping websites.</p>
 
</div> 
<br>
<br><br>
<br><br>
<h2>REFERENCES</h2>
<div class="img_container">

<div class="img_gallery">
  <img src="images/html.jpg" alt="HTML" width:"600" height:"400">
  <div class="desc">HTML</div>
</div>

<div class="img_gallery">
  <img src="images/css.jpg" alt="CSS" width:"600" height:"400">
  <div class="desc">CSS</div>
</div>

<div class="img_gallery">
  <img src="images/js.jpg" alt="JS" width:"600" height:"400">
  <div class="desc">JAVASCRIPT</div>
</div>

<div class="img_gallery">
  <img src="images/bs.jpg" alt="BS" width:"600" height:"400">
  <div class="desc">BOOTSTRAP</div>
</div>
<div class="img_gallery">
  <img src="images/php.jpg" alt="PHP" width:"600" height:"400">
  <div class="desc">PHP</div>
</div>

</div>

                
        <div class="footer"> 
          <script src="javascript.js"></script> 
        </div> 


        <script src="https://kit.fontawesome.com/f7dc55c75a.js" crossorigin="anonymous"></script>
    </body>
</html>