
<?php //php 7.2.24

function func1() {
    
    echo "func1 ";
    $f = false;
    return $f;
}

function func2() {
    
    echo "func2 ";
    $t = true;
    return $t;
}

function func3() {
    
    echo "func3 ";
    $t = true;
    return $t;
}
 function main() {


       $a = 30; 
       $b = 40; 
       $boolean = false;             
    
        
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //1.Boolean operators provided
    //////////////////////////////////////////////////////////////////////////////////////////////////////

    
    echo "1.Boolean operators provided";
    echo "\n----------------------------";
    
    // In PHP programming language &&(and), ||(or), !(not), and, or, xor logical operators are provided.
    // In PHP programming language false and true keywords are reserved for boolean type.
    // If the result of a boolean operator is true return value is 1 else return value is empty string("").
  
    // $a = 30, $b = 40, $boolean = false.

    // && : If both of the operands are true returns true else returns false.
    $boolean = ($a < $b) && ($b == $b);
    echo"\n(a < b) && (b == b) returns ". $boolean;
    
    
    // || : If both of the operands are false returns false else returns true.
    $boolean = ($b > $a) || ($a > $b);
    echo "\n(b > a) || (a > b) returns ". $boolean;
   
    
    // ! : Reverses the boolean value.
    $boolean = !(($b > $a) || ($a > $b));
    echo "\n!((b > a) || (a > b)) returns " . $boolean;
     
    // and : If both of the operands are true returns true else returns false.
    $boolean = ($a < $b) and ($b == $b);
    echo"\n(a < b) and (b == b) returns ". $boolean;
    
    
    // or : If both of the operands are false returns false else returns true.
    $boolean = ($b > $a) or ($a > $b);
    echo "\n(b > a) or (a > b) returns ". $boolean;
   
    
    // xor : True if either operand is true, but not both.
    $boolean = true xor ($a > $b);
    echo "\ntrue xor (a > b) returns " . $boolean;
     
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //2.Data types for operands of boolean operators
    //////////////////////////////////////////////////////////////////////////////////////////////////////

    
    echo "\n\n2.Data types for operands of boolean operators";
    echo "\n----------------------------";
    
    //Different types can be used as operands but some of the results are not reasonable.
    //For &&, || and ! operators results are either 1 or empty string according to operands. 
    //If the operand is 0, NULL, "", "0" or false it is accepted as false and anything else accepted as true.
     
    //For and, or, xor operands if the operands are not true or false the output is very unreasonable but no error is given.
   
    $boolean = ($a < $b) && ($b == $b);
    echo"\n(a < b) && (b == b) returns ". $boolean;
     
    $boolean = 5 && ($b == $b);
    echo"\n5 && (b == b) returns ". $boolean;
     
    $boolean = NULL && ($b == $b);
    echo"\nNULL && (b == b) returns ". $boolean;
     
    $boolean = 'c' && ($b == $b);
    echo"\n'c'&& (b == b) returns ". $boolean;
    
    $boolean = 8 || ($a > $b);
    echo "\n8 || (a > b) returns ". $boolean;
     
    $boolean = ($a > $b) || 8 ;
    echo "\n(a > b) || 8 returns ". $boolean;
   
  
    $boolean = !(($b > $a) || ($a > $b));
    echo "\n!((b > a) || (a > b)) returns " . $boolean;
   
    $boolean = true and 5;
    echo"\ntrue and 5 returns ". $boolean;
     
    $boolean = 5 and true;
    echo"\n5 and true returns ". $boolean;
     
    $boolean = 5 and ($b > $a);
    echo"\n5 and (b > a) returns ". $boolean;
    
    $boolean = 'c' or ($a < $b);
    echo "\n'c' or (a < b) returns ". $boolean;
   
    $boolean = true xor ($a > $b);
    echo "\ntrue xor (a > b) returns " . $boolean;
    
    echo "\n\n3.Operator precedence rules";
    echo "\n----------------------------";
     
    // Returns true which means ! > ||
    $boolean = !false && true;
    echo "\n!false && true returns ". $boolean;
    
    // Returns true which means ! > && > || 
    $boolean =  !true && false || true; 
    echo "\n!true && false || true returns " . $boolean;
     
    // Returns false which means ! > || > and
    $boolean =  !true and false || true; 
    echo "\n!true and false || true returns " . $boolean;
     
    // Returns false which means ! > or > and
    $boolean =  !true and false or true; 
    echo "\n!true and false or true returns " . $boolean;
     
    // Returns false which means ! > && > or
    $boolean =  !true && false or true; 
    echo "\n!true && false or true returns " . $boolean;
     
    // Returns false which means ! > xor > and 
    $boolean =  !true and false xor true; 
    echo "\n!true and false xor true returns " . $boolean;
     
    echo "\n\n4.Operator associativity rules";
    echo "\n----------------------------";
     
     // In PHP programming language if the precendences of two operators are same the evaluation is 
    // done from left to right for &&, and, ||, or, xor logical operators because their associativity is left to right.
    // ! logical operator's associativity is right to left.
    
    echo "\n";
     
    $boolean = func3() && func2() && func1();
    echo "\n";
    
    $boolean = func2() and func3() and func1();
    echo "\n";
    
    $boolean = func1() || func1() || func3();
    echo "\n";
    
    $boolean = func1() or func1() or func3();
    echo "\n";
     
    echo "\n\n5.Operand evaluation order";
    echo "\n----------------------------";
     
    //According to operator's associativity and precedence operands are evaluated.
    //In contrast function calls show that even with parentheses func2 was called first because it is decided at runtime. 
    //But the evaluation is done according to rules.
   
     echo "\n";
 
    $boolean = func2() && (func1() || func3());
    echo "\n";
    
    $boolean = func2() && (func1() && func3());
    echo "\n";
     
    $boolean = func2() and func3() and func1();
    echo "\n";
 
    
    echo "\n\n6.Short-circuit evaluation";
    echo "\n----------------------------";

   // &&, and (AND) operator checks the left operand first and if its false it immediately returns and 
    //the right operand is not evaluated
     
    echo "\n";
    
    echo "func2() is never executed\n";
    $boolean = false && func2(); 
    echo "\n";
    echo "--------------------------\n";
    
    echo "func2() is executed\n";
    $boolean = true && func2();
    echo "\n";
    echo "--------------------------\n";
     
    echo "func2() is never executed\n";
    $boolean = false and func2(); 
    echo "\n";
    echo "--------------------------\n";
    
    echo "func2() is executed\n";
    $boolean = true and func2();
    echo "\n";
    echo "--------------------------\n";
    
    
    // ||, or(OR) operator checks the left operand first and if it's true it immediately returns and 
    //the right operand is not evaluated
   
    echo "func2() is never executed\n";
    $boolean = true || func2();
    echo "\n";
    echo "--------------------------\n";
     
    echo "func2() is executed\n";
    $boolean = false || func2();
    echo "\n";
    echo "--------------------------\n";
     
    echo "func2() is never executed\n";
    $boolean = true or func2();
    echo "\n";
    echo "--------------------------\n";
     
    echo "func2() is executed\n";
    $boolean = false or func2();
    echo "\n";
    echo "--------------------------\n";
   
 }
main();
    
?>

