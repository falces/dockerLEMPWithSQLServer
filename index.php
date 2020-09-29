 <!DOCTYPE html>
<html>
<body>

<h1>Test</h1>
<p>Test Database:</p>
<?php
try{
    $db_host = "mysql_db";
    $db_name = "test";
    $db_user = "root";
    $db_pass = "123456";
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM test";
    $result = $db->query($query);

    foreach($result as $item){
			echo $item['nombre'].'<br>';
		}
}catch(Exception $e){
    echo $e->getMessage();
}
?>
</body>
</html> 