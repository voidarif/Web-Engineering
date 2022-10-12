
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Addition</title>
</head>
<body>

<?php 

//add() function with two parameter  
function add($x,$y)    
{  
$sum=$x+$y;  
echo "Sum = $sum <br><br>";  
}  


//sub() function with two parameter  
function sub($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}  

function mul($x,$y)    
{  
$mul=$x*$y;  
echo "Multiplication = $mul <br><br>";  
}

function div($x,$y)    
{  
$div=$x/$y;  
echo "Division = $div <br><br>";  
}


//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['add']))  
{  
//call add() function  
 add($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['sub']))  
{  
//call add() function  
sub($_POST['first'],$_POST['second']);  
}  

if(isset($_POST['mul']))  
{  
//call add() function  
mul($_POST['first'],$_POST['second']);  
} 

if(isset($_POST['div']))  
{  
//call add() function  
div($_POST['first'],$_POST['second']);  
}
?>  


<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  

<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
<input type="submit" name="mul" value="MULTIPLICATION"/>  
<input type="submit" name="div" value="DIVISION"/>  
</form>   

</body>
</html>