<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f7dc55c75a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .checked {
            color: tomato;
        }

        body {
            height: 100%;
font-family: Arial, Helvetica, sans-serif;
        }

        .left-col {
            border-right: 1px solid black;

        }

        .left-col,
        .right-col {
            float: left;
            height: 100%;
            margin: 1% 0;
            padding: 0px 40px;
        }

        .header {
            background-color: olive;
            padding: 5px;
            margin-top: 0;
            height: 100px;
        }

        .column {

            float: left;
            width: 33.33%;

            height: 100px;
           
        }

        .row:after {
            content: "";
            display: table;
            clear: both;

        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #333;

        }

        li {
            float: left;
        }

        li a {
            text-decoration: none;
            display: block;
            text-align: center;
            color: white;
            padding: 14px 16px;
        }

        ol.a {

            list-style-type: none;
        }

        ol.b {

            list-style-type: none;
        }
        ol.c {

list-style-type: none;
}

        ol.a li::before {
            content: "\2022";
            color: olive;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        ol.b li::before {
            content: "\2022";
            color: olive;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        ol.c li::before {
            content: "\2022";
            color: olive;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .resume_container {
            padding-left: 80px;
        }

        @media screen and (max-width:600px) {
            .column {
                width: 80%;
                white-space: nowrap;
            }
        }
    </style>

</head>

<body>
    <?php
       include "navbar.php";
       ?>

    <div class="header">
        <h2>
            <center>KEERTHI PUTTY</center>
        </h2><br>
        <p>
            <center><i class="fas fa-location-arrow"></i>&nbsp;13323 S.Pinnacle Point Way
                Draper,UT
                84020<span style="color:white;">|</span>
                <i class="fas fa-envelope-open-text"></i> &nbsp; keerthiputtywebdev@gmail.com<span
                    style="color:white;">|</span>
                <i class="fas fa-mobile-alt"></i>&nbsp;860-803-6909
            </center>
        </p>

    </div>
    <div class="resume_container">
        <div class="left-col">
            <h2><i class="fas fa-user-circle" style="color:olive"></i>PROFILE</h2>
            <p> Creative Web Developer dedicated to developing and optimizing interactives,user friendly<br>
                feature rich websites.Had experience in business intelligence(TABLEAU).</p>
            <br>
            <br>
            <h2><i class="fas fa-briefcase" style="color:olive"></i>EXPERIENCE</h2>
            <h3>BLISS PHOTOBOOTH</h3>
            <h4><b>Intern</b></h4>
           
        

            <ol class="a">
                <li>Responsible for gathering requirements, design, development and testing.</li><br>
               <li>Responsible for developing pages using HTML, CSS, BOOTSTRAP, JAVASCRIPT, PHP.</li><br>
                <li>Create website layout/user interface by using standard HTML/CSS practices.</li><br>
                <li>Testing website for Mobile responsive and write media queries according to<br> responsive design.</li>
                <br>
                <li>Creating and maintaining project documentation.</li><br>
                <li>Co-ordinate with teammates and make changes to pages according to business requirement.</li><br>
                <li>Transferring files using FileZilla and maintain version control using GitHub.</li>



            </ol>
            <br><br><br>
            <h3>Maximus Federal,Sandy,Utah</h3>
            <h4><b>Customer Service</b></h4>
           
          

            <ol class="b">
                <li>Resolve customer complaints via phone, email, mail, or social media</li> <br>
                <li>Use telephones to reach out to customers and verify account information</li><br>
                <li>Greet customers warmly and ascertain problem or reason for calling</li><br>
                <li>Handling patients, referral sources, and administrative department inquires</li> <br>
                <li>Communicating with insurance companies and/or prior authorization requests</li><br>
                <li>Entering patient information into a customer information system</li><br>
                <li>Ensuring customer satisfaction and assisting them with issues/concerns related to<br> their health
                </li><br>
                <li>Developing the knowledge of customer needs and trends to improve customer <br>satisfaction and
                    loyalty</li><br>

            </ol>
            <br>
        
        </div>
        
        <div class="right-col">
         <div>
                <h3>NI-ERP Software Consulting Pvt.ltd,Hyderabad</h3>
            <h4><b>Software Developer</b></h4>
            
           
            <ol class="c">
                <li> Gathered Business requirements in creating Tableau dashboard, preparing detailed <br>business
                    requirement document including flow diagrams, Tableau view description <br>and metrics.</li><br>
                <li>Involved in loading of data into Teradata from legacy systems and flat files<br> using complex
                    SQL and Python</li><br>
                   <li>Created People management, department management,compliance and summary <br>views in Tableau.
                </li><br>
                
            </ol>
            
         </div>
 <br>
            <h2><i class="fas fa-graduation-cap" style="color:olive"></i>EDUCATION</h2>
            <p><b>Batchelors in Electronics and Communication</b></p>
            <p>July2009-May2013</p>
            <p>Acharya Nagarjuna University,Guntur,Andhra pradesh,India</p>

            <p><b>Web Development Progrmming</b></p>
            <p>jan2020 to july2020</p>
            <p>Slat Lake Community College ,SLCC,Utah</p>
            <br>
            <h2><i class="fas fa-window-restore" style="color:olive"></i>PROGRAMMING SKILLS</h2>
            <div class="container">
                <div class="row">
                    <div class="column">

                        <li>HTML</li><br>
                        <li>CSS</li><br>
                        <li>BOOTSTRAP</li>
                    </div>
                    <div class="column">

                        <li>JAVASCRIPT</li><br>
                        <li>PHP</li><br>
                        <li>ANGULARJS</li>
                    </div>
                    <div class="column">

                        <li>TABLEAU</li><br>
                        <li>ORACLE</li>
                        <br>
                        <li>MYSQL</li>
                    </div>
                </div>
                <div class="certifications">
                    <h2><i class="fa fa-certificate" aria-hidden="true" style="color:olive;"></i>CERTIFICATIONS</h2>
                    <p>Web Development Certification from Slcc</p>
                </div>

            </div>
        </div>
</body>

</html>