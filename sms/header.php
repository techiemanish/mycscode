<html lang="en">
    <head>
        <meta charset="windows-1252">
        <link rel="icon" type="image/png" href="/logo.png">
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta name="Description" content="School Management System is designed for Schools to manage their students and staff efficiently. It is desgined and developed by MyCScode.">
        <meta name="Keywords" content="School management system,school,management,system,Staff management sytem, mycscode,learn coding">
        <link rel="canonical" href="https://mycscode.com/" />
        <link rel="stylesheet" href="smsstyle.css">
        <script type="text/javascript" src="smsscript.js"></script>
        <style>
        /*Background testing background: linear-gradient(-45deg,#66ff33,#3366ff,#FF00FF);*/
        /*This is styling page for school management system*/
        /*Written by: Manish Tiwari*/
        
        body{
            margin:0;
            width : 100%;
            height: 100vh;
            font-family: "Exo",sans-serif;
            background: linear-gradient(-45deg,#66ff33,#3366ff,#FF00FF);/*#FF00FF,#0099FF*/
            background-size:400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        @keyframes gradientBG{
            0%{
                background-position: 0% 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position: 0% 50%;
            }
        }
        .topnav {
          overflow: hidden;
          background-color: white;
          transition: top 0.3s;
          top: 0;
          position:fixed;
          width: 100% ;
          color:black;
        }
        
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
        }
        .topnav {
                  overflow: hidden;
                  background-color: white;
                  transition: top 0.3s;
                  top: 0;
                  position:fixed;
                  width: 100%;
                  color:black;
                }
        .footer {
                left: 0;
                bottom: 0;
                position: fixed;
                width: 100%;
                background-color: #f1f1f1;
                text-align: center;
                }
        .footer a {
                display: inline;
                color: black;
                text-align: center;
                text-decoration: none;
                padding:5px;
                border-radius: 4px;	
                }

        .footer a:hover{
	            background-color: dodgerblue;
	            color: white;
                }
                
        .footer a :active {
                background-color: grey;
                color: black;
	            }
	   #login-form{
	            position: absolute;
	            top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border : 10px;
                max-width: 500px;
                height: auto;
                border: 2px solid #f1f1f1;
                padding:10px 75px 10px 75px;
            }
        @media screen and (max-width: 600px) {
        #login-form{
	            position: absolute;
	            top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border : 10px;
                max-width: 180px;
                height: auto;
                border: 2px solid #f1f1f1;
                padding:10px 75px 10px 75px;
                }
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

</style>
    </head>

<body>
<div class="topnav">
<h2>School Management System</h2>
</div>
