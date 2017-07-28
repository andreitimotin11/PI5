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
	public $legs;
	public $color;
	public function show(){
	    echo "i'm a table ";
	    echo $this->color;
    }
}

$table = new Table();
$table->color = 'red';
$table->legs = 4;
$table->show();
echo $table->color;
echo $table->legs;
$table2 = new Table();
$table2->color = 'white';
echo $table2->color;

//var_dump($table);

//echo $table->color;
//echo $table2->color;

?>
</body>
</html>
