<html>
<head>
  <title>WDD Midterm Long Quiz 2 </title>
  <style>
    body {
		background-color: lightblue;
		}
    .Style1
	{
      margin: 100px auto;
      text-align: center;
      padding: 50px;
      width: 500px;
      min-height: 100px;
      border-radius: 20px;
      background-color: lightyellow;
    }
  </style>

</head>
<body>

  <div class = "Style1">
  <h1>Problem 1</h1>
  <h2>Net Pay Computation</h2>

  <?php
	$Salaray_rate = 600;
	$Days = 15;
	$Salary = $Salaray_rate*$Days;
	$Tax = 0.30;
	$Taxable_Amount = $Salary*$Tax;

	echo "The Salary Rate is: " . ($Salaray_rate) . " / per day <br/>";
	echo "Salary = Salary Rate * 15 Days <br/>";
	echo "<b>";
	echo "Salary = ". ($Salary) ."<br />";
	echo "</b>";
	echo "<br />";
	echo "Taxable Amount = 30% of Salary <br/>";
	echo "<b>";
	echo "Taxable Amount = ". ($Salary*$Tax) ."<br/>";
	echo "</b>";
	echo "<br />";
	echo "Net Pay = Salary - Taxable Amount <br/>";
	echo "<b>";
	echo "Net Pay = ". ($Salary-$Taxable_Amount) . "<br/>";
	echo "</b>";
?>
 
<body>
<br>
<br>
  <h1>Problem 2</h1>
  <h2>Sum of Integers</h2>

  <?php
  
	$sum=0; 
	for ($i=1; $i<=50; $i++) 
	{ $sum=$sum+$i; } 
	echo "The sum of positive integers from 1-50 = <b>". ($sum) . "</b><br/>";

?>
 
</body>
</html>