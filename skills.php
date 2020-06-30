<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f7dc55c75a.js" crossorigin="anonymous"></script>
        <style>
            *{box-sizing: border-box;}
            body{
                font-family: Arial, Helvetica, sans-serif;
            background-image: url("images/bg1.jpg");
              background-attachment: fixed;
                background-repeat: no-repeat;
               background-size: 100% 100%;
              
            }
table {
    border-collapse: collapse;
    border: 1px solid brown;
    width:80%;
    
}
th,td{
    border:3px solid gold;
    text-align: center;
    padding:30px;
    color:tomato;
}
th{
    background-color: darkseagreen;
}
td{
    background-color: cyan;
}
.table_1{
   
                padding-left: 100px;
                 width:70%;
                margin:auto;
              padding-top: 30px;
                margin-top: 180px;
               
                
}

        </style>
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <div class="table_1">
            <table>
               <tr>
         <th colspan="4">SKILLS</th>

            </tr>
            <tr>
                <td>HTML</td>
                <td>PHP</td>
                <td>BOOTSTRAP</td>
                <td>TABLEAU</td>
            
            </tr>
<tr>
    <td>CSS</td>
    <td>AMGULARJS</td>
    <td>MYSQL</td>
    <td>SQL</td>
</tr>

<tr>
    <td>JAVASCRIPT</td>
    <td>JQUERY</td>
    <td>ORACLE</td>
    <td>PLSQL</td>
</tr>


            </table>
        </div>
    </body>
</html>