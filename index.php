<?php
class Movie{
  public $info;
 public  $name;
 public $genre;
 public $release;
 public $yearsofage = 18;

 


 public function setEta($_yrsofage){
  if ($_yrsofage >=18 ){
  $this->yearsofage = $_yrsofage;
  }
}


function __construct($_info)
{
  $this->info = $_info;
  echo 'Film ';
}


}

$harrypotter = new Movie('Film1');
$harrypotter->info;
$harrypotter->name = 'Harry Potter';
$harrypotter->genre = 'Fantasy';
$harrypotter->release = '2000';
$harrypotter->yearsofage = 12;
$harrypotter->setEta(12);

var_dump($harrypotter);

$backtofuture = new Movie('Film2');
$backtofuture->name = 'Back to the Future';
$backtofuture->genre = 'Sci-Fi';
$backtofuture->release = '1985';
$backtofuture->yearsofage = 12;
$backtofuture->setEta(12);

var_dump($backtofuture);

$thering = new Movie('Film3');
$thering->name = 'The Ring';
$thering->genre = 'Horror';
$thering->release= '2002';


var_dump($thering);
echo $harrypotter->info;
echo '<br>'; 
echo 'Name: ';
echo $harrypotter->name;
echo '<br>';
echo 'Genre: ';
echo $harrypotter->genre;
echo '<br>';
echo 'Release: ';
echo $harrypotter->release;
echo '<br>';
echo 'Years of Age: ';
echo $harrypotter->yearsofage;


echo '<br>';
echo '<hr>';



echo 'Name: ';
echo $backtofuture->name;
echo '<br>';
echo 'Genre: ';
echo $backtofuture->genre;
echo '<br>';
echo 'Release: ';
echo $backtofuture->release;
echo '<br>';
echo 'Years of Age: ';
echo $backtofuture->yearsofage;








echo '<br>';
echo '<hr>';
 
echo 'Name: ';
echo $thering->name;
echo '<br>';
echo 'Genre: ';
echo $thering->genre;
echo '<br>';
echo 'Release: ';
echo $thering->release;
echo '<br>';
echo 'Years of Age: ';
echo $thering->yearsofage;


?>