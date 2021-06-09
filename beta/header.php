<html lang="en">
<head><meta charset="windows-1252">
<link rel="icon" type="image/png" href="/logo.png">
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="Description" content="HTML Online Editor is a online web development tool, which supports every web development language. You can practice here, how your html snippets looks like in web browser.">
<meta name="Keywords" content="Onlinehtml editor,Online HTML web devlopment Editor,HTML editor, Editor tool,HTML,CSS,JavaScript,PHP,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips,mycscode,my,cs,code,BASIC TO ADVANCED,EASY TO LEARN,LEARN FREE WEB,ADVANCED START,TUTORIAL LEARN,islands,coding,Learn web Designing,learn web devlopment">

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
  document.getElementById("myNav").style.width = "0%";
}
</script>

<style>
.header {
	background-color: dodgerblue;
	color: white;
	padding: 10px;
	font-family: courier;
	text-align: center;
	}

.topnav {
  overflow: hidden;
  background-color: #f1f1f1;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 20px 24px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: dodgerblue;
  color: black;
}

.active {
  background-color: dodgerblue;
  color: white;
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
    text-align: left;
  }
}

a{
    display: inline;
    color: black;
    text-align: center;
    text-decoration: none;
    padding:10px;
    line-height: 25px;

}
a:hover{
	background-color: dodgerblue;
	color: white;
}
a:active {
  background-color: grey;
  color: black;
		
}

#link {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
    padding:10px;
    font-size:20px;
    line-height: 25px;
    border-radius: 4px;
    background-color:red;
}


#link:hover {
    background-color:dodgerblue;
    color: black;

}

#link:active{
	background-color: #f1f1f1;
	color: black;
}
	
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: absolute;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    background-color: dodgerblue;
    color:black;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 40px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}



.footer {
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #f1f1f1;
    color: black;
    text-align: center;
    font-family:Verdana,sans-serif;
    font-size:15px;
    

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
}
#dob{
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
    resize: vertical;
}

#num1 {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  background-color: #2196F3;
  width:20%;
  display:inline-block;
  text-align:center;
}
#num2 {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  background-color: #2196F3;
  width:20%;
  display:inline-block;
  text-align:center;
}
</style>

</head>

<body>
    
<div class="header">
<h1>MyCsCode</h1>
<p style="text-align:right;font-size:25px;"><?php echo $slogan; ?></p>
</div>
<div class="topnav" id="myTopnav">
<a href="/" class="active">Home</a>
<a href="/html/learnhtml">HTML</a>
<a href="/css/learncss">CSS</a>
<a href="/javascript/learnjavascript">JAVASCRIPT</a>
<a href="/php/learnphp">PHP</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;
<i class="fa fa-bars"></i>
</a>
</div>