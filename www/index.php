<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 19:01
 */
?>
<html>
<head>
    <title>OOP</title>
</head>
<body>
<?php


class Table
{
	protected $legs;
	protected $color;
	
	public function show()
	{
		echo "i'm a table ";
		echo $this->color;
	}
	
	public function __construct($color)
	{
		$this->color = $color;
	}
}

$table = new Table('red');
$table->show();

?>
</body>
</html>
