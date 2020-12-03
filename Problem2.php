<!-------------- Code is written by : Yogita Sabale ---------------->
<!-------------- Code written Date : 3/12/2020 --------------------->
<!---
Problem Statement 2:
Everyday, the restaurant has a limited number of breads, vadas and samosas. The
restaurant needs to optimise orders in a way that they can generate maximum profit.
Vadapav needs two bread and a vada
Samosapav needs two bread and a samosa
Input:
First input is: no. of breads, no. of vadas and no. of samosas available in the
restaurant
Second input is: Price of Vadapav & price of Samosapav set by the restaurant
--->


<?php


if(isset($_POST["breads"]))
{
	if($_POST["breads"]!=''){

		$bd = $_POST["breads"];
		$vd = $_POST["vadas"];
		$sm = $_POST["samosas"];
		$vprice = $_POST["vp"];
		$sprice = $_POST["sp"];
		
		if($vprice > $sprice){
			$maxPr = $vprice;
			$maxQty = $vd;
			$minPr = $sprice;
			$minQty = $sm;			
		}
		else{
			$maxPr = $sprice;
			$maxQty = $sm;						
			$minPr = $vprice;
			$minQty = $vd;						
		}
		
		$f = (int)($bd/2);
		if($bd >= 2)
		{
				if($maxQty <= $f){
					$maxQty = $maxQty;
					$minQty = $f - $maxQty;
				}
				else{
					$maxQty = $f;
					$minQty = 0;
				}
				
				$profit1 = ($maxPr * $maxQty);
				$profit2 = ($minPr * $minQty);
				$finalProfit = $profit1 + $profit2;
			
			$ans = $finalProfit;
			$no = 0;
		}else{
			$ans = "Not sufficeint breads are avilable";
			$no = 1;
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
  width: 30%;
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
  border: none;
  cursor: pointer;
  width: 20%;
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
    <h1>Problem 2</h1>
    <p>Please fill below details.<br><span class="star">* fields are mandatory.</span></p>
    <hr>
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;>
			<label for="breads"><b>No. of Breads:  </b><span class="star">*</span></label>
		</div>
		<div class="col-md-10">
			<input type="number" placeholder="Enter no. of breads" name="breads" id="breads" min="1" required value="<?=$_POST["breads"]?>">
		</div>
	</div>
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;>	
			<label for="vadas"><b>No. of Vadas:</b><span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="Enter no. of vadas" name="vadas" id="vadas" min="1" required style="width:80%"  value="<?=$_POST["vadas"]?>">
		</div>
		<div class="col-md-2" style="text-align:right;margin-top:20px;>	
			<label for="vadas"><b>Price for 1 Vada:</b><span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="Price for 1 vada" name="vp" id="vp" min="1" required style="width:80%"  value="<?=$_POST["vp"]?>">
		</div>		
	</div>
	<div class="main">
		<div class="col-md-2" style="text-align:right;margin-top:20px;>
			<label for="samosas"><b>No. of Samosas:</b><span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="Enter no. of samosas" name="samosas" id="samosas" min="1" required style="width:80%"  value="<?=$_POST["samosas"]?>">
		</div>
		<div class="col-md-2" style="text-align:right;margin-top:20px;>	
			<label for="vadas"><b>Price for 1 Samosa:</b><span class="star">*</span></label>
		</div>
		<div class="col-md-4">			
			<input type="number" placeholder="Price for 1 vada" name="sp" id="sp" min="1" required style="width:80%"  value="<?=$_POST["sp"]?>">
		</div>			
	</div>	

    <div class="col-md-12" style="margin-left:160px;">
		<button type="submit" class="registerbtn">Submit</button>
	</div>
  </div>
  
  <div style="margin-left:160px;">
<?php
	if(isset($ans) && $ans!=''){
		if($no == 1){
			echo "<h1>Output</h1>";
			echo "<b>".$ans."</b>";		
		}
		else{	
			echo "<h1>Output</h1>";
			echo "Maximum profit possible is Rs.:  <b>".$ans."</b>";
		}
	}
?>	
  </div><br>
   
</form>

</body>
</html>
