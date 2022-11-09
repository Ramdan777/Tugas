<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

   <title>Tugas</title>
</head>
 
<body>
<form class="container mt-5" class="btn" method="POST" action="">
      <input type="submit" class="btn btn-success" name="image" value="imageButton">
      <input type="submit" class="btn btn-success" name="shape" value="shapeButton">
</form>
<?php
class Button {
    public $x;
    public $y;
    public $widht;
    public $height;
}

class imageButton extends Button {
    public $ukuran1 ;
        public function cekUkuran1 (){
            return "widht : ".$this ->widht;
        }
        public function cekUkuran2 (){
            return "height : ".$this ->height;
        }
    }
class shapeButton extends Button {
    public $ukuran2 ;
        public function cekUkuran3 (){
            return "widht : ".$this ->widht;
        }
        public function cekUkuran4 (){
            return "height : ".$this ->height;
        }
}
function x(){
    $imageButton = new imageButton ();
    $imageButton -> widht = 10;
    $imageButton -> height = 10;
    echo $imageButton ->cekUkuran1();
    echo"<br>";
    echo $imageButton ->cekUkuran2();
}
function y(){
    $shapeButton = new shapeButton ();
    $shapeButton -> widht = 77;
    $shapeButton -> height = 77;
    echo $shapeButton ->cekUkuran3();
    echo"<br>";
    echo $shapeButton ->cekUkuran4();
}
if(isset($_POST['image'])){
    echo x();
}else if(isset($_POST['shape'])){
    echo y();
}
?>
</body>
</html>