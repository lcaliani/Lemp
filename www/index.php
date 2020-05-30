<html>
	<head>
	<title> Hello World! </title>
	<meta charset="UTF8">
	</head>
<?php
try {
        $connection = new PDO('mysql:host=db;dbname=chocolate', 'root', 'root');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Database connected successfully!';
} catch (Exception $e) {
        echo 'Error connecting database! ' . $e->getMessage();
}
?>	
	<body>
	<h1> <?= 'Hello again, World!' ?></h1>
	<?php phpinfo(); ?>
	</body>
</html>
