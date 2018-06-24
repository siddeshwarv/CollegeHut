
<?php

define('user','root');
define('password','Kaustubh12');
define('host','localhost');
define('name','ids2');

$conn = mysqli_connect(host,user,password,name)
OR die('could not connect to mysql'.mysqli_connect_error());

include "21.php";
echo $var;
echo 'dsads';
?>




<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CollegeHut &mdash; Advanced Gymkhana Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/boot.js"></script>
	<script type="text/javascript" src="angular.js"></script>      
    <script type="text/javascript" src="js_login/app21.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<!--<body style="background-image:url(images/g_sec.jpg); background-repeat:  no-repeat;">-->
	<body ng-app="log">


	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="fh5co-top-logo">
				<div id="fh5co-logo"><a href="index.html"> CollegeHut </a></div>
			</div>
			<div class="fh5co-top-menu menu-1 text-center">
				<ul ng-app="log" ng-controller = "Ctrl2">
					<li><a href="calender.pdf"> Institute calender </a></li>
					<!--<li><a href="about.html">Profile</a></li>-->
					<li class="has-dropdown">
						<a href="#"> Secretaries </a>
						<ul class="dropdown">
							<li><a href="hostel_secy.php">Hostel Affairs Secretary</a></li>
							<li><a href="cult_secy.php">Cultural Secretary</a></li>
							<li><a href="tech_secy.php">Technical Secretary</a></li>
							<li><a href="acad_secy.php">Academic Secretary</a></li>
							<li><a href="research_secy.php">Research Secretary</a></li>
							<li class="nav-item" ng-if="vari">
                  			<a class="nav-link" data-toggle="modal" data-target="#myModal5" ng-click = "doctor()  ">know your patients</a>
                			</li>
                			<li class="nav-item" ng-if="vari">
                  			<a class="nav-link" data-toggle="modal" data-target="#myModal4" ng-click = "patient()">know your progress</a>
                			</li>
						</ul>
					</li>
					<!--<li><a href="contact.html">About Us</a></li>-->
					<li> <a href="#about"> About Us </a></li>
					<!--<li> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >
				    Login
				  </button> </li> -->
				  <li ng-if="!vari"> <a href="" data-toggle="modal" data-target="#login_modal" > login </a> </li>
				  <li ng-if="vari"> <a href="php_login/log_out.php"> Logout </a> </li>
				  <li ng-if="vari">Hello {{vari2}}</li>

					</ul>
				   
					


				</div>
			</div>

		</nav>

	<div id="myModal5" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true" ng-app="log">
    <div class="modal-dialog modal-lg" ng-controller = "Ctrl2">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            ×
          </button>
          <h4 class="modal-title" id="classModalLabel">
                Possible diseases
              </h4>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Patient</th>
                <th scope="col">Progress1</th>
                <th scope="col">Progress2</th>
                <th scope="col">Progress3</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat = "x in myprog1">
                <td>{{d_disease[$index]}}</td>
                <td>{{d_patient[$index]}}</td>
                <td>
                  <input type="checkbox" ng-model="checkboxModel.value1"></td>
                  <td><input type="checkbox" ng-model="checkboxModel.value2"></td>
                  <td><input type="checkbox" ng-model="checkboxModel.value3"></td>
                  <td><button type="button" ng-click = "submit_to($index)">submit</button></td>
                <!-- <td><input type="checkbox" name="progress2" value="1" ng-bind = "pr2[$index] = 1"></td>
                <td><input type="checkbox" name="progress3" value="1" ng-bind = "pr3[$index] = 1"></td> -->
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  	</div>
				

		  	<div class="modal" id="myModal4" data-backdrop="static" ng-app="log">
		    <div class="modal-dialog" ng-controller = "Ctrl2">
		        <div class="modal-content">
		          <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            <h4 class="modal-title">Your progress details</h4>
		          </div>
		          <div class="modal-body">
		            <div class="progress">
		              <div class="progress-bar" role="progressbar" aria-valuenow="70"
		              aria-valuemin="0" aria-valuemax="100" style="width:{{per2}}%">
		                {{per}}
		              </div>
		            </div>
		            <strong>Name of disease<strong> : {{my_disease}}<br>
		            <strong>Name of doctor<strong> : {{my_doctor}}
		          </div>
		          <div class="modal-footer">
		            <a href="#" data-dismiss="modal" class="btn">Close</a>
		            <!--<a href="#" class="btn btn-primary">Save changes</a>-->
		          </div>
		        </div>
		      </div>
		  </div>

				  <!-- Button to Open the Modal -->
				  
				<div class="container">
				  <!-- The Modal -->
				  <div class="modal" id="login_modal">
				    <div class="modal-dialog">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Login</h4>
				          
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body">
				          <form action="php_login/start.php" action = "GET">
				          <table>
				          <tr>
				          <td> <strong>&emsp;<strong> Username </strong> &emsp; &emsp;</strong></td>
				           <td> <input type="text" name = "contact_name"> </td></tr>
				           <tr>
				           <td> <strong>&emsp;<strong> Password </strong>&emsp; &emsp;</strong></td>
				           <td> <input type="password" name  = "pass"> </td></tr>
				           </tr>
				          </table>
				          
				        </div>
				        
				        <!-- Modal footer -->
				        <div class="modal-footer">
				        <button type="submit" class="btn btn-danger" value="submit">Submit</button>
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

				        </div>
				         </form>
				      </div>
				    </div>
				  </div>
				  
				</div>

				<h1 align="center"> <font color="red"> General Secretary</font> </h1><br><br>
					<div id="imaging">
					

				<img src="images/g_sec.jpg" alt="general Secretary pic" width="200" height="250">
				<p>
					<h2>&emsp; &emsp; Name     :   &emsp;
				
				
				
				<?php
				$query="select name from Btech16 inner join Secretary where Btech16.RollNo = Secretary.RollNo and Secretary.position = 'g_secy'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
					echo $row['name'];
				}
				// echo $_SESSION['user_id'];
				// echo "deadeadwa";
				
				?>
				
					<br><br><br>
					 &emsp; &emsp; Roll NO 	  :  &emsp;
					
					<?php
				$query="select Btech16.RollNo from Btech16 inner join Secretary where Btech16.RollNo = Secretary.RollNo and Secretary.position = 'g_secy'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
					echo $row['RollNo'];
				}
				
				?>

					<br><br><br>
					 &emsp; &emsp; Phone NO 	  :  &emsp;
					
					<?php
				$query="select Btech16.PhoneNo from Btech16 inner join Secretary where Btech16.RollNo = Secretary.RollNo and Secretary.position = 'g_secy'";
				
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
					echo $row['PhoneNo'];
				}
				
				?>
					
					
				</h2>
				</p>
				</div>
				<br><br><br><br><br><br>
				<h1 align="center"> <font color="red"> Promises made by him </font></h1>
				<br>
				<ul>
				<h3 align="center"> &emsp;
				
		
				<?php
				// $query="select Complaint,Complaint_id,status,RollNo from Complaint where Position = 'g_secy'";
					//$query1 = "lock table promises read";
					//$result2=mysqli_query($conn,$query1);

					$query = "SELECT promises.promiseid, promises.promise, 
				COUNT(case when likes = 1 and dislikes = 0 then 1 else null end) AS likes, 
				COUNT(case when dislikes = 1 and likes = 0 then 1 else null end) AS dislikes, 
				-- Btech16.name
				GROUP_CONCAT(Btech16.name SEPARATOR ' | ') AS liked_by 
				FROM promises LEFT JOIN promises_likes on promises.promiseid = promises_likes.promiseid  LEFT JOIN Btech16 ON promises_likes.userid = Btech16.RollNo where promises.position='g_secy' GROUP BY promises.promiseid ";
				
				//  $query = "SELECT promises.promiseid, 
				// promises.promise 
				// FROM promises 
				// where Position = 'g_secy' ";
					$result=mysqli_query($conn,$query);
					
					while($row = $result->fetch_object()){
						$row->liked_by = $row->liked_by ? explode('|',$row->liked_by) : [];
						$promises[] = $row;
					}
					//$query3 = "unlock tables";
					//$result3=mysqli_query($conn,$query3);

					// echo '<pre>', print_r($promises, true), '</pre>';
				?>
				<?php foreach($promises as $promise): ?>
					<div class="article">
						<h3><?php echo $promise->promise; ?></h3>
						<a href="like.php?type=like&pos=g_secy.php&id=<?php echo $promise->promiseid; ?>">Like</a>	
						<a href="like.php?type=dislike&pos=g_secy.php&id=<?php echo $promise->promiseid; ?>">Dislike</a>
						
						<p><?php echo $promise->likes; ?> people like this.</p>
					
						<p><?php echo $promise->dislikes; ?> people dislike this.</p>
 

						 <!-- <?php if(!empty($promise->liked_by)): ?>
							<ul>
								<?php foreach ($promise->liked_by as $user): ?> 
									<li><?php echo $user; ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>  -->

						</div>
				<?php endforeach; ?>
				<br><br>

				<h2>&emsp;&emsp;&emsp; If you any COMPLAINT , fill it here : &emsp;&emsp;   


				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#complaint_Modal" >
				    Complaint Here
				  </button>
				</h2>

				<div class="container">
				  <!-- The Modal -->
				  <div class="modal" id="complaint_Modal">
				    <div class="modal-dialog">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title"><strong>Complaint</strong></h4>
				          
				        </div>
				        
				        <!-- Modal body -->
							<div class="modal-body">
				          <form action="php_login/insert_complaint.php" action = "GET">
				          <table>
				          <tr>
				          <!--<td> <strong>Username</strong></td>
				           <td> <input type="text" name = "c"> </td></tr>-->
				           <tr><td colspan="2"> Complaint : </td> </tr>
				           <tr>
				           <td colspan="2"> <textarea name = "aabra" placeholder="type your compaint here" rows=10 cols=20> </textarea> </td> </tr>
				            
				          </table>
				          
				        </div>	
				        <!-- Modal footer -->
				        <div class="modal-footer">
				        <button type="submit" class="btn btn-danger" value="submit">Submit</button>
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

				        </div>
				    	</form>
				         
				      </div>
				    </div>
				  </div>				  
				</div><br><br>



				<h1 align="center"><font color="Red">Pending Complaints:</font> </h1><br><br>
				<h2 align="center">
				<ul >
				
				<?php
				include "php_login/core.inc.php";
				$query="select Complaint,Complaint_id,status,RollNo from Complaint where Position = 'g_secy'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
					
					if($row['status']==false)
					{
						?>
						<li ng-controller="Ctrl2"> 
						<?php
						//echo $row['Complaint_id'];
						echo $row['Complaint'];
						$c_id = $row['Complaint_id'];

						

												//echo $row['RollNo'];
						//echo $_SESSION['user_id'];
						if(!strcmp($row['RollNo'],$_SESSION['user_id'])){
							//echo "<input id='Update' name='Update' value='Update' type='button'>";
							//echo '<button id="btn" ng-controller = "Ctrl2" value="nice!" ng-click="clicked()">Click!</button>';
							//echo '<button id="btn" ng-controller = "Ctrl2" value="nice!" ng-click="clicked()" action="test.php">Click!</button>';
							echo "<a href=\"js_login/test.php?type=g_secy.php&id=$c_id\"> Remove compaint (done!)</a>";
							//echo '<a href="js_login/test.php?id=$c_id;>Click!</a>';
							//echo htmlspecialchars("$c_id;");	
						}
							 
						else{
							
						}	

						?>
						&emsp;&emsp;&emsp;&emsp;
<!-- 						<button type="button" class="btn btn-primary">
				   			 Approve Done!
				  		</button> -->

				  		<!-- <li ng-controller = "Ctrl2">{{vari2}}</li>
				  		<button type="button" ng-controller = "Ctrl2" ng-if="!vari">Click Me!</button> -->
		
						</li><br><br>
						<?php
					}
				}
				?>

				</ul>	
				</h2>



	</div>

	</div>
	
	<a name="about"></a>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 CollegHut. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://www.facebook.com/akul.gupta.125"> AKul  </a> <a href="https://www.facebook.com/arpit.batra2?ref=br_rs"> Arpit </a>  <a href="https://www.facebook.com/aayush.meghwani.35"> Ayush </a> <a href="https://www.facebook.com/kaustubh.verma.944">  Kaustubh  </a><!--<a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="http://blog.gessato.com/" target="_blank">Gessato</a></small>-->
					</p>
					
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-google"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<!--<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>-->
					</ul>
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

