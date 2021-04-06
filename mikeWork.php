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
   	  left: 46%;
   	  height: 11%;
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
   	left:11.5%;
   	display: flex;
   	flex-direction: column;
   	justify-content: space-around;
   	align-items: center;

   }


   .hiddenDiv{
       position: relative;
	   top: 0;
	   left: 0;
	   display:flex;
	   align-items:flex-start;
	   justify-content:flex-start;
	   flex-wrap: wrap;
	   color:white;
	   font-size:1.25vw;
	   display:none;
	   line-height: 22.5px;
	   padding:5%;
   }

   .linkBtn{
	   position: absolute;
	   bottom: 5%;
	   right: 5%;
	   display: flex;
	   justify-content:center;
	   align-items:center;
	   display: none;
	   height:20%;
	   width: 35%;
   }

   .linkBtn button{

	   border:none;
	   border-radius:10px;
	   height:100%;
	   width: 100%;

   }



   .projectsDivRow{

   	  height: 49%;
   	  width: 100%;
   	  display: flex;
   	  flex-direction: row;
   	  justify-content: space-around;
   	  align-items: center;

   }


   .projectSquare{

   	height: 100%;
   	width: 32.75%;
   	background: rgba(255, 255, 255, 0.603);
	display: flex;
	flex-direction: column;
	border-radius: 5px;
	cursor: pointer;
	position: relative;

   }

   .projectSquare:hover > .projectSquareA { opacity: 0.05 }
   .projectSquare:hover > .projectSquareB { opacity: 0.05 }
   .projectSquare:hover > .hiddenDiv { display: flex; }
   .projectSquare:hover > .linkBtn { display: flex; }




   


   .projectSquareA{
	   display: flex;
	   justify-content: center;
	   align-items: center;
   }




   a{

	   z-index:5;
	   cursor:pointer;
	   text-decoration: none;

   }


   button{

	   cursor: pointer;
	   outline:none;
   }





	span{

		font-size: 0.95vw;
	}
   
 

@media all and (max-width: 600px){

 
   #headerDiv{

   	  position: absolute;
   	  top: 5%;
   	  left: 25%;
   	  height: 12.5%;
   	  width: 50%;

   }


   #projectsDiv{
   	position: absolute;
   	top: 22.5%;
   	height: 300%;
   	width: 85%;
   	left:7.5%;
   }

    
	.hiddenDiv{

		font-size: 3.5vw;
	}


	span{

		font-size: 3vw;
	}
   



   .projectsDivRow{

   	  height: 48%;
   	  width: 100%;
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

	height: 55%;
	width: auto;
}


</style>



<div id='headerDiv'>

	<img style="height: 90%" src='img/laptop.png' class='portfolioImg'>

</div>

<div id='projectsDiv'>


	<div class="projectsDivRow">
	   <div class="projectSquare">

	   <div class='hiddenDiv'> 3 advanced Monopoly AIs building strategies in real time , using search trees, hashing and sorting algorithms.
	   </div>

	   
		<a href='www.youtube.com' class='linkBtn'>
		
			<button>use it</button>
		
		</a>

	    	<div class="projectSquareA">
				<img style='height: 65%;' src='img/monop.png' class='portfolioImg'>
			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">Monopoly AIs</div>
				<div class="projectSquareBB">JS, AI algos</div>
			</div>
	   </div>
	   <div class="projectSquare">
    	   <div class='hiddenDiv'>I built a chess AI (I called Eva) , using alpha beta , hashings and sorting algorithms.</div>

		 <a href='www.youtube.com' class='linkBtn'>
		
		     <button>use it</button>
	
       	</a>


		<div class="projectSquareA">
			<img src='img/eva.png' class='portfolioImg'>

		</div>
		<div class="projectSquareB">
			<div class="projectSquareBA">EVA (Chess AI)</div>
			<div class="projectSquareBB">JS,  AI algos</div>
		</div>
     </div>	   
   
	 <div class="projectSquare">
  	   <div class='hiddenDiv'>Smartchain is a transaction system , implementing a blockchain mechanism. </br>Each transaction is mined, and inserted, in a fashion to make it incoruptible. </div>

		 <a href='www.youtube.com' class='linkBtn'>
		
	     	<button>use it</button>
  	
	    </a>

		<div class="projectSquareA">
			<img src='img/smart.png' class='portfolioImg'>

		</div>
		<div class="projectSquareB">
			<div class="projectSquareBA">Smart(blockchain)</div>
			<div class="projectSquareBB">PHP, SQL, JS</div>
		</div>
     </div>	 

	</div>

    <div class="projectsDivRow">
		<div class="projectSquare">
		<div class='hiddenDiv'>Belleimage , photography selling app including a cart system (implementing Stripe API), and a message system. </br> <span style='opacity:0.9'>Test : type "event" in the search bar.</br> Test credit card :"42424242422"</span>
		</div>

		<a href='www.youtube.com' class='linkBtn'>
	     	<button>use it</button>
	     </a>


			<div class="projectSquareA">
				<img style='height:50%; opacity: 0.8;' src='img/belleimage.png' class='portfolioImg'>

			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">Belleimage</div>
				<div class="projectSquareBB">Symfony, PHP, JS</div>
			</div>
		 </div>	 
	
		 <div class="projectSquare">
		 <div class='hiddenDiv'>SmartLab , productivity tracking app. Build your own lab , and get data about your work habits <span style=' opacity:0.9'>Test admin : "guest"</br> Test password : "pass"</span></div>
		 
		 <a href='www.youtube.com' class='linkBtn'>
		
	      	<button>use it</button>
	
	     </a>


			<div class="projectSquareA">
				<img src='img/stats.png' class='portfolioImg'>

			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">SmartLab</div>
				<div class="projectSquareBB">Symfony, PHP, JS</div>
			</div>
		 </div>	 
	
		 <div class="projectSquare">
		   <div class='hiddenDiv'>Betnet is a betting prediction model , based on a monte carlo algorithm. Data collected through an API, to simulate 10 000 games before the calculation of each odd.</div>

		   <a href='https://www.youtube.com' class='linkBtn'>
		
		         <button>use it</button>
	
	       </a>


			<div class="projectSquareA">
				<img style='opacity: 0.8;' src='img/field.png' class='portfolioImg'>
			</div>
			<div class="projectSquareB">
				<div class="projectSquareBA">betnet(soccer AI)</div>
				<div class="projectSquareBB">JS</div>
			</div>
		 </div>	 

	</div>
</div>


</body>
</html>