<?php //php 7.2.24

    echo "\n---------------------------------";
    echo "\n1. Iteration statements provided";
    echo "\n---------------------------------";
    // In PHP programming language for, foreach, while and do while statements are provided
    
    /* The for statement has three control expressions and executes the loop body
     until the second controlling expression evaluates to false.*/
    for ($i = 0; $i < 4; $i++){
        
         echo "\nFor ". $i;
    }

    /* The foreach statment contiunes until all items of an iterable are processed.*/
    $arr = array( 10, 20, 30, 40, 50);
    foreach( $arr as $val ) {
           
        echo "\nForeach ". $val;
    }

    /* The while statement checks the control expression before executing the loop body
    and executes the loop body until the control expression evaluates to false.*/
    $a = 0;
    while( $a < 4) {
       
        echo "\nWhile ". $a;
        $a++;
    }
    
    /* The do statement checks the contol expression after executing the loop body
         each time and also executes the loop body at least once.*/
    $b = 4;
    do {
        
        echo("\nDo While ". $b);
        $b++;
        
    } while( $b < 4);
    
    echo "\n-----------------------------------------";
    echo "\n2. Data Structures Suitable for Iteration";
    echo "\n-----------------------------------------";
    
    $arr2 = array( 10, 20, 30, 40, 50);
    foreach( $arr2 as $vall ) {
           
        echo "\nForeach ". $vall;
    }
    
    //Dynamic array
    foreach (array(1, 2, 3, 4, 5) as $v) {
        echo "\n$v\n";
    }
    
    //Multi dimensional array
    $a = array();
      $a[0][0] = "d";
      $a[0][1] = "e";
      $a[1][0] = "n";
      $a[1][1] = "z";

     foreach ($a as $v1) {
       foreach ($v1 as $v2) {
          echo "\n$v2\n";
        }
     }
     
     // Iterate over an array of arrys using list()
     $array = [
         [1, 2],
         [3, 4],
     ];

     foreach ($array as list($a, $b)) {
        echo "A: $a; B: $b\n";
    }
    
    $i = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    );

    foreach ($i as $key => $val) {
        echo "$key => $val\n";
    }

   for($c = 'A'; $c != 'D'; $c++) {
        echo $c.' ';
   }
   
   //strtotime
   for ($date = strtotime("2021-04-26"); $date < strtotime("2021-04-28"); $date = strtotime("+1 day", $date)) {
        echo date("\nY-m-d", $date);
  }

    echo "\n-------------------------------------";
    echo "\n3. The Way the Next Item is Accessed ";
    echo "\n-------------------------------------\n";
    
    /*Array pointer is incremented by 1 to reach the next
   element but the pointer is not like the pointer in C. It is more like an internal mechanism*/
    
    $arr3 = array( 10, 20, 30, 40, 50);
    foreach( $arr3 as $valll ) {
           
        echo " ". $valll;
    }
    
    echo "\n";
    //next() can be used to go to next element
    for ($i = 0; $i < 5; $i++){
        
         echo  next($arr3); //will start printing from 20 beacuse
        //the first time the next is called the value is 10 so it prints the next value.
         echo " ";
    }

    

?>
