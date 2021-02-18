<?php

if(isset($_POST['submit'])){

		$day 		= $_POST['day'];
		$month 		= $_POST['month'];
		$year 		= $_POST['year'];
		

		if($day == "" || $month == "" || $year == "" )
		{
			echo "null submission...";
		}
		else{
			echo $day;
			echo $month;
			echo $year;
		}
	}	
?>

<html>
<head>
	<title>Date of Birth Input</title>
</head>
<body>
	<form method="post" action="#">
		
		<fieldset>

				<legend>Date Of Birth</legend>
					<table>

						<tr>
							    <td>dd</td>
								<td>mm</td>
								<td>yr</td>
							</tr>

							<tr>
							<td>
								<input type="text" name="day" value="<?php echo $day; ?>"> /
							</td>
							<td>
								<input type="text" name="month" value= "<?php echo $month; ?>">/
							</td>
							<td>
								<input type="text" name="year" value="<?php echo $year; ?>">
							</td>
							
						</tr>

					</table>

					<hr align="left">
					<input type="Submit" name="submit">

					
						
			</fieldset>

	</form>

	
</body>
</html>