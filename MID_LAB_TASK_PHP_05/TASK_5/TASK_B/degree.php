<?php
if(isset($_POST['submit'])){

    if(!empty($_POST['lang'])) {

        foreach($_POST['lang'] as $value){
            echo "value : ".$value.'<br/>';
        }

    }

}
?>

<html>
<head>
	<title>Degree</title>
</head>
<body>

	<form method="post" action="#">
		<fieldset>
			<legend>Degree</legend>
			<table>
				<tr>
					<td>

    <input type="checkbox" name='lang[]' value="SSC"> SSC 
    <input type="checkbox" name='lang[]' value="HSC"> HSC
    <input type="checkbox" name='lang[]' value="BSc"> BSc 
    <input type="checkbox" name='lang[]' value="MSc"> MSc
    <td>
    </tr>
</table>

    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>