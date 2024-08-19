<?php
session_start();
    //    ECHO 'HI'
    //echo 20 + 10;
    //$12first_name = 'mohammad';
    
    
    
    //echo $ first_name;
//define('name', 24);
//echo name;
//  $name1 = 2;
//  $name2 = 18;
//  $resalt = $name1 + $name2 ;
//  print $resalt;

// $num = TRUE;

// var_dump($num); 

// $colors = ['red','green','blue']; 
//   $age = null ;
//   var_dump($age);

// $str = 'hello';

// // $arr = explode(' ' , $str);
// $colors = ['red','blue','green'];
// $str = implode(',',$colors);
// echo'<pre>';
// // var_dump ($str);
// echo $str;

// $comment = '<script> alert("hi") </script>';
// echo $comment;

// $comment = '<script> alert("hi") </script>';
// echo htmlspecialchars($comment) ;\

// echo htmlentities($comment);

// $colors = ['red','blue','green'];
// $str = join(',', $colors);
// echo $str ;

// echo "<h1 style='color:red'>hello</h1>";
//  $price = 100000000000000.9287364;
//  echo number_format($price, 2);
// $str = 'mohammad khobe';
// echo str_repeat($str, 5);

// $str = 'mohammad khobe';
// echo str_replace('mohammad', 'ahmad', $str);

// $str1 = 'mohasrthsdhmmad';
// $str2 = 'mohagdfghth65jhjmma';

// echo strcmp($str1,$str2);
// $str = 'mohammad';
// echo strlen($str);
// echo strpos($str,'d');
// echo  strtolower($str);
// echo'<pre>';
// echo  strtoupper($str);
// echo substr($str,3); 
// echo trim($str,'m m');

// $age = -35.5;

// var_dump($age);
// var_dump(is_int($age));
// var_dump(is_integer($age));
// var_dump(is_float($age));
// $age = 10.5;
// $newage = (int)$age;
// var_dump(($newage));
// var_dump(pi());
// var_dump(abs(-5));
// var_dump(sqrt(64));
// var_dump(round(4.3));
//  var_dump(rand(1,40));
// $colors = ['red','green','blue',0,null,34,-1]; 

// echo'<pre>';
// var_dump($colors);
 
// $users = [
//     ['first_name'=>'mohammad','last_name'=>'elendil'],
//     ['first_name'=>'ahmad','last_name'=>'ama'],
//     ['first_name'=>'ali','last_name'=>'sdi'],
//     ['first_name'=>'fhy','last_name'=>'fly'],
// ];

// echo'<pre>';
// var_dump($users[3]['first_name']);

// $cars = ['bmw','benz','pride'];
// $price = [25,56,68];
// $arr = array_combine($cars, $price);
// echo '<pre>';
// var_dump($arr);
// var_dump(array_keys($arr));
// echo (array_keys($arr));
// var_dump(array_values($arr));

// $colors =['red' , 'blue'];
// echo'<pre>';
// // array_pop($colors);
// // array_push($colors,'yellow');
// // array_shift($colors);
// array_unshift($colors,'green');
// var_dump($colors);

// $colors = [
//     'a'=> 'red',
//     'b'=> 'blue',
//     'c'=> 'green'
// ];
// var_dump(array_reverse ($colors));

// $cars=['bmw','benz','prid', 'pego'];
// var_dump(array_slice($cars,0,2));

// $first_name = 'mohammad';
// $last_name = 'ahmad';
// $age = 30 ;
// $arr = compact('first_name','last_name' ,'age');

// var_dump($arr);

// $cars=['bmw','benz','prid', 'pego','jip'];

// // echo count($cars);
// // echo sizeof($cars);
// var_dump(in_array('volvo',$cars));

// $point = 13;
// if($point >=15 && $point <=20){
//     echo 'G1';
// }
// elseif ($point >=10 && $point < 15){
//     echo 'G2';
// }
// else {
//     echo 'error';
// }

// $point = 1;
// switch($point){
//     case ($point == 20):
//       echo 'G1';
//       break;
//     case ($point == 10):
//         echo 'g2';
//         break;
//     default:
//         echo 'no';
// }

// $counter = 1;
// while($counter <= 5){
//     echo 'mohammad'.'</br>';
//     $counter++;
// }

// $counter = 9;
// do{
//     echo 'mohammad'.'</br>';
//     $counter++;
// }
// while($counter <= 5);

// for ($i = 1; $i <=5; $i++){
//     echo $i . '<br/>';

// }
// $cars=['a'=>'bmw','b'=>'benz','c'=>'prid','d'=> 'pego','e'=>'jip']; 

// for ($i = 0; $i< count($cars); $i++){
//     echo $cars[$i] . '<br/>'. '<br/>';

// }
// foreach($cars as $cars){
//     echo $cars . '<br/>'. '<br/>';
// }

// foreach($cars as $key => $cars){
//     echo $key .':' .  $cars . '<br/>'. '<br/>';
// }
//  $i = 1;
//  while ($i <= 10){
//     if( $i === 5){
//         break;
//     }
//     echo $i;
//  }

// function x($a , $b){
//     echo $a+$b;
// }

// x(7,9);

// function y($s){
//     $s += 12;

// }
// $t=34;
// y($t);
// echo $t;
// $a=10;
// function x(){
//     global $a;
//     echo $a +6;
// }
// $a+=6;
// x();
// var_dump($_SERVER);
 
// $_SESSION['fname']='mohammad';

setcookie('fname','hassan',time() - (86400*30));

















































