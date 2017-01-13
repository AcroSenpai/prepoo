<?php  
	require 'table.php';
	$table=new Table(4,5,'gray');
	$table->setCell('blue','tomato','green',"Hola",3,4);
	$table->setCell('red','cyan','orange',"Buenas",3,2);

	$table->getTable();
	$table->Show();