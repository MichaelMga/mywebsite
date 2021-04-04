<?php 

   require 'header.php';

?>


	
<style>


   body{
   	  background: rgb(0,0,0,0.8);
	  font-family: 'Fredoka One', cursive;
	  color:rgba(10, 15, 25, 0.72);
   }

   #headerDiv{

   	  position: absolute;
   	  top: 7.25%;
   	  left: 45%;
   	  height: 10%;
   	  width: 10%;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  color: rgba(115, 209, 201, 0.8);
	  font-size: 1.75vw;

   }


   #projectsDiv{

   	position: absolute;
   	top: 27.5%;
   	height: 70%;
   	width: 80%;
   	left:10%;
   	display: flex;
   	flex-direction: column;
   	justify-content: space-around;
   	align-items: center;

   }

   .projectsDivRow{

   	  height: 48%;
   	  width: 100%;
   	  display: flex;
   	  flex-direction: row;
   	  justify-content: space-around;
   	  align-items: center;

   }


   .projectSquare{

   	height: 100%;
   	width: 24.5%;
   	background: rgba(255, 255, 255, 0.603);
	display: flex;
	flex-direction: column;
	border-radius: 5px;


   }

   .projectSquareA{
	   display: flex;
	   justify-content: center;
	   align-items: center;
   }

 

@media all and (max-width: 800px){

 
   #headerDiv{

   	  position: absolute;
   	  top: 5%;
   	  left: 25%;
   	  height: 12.5%;
   	  width: 50%;
   	  background: red;

   }


   #projectsDiv{

   	position: absolute;
   	top: 22.5%;
   	height: 300%;
   	width: 85%;
   	left:7.5%;
   	background: blue;

   }


   .projectsDivRow{

   	  height: 48%;
   	  width: 100%;
   	  background: red;
   	  display: flex;
   	  flex-direction: column;
   	  justify-content: space-around;
   	  align-items: center;

   }


   .projectSquare{

   	height: 24%;
   	width: 100%;
   	background: grey;
	border-radius: 5px;
   }

 



}



.projectSquareA{


	height: 80%;
	width: 100%;


}


.projectSquareB{
	height: 20%;
	width: 100%;
	background: rgba(242, 145, 20, 0.8);
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-around;
}


.projectSquareBA{

	height: 45%;
	width: 80%;
	font-size: 1.75vw;
	display: flex;
	justify-content: center;
	align-items: flex-start;



}



.projectSquareBB{


	height: 40%;
	width: 80%;
	font-size: 0.7vw;
	display: flex;
	justify-content: center;
	align-items: flex-end;

	

}

.portfolioImg{

	height: 50%;
	width: auto;
}


</style>



<div id='headerDiv'>

	<img style="height: 90%" src='img/laptop.png' class='portfolioImg'>

</div>

<div id='projectsDiv'>


	<div class="projectsDivRow">
	   <div class="projectSquare">
	    	<div class="projectSquareA">
				<img style='height: 60%;' src='img/monop.png' class='portfolioImg'>
			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">Monopoly AIs</div>
				<div class="projectSquareBB">JS, AI algos</div>
			</div>
	   </div>
	   <div class="projectSquare">
		<div class="projectSquareA">
			<img src='img/eva.png' class='portfolioImg'>

		</div>
		<div class="projectSquareB">
			<div class="projectSquareBA">EVA (Chess AI)</div>
			<div class="projectSquareBB">JS,  AI algos</div>
		</div>
     </div>	   
   
	 <div class="projectSquare">
		<div class="projectSquareA">
			<img src='img/smart.png' class='portfolioImg'>

		</div>
		<div class="projectSquareB">
			<div class="projectSquareBA">Smart(blockchain)</div>
			<div class="projectSquareBB">PHP, SQL, JS</div>
		</div>
     </div>	 

	 <div class="projectSquare">
		<div class="projectSquareA">
			<img src='img/field.png' class='portfolioImg'>

		</div>
		<div class="projectSquareB">
			<div class="projectSquareBA">Betnet(Bet AI)</div>
			<div class="projectSquareBB">PHP, JS</div>
		</div>
     </div>	 
	</div>
    <div class="projectsDivRow">
		<div class="projectSquare">
			<div class="projectSquareA">
				<img style='height:45%; opacity: 0.8;' src='img/belleimage.png' class='portfolioImg'>

			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">Belleimage</div>
				<div class="projectSquareBB">Symfony, PHP, JS</div>
			</div>
		 </div>	 
	
		 <div class="projectSquare">
			<div class="projectSquareA">
				<img src='img/stats.png' class='portfolioImg'>

			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">SmartLab</div>
				<div class="projectSquareBB">Symfony, PHP, JS</div>
			</div>
		 </div>	 
	
		 <div class="projectSquare">
			<div class="projectSquareA">
				<img style='opacity: 0.8;' src='img/pandemic.png' class='portfolioImg'>
			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">Pandemic(browser)</div>
				<div class="projectSquareBB">JS</div>
			</div>
		 </div>	 
	
		 <div class="projectSquare">
			<div class="projectSquareA">
				<img src='img/hero.png' class='portfolioImg'>

			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">hero(browser)</div>
				<div class="projectSquareBB">JS</div>
			</div>
		 </div>	 
	
	</div>
</div>


</body>
</html>