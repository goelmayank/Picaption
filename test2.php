<?php
if(isset($_POST['formsubmitted1']))
{
	echo "0k";
}

?>
<html>
<body>
<form action="test3.php">
							<textarea  name="area1" rows="2" cols="100" value="..."></textarea>
							 <input type="hidden" name="formsubmitted1" value="TRUE" />
							<input type="submit" name="submit1" value="Caption!"  onclick="myFunction()"/>
						</form>
						<script>
function myFunction() {
    alert("I am an alert box!");
}
</script>

</body>
</html>
