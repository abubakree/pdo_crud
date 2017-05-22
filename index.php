<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
?>
<!DOCTYPE html>
<html>
<?php
	if (isset($_POST['submit'])){
		$query = $db->prepare("INSERT INTO member(id, firstname, lastname) VALUES (NULL,:firstname, :lastname);");
		$result = $query->execute
		([
			"firstname"=> $_POST['name']
			,"lastname"=>$_POST['lasename'],
			
		]);
		if($result)
		{
			echo "เชื่อมฐานข้อมูลได้";
		}else
		{
			echo "เชื่อมฐานข้อมูลไม่ได้";
		}
		}
?>
		<form  method="post">
			<label>fistname</label><input type="text" name="name" value=""></br>
			<label>นามสกุล</label><input type="text" name="lasename" value="">

     <input type="submit" name="submit">
		
		</form>
</html>


