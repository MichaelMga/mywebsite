<?php 

   require 'header.php';

?>


<!DOCTYPE html>
<html>
<head>


</head>
<body>

	<style type="text/css">

	
     body{

     	background: rgb(0,0,0,0.8);
	    color: rgb(255,255,255,0.9);
		font-family: 'Domine', serif;		  
		
		
		}



	  #aboutMeDiv{  	

	  	position: absolute;
	  	top:22.5%;
	  	height: 15%;
	  	width: 80%;
	  	left:10%;
	  	display: flex;
	  	flex-direction: column;

	  }


	  #aboutMeDivHeader{

	  	height: 25%;
	  	width: 100%;
	  	display: flex;
	  	flex-direction: row;
	  	justify-content: flex-start;
	  	align-items: center;
	  	font-size: 3vw;
		color: grey;


	  }

	  #aboutMeDivBottom{
	  	height: 50%;
	  	width: 100%;
		margin-top: 1%;
	  	display: flex;
	  	justify-content: flex-start;
	  	align-items: flex-start;
	  	font-size: 1.25vw;
	
	  }


	  #experiencesDiv{

	  	position: absolute;
	  	top:34.5%;
	  	height: 35%;
	  	width: 80%;
	  	left:10%;
	  	display: flex;
	  	flex-direction: column;
	  }

	  #experiencesDivA{
	  	height: 20%;
	  	width: 100%;
	  	display: flex;
	  	justify-content: flex-start;
	  	align-items: center;
	  	font-size: 3vw;
		 color: grey;


	  }

	  #experiencesDivB{
	  	height: 80%;
	  	width: 100%;
	  	display: flex;
	  	flex-direction: column;
	  	justify-content: space-around;
	  	align-items: center;
	  }

	  .experiencesDivBrow{

	  	height: 47%;
	  	width: 99.5%;
	  	display: flex;
	  	flex-direction: row;
	  	justify-content: space-around;
	  } 


	 #preferencesDiv{

	  	position: absolute;
	  	top:82.5%;
	  	height: 15%;
	  	width: 80%;
	  	left:10%;
	  }


	  .projectDiv{
	  	height: 100%;
	  	width: 24%;
	  	display: flex;
	  	flex-direction: column;
	  	justify-content: space-around;

	  }

	  .projectDivTop{

	  	height: 20%;
	  	width: 100%;
	  	display: flex;
	  	justify-content: center;
	  	align-items: center;
	  }

	  .projectDivBottom{

	  	height: 80%;
	  	width: 100%;
	  	display: flex;
	  	justify-content: flex-start;
	  	align-items: flex-start;
	  	font-size : 1vw;


	  }	



	  #nameDiv{

		  position: absolute;
		  top: 5%;
		  left:40%;
		  width: 20%;
		  height: 10%;
		  background: rgb(255,255,255,0.05);
		  display: flex;
		  flex-direction: column;
		  justify-content: space-between;
		  align-items: center;

	  }

	  #nameDivA{

		  height: 50%;
		  width: 100%;
		  font-size: 2.5vw;
		  display: flex;
		  justify-content: center;
		  align-items: center;

	  }


	  #nameDivB{

	     height: 30%;
		 width: 100%;
		 display: flex;
		 justify-content: center;
		 align-items: center;

	  }



	  #bottomDiv{
		  position: absolute;
		  top: 70%;
		  left:10%;
		  height: 25%;
		  width: 80%;
		  display: flex;
		  flex-direction: row;
		  align-items: center;
		  justify-content: space-between;
	  }

	  #bottomDivA{

		  height: 100%;
		  width: 45%;
		  display: flex;
		  flex-direction: column;
		  justify-content: space-between;
		  align-items: center;
	  }


	  #bottomDivAA{
		  height: 45%;
		  width: 100%;
		  display: flex;
		  flex-direction: column;
	  }

	  #bottomDivAAA{

		height: 50%;
		width: 100%;
		display: flex;
		justify-content: flex-start;
		align-items: flex-start;
		font-size: 2.5vw;
		color:grey;

	  }

	   #bottomDivAAB{

		height: 50%;
		width: 100%;
		display: flex;
		justify-content: flex-start;
		align-items: center;
		font-size: 1vw;

	  }




	  #bottomDivB{

		  height: 70%;
		  width: 35%;
		  background: rgb(255,255,255,0.05);
		  display: flex;
		  flex-direction: column;
		  align-items: flex-start;
		  justify-content: space-around;

	  }


	  #bottomDivBA{

		  margin-left:5%;



	  }


	  





	

	</style>


<div id='backgroundDiv'>


<div id='nameDiv'>
	<div id='nameDivA'>Michael Manga</div>
	<div id='nameDivB'>web developer</div>
</div>


<div id='aboutMeDiv'>
	<div id='aboutMeDivHeader'>About Me</div>
	<div id='aboutMeDivBottom'>I'm Michael, a guy who which to become one of the best developers in europe. </div>
</div>
 
 <div id='experiencesDiv'>
 	<div id='experiencesDivA'>
 		Experience
 		
 	</div>
 	<div id='experiencesDivB'>

 		<div class='experiencesDivBrow'>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>Monopoly AI </div>
 				<div class='projectDivBottom'>My biggest project. I decided to build 3 AIs, developping monopoly strategies in real time, using search trees.</div>
 			</div>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>Chess AI</div>
 				<div class='projectDivBottom'>I built from scratch a chess AI (I called eva).All the hours I put on it learnt to me a lot about graph searches, hashes.</div>
 			</div>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>Blockchain</div>
 				<div class='projectDivBottom'>I built a system allowing users to build their own blockchain , to perform different use.</div>
 			</div>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>Soccer Predictions AI</div>
 				<div class='projectDivBottom'>
 					I built from scratch a chess AI (I called eva).All the hours I put on it learnt to me a lot about graph searches, hashes.
 				</div>
 			</div>
 		</div>
	    <div class='experiencesDivBrow'>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>Time tracking app</div>
 				<div class='projectDivBottom'>
 					I built from scratch a chess AI (I called eva).All the hours I put on it learnt to me a lot about graph searches, hashes.
 				</div>
 			</div>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>E-commerce website</div>
 				<div class='projectDivBottom'>
 					I built from scratch a chess AI (I called eva).All the hours I put on it learnt to me a lot about graph searches, hashes.
 				</div>
 			</div>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>browser game (platform)</div>
 				<div class='projectDivBottom'>
 					I built from scratch a chess AI (I called eva).All the hours I put on it learnt to me a lot about graph searches, hashes.
 				</div>
 			</div>
 			<div class='projectDiv'>
 				<div class='projectDivTop'>brownser game(horror)</div>
 				<div class='projectDivBottom'>
 					I built from scratch a chess AI (I called eva).All the hours I put on it learnt to me a lot about graph searches, hashes.
 				</div>
 			</div>
 		</div> 		
 	</div>
 </div>


  
  <div id='bottomDiv'>
	 <div id='bottomDivA'>

		<div id='bottomDivAA'>
			<div id='bottomDivAAA'>Stack</div>
			<div id='bottomDivAAB'>PHP, Symfony , Javascript , Ajax , CSS</div>
		</div>

	 </div>
	 <div id='bottomDivB'>
		<div id='bottomDivBA'>Mail: michael.mangajocky@gmail.com</div>
		<div id='bottomDivBA'>Phone number : 06 22 85 94 05</div>
		<div id='bottomDivBA'>Adress: 7, Newton St. , Stains, 93000 (France)</div>
		<div id='bottomDivBA'>Github: www.github.com/michaelMga</div>


	 </div>
  </div>




</div>

</body>
</html>