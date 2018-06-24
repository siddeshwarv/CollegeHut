<?php 

	$mysqli = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");

	//for knowing voting time
	date_default_timezone_set('Asia/Calcutta');
	echo $time = date('h:i:s',time());
	echo $date = date('m/d/Y', time());


	if($time!='16:30:00' && $date=='05/29/2018'){
		echo 'Hell';
		if(isset($_GET['tech']) && isset($_GET['cult']) && isset($_GET['gen']) && isset($_GET['hostel']) && isset($_GET['acad']) && isset($_GET['res'])){
			echo 'Bitch';

			$cult = $_GET['cult'];
			$tech = $_GET['tech'];
			$gen = $_GET['gen'];
			$hostel = $_GET['hostel'];
			$general = $_GET['acad'];
			$res = $_GET['res'];

			$tech = str_replace(' ','',$tech);
			$cult = str_replace(' ','',$cult);
			$gen = str_replace(' ','',$gen);
			$hostel = str_replace(' ','',$hostel);
			$general = str_replace(' ','',$general);
			$res = str_replace(' ','',$res);


			//echo (string)$tech;
			//$tech2 = 'b16021';
			//echo strcmp($tech,$tech2);
			//$query1 = "update ids set count = 1 where roll = '".$tech."'";
			$query1 = "update sec set votes = votes+1 where roll = '".$tech."'";
			$query2 = "update sec set votes = votes+1 where roll = '".$cult."'";
			$query3 = "update sec set votes = votes+1 where roll = '".$gen."'";
			$query4 = "update sec set votes = votes+1 where roll = '".$hostel."'";
			$query5 = "update sec set votes = votes+1 where roll = '".$general."'";
			$query6 = "update sec set votes = votes+1 where roll = '".$res."'";
			if($query_run1 = $mysqli->query($query1) && $query_run2 = $mysqli->query($query2) && $query_run3 = $mysqli->query($query3) && $query_run4 = $mysqli->query($query4) && $query_run5 = $mysqli->query($query5) && $query_run6 = $mysqli->query($query6)){	
					echo 'Nice';
					//header('Location:./start.php');
					header('Location:./log_out.php');
				}
				else
				{	
					echo 'bad';
				}

		}
	else{
	echo "Let me vote bitch";	
	}
	}

	else{
		echo '<h1>The time is over!,No more voting can be done</h1>';
		//echo "<h1>something</h1>";

		$final_tech;
		$final_cult;
		$final_hostel;
		$final_acad;
		$final_general;
		$final_research;

		$final_cult_vada1;
		$final_cult_vada2;
		$final_cult_vada3;
		$final_cult_vada4;
		$final_cult_vada5;

		$final_general_vada1;
		$final_general_vada2;
		$final_general_vada3;
		$final_general_vada4;
		$final_general_vada5;


		$final_acad_vada1;
		$final_acad_vada2;
		$final_acad_vada3;
		$final_acad_vada4;
		$final_acad_vada5;


		$final_hostel_vada1;
		$final_hostel_vada2;
		$final_hostel_vada3;
		$final_hostel_vada4;
		$final_hostel_vada5;


		$final_reasearch_vada1;
		$final_reasearch_vada2;
		$final_reasearch_vada3;
		$final_reasearch_vada4;
		$final_reasearch_vada5;

		$final_tech_vada1;
		$final_tech_vada2;
		$final_tech_vada3;
		$final_tech_vada4;
		$final_tech_vada5;
		



		$mysqli3 = mysqli_connect('localhost','root','Kaustubh12','ids2') or die("Could not connect");

		//$query_count_tech = "select roll from sec where votes = (select max(votes) from sec where post ='technical')";
		//$query_count_tech = "select max(votes),post,roll from sec where post ='technical'";
		$query_count_tech = "select max(votes),post,roll,vada1,vada2,vada3,vada4,vada5 from sec where post ='technical'";
		$query_count_cult = "select max(votes),post,roll,vada1,vada2,vada3,vada4,vada5 from sec where post ='Cultural'";
		$query_count_hostel = "select max(votes),post,roll,vada1,vada2,vada3,vada4,vada5 from sec where post ='hostel'";
		$query_count_acad = "select max(votes),post,roll,vada1,vada2,vada3,vada4,vada5 from sec where post ='Academic'";
		$query_count_general = "select max(votes),post,roll,vada1,vada2,vada3,vada4,vada5 from sec where post ='general'";
		$query_count_research = "select max(votes),post,roll,vada1,vada2,vada3,vada4,vada5 from sec where post ='Research'";

		if($query_run_tech = $mysqli->query($query_count_tech)){	
					//echo 'Nice';
					while($row = mysqli_fetch_array($query_run_tech)){
						//echo $row[0];
						$final_tech = $row[2];
						$final_tech_vada1 = $row[3];
						$final_tech_vada2 = $row[4];
						$final_tech_vada3 = $row[5];
						$final_tech_vada4 = $row[6];
						$final_tech_vada5 = $row[7];
						//echo $final_tech;
					}
					$query_insert_tech = "update Secretary set RollNo = '".$final_tech."' where position = 'tech_secy'";
					$insert_promise1 = "insert into promises(promise,position) values('".$final_tech_vada1."','tech_secy');";
					$insert_promise2 = "insert into promises(promise,position) values('".$final_tech_vada2."','tech_secy');";
					$insert_promise3 = "insert into promises(promise,position) values('".$final_tech_vada3."','tech_secy');";
					$insert_promise4 = "insert into promises(promise,position) values('".$final_tech_vada4."','tech_secy');";
					$insert_promise5 = "insert into promises(promise,position) values('".$final_tech_vada5."','tech_secy');";
						if($query_run_tech2 = $mysqli3->query($query_insert_tech) && $query_run_tech3 = $mysqli3->query($insert_promise1) && $query_run_tech4 = $mysqli3->query($insert_promise2) && $query_run_tech5 = $mysqli3->query($insert_promise3) && $query_run_tech6 = $mysqli3->query($insert_promise4) && $query_run_tech7 = $mysqli3->query($insert_promise5)){
							echo 'Inserted';
						}	
				}
				else
				{	
					echo 'bad';
				}
		if($query_run_cult = $mysqli->query($query_count_cult)){	
					//echo 'Nice';
					while($row = mysqli_fetch_array($query_run_cult)){
						//echo $row[0];
						$final_cult = $row[2];
						$final_cult_vada1 = $row[3];
						$final_cult_vada2 = $row[4];
						$final_cult_vada3 = $row[5];
						$final_cult_vada4 = $row[6];
						$final_cult_vada5 = $row[7];
					}
					$query_insert_cult = "update Secretary set RollNo = '".$final_cult."' where position = 'cult_secy'";
					$insert_promise1 = "insert into promises(promise,position) values('".$final_cult_vada1."','cult_secy');";
					$insert_promise2 = "insert into promises(promise,position) values('".$final_cult_vada2."','cult_secy');";
					$insert_promise3 = "insert into promises(promise,position) values('".$final_cult_vada3."','cult_secy');";
					$insert_promise4 = "insert into promises(promise,position) values('".$final_cult_vada4."','cult_secy');";
					$insert_promise5 = "insert into promises(promise,position) values('".$final_cult_vada5."','cult_secy');";
						if($query_run_cult2 = $mysqli3->query($query_insert_cult) && $query_run_tech3 = $mysqli3->query($insert_promise1) && $query_run_tech4 = $mysqli3->query($insert_promise2) && $query_run_tech5 = $mysqli3->query($insert_promise3) && $query_run_tech6 = $mysqli3->query($insert_promise4) && $query_run_tech7 = $mysqli3->query($insert_promise5)){
							echo 'Inserted';
						}	
				}
				else
				{	
					echo 'bad';
				}
		if($query_run_hostel = $mysqli->query($query_count_hostel)){	
					//echo 'Nice';
					while($row = mysqli_fetch_array($query_run_hostel)){
						//echo $row[0];
						$final_hostel = $row[2];
						$final_hostel_vada1 = $row[3];
						$final_hostel_vada2 = $row[4];
						$final_hostel_vada3 = $row[5];
						$final_hostel_vada4 = $row[6];
						$final_hostel_vada5 = $row[7];
					}
					$query_insert_hostel = "update Secretary set RollNo = '".$final_hostel."' where position = 'hostel_secy'";
					$insert_promise1 = "insert into promises(promise,position) values('".$final_hostel_vada1."','hostel_secy');";
					$insert_promise2 = "insert into promises(promise,position) values('".$final_hostel_vada2."','hostel_secy');";
					$insert_promise3 = "insert into promises(promise,position) values('".$final_hostel_vada3."','hostel_secy');";
					$insert_promise4 = "insert into promises(promise,position) values('".$final_hostel_vada4."','hostel_secy');";
					$insert_promise5 = "insert into promises(promise,position) values('".$final_hostel_vada5."','hostel_secy');";
						if($query_run_hostel2 = $mysqli3->query($query_insert_hostel) && $query_run_tech3 = $mysqli3->query($insert_promise1) && $query_run_tech4 = $mysqli3->query($insert_promise2) && $query_run_tech5 = $mysqli3->query($insert_promise3) && $query_run_tech6 = $mysqli3->query($insert_promise4) && $query_run_tech7 = $mysqli3->query($insert_promise5)){
							echo 'Inserted';
						}
				}
				else
				{	
					echo 'bad';
				}
		if($query_run_acad = $mysqli->query($query_count_acad)){	
					//echo 'Nice';
					while($row = mysqli_fetch_array($query_run_acad)){
						//echo $row[0];
						$final_acad = $row[2];
								$final_acad_vada1 = $row[3];
								$final_acad_vada2 = $row[4];
								$final_acad_vada3 = $row[5];
								$final_acad_vada4 = $row[6];
								$final_acad_vada5 = $row[7];
					}
					$query_insert_acad = "update Secretary set RollNo = '".$final_acad."' where position = 'acad_secy'";
					$insert_promise1 = "insert into promises(promise,position) values('".$final_acad_vada1."','acad_secy');";
					$insert_promise2 = "insert into promises(promise,position) values('".$final_acad_vada2."','acad_secy');";
					$insert_promise3 = "insert into promises(promise,position) values('".$final_acad_vada3."','acad_secy');";
					$insert_promise4 = "insert into promises(promise,position) values('".$final_acad_vada4."','acad_secy');";
					$insert_promise5 = "insert into promises(promise,position) values('".$final_acad_vada5."','acad_secy');";
						if($query_run_acad2 = $mysqli3->query($query_insert_acad) && $query_run_tech3 = $mysqli3->query($insert_promise1) && $query_run_tech4 = $mysqli3->query($insert_promise2) && $query_run_tech5 = $mysqli3->query($insert_promise3) && $query_run_tech6 = $mysqli3->query($insert_promise4) && $query_run_tech7 = $mysqli3->query($insert_promise5)){
							echo 'Inserted';
						}
				}
				else
				{	
					echo 'bad';
				}
		if($query_run_general = $mysqli->query($query_count_general)){	
					//echo 'Nice';
					while($row = mysqli_fetch_array($query_run_general)){
						//echo $row[0];
						$final_general = $row[2];
								$final_general_vada1 = $row[3];
								$final_general_vada2 = $row[4];
								$final_general_vada3 = $row[5];
								$final_general_vada4 = $row[6];
								$final_general_vada5 = $row[7];
					}
					$query_insert_general = "update Secretary set RollNo = '".$final_general."' where position = 'g_secy'";
					$insert_promise1 = "insert into promises(promise,position) values('".$final_general_vada1."','g_secy');";
					$insert_promise2 = "insert into promises(promise,position) values('".$final_general_vada2."','g_secy');";
					$insert_promise3 = "insert into promises(promise,position) values('".$final_general_vada3."','g_secy');";
					$insert_promise4 = "insert into promises(promise,position) values('".$final_general_vada4."','g_secy');";
					$insert_promise5 = "insert into promises(promise,position) values('".$final_general_vada5."','g_secy');";
						if($query_run_general2 = $mysqli3->query($query_insert_general) && $query_run_tech3 = $mysqli3->query($insert_promise1) && $query_run_tech4 = $mysqli3->query($insert_promise2) && $query_run_tech5 = $mysqli3->query($insert_promise3) && $query_run_tech6 = $mysqli3->query($insert_promise4) && $query_run_tech7 = $mysqli3->query($insert_promise5)){
							echo 'Inserted';
						}
				}
				else
				{	
					echo 'bad';
				}
		if($query_run_research = $mysqli->query($query_count_research)){	
					//echo 'Nice';
					while($row = mysqli_fetch_array($query_run_research)){
						//echo $row[0];
						$final_research = $row[2];
						$final_reasearch_vada1 = $row[3];
						$final_reasearch_vada2 = $row[4];
						$final_reasearch_vada3 = $row[5];
						$final_reasearch_vada4 = $row[6];
						$final_reasearch_vada5 = $row[7];
					}
					$query_insert_research = "update Secretary set RollNo = '".$final_research."' where position = 'research_secy'";
					$insert_promise1 = "insert into promises(promise,position) values('".$final_research_vada1."','research_secy');";
					$insert_promise2 = "insert into promises(promise,position) values('".$final_research_vada2."','research_secy');";
					$insert_promise3 = "insert into promises(promise,position) values('".$final_research_vada3."','research_secy');";
					$insert_promise4 = "insert into promises(promise,position) values('".$final_research_vada4."','research_secy');";
					$insert_promise5 = "insert into promises(promise,position) values('".$final_research_vada5."','research_secy');";
						if($query_run_research2 = $mysqli3->query($query_insert_research) && $query_run_tech3 = $mysqli3->query($insert_promise1) && $query_run_tech4 = $mysqli3->query($insert_promise2) && $query_run_tech5 = $mysqli3->query($insert_promise3) && $query_run_tech6 = $mysqli3->query($insert_promise4) && $query_run_tech7 = $mysqli3->query($insert_promise5)){
							echo 'Inserted';
						}
				}
				else
				{	
					echo 'bad';
				}		
		
		echo $final_tech;
		echo $final_cult;
		echo $final_hostel;
		echo $final_acad;
		echo $final_general;
		echo $final_research;



		echo "<a href=\"log_out.php\">log out</a>";
		//header('Location:./log_out.php');
	}


 ?>
