<?
include('header.php');
?>


<script type="text/javascript">
$('#myTab a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
})



$('#myTab a:last').tab('show');


</script>
<div class="container-fluid">
<div class="row-fluid">
<div class="tabbable">

    <ul id="myTab" class="nav nav-tabs" >
      <li><a href="#main" data-toggle="tab" ><strong>Main Information</strong></a></li>
      <li><a href="#mobile" data-toggle="tab"> <strong> Mobile Application</strong></a></li>
      <li><a href="#website" data-toggle="tab"> <strong> WebSite</strong></a></li>
      <li><a href="#faqs" data-toggle="tab"><strong> FAQs</strong></a></li>
    </ul>
	</div>
    <div class="tab-content">
	
      <div class="tab-pane fade in active" id="main">
	  <div class="container leftband"  style="padding-right:20px">
	<div class="row-fluid">
        <div class="span9 offset1 ">
            <ul id="recentActivities" style="margin-bottom: 10px; overflow-y:auto">
              <li class="customLi"><a style="font-size:14px" href="#what">- What is EnviroCar?</a></li>
              <li class="customLi"><a style="font-size:14px"  href="#how">- How EnviroCar works?</a></li>
		  </ul>
        </div> </div></div>
		 
		
<div class="container rightband" style="padding-left:20px">
 <div class="row-fluid">
 		<div class="span9 offset1">
		<div class="customLi"><h3 id="what">What is EnviroCar?</h3>
		<p style="text-align: justify; font-size:14px">  
	 		<img class="offset2" src="./assets/img/architecture_new3.svg" height="400" width="600" />
			   </br></br> 
				A community based system for gathering you car’s data via with your smartphone bluetooth-paired OBD2 adapter to 
				make your city smarter.	</br>enviroCar allows you to drive more efficiently by giving you for example full 
				insight in consumption and costs. It allows you to compare your driving statistics with friends and to enjoy 
				competing to become the most efficient driver. Furthermore, enviroCar enables you to contribute data collected 
				by your car to the open enviroCar community. </br></br>From those data,	enviroCar generates information about 
				traffic in your city and its emissions on our streets. The information will support e.g. urban planners to improve
				traffic light phases or to clarify the impact of traffic calming measures. </br>enviroCar is the first platform to 
				collect information about the actual emissions right when they happen because it is connected directly to the sensors in the car.
				Join the community and help to make our world a little smarter, traffic less stressful, and economic driving more fun!
				</p>
				
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>

           </div>
           </div>    
         </div>    
         </div>
		 
<div class="container leftband" style="padding-right:20px">
 <div class="row-fluid">
 		<div class="span9 offset1">
		<div class="customLi"><h3 id="how">How EnviroCar works?</h3>
		 <p style="text-align: justify; font-size:15px; margin-bottom: 10px; overflow-y:auto"> enviroCar uses an OBD2 adapter that you can easily plug into your car to access data generated by the 
				 various sensors of your car. The enviroCar App installed on your smartphone is able to connect automatically
				 to that OBD2 adapter to read out parameters from your car, such as current fuel consumption or revolutions 
				 per minute. This way, enviroCar can accurately measure your driving costs, can compute emitted CO2 or even 
				 estimate the noise created by your car.</br>
				</br> <img class="offset2" src="./assets/img/obd_adapter.png" height="200" width="400" ></br>
				</br>By using OBD2 adapter, enviroCar is able to receive your cars data by pairing your smartphone via Bluetooth with the adapter. The smartphone app analyzes and parses the data to give you in the app and on the enviroCar these information, which you want to see.
				</p>
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
               
           </div> </div>   
         </div>    
         </div></div>
		 
   <!--end of div id="main"-->
     
	 <div class="tab-pane fade in " id="mobile">
	  <div class="container leftband" style="padding-right:20px">
	<div class="row-fluid">
        <div class="span9 offset1 ">
            <ul id="recentActivities" style="margin-bottom: 10px; overflow-y:auto">
              <li class="customLi"><a style="font-size:14px" href="#reg">- How to registar from your mobile phone?</a></li>
              <li class="customLi"><a style="font-size:14px"  href="#down">- How to Download Envirocar application?</a></li>
			  <li class="customLi"><a style="font-size:14px" href="#sync">- How to Synchronize your data?</a></li>

		  </ul>
        </div> 
		</div>
		</div>
	 		
		<div class="container rightband" style="padding-left:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><h2 id="reg">Registration</h2>
					<p>  
							registration Steps ... </br> .. </br> ... </br> .. </br>... </br> .. </br>
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
		<div class="container leftband" style="padding-right:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><a id="down">Downloading</a>
					<p>  
							Downloading Steps ... </br> .. </br> ... </br> .. </br>... </br> .. </br>
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
		<div class="container rightband" style="padding-left:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><a id="sync">synchronization</a>
					<p>  
							synchronization Steps ... </br> .. </br> ... </br> .. </br>... </br> .. </br>
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
	 
	 </div>
     <!--end of div id="mobile"-->
	  <div class="tab-pane fade in " id="website">
	  
	   <div class="container leftband" style="padding-right:20px">
	<div class="row-fluid">
        <div class="span9 offset1 ">
            <ul id="recentActivities" style="margin-bottom: 10px; overflow-y:auto">
              <li class="customLi"><a style="font-size:14px" href="#sign">- How to Regitar and Sign In ?</a></li>
              <li class="customLi"><a style="font-size:14px"  href="#compare">- How to Comapre your Data?</a></li>
			  <li class="customLi"><a style="font-size:14px" href="#share">- How to Share your Data?</a></li>
			  <li class="customLi"><a style="font-size:14px" href="#Cookies">- Why does this website use cookies?</a></li>



		  </ul>
        </div> </div></div>
	  
	  		<div class="container rightband" style="padding-left:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><h3 id="sign">How to Registar and Sign In ?</h3>
					<p style="text-align: justify; font-size:14px;">
					<strong> Registeration </strong> 
					<img class="offset2" src="./assets/img/registrationsteps.jpg" height="500" width="700" /></br>
					1- From the start page; press "Register" as seen in the picture.</br>
					2- Fill your information inside the input fileds, and then press "Register" to create a new account of the entered information.</br>
					3- If you want to reset the information inside the input fields; press "Reset". </br></br></br>

					</p>
					<strong style="font-size:14px;"> Signing In </strong>
					<p style="text-align: justify; font-size:14px;">
					 
					  
						<img class="offset2" src="./assets/img/sign.jpg" height="500" width="700" /></br>
					1-From the start page; fill your user name and password and press “SignIn” .</br>
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
		<div class="container leftband" style="padding-right:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><h3 id="compare">How to Compare your Data?</h3>
					<p>  
							comparing Steps and options... </br> .. </br> ... </br> .. </br>... </br> .. </br>
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
		<div class="container rightband" style="padding-left:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><h3 id="share">How to share your data?</h3>
					<p>  
							sharing options... </br> .. </br> ... </br> .. </br>... </br> .. </br>
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
	
	  <div class="container leftband" style="padding-right:20px">
			<div class="row-fluid">
				<div class="span9 offset1">
				<div class="customLi"><h3 id="Cookies">Why does this website use cookies?</h3>
					<p style="text-align: justify; font-size:14px;">  
							<strong> What are cookies?</strong></br>
						 
						 Cookies are textfiles that contain certain settings information of the website.
						 The website places cookies on your browser software in order to store personal settings for example
						 that you stay logged in when you visit the website again during a session.
				
						 </br>
						 </br>
					     <strong>And why cookies?</strong></br>
						 
						 Cookies make a website more user friendly and more functional.
					     Cookies help to make your visit on our website more comfortable. Because certain settings of you can be stored temporarily.
						 For us the website designer cookies help making the programming work and the data administration easier.
                         </br>
						 </br>
						 <strong>Should I disable cookies?</strong>	</br>
						 
                         The using of cookies is combined with functionality on our website. If you disable them
						 the use of a few functions could be impossible or they could be used very circuitously.
						 </br>
						 </br>
						 <strong>Where can i find more information about cookies?</strong></br>
				 
					<a href=http://en.wikipedia.org/wiki/HTTP_cookie> http://en.wikipedia.org/wiki/HTTP_cookie</a>
												 
					</p>
					
					<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
			 </div>    
			   </div>    
            </div>    
         </div>
	  
	  </div> 
      <!--end of div id="website"-->
	  <div class="tab-pane fade in " id="faqs">
	  
	  <div class="container leftband" style="padding-right:20px">
	<div class="row-fluid">
        <div class="span9 offset1 ">
            <ul id="recentActivities" style="margin-bottom: 10px; overflow-y:auto">
          		
					<li class="customLi"><a style="font-size:14px" href="#q1"> Q1: How does it work?</a></li>		
					<li class="customLi"><a style="font-size:14px" href="#q2"> Q2: How to get started? What are the requirements?</a></li>
					<li class="customLi"><a style="font-size:14px" href="#q3"> Q3: Which OBD-II adapters are compatible with enviroCar?</a></li>		
					<li class="customLi"><a style="font-size:14px" href="#q4"> Q4: Is my car supported?</a></li>
					<li class="customLi"><a style="font-size:14px" href="#q5"> Q5: Why do we need Indiegogo backers?</a></li>		
					<li class="customLi"><a style="font-size:14px" href="#q6"> Q6: What’s about privacy and security?</a></li>
					<li class="customLi"><a style="font-size:14px" href="#q7"> Q7: I’m a developer and very interested in this project. Is there a way to make some further implementations?</a></li>
					<li class="customLi"><a style="font-size:14px" href="#q8"> Q8: What’s next?</a></li>		
					<li class="customLi"><a style="font-size:14px" href="#q9"> Q9: When enviroCar will be published?</a></li>	
					<li class="customLi"><a style="font-size:14px" href="#q10"> Q10: Can we ship to your country?</a></li>	


		  </ul>
       	</div>
		</div> 
	  		</div>
 <div class="container rightband" style="padding-left:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q1">How does it work?</strong>
			
			<p style="text-align: justify; font-size:14px;">  
				By using OBD2 adapter, enviroCar is able to receive your cars data by pairing your smartphone via Bluetooth with the adapter. The smartphone app analyzes and parses the data to give you in the app and on the enviroCar these information, which you want to see.
			</p>
			<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
         </div>    
           </div>    
         </div>    
         </div>
		 
<div class="container leftband" style="padding-right:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q2">How to get started? What are the requirements?</strong>
				 <p style="text-align: justify; font-size:14px;"> Plug your OBD2 adapter into the OnBoard Diagnostic (OBD) port of your car. 
				 Download & install the app, pair it with your adapter and you’re ready to be a part of enviroCar.
</p>
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
             </div>    
           </div>    
         </div>    
         </div>
		 
	  
	  
<div class="container rightband" style="padding-left:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q3">Which OBD-II adapters are compatible with enviroCar?</strong>
			
			<p style="text-align: justify; font-size:14px">  
				There are quite a lot OBD-II adapters for using enviroCar in different pricy ranges. You can buy these adapters on ebay, amazon or several shops. To get some infomation, you can get q quick overview. But please keep in mind, there are many (for example on ebay or amazon) which won’t work. Please have a look on some reviews. If you want to be sure, 
Also one very important fact about OBD-II use adapters in Germany: It’s only allowed to use CE-certified OBD-II adpaters. While driving your car, the usage of adapters without a CE-certificate is permitted. If you want to be sure, to have the right adapter, contact us or make a pledge for the 199€ pledge (enviroCar device (early bird)), where the right adapter is already included.

				</p>
				
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>

         </div>    
           </div>    
         </div>    
         </div>
		 
<div class="container leftband" style="padding-right:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q4">Is my car supported?</strong>
				 <p style="text-align: justify; font-size:14px"> Mainly there is the following rule. In the USA, all cars from 01.01.1996 have to have the OBD2 interface.
In Europe, all new cars with an Otto-motor (using benzine) from 01.01.2001 and with the EURO-3 Norm have the OBD2 interface. For diesel vehicles from 01.01.2003 OBD-2 is supported. For trucks, the OBD2 support started with 1. January 2005
You can also have a look here
Alternatively we could use a picture like this: http://www.obd-2.de/faqs/obd-2/51-ist-mein-fahrzeug-obd-2-kompatibel.html 
</p>
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
             </div>    
           </div>    
         </div>    
         </div>
		 
	  
	  
	 
	<div class="container rightband" style="padding-left:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q5">Why do we need Indiegogo backers? </strong>
			
			<p style="text-align: justify; font-size:14px">  
			By using indiegogo we want to collect 10.000€ for our future work. With your donation,
			you can be sure, that the enviroCar has a future. That you have the chance to review your and other 
			data for a long time; that you can make yourself and your city more smarter. Help us, that people and 
			students can extend and work on this project. 
			(Linked Citizen science is a topic, in which the ifgi and 52N want to do more scientific work) 
				</p>
				
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>

         </div>    
           </div>    
         </div>    
         </div>
		 
<div class="container leftband" style="padding-right:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q6">What’s about privacy and security?</strong>
				 <p style="text-align: justify; font-size:14px">Of course we are aware of your privacy issue. All your data will be anonymized, 
				 so nobody will be able to collect sensitive, specific, person-related data about your usage. Your security is a very important 
				 topic for us. By using enviroCar you haven’t worry about it. </p>
				 <p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
             </div>    
           </div>    
         </div>    
         </div>
		 
	  
	  
	 

	<div class="container rightband" style="padding-left:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q7"> I’m a developer and very interested in this project. Is there a way to make some further implementations?</strong>
			
			<p style="text-align: justify; font-size:14px"> Open Source software, sparql, contact us</p>
				
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>

         </div>    
           </div>    
         </div>    
         </div>
		 
		<div class="container leftband" style="padding-right:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q8">What’s next?</strong>
				 <p style="text-align: justify; font-size:14px">To start with our goal to make your place a little bit smarter, you’re the most important person in this program. The next steps include further implementation of new features and the development a working system as well as building up the enviroCar community.</p>
				 <p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
             </div>    
           </div>    
         </div>    
         </div>
		 
	  
	  
	  

	<div class="container rightband" style="padding-left:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q9"> When enviroCar will be published?</strong>
			
			<p style="text-align: justify; font-size:14px"> We’re working hard on the enviroCar system. For now we’ve implemented first prototypes for app and website. Further work will be on adding more features and implementing useful functions for you.
We plan to release enviroCar with the end of XXX. Please be patient and look for our updates.</p>
				
				<p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>

         </div>    
           </div>    
         </div>    
         </div>

		 
	  <div class="container leftband" style="padding-right:20px">
 <div class="row-fluid">
		<div class="span9 offset1">
	  		<div class="customLi"><strong style="font-size:14" id="q10">Can we ship to your country?</strong>
				 <p style="text-align: justify; font-size:14px">
				 We will ship in all countries.
				 </p>
				 <p class="pull-right" style="font-size:10px"><a href="#">Back to top</a></p>
             </div>    
           </div>    
         </div>    
         </div>
	  
	  </div>
	
	<!--end of div id="faqs"-->   
   </div> <!--end tab content-->
   
	    </div>
		 </div>


<?
include('footer.php');
?>