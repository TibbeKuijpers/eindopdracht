<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>
	
	<?php
	
	class Bicycle{
		protected $wheels = 2;
		public $brand;
		public $model;
		public $year;
		public $description = 'Used';
		private $weightKG;
		
		public function set_weightKG($weight) {
			return $this->weightKG = $weight;
		}
		
		public function get_weightKG(){
			return $this->weightKG . " Kg";
		}
		
		public function name(){
			return "This is a {$this->brand} bicycle. It is an {$this->model} and it is made in {$this->year}
			. The bike is {$this->description}.";
		}
		
		public function weightLbs(){
			return round(($this->weightKG * 2.2046226218),2) . " Lbs";
		}
		
		public function Weight(){
			return $this->weightLbs() / 2.2046226218;
		}
		
		public function wheelDetails(){
			if($this->model == "Uni") {
				return "This bike has 1 wheel.";
			}elseif ($this->model == "Bicycle"){
				return "This bike has 2 wheels.";
			}
		}
		
	}
	
	class Unicycle extends Bicycle{
		protected $wheels = 1;
		
	}
	
	$bike = new Bicycle;
	$bike->brand = 'Stella';
	$bike->model = 'Bicycle';
	$bike->year = '2014';
	//$bike->weightKG = 15;
	$bike->wheels = 2;
	
	$bike->set_weightKG(20);
	$bike->get_weightKG();
	
	$uni = new Unicycle;
	$uni->brand = 'Circus';
	$uni->model = 'Uni';
	$uni->year = '2014';
	//$uni->weightKG = 5;
	$uni->wheels = 1;
	
	echo $bike->name() . "<br>";
	
	echo $bike->weightLbs() . "<br>";
	
	//echo $bike->weightKg() . "<br>";
	
	echo $bike->wheelDetails() . "<br>";
	
	echo $uni->wheelDetails() . "<br>";
	
	echo $bike->get_weightKG();
	
	
	?>
</body>
</html>