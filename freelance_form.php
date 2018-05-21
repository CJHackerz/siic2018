<?php
   session_start();
   if(isset($_SESSION['user'])) {
       header('Location: ./profile.php');
   }
   ?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>SIIC - Sign Up</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon Icon Add -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
      <!-- All STYLESHEET CSS -->
      <link rel="stylesheet" href="css/element.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/signIn.css">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
   </head>
   <style type="text/css">
      .researchClass{
      font-family: 'Dosis', sans-serif;
      }
      .form-control{
      font-size: 14px;
      line-height: 1.6em;
      border: 1px solid #eee;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 2px;
      border-left: 4px solid #ffc400;
      }
      .form-control:focus{
      background-color: #F5F5F5;
      border: 1px solid #ffc400;
      border-left: 4px solid #ffc400;
      box-shadow:none;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-transition: border 0.5s; /* Safari */
      transition: border 0.5s;
      }
      hr{
      width: 10%;
      height: 8px;
      background-color: #ffc400;
      }
      textarea:focus, input:focus{
      outline: none;
      }
      .rightBtn{
      float: center;
      background-color: #ffc400;
      border: 2px solid #ffc400;
      }
      .rightBtn:active{
      background-color: #ffab00;
      border: 2px solid #ffc400;
      }
      .rightBtn:hover{
      background-color: #ffab00;
      border: 2px solid #ffc400;
      }
      .inputBox{
      height: 40px;
      font-size: 15px;
      }
      .inlineTxt{
      display: inline;
      }
      .rightInlineTxt{
      float: right;
      }
      #popUpWindow.modal{
      text-align: center;
      }
      #popUpWindow.modal::before {
      content: "";
      display: inline-block;
      height: 100%;
      margin-right: -4px;
      vertical-align: middle;
      }
      #popUpWindow .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
      }
      label{
      float: left;
      color: #000;
      }
   </style>
   }
   <body>
      <!-- Start Main Wrapper -->
      <div class="main-wrapper">
         <!-- Start Header Section -->
         <?php
            require "process/connect.php";
            include 'includes/nav.php' ?>
         <!-- End Header Section -->
         <br><br>
         <!-- Start Main Content Wrapper -->
         <div class="main-content-wrapper">
            <!-- multistep form -->
            <div id="msform" style="width:60%">
               <form   action="./process/process_freelance.php" method="POST" enctype="multipart/form-data">
                  <!-- progressbar -->
                  <ul id="progressbar">
                     <li class="active">Personal Details</li>
                     <li>Your Profile</li>
                     <li>Account Setup</li>
                  </ul>
                  <!-- fieldsets -->
                  <fieldset >
                  <center>   <h2 class="fs-title">Freelance Form</h2></center>
                     <h3 class="fs-subtitle">Step 1 out of 1</h3>
                     <br>

                        <label for="skills_email">Email Address:</label>

                    <input type="email" name="skills_email" class="form-control" id="email"  placeholder="Enter Your Email Address" required style="width:90%">

                     <br>
                     <label>ARTS       :</label>&nbsp&nbsp&nbsp&nbsp
                     <select id="arts" name="skills_arts[]" placeholder="Arts" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="Singing">Singing</option>
                        <option value="Dancing">Dancing</option>
                        <option value="Acting">Acting</option>
                        <option value="Poetry">Poetry</option>
                        <option value="Standup Comic">Standup Comic</option>
                        <option value="Story telling">Story telling</option>
                        <option value="Public Speaking">Public Speaking</option>
                        <option value="Instrumental">Instrumental</option>
                        <option value="Handicrafts">Handicrafts</option>
                        <option value="Sketching & painting">Sketching & painting</option>
                     </select>
                     <br /><br />
                     <label>MEDIA   :</label>
                     <select id="Media" name="skills_media[]" placeholder="Media" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">

                        <option value="Photography">Photography</option>
                        <option value="Videography">Videography</option>
                        <option value="Cinematography">Cinematography</option>
                        <option value="Video Animation">Video Animation</option>
                        <option value="3D video Animation">3D video Animation</option>
                        <option value="Video Productions">Video Productions</option>
                        <option value="Audio Production">Audio Production</option>
                        <option value="Film making">Film making</option>
                        <option value="Visual Arts">Visual Arts</option>
                        <option value="Commercials">Commercials</option>
                        <option value="360 Degree view video">360 Degree view video</option>
                        <option value="eLearning Video maker">eLearning Video maker</option>
                        <option value="Script Writer for Film/Commercials">Script Writer for Film/Commercials</option>
                        <option value="Drama">Drama</option>
                        <option value="Costume Designer">Costume Designer</option>
                        <option value="Youtuber">Youtuber</option>
                     </select>
                     <br /><br />
                     <label>CONTENT WRITING:</label>
                     <select id="Content Writing" name="skills_content_writing[]" placeholder="Content Writing" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="Blog Writing">Blog Writing</option>
                        <option value="Content Writing">Content Writing</option>
                        <option value="Article Writing">Article Writing</option>
                        <option value="Research Writing">Research Writing</option>
                        <option value="Report Writing">Report Writing</option>
                        <option value="Creative Wrting">Creative Wrting</option>
                        <option value="Power Point Presentation">Power Point Presentation</option>
                        <option value="Business Writing">Business Writing</option>
                        <option value="Book Writing">Book Writing</option>
                        <option value="Product Discriptions">Product Discriptions</option>
                        <option value="Reviews">Reviews</option>
                        <option value="Wikipedia">Wikipedia</option>
                        <option value="Speech Writing">Speech Writing</option>
                        <option value="Poetry">Poetry</option>
                        <option value="Short Story">Short Story</option>
                        <option value="Script writing for films/drama">Script writing for films/drama</option>
                        <option value="Newsletter">Newsletter</option>
                        <option value="Technical writing">Technical writing</option>
                     </select>
                     <br /><br />
                     <label>GRAPHIC DESIGN:</label>&nbsp&nbsp
                     <select id="Graphic Design" name="skills_graphic_design[]" placeholder="Graphic Design" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="Adobe Photoshop">Adobe Photoshop</option>
                        <option value="Adobe Illustrator">Adobe Illustrator</option>
                        <option value="Adobe after effects">Adobe after effects</option>
                        <option value="VFX">VFX</option>
                        <option value="Panting & Sketching">Panting & Sketching</option>
                        <option value="3Ds MAX">3Ds MAX</option>
                        <option value="Adobe Flash">Adobe Flash</option>
                        <option value="Flash 3D">Flash 3D</option>
                        <option value="Website Design">Website Design</option>
                        <option value="Logo Design">Logo Design</option>
                        <option value="Poster Design">Poster Design</option>
                        <option value="Book Designing">Book Designing</option>
                        <option value="Corporate Identity">Corporate Identity</option>
                        <option value="Arts & Crafts">Arts & Crafts</option>
                        <option value="App Designer UI/UX">App Designer UI/UX</option>
                        <option value="CorelDraw">CorelDraw</option>
                        <option value="Presentations Designs">Presentations Designs</option>
                        <option value="User Interface Design">User Interface Design</option>
                        <option value="Blogs Design">Blogs Design</option>
                        <option value="Poster/labels/templates/business card Design">Poster/labels/templates/business card Design</option>
                        <option value="Blender">Blender</option>
                     </select>
                     <br /><br />
                     <label>CORPORATE:</label>&nbsp&nbsp
                     <select id="Corporate" name="skills_corporate[]" placeholder="Corporate" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="HR">HR</option>
                        <option value="PR">PR</option>
                        <option value="Finance">Finance</option>
                        <option value="Operations Manager">Operations Manager</option>
                        <option value="Operation Research">Operation Research</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Business Plans">Business Plans</option>
                        <option value="Legal">Legal</option>
                        <option value="Business Analysis">Business Analysis</option>
                        <option value="Project Management">Project Management</option>
                        <option value="Agreements & MOUs">Agreements & MOUs</option>
                        <option value="Financial Analysis">Financial Analysis</option>
                        <option value="ERP">ERP</option>
                        <option value="Intellectual Property">Intellectual Property</option>
                        <option value="Event Management">Event Management</option>
                        <option value="Fundraising">Fundraising</option>
                        <option value="Inventory Management">Inventory Management</option>
                        <option value="Risk Management">Risk Management</option>
                        <option value="Logistics">Logistics</option>
                        <option value="CSR">CSR</option>
                        <option value="Data Analytics">Data Analytics</option>
                        <option value="Taxation">Taxation</option>
                     </select>
                     <br /><br />
                     <label>SALES AND MARKETING:</label>
                     <select id="Sales & Marketing" name="skills_sandm[]" placeholder="Sales & Marketing" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="Social media marketing">Social media marketing</option>
                        <option value="Advertising">Advertising</option>
                        <option value="Market Research">Market Research</option>
                        <option value="Marketing Strategy">Marketing Strategy</option>
                        <option value="Affiliate Marketing">Affiliate Marketing</option>
                        <option value="Content Marketing">Content Marketing</option>
                        <option value="Google adsense">Google adsense</option>
                        <option value="SEO">SEO</option>
                        <option value="Viral Marketing">Viral Marketing</option>
                        <option value="Ad Planning and Buying">Ad Planning and Buying</option>
                        <option value="Brand management">Brand management</option>
                        <option value="Content Development">Content Development</option>
                     </select>
                     <br /><br />
                     <label>MECHANICAL:</label> <br>
                     <select id="Mechanical" name="skills_mechanical[]" placeholder="Mechanical" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="IC Engines">IC Engines</option>
                        <option value="3D Printing">3D Printing</option>
                        <option value="Aeronautics">Aeronautics</option>
                        <option value="Aerodynamics">Aerodynamics</option>
                        <option value="Aeromodelling">Aeromodelling</option>
                        <option value="Fluid dynamics">Fluid dynamics</option>
                        <option value="Thermodyanmics">Thermodyanmics</option>
                        <option value="Vibration Analysis">Vibration Analysis</option>
                        <option value="Engineering Mechanics">Engineering Mechanics</option>
                        <option value="Industrial Design">Industrial Design</option>
                        <option value="Product Design">Product Design</option>
                        <option value="CNC">CNC</option>
                        <option value="CAM">CAM</option>
                        <option value="Workshop & Machining">Workshop & Machining</option>
                        <option value="Pneumatics & Hydraulics">Pneumatics & Hydraulics</option>
                        <option value="Renewable Energy">Renewable Energy</option>
                        <option value="Operation Research">Operation Research</option>
                        <option value="industrial Planning">industrial Planning</option>
                        <option value="Power Plants">Power Plants</option>
                        <option value="Gas Dynamics">Gas Dynamics</option>
                        <option value="Material technology">Material technology</option>
                        <option value="Composite & Alloys">Composite & Alloys</option>
                        <option value="Vehicle Dynamics">Vehicle Dynamics</option>
                        <option value="Flexible Manufacturing Systems (FMS)">Flexible Manufacturing Systems (FMS)</option>
                        <option value="Structural Analysis & Design">Structural Analysis & Design</option>
                        <option value="Quality Control and Metrology">Quality Control and Metrology</option>
                     </select>
                     <br /><br />
                     <input type="button" name="" class="next action-button" value="Next" required />
                  </fieldset>
                  <fieldset>
                     <h2 class="fs-title">Freelance Form</h2>
                     <h3 class="fs-subtitle">Step 2 out of 3</h3>
                     <label>3D MODELLING, ANALYSIS AND SIMULATION:</label>
                     <select id="3D Modelling, Analysis & Simulation" name="skills_threeD[]" placeholder="3D Modelling, Analysis & Simulation" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;" tabindex="4">
                        <option value="Fusion 360">Fusion 360</option>
                        <option value="Catia">Catia</option>
                        <option value="SolidWorks">SolidWorks</option>
                        <option value="AutoCAD">AutoCAD</option>
                        <option value="Autodesk 3ds Max">Autodesk 3ds Max</option>
                        <option value="Autodesk Inventor">Autodesk Inventor</option>
                        <option value="Autodesk Maya">Autodesk Maya</option>
                        <option value="Pro/ENGINEER">Pro/ENGINEER</option>
                        <option value="Sketchup">Sketchup</option>
                        <option value="SolidWorks">SolidWorks</option>
                        <option value="PTC CREO">PTC CREO</option>
                        <option value="NX Siemens">NX Siemens</option>
                        <option value="FreeCad">FreeCad</option>
                        <option value="Google Sketchup">Google Sketchup</option>
                        <option value="Option 15">Option 15</option>
                     </select>
                     <br /><br />
                     <label>MANUFACTURING AND FABRICATION:</label>
                     <select id="Manufacturing and Fabrication" name="skills_mandf[]" placeholder="Manufacturing and Fabrication" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="Power tools">Power tools</option>
                        <option value="Welding">Welding</option>
                        <option value="Lathe machine">Lathe machine</option>
                        <option value="Milling">Milling</option>
                        <option value="CNC">CNC</option>
                        <option value="Wire Cutting machines">Wire Cutting machines</option>
                        <option value="Plasama/laser Cutting machines">Plasama/laser Cutting machines</option>
                        <option value="3D Printers">3D Printers</option>
                        <option value="Gear Hobbing">Gear Hobbing</option>
                        <option value="Grinding">Grinding</option>
                        <option value="Plastic Injection Moulding">Plastic Injection Moulding</option>
                        <option value="Drilling">Drilling</option>
                        <option value="Mould and Casting">Mould and Casting</option>
                        <option value="Flow waterjet Cutting Machines">Flow waterjet Cutting Machines</option>
                        <option value="Photolithography & SLA">Photolithography & SLA</option>
                        <option value="Selective Laser Sintering">Selective Laser Sintering</option>
                        <option value="Clay Moulding">Clay Moulding</option>
                     </select>
                     <br /><br />
                     <label>AUTOMATION</label> <br>
                     <select id="Automation" name="skills_automation[]" placeholder="Automation" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="IOT">IOT</option>
                        <option value="Sensors">Sensors</option>
                        <option value="Actuators">Actuators</option>
                        <option value="AI">AI</option>
                        <option value="Robotics">Robotics</option>
                        <option value="PLC & SCADA">PLC & SCADA</option>
                        <option value="DCS & ESD">DCS & ESD</option>
                        <option value="Batteries Technology">Batteries Technology</option>
                        <option value="Power Storage Technology">Power Storage Technology</option>
                        <option value="PCB Designing/Layout">PCB Designing/Layout</option>
                        <option value="Control Systems">Control Systems</option>
                        <option value="Image Processing">Image Processing</option>
                        <option value="MATLAB">MATLAB</option>
                        <option value="LABVIEW">LABVIEW</option>
                        <option value="CAD/CAM">CAD/CAM</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Arduino">Arduino</option>
                        <option value="Embedded Systems">Embedded Systems</option>
                        <option value="Flexible Manufacturing Systems">Flexible Manufacturing Systems</option>
                        <option value="Blockchain & Cryptocurrency">Blockchain & Cryptocurrency</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Virtual & Augmented Reality">Virtual & Augmented Reality</option>
                        <option value="Robot Operating System (ROS)">Robot Operating System (ROS)</option>
                        <option value="CNC Linux">CNC Linux</option>
                        <option value="Microsoft Robotics">Microsoft Robotics</option>
                        <option value="Industrial Communications Protocols">Industrial Communications Protocols</option>
                        <option value="Octave">Octave</option>
                        <option value="Human Machine Interface">Human Machine Interface</option>
                        <option value="Haptics">Haptics</option>
                        <option value="Nueral Networks based Data analytics">Nueral Networks based Data analytics</option>
                     </select>
                     <br /><br />
                     <label>ELECTRONICS HARDWARE</label> <br>
                     <select id="Electronics Hardware" name="skills_hardware[]" placeholder="Electronics Hardware" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="System integration">System integration</option>
                        <option value="System testing ,logging and debugging">System testing ,logging and debugging</option>
                        <option value="Electromechanics">Electromechanics</option>
                        <option value="PCB Manufacuring">PCB Manufacuring</option>
                        <option value="Microcontrollers and SBC">Microcontrollers and SBC</option>
                        <option value="Power Electronics">Power Electronics</option>
                        <option value="Photovoltaics & Optronics">Photovoltaics & Optronics</option>
                        <option value="Power Systems">Power Systems</option>
                        <option value="Embedded Systems">Embedded Systems</option>
                        <option value="Electrical machines & Power Drives">Electrical machines & Power Drives</option>
                        <option value="Arduino">Arduino</option>
                        <option value="Raspberi Pi">Raspberi Pi</option>
                        <option value="Galileo">Galileo</option>
                        <option value="NViDA Jetson">NViDA Jetson</option>
                        <option value="ESP">ESP</option>
                        <option value="Wireless Communication">Wireless Communication</option>
                        <option value="Analog Systems Designing">Analog Systems Designing</option>
                        <option value="Digital System Designing">Digital System Designing</option>
                        <option value="Signal Analysis">Signal Analysis</option>
                        <option value="Digital Signal Processing">Digital Signal Processing</option>
                        <option value="Cable Conduit and Cable Set Designer">Cable Conduit and Cable Set Designer</option>
                        <option value="Control Systems">Control Systems</option>
                        <option value="Flexible and Printable Electronics">Flexible and Printable Electronics</option>
                     </select>
                     <br /><br />
                     <label>ELECTRONICS EDA</label> <br>
                     <select id="Electronics EDA" name="skills_EDA[]" placeholder="Electronics EDA" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="VLSI Design">VLSI Design</option>
                        <option value="Autodesk EAGLE">Autodesk EAGLE</option>
                        <option value="ALTIUM Designer">ALTIUM Designer</option>
                        <option value="Sparkfun PCB designer">Sparkfun PCB designer</option>
                        <option value="Proteus">Proteus</option>
                        <option value="PSPICE">PSPICE</option>
                        <option value="KiCad">KiCad</option>
                        <option value="VHDL & Verilog">VHDL & Verilog</option>
                        <option value="Logic Simulation & Simplification">Logic Simulation & Simplification</option>
                        <option value="MATLAB Simulink Electronics">MATLAB Simulink Electronics</option>
                        <option value="NI LabView">NI LabView</option>
                        <option value="Express PCB">Express PCB</option>
                        <option value="TI WebBench">TI WebBench</option>
                        <option value="ATmel Studio">ATmel Studio</option>
                        <option value="Kiel">Kiel</option>
                        <option value="MicroChip">MicroChip</option>
                        <option value="PIC Development">PIC Development</option>
                        <option value="Option 18">Option 18</option>
                     </select>
                     <br /><br />
                     <label>GENERAL ENGINEERING</label> <br>
                     <select id="General Engineering" name="skills_generalengg[]" placeholder="General Engineering" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="Electronics">Electronics</option>
                        <option value="Automotive">Automotive</option>
                        <option value="Instumentation">Instumentation</option>
                        <option value="Mechatronics">Mechatronics</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Civil">Civil</option>
                        <option value="Aerospace">Aerospace</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Bio-Mechanics">Bio-Mechanics</option>
                        <option value="Biotechnology">Biotechnology</option>
                        <option value="Biology">Biology</option>
                        <option value="Nanotechnology">Nanotechnology</option>
                        <option value="Option 13">Option 13</option>
                     </select>
                     <br /><br />
                     <input type="button" name="previous" class="previous action-button" value="Previous" />
                     <input type="button" name="next" class="next action-button" value="Next" />
                  </fieldset>
                  <fieldset>
                     <h2 class="fs-title">Freelance Form</h2>
                     <h3 class="fs-subtitle">Step 3 out of 3</h3>
                     <label>WEBSITES,IT AND SOFTWARE</label> <br>
                     <select id="Websites, IT & Software" name="skills_websites[]" placeholder="Websites, IT & Software" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="PHP">PHP</option>
                        <option value="HTML">HTML</option>
                        <option value="Software Architecture">Software Architecture</option>
                        <option value="Wordpress">Wordpress</option>
                        <option value="Javascript">Javascript</option>
                        <option value="MySQL">MySQL</option>
                        <option value="SEO">SEO</option>
                        <option value="Python">Python</option>
                        <option value="eCommerce">eCommerce</option>
                        <option value="LinkBuilding">LinkBuilding</option>
                        <option value="C# Progrmming">C# Progrmming</option>
                        <option value="Linux">Linux</option>
                        <option value=".NET">.NET</option>
                        <option value="C Programming">C Programming</option>
                        <option value="C++ Programming">C++ Programming</option>
                        <option value="SQL">SQL</option>
                        <option value="iOS App Development">iOS App Development</option>
                        <option value="Android App Development">Android App Development</option>
                        <option value="Game Development">Game Development</option>
                        <option value="BitCoin">BitCoin</option>
                        <option value="Social Networking">Social Networking</option>
                        <option value="Software Development">Software Development</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Unity 3D">Unity 3D</option>
                        <option value="Database Programming">Database Programming</option>
                        <option value="Cyber Security">Cyber Security</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Ethereum">Ethereum</option>
                        <option value="Ubuntu">Ubuntu</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Embedded Softwares">Embedded Softwares</option>
                        <option value="Protocol and communication expertise.">Protocol and communication expertise.</option>
                        <option value="HTML5 programming">HTML5 programming</option>
                        <option value="Network engineer and infrastructure expertise">Network engineer and infrastructure expertise</option>
                        <option value="Google API developer">Google API developer</option>
                        <option value="IBM Watson platform developer">IBM Watson platform developer</option>
                        <option value="NVidia paralell processing platform developer">NVidia paralell processing platform developer</option>
                        <option value="NVidia AI developer">NVidia AI developer</option>
                        <option value="Oracle">Oracle</option>
                     </select>
                     <br /><br />
                     <label>PROGRAMMING LANGUAGES</label> <br>
                     <select id="Programming Languages" name="skills_proglang[]" placeholder="Programming Languages" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="SQL">SQL</option>
                        <option value="Java">Java</option>
                        <option value="Javascript">Javascript</option>
                        <option value="C#">C#</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Python">Python</option>
                        <option value="PHP">PHP</option>
                        <option value="Ruby on Rails">Ruby on Rails</option>
                        <option value="iOS/Swift">iOS/Swift</option>
                        <option value="HTML">HTML</option>
                        <option value="HTML5">HTML5</option>
                        <option value=".NET">.NET</option>
                        <option value="Batchfile Programming">Batchfile Programming</option>
                        <option value="Assembly Laguages">Assembly Laguages</option>
                     </select>
                     <br /><br />
                     <label>MOBILE AND DEVELOPMENT</label> <br>
                     <select id="Mobile App Development" name="skills_mobappdev[]" placeholder="Mobile App Development" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="iOS">iOS</option>
                        <option value="Android">Android</option>
                        <option value="Windows">Windows</option>
                     </select>
                     <br /><br />
                     <label>INTERIOR AND ARCHITECTS</label> <br>
                     <select id="Interior & Architects" name="skills_interior[]" placeholder="Interior & Architects" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="Interior & Exterior Designing">Interior & Exterior Designing</option>
                        <option value="Crafting">Crafting</option>
                        <option value="Wall Painting">Wall Painting</option>
                        <option value="Spray painting">Spray painting</option>
                        <option value="Sketching">Sketching</option>
                        <option value="Building Architecture">Building Architecture</option>
                        <option value="3D modelling">3D modelling</option>
                        <option value="Aesthetic and lightings">Aesthetic and lightings</option>
                        <option value="Acoustics">Acoustics</option>
                     </select>
                     <br /><br />
                     <label>TRAINER</label> <br>
                     <select id="Trainer" placeholder="Trainer" name="skills_trainer[]" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="Manufacturing Design">Manufacturing Design</option>
                        <option value="Trainer ( technology)">Trainer ( technology)</option>
                        <option value="Trainer( Business)">Trainer( Business)</option>
                        <option value="Programming Language">Programming Language</option>
                        <option value="MatLab Software">MatLab Software</option>
                        <option value="LabView Software">LabView Software</option>
                        <option value="Personality Development">Personality Development</option>
                     </select>
                     <br /><br />
                     <label>CERTIFIED BY</label> <br>
                     <select id="Certified by" name="skills_certifiedby[]" placeholder="Certified by" class="js-example-placeholder-multiple" multiple="multiple" style="width:90%;border:none;" tabindex="4">
                        <option value="AutoDesk certified designer">AutoDesk certified designer</option>
                        <option value="Dassault Systems Solid">Dassault Systems Solid</option>
                        <option value="CISCO certified professional network engineer">CISCO certified professional network engineer</option>
                        <option value="DLink certified network engineer">DLink certified network engineer</option>
                        <option value="National Instruments">National Instruments</option>
                        <option value="MathWorks">MathWorks</option>
                        <option value="Bosch">Bosch</option>
                     </select>
                     <br /><br />
                     <input type="button" name="previous" class="previous action-button" value="Previous" />
                     <input type="submit" name="commit" class="submit action-button" value="Submit" />
                  </fieldset>
                  <br>
               </form>
            </div>
            <?php include 'includes/footer.php' ?>
         </div>
         <!-- End Main Content Wrapper -->
      </div>
      <!-- End Main Wrapper -->
      <!-- ALL JQUERY  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script src="js/vendor/jquery-1.12.0.min.js"></script>
      <script src="js/minix-map.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </body>
   <?php
      // alerts
      if(isset($_GET['error'])) {
          if($_GET['error'] == 'pass_match') {
              ?>
   <script type="text/javascript">
      swal("Try again!", "Passwords do not match!", "error");
   </script>
   <?php
      } else if($_GET['error'] == 'user_exists') {
          ?>
   <script type="text/javascript">
      swal("Try again!", "User already exists!", "error");
   </script>
   <?php
      } else if($_GET['error'] == 'invalid_email') {
          ?>
   <script type="text/javascript">
      swal("Invalid email address!", "Make sure you DONT add @srmuniv.edu.in to your email!", "error");
   </script>
   <?php
      }
      }
      ?>
   <script type="text/javascript">
      //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
              'transform': 'scale('+scale+')',
              // 'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
          },
          duration: 800,
          complete: function(){
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });

      $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
          },
          duration: 800,
          complete: function(){
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });



   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
   <script>
      $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
        });
        $(".js-example-placeholder-multiple").select2({
        placeholder: "Select an option"
        });


   </script>
</html>
