<?php 


	class Cell{
		protected $text;
		protected $colorFont;
		protected $colorBg;
		protected $colorBor;

		function __construct($text=null, $colorBg=null,$colorBor=null, $colorFont=null){
			$this->text=$text;
			$this->colorBg=$colorBg;
			$this->colorBor=$colorBor;
			$this->colorFont=$colorFont;

		}

		function setColorBg($colorBg){
			$this->colorBg=$colorBg;
		}
		function getColorBg($colorBg){
			return $this->colorBg;
		}
		function setColorBor($colorBor){
			$this->colorBor=$colorBor;
		}
		function getColorBor($colorBor){
			return $this->colorBor;
		}
		function setColorFont($colorFont){
			$this->colorFont=$colorFont;
		}
		function getColorFont($colorFont){
			return $this->colorFont;
		}

		function setText($text){
			$this->text=$text;
		}
		function getText($text){
			return $this->text;
		}


		function show(){

			echo '<td style = "color:'.$this->colorFont.'; background-color:'.$this->colorBg.'; border-color:'.$this->colorBor.'">'.$this->text.'</td>';
		}
	}