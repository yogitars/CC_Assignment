<!-------------- Code is written by : Yogita Sabale ---------------->
<!-------------- Code written Date : 3/12/2020 --------------------->
<!---
Problem Statement 1:
There are a number of servers running our application.
Given N servers, in 5 minutes interval, every minute, the load is checked and if load is
less than 50%, the servers are either reduced to N/2 else they are increased to
2N + 1
Input : No. of servers (N), server load every minute
Output : The number of servers running at the end of 5 minutes
--->

<?php

if(isset($_POST["servers"]))
{
	if($_POST["servers"]!=''){

		// %load array for every min
		$load = $_POST["load"];
		// No. of servers
		$ns = $_POST["servers"];

		for($i=0;$i<5;$i++)
		{ 
			if($load[$i]<50)
				$ns = (int)($ns/2);
			else
				$ns = (2*$ns)+1;
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif; 
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  width: 80%;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=number] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=number]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.star{
	color: red;
}
</style>
</head>
<body>

<form name="frm" method="post" action="#">
  <div class="container">
    <h1>Problem 1</h1>
    <p>Please fill below details. <br><span class="star">* fields are mandatory.</span></p>
    <hr>
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;">	
			<label for="server"><b>No. of Servers:</b> <span class="star">*</span></label>		
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="Enter no. of servers" name="servers" id="servers" min="1" required value="<?=$_POST["servers"]?>">
		</div>		
	</div>
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;">	
			<label for="server"><b>% load on 1st min.:</b> <span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="% load" name="load[]" min="1" required value="<?=$_POST["load"][0]?>">		
		</div>
		<div class="col-md-2" style="text-align:right;margin-top:20px;">	
			<label for="server"><b>% load on 2nd min.:</b> <span class="star">*</span></label>	
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="% load" name="load[]" min="1" required value="<?=$_POST["load"][1]?>">
		</div>		
	</div>
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;">	
			<label for="server"><b>% load on 3rd min.:</b> <span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="% load" name="load[]" min="1" required value="<?=$_POST["load"][2]?>">	
		</div>
		<div class="col-md-2" style="text-align:right;margin-top:20px;">	
			<label for="server"><b>% load on 4th min.:</b> <span class="star">*</span></label>	
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="% load" name="load[]" min="1" required value="<?=$_POST["load"][3]?>">
		</div>		
	</div>	
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;">	
			<label for="server"><b>% load on 5th min.:</b> <span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="% load" name="load[]" min="1" required  value="<?=$_POST["load"][4]?>">
		</div>	
	</div>	
	 
	<div class="col-md-12" style="margin-left:160px;">
		<button type="submit" class="registerbtn">Submit</button>
	</div>
  
  
  <div>
<?php
	if(isset($ns) && $ns!=''){
		echo "<h1>Output</h1>";
		echo "The number of servers running at the end of 5 minutes:  <b>".$ns."</b>";
	}
?>	
  </div>
   </div>
</form>

</body>
</html>
