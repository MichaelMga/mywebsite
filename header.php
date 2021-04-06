
<!DOCTYPE html>
<html>
<head>
	<title>Mike portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">






    

</head>
<body>


  <style>




body{


    color:white;

	background: rgb(0,0,0,0.8);
}
      
#leftNav{


	background: black;

	height: 100%;

	width: 5%;

	position: fixed;

	left: 0;

	top:0;

	display: flex;

	flex-direction: column;

	justify-content: flex-end;

	align-items: center;




}
	

#leftNavA{
  height: 45%;
  width: 90%;
  margin-bottom:45%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
}



#leftNavB{
  height: 35%;
  width: 90%;
  margin-bottom: 10%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
}


.leftNavAlogo{

	height: 15%;
	width: 80%;
	display: flex;
	justify-content: center;
	align-items: center;
	position: relative;
}

.inactiveLeftNavAlogo{
   opacity: 0.4;
}


.logoImg{

	height: 65%;
	width: auto;


}


.leftNavBlogo{

	height: 25%;
	width: 80%;
	display: flex;
	justify-content: center;
	align-items: center;
	opacity: 0.8;
	position: relative;

}



#textDiv{

	position: absolute;
	left: 10%;
	top: 20%;
	height: 60%;
	width: 80%;
	display: flex;
	flex-direction: column;


}


#textDivA{

	height: 70%;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
}


#textDivAA{

	height: 80%;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: flex-start;
}


.textDivAAA{

    height: 25%;
    width: 80%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-size: 4.5vw;

}

#textDivAB{

	height: 20%;
	width: 100%;
	display: flex;
	justify-content: flex-start;
	align-items: flex-start;
}


#textDivB{

	height: 30%;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: flex-start;
}

#textDivBA{

	height: 35%;
	width: 15%;
	margin-bottom: 4.5%;
	border-radius: 5px;
	border: solid 1.5px;
	border-color: rgb(0,191,255);
	color: rgb(0,191,255);
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 2vw;
	cursor: pointer;
	position:relative;

}


.workLink{

	position:absolute;
	top:0;
	left:0;
	height:100%;
	width: 100%;
	z-index: 5;
}



.navLink{

	position: absolute;
	top:0;
	left:0;
	height:100%;
	width: 100%;
	z-index: 5;
}

@media all and (max-width: 600px){

  #leftNav{
	background: black;
	height: 10%;
	width: 100%;
	position: fixed;
	left: 0;
	top:90%;
	display: flex;
	flex-direction: row;
	justify-content: flex-end;
	align-items: center;
	z-index:8;
   }


   #leftNavA{ 

	 height: 100%;
     width: 100%;
     margin-bottom:0;
     display: flex;
     flex-direction: row;
     justify-content: space-around;
     align-items: center;

   }

   .leftNavAlogo {
    
	  height: 75%;
      width: 22.5%;

   }



   #leftNavB{ 

	   display:none;
   }


   .textDivAAA{

    height: 25%;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-size: 12.5vw;

}


#textDivAB {
    height: 20%;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    margin-top: 7.5%;
    font-size: 5.25vw;
}


#textDivBA {
    height: 35%;
    width: 90%;
    margin-bottom: 4.5%;
    border-radius: 5px;
    border: solid 1.5px;
    border-color: rgb(0,191,255);
    color: rgb(0,191,255);
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 6.5vw;
    cursor: pointer;
}
	

}



  </style>

<div id='leftNav'>

	<div id='leftNavA'>
		<div class='leftNavAlogo' id='homeLink'>

		  <a class='navLink' href="http://localhost/mywebsite/mike.php"></a>

		  <img class='logoImg' src="img/home.png">
			
		</div>

		<div class='leftNavAlogo' id='userLink'>

		<a class='navLink' href="http://localhost/mywebsite/mikeProfile.php"></a>

		    <img class='logoImg inactiveLeftNavAlogo' src="img/user.png">

		</div>

		<div class='leftNavAlogo' id='portfolioLink'>

		  <a class='navLink' href="http://localhost/mywebsite/mikeWork.php"></a>

		   <img class='logoImg inactiveLeftNavAlogo' src="img/copy.png">
		
		</div>

		<div class='leftNavAlogo' id='emailLink'>

		  <a class='navLink' href="http://localhost/mywebsite/contact.php"></a>

		   <img class='logoImg inactiveLeftNavAlogo' src="img/email.png">
			
		</div>
	</div>

	<div id='leftNavB'>
		
		<div class='leftNavBlogo'>
			
		</div>

		<div class='leftNavBlogo'>
			 <img class='logoImg' src="img/medium.png">
		</div>

		<div class='leftNavBlogo'>
		   <img class='logoImg ' src="img/youtube.png">
		</div>
	</div>


</div>
