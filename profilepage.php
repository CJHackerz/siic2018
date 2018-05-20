<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/element.css">
<link rel="stylesheet" href="css/styleprofile.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/w3css.css" text="type/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Satisfy|Graduate|Raleway|Montserrat|Roboto" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="css/hp_css.css">
<style type="text/css">
  #myBtn {

  	color:#fc5a1a ;
  }
p,ul{

  font-size: 18px;

}

</style>

<body class="w3-content" style="max-width:3200px">
  <div class="w3-top" style="position: fixed;z-index: 7;">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
        <!-- <img src="logo.jpg" height="59px" class="w3-left" onclick="location.href='index.html';"> -->
    <button class="w3-bar-item w3-button w3-wide w3-hover-red" onclick="location.href='index.html';"><strong>PROFILE</strong> </button>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-medium w3-hide-small" id="right_bar">
      <button class="w3-bar-item w3-button w3-hover-indigo w3-indigo w3-mobile" onclick="location.href='intro.html';"><i class="fas fa-newspaper"></i> <strong class="chnge">ABOUT US</strong></button>
      <button class="w3-bar-item w3-button w3-hover-black w3-mobile" onclick="location.href='clinical.html';"><i class="fas fa-user"></i> <strong class="chnge">WHAT WE DO</strong></button>
      <button class="w3-bar-item w3-button w3-hover-black w3-mobile" onclick="location.href='disability.html';"><i class="fas fa-info"></i><strong class="chnge"> INFO DESK</strong></button>
      <button class="w3-bar-item w3-button w3-hover-black w3-mobile" onclick="location.href='#';"><i class="fas fa-users"></i> <strong class="chnge">GET INVOLVED</strong></button>
      <button class="w3-bar-item w3-button w3-hover-black w3-mobile" onclick="location.href='gallery.html';"><i class="fas fa-archive"></i> <strong class="chnge">ARCHIVES</strong></button>
      <button class="w3-bar-item w3-button w3-hover-black w3-mobile" onclick="location.href='#';"><strong class="chnge">CONTACT US </strong><i class="fas fa-phone"></i></button>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a onclick="w3_open()" class="w3-bar-item w3-button w3-right w3-hide-large" id="burger" >
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-right w3-hide-large" style="display:none;right:0;padding: 60px 0;" id="mySidebar">
  <a onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-hover-red" style="text-decoration: none;" >CLOSE <i class="fas fa-times"></i> </a>
  <a href="intro.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-indigo w3-indigo" style="text-decoration: none;" >ABOUT US</a>
  <a href="clinical.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red" style="text-decoration: none;" >WHAT WE DO</a>
  <a href="disability.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red" style="text-decoration: none;" >INFO DESK</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red" style="text-decoration: none;" >GET INVOLVED</a>
  <a href="gallery.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red" style="text-decoration: none;" >ARCHIVES</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red" style="text-decoration: none;" >CONTACT US</a>
</nav>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large" onclick="w3_open1()">
   <i style="font-size: 30px;font-color: black;padding: 60px 0;" class="fas fa-arrow-right"></i>
    </a>
 
	<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-bar-block  w3-collapse w3-top" style="position: absolute;z-index:3;width:300px;height:100%; background-color:#F4F9FE ;padding-top: 50px;" id="mySidebar1">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close1()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    
  </div>
  <div class="w3-container w3-row" style="font-size:12px;">
    <div class="w3-col s4" style="margin-left:20%;">
      <img src="cbo.jpg" class="w3-circle w3-margin-right" style="width:130px;">
    </div>
    </div>
    <br>
    <div class="w3-bar-block" style="font-size:18px;">
      <span style="margin-left:8%">Welcome, <strong>Mike</strong></span><br>
      <a href="#" class="w3-bar-item w3-button w3-padding "><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding "><i class="fa fa-cog"></i></a>
    </div>
  
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block" style="font-size:18px;">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>

  </div>
   
</nav>
</header>
<div class="w3-main" style="margin-left:250px;padding:40px 0; ">
  <header class="w3-container w3-xlarge" style="padding:0 100px; margin-top: 50px;">
    <!-- <p class="w3-left">
    	<h3><strong>INTRODUCTION</strong></h3>
					<p>
						Deepshikha, Institute of Child Development and Mental Health, is a premier institute in the field of developmental disabilities i.e. Mental Retardation, Cerebral Palsy, Autism, and Multiple, and other Disabilities based in Ranchi, Jharkhand.Our focus is childhood and developmental disabilities. As the State Nodal Agency Centre (SNAC), we work within the state in collaboration with other NGOs. Deepshikha is run by a group of house wives and volunteers of Purshree, the parent organization.
					</p>
    </p>
   <div class="w3-display-container w3-container">
    <br>
    <img src="118.jpg" style="width:100%;">
    </div>
    <br>
    <h3><strong>OUR WORK INCLUDES</strong></h3>  
    <ul>
    	<li>Comprehensive rehabilitation of children with Intellectual & Multiple Disabilities, Autism and Cerebral Palsy,</li>
    	<li>Raising awareness of Persons with Disabilities in various platforms, communities and encouraging them to take action to meet their needs.</li>
    	<li>To focus on quality in every aspect of it’s functioning to bring equality and dignity in the lives of Persons with Disabilities (PwDs).</li>

 </ul>
<br>
     <h3><strong>MISSION</strong></h3>  
    <ul>    
    <li>Deepshikha Aims to work for the child Development and Mental Health by developing models of clinical services, Education, Skill Training and Advocacy.</li>
</ul>
 <br>
  
   <h3><strong>VISION</strong></h3>  
   	<ul>
    <li>Deepshikha is a unique model institution of its kind in Jharkhand working to ensure the mainstreaming and social inclusion of persons with intellectual and developmental disabilities.</li>
    <li> It was a very humble beginning on 17th July 1988 when Purshree took the initiative to start such services in the drawing room of one of its founder members.</li>
    <li>It was our dream to create a platform for children with developmental disabilities to raise their concerns and develop the maximum potential of children, Empower their families and ensure holistic development of children with special needs.</li>
    <li>We have a multidisciplinary team of Physiotherapist, Speech therapist, Clinical Psychologist, Occupational Therapist, Special Educators, Psychiatrists delivering high quality services.</li>
    <li>Provisions for detailed psychological assessment including IQ tests, hearing and speech evaluation including Audiometry, BERA are done in the outdoor clinic at very nominal charges.</li>
    <li>As SNAC, our commitment is to create a healthy and inclusive environment in the state.</li>
 </ul>

</header>
</div> -->
<!-- 
<footer class="w3-center w3-black w3-padding-16" style="width:100%;position: absolute;z-index: 10">
  <div class="w3-xlarge w3-section">
  	<a href="https://www.facebook.com/DeepshikhaRanchi/"><i class="fab fa-facebook-square"></i></a>
  </div>
  <p>Powered by : <a href="#" id="three-coders">three <i class="fas fa-code"></i></a></p>
</footer>
           -->
	<i onclick="topFunction()" id="myBtn" title="Go to top" class="fas fa-chevron-circle-up" style="position: fixed;z-index: 12;"></i> 
<script type="text/javascript" src="js/hp_js.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  
  var mySidebar1 = document.getElementById("mySidebar1");
         
         function w3_open1() {
                 mySidebar1.style.display = 'block';
         }
         
         // Close the sidebar with the close button
         function w3_close1() {
             mySidebar1.style.display = "none";
         }

</script>
</body>
</html>