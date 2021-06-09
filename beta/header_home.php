<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="/logo.png">
<title>MyCsCode |Learn Coding and Web Development</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="Description" content="New tutorials with lots of examples of how to use Web development and coding languages to build your own projects.">
<meta name="Keywords" content="HTML,CSS,JavaScript,PHP,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips,mycscode,my,cs,code,BASIC TO ADVANCED,EASY TO LEARN,LEARN FREE WEB,ADVANCED START,TUTORIAL LEARN,islands,coding,Learn web Designing,learn web devlopment,">
<link rel="canonical" href="https://mycscode.com/" />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9227713632689850",
    enable_page_level_ads: true
  });
</script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  
}

function closeNav() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myNav").style.width = "0%";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Adding smooth scrolling to all links
  $("a").on('click', function(event) {

    // Making sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Preventing to default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll effect
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<style>

html
{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0}
html,body{font-family:Verdana,sans-serif;}html{overflow-x:hidden}
h1{font-size:36px}
h2{font-size:30px}
h3{font-size:24px}
h4{font-size:20px}
h5{font-size:18px}
h6{font-size:16px}
.mycscode-serif{font-family:serif}
h1,h2,h3,h4,h5,h6{
    font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0
}



.topnav {
  overflow: hidden;
  background-color: #f1f1f1;
  transition: top 0.3s;
  top: 0;
  position:fixed;
  width: 100% ;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 8px 12px;
  text-decoration: none;
  font-size: 15px;
  
	
}

.topnav a:hover {
  background-color: dodgerblue;
  color: white;
  	
	
}
.topnav a:active {
  background-color: dodgerblue;
  color: white;
	
}

.active {
  background-color: dodgerblue;
  color: white;
  border-radius: 0px;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: center;
 
  }
}

a{
    display: inline;
    color: black;
    text-align: center;
    text-decoration: none;
    padding:10px;
    line-height: 25px;
    border-radius: 4px;	

}

a:hover{
	background-color: dodgerblue;
	color: white;
}
a :active {
  background-color: grey;
  color: black;
		
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#link {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
    padding:15px;
    border-radius: 4px;
    background-color:red;
    color: white;
    float:right;
	border-radius: 10px;
	font-size:15px;
	line-height: 25px;
	bottom: 20px;
}


#link:hover {
    background-color:dodgerblue;
    color: white;

}

#link:active{
	background-color: #f1f1f1;
	color: black;
}

.para {
	text-align:center;
	padding:10px;
	font-size:20px;
	font-family:serif;
	
}


/* Add a background color and some padding around the form, this would work in absence of image not loaded*/
.container {
    border-radius: 5px;
    background-color: #f1f1f1;
    padding: 20px;
    margin-top:20px;
}
#myDiv {
  display: none;
  text-align: left;
}


.footer {
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
}

#login-form{
    
    border : 10px;
    max-width: 500px;
    height: auto;
    border: 2px solid #f1f1f1;
    padding:10px 75px 10px 75px;
    
}
#register-form{
    
    border : 10px;
    max-width: 500px;
    height: auto;
    border: 2px solid #f1f1f1;
    padding:10px 60px 10px 60px;
    
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  border-radius: 4px;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.login {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
  border-radius: 4px;
}

.login:hover {
  background-color: dodgerblue;
  color: white;
}
input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 8px; /* Some padding */
    border-top: none;
    border-right: none;
    border-bottom: 2px solid dodgerblue;
    border-left: none;
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Making sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 8px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

#password{
    width: 100%; /* Full width */
    padding: 8px; /* Some padding */  
    border-top: none;
    border-right: none;
    border-bottom: 2px solid dodgerblue;
    border-left: none;
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Making sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 8px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    
}

/* Styling the submit button with a specific background color */
input[type=submit] {
    background-color: white;
    color: black;
    font-size:16px;
    padding: 14px 28px;
    margin: 4px 2px;
    border: none;
    border: 2px solid #008CBA;
    border-radius: 4px;
    cursor: pointer;
    transition-duration: 0.4s;
}

/* When moving the mouse over the submit button, adding a dodgerblue color */
input[type=submit]:hover {
    background-color: dodgerblue;
    color:black;
}

.form-container{
    display:flex;
    align-items:center;
    justify-content:center;
    clear: both;
}

#signup{
    float:right;
    color:red;
}
#signup:hover{
    color:white;
}

.column {
  float: left;
  width: 50%;
  padding: 12px;
  height: 100%;
  margin-top:100px;
  
}

/* Remove extra left and right margins, due to padding */
.row {
    width:100%;
    height:max-height;
}

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
    height: 400px;
    margin-bottom: 20px;
    margin-top:0px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: white;
  height:400px;
}
.card:hover{
    background-color:#f1f1f1;
    
}

/* Login button for mobile view*/
@media screen and (max-width: 600px) {
    #signup{
    float: none;
    text-align: center;
    color:red;
}
    
}
.column-head{
    color:dodgerblue;
    font-family:serif;
    text-align:center;
    margin-top: 50px;
}

@media screen and (max-width: 600px) {
 .column-head {
    color:dodgerblue;
    font-family:serif;
    text-align:center;
    margin-top: 0px;
}
    
}

</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<a class="active" href="https://mycscode.com"><h1 style="color:white;font-family:verdana;">MyCsCode.com</h1></a>
<a href=#html><h3>HTML</h3></a>
<a href=#css><h3>CSS</h3></a>
<a href=#javascript><h3>JAVASCRIPT</h3></a>
<a href=#php><h3>PHP</h3></a>
<a href="/editor"><h3><u>Online Editor</u></h3></a>
<a href=#aboutus><h3>About Us</h3></a>
<a href=#contactus><h3>Contact Us</h3></a>
<a href="/dynamic/login" id="signup"><h3>Login/Sign up</h3></a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()"><h3>&#9776;</h3>
<i class="fa fa-bars"></i></a>
</div>