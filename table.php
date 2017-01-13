<?php 

	require 'cell.php';

	class Table{
		private $nRows;
		private $nCols;
		private $matrix=array();
		private $bgcolor;

		function __construct($nRows, $nCols,$bgcolor){
			$this->nRows = $nRows;
			$this->nCols = $nCols;
			for($i=0; $i<$nRows;$i++){
				//echo 'a';
				for($j=0; $j<$nCols;$j++){
					//echo 'b';
					//creacio de cell
					//$matrix[$i][$j]=new Cell();
					//echo $i+$j;
					$this->matrix[$i][$j]=new Cell('x',$bgcolor,'white');
					//echo $matrix[$i][$j];
				}
			}

		}

		function getTable()
		{
			for($i=0; $i<$this->nRows;$i++)
			{
				for($j=0; $j<$this->nCols;$j++)
				{
					$this->matrix[$i][$j]->show();
				}
				echo '<br>';
			}
		}

		function setCell($fontc, $bgc,$borc, $data,$i,$j){
			if(($i<$this->nRows) && ($j<$this->nCols)){
				if($fontc!=null)
				{
				$this->matrix[$i-1][$j-1]->setColorFont($fontc);
				}
				if($bgc!=null)
				{
				$this->matrix[$i-1][$j-1]->setColorBg($bgc);
				}
				if($borc!=null)
				{
				$this->matrix[$i-1][$j-1]->setColorBor($borc);
				}
				if($data!=null)
				{
				$this->matrix[$i-1][$j-1]->setText($data);
				}
			}
		}

		function getCell($i,$j){
			$this->matrix[$i-1][$j-1]->show();
		}

		function show(){
			echo '<table border=1>';
			for($i=0; $i<$this->nRows;$i++)
			{
				echo '<tr>';
				for($j=0; $j<$this->nCols;$j++)
				{
					$this->matrix[$i][$j]->show();
				}
				echo '</tr>';
			}
		}

	}