
package main

import (
    "fmt"
)

func func1()(f bool) {
    
    fmt.Print("func1 ");
    f = false;
    return 
}

func func2()(t bool) {
    
    fmt.Print("func2 ");
    t = true;
    return 
}

func func3()(t bool) {
    
    fmt.Print("func3 ");
    t = true;
    return 
}


func main() {

    var (
    
        a = 30; //type is int b default
            b = 40; //type is int by default
            boolean = false; //type is bool by declaration
    
    )
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //1.Boolean operators provided
    //////////////////////////////////////////////////////////////////////////////////////////////////////

    fmt.Println();
    fmt.Println("1.Boolean operators provided");
    fmt.Println("----------------------------");
    
    // In GO programming language &&(and), ||(or) and !(not) logical operators are provided.
    // In GO programming language false and true keywords are reserved for boolean type.
    // If the result of a boolean operator is true return value is true which is type bool else return value is false.
  
    // var a = 30, var b = 40, boolean = false.

    // && : If both of the operands are true retruns true else returns false.
    boolean = (a < b) && (b == b);
    fmt.Print("(a < b) && (b == b) returns ");
    fmt.Print(boolean,"\n");
    
    
    // || : If both of the operands are false returns false else returns true.
    boolean = (b > a) || (a > b);
    fmt.Print("(b > a) || (a > b) returns ");
    fmt.Print(boolean,"\n");
    
    
    // ! : Reverses the boolean value.
    boolean = !((b > a) || (a > b));
    fmt.Print("!((b > a) || (a > b)) returns ");
    fmt.Print(boolean,"\n");

    

    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //2.Data types for operands of boolean operators
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    fmt.Println();
    fmt.Println("2.Data types for operands of boolean operators");
    fmt.Println("----------------------------------------------");
    
    // Operands should be bool.
    
    // Gives error because operands should be bool type
    //boolean = 0 && 1;
    //fmt.Print("0 && 1 returns ");
    //fmt.Print(boolean,"\n");

    boolean = true && false;
    fmt.Print("true && false returns ");
    fmt.Print(boolean,"\n");
    
    boolean = (a > b) || (b > a);
    fmt.Print("(a > b) || (b > a) returns ");
    fmt.Print(boolean,"\n");

      

    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //3.Operator precedence rules
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    fmt.Println();
    fmt.Println("3.Operator precedence rules");
    fmt.Println("--------------------------");
    
    // Returns true which means not > and
    boolean = !false && true;
    fmt.Print("!false && true returns ");
    fmt.Println(boolean);
    
    // Proof
    boolean = (!false) && true; 
    fmt.Print("(!false) && true returns ");
    fmt.Println(boolean);
    
    //Returns false which means not > and > or 
    boolean = !true || true && false;
    fmt.Print("!true || true && false returns ");
    fmt.Println(boolean);
    
    //Proof
    boolean = (!true) || (true && false);
    fmt.Print("(!true) || (true && false) returns ");
    fmt.Println(boolean);
    
    //Returns true which means not > and > or
    boolean = !true && false || true;
    fmt.Print("!true && false || true returns ");
    fmt.Println(boolean);
    
    //Proof
    boolean = (!true && false) || true;
    fmt.Print("(!true && false) || true returns ");
    fmt.Println(boolean);
    
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //4.Operator associativity rules
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    fmt.Println();
    fmt.Println("4.Operator associativity rules");
    fmt.Println("--------------------------");

    // In GO programming language if the presendences of two operators are same the evaluation is 
    // done from left to right for && and || logical operators because their associativity is left to right.
    // ! logical operator's associativity is right to left.
    
   
    boolean = func3() && func2() && func1();
    fmt.Print("\n");
    
    boolean = func2() && func3() && func1();
    fmt.Print("\n");
    
    boolean = func1() || func1() || func3();
    fmt.Print("\n");
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //5.Operand evaluation order
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    fmt.Println();
    fmt.Println("5.Operand evaluation order");
    fmt.Println("--------------------------");
      
    //According to operator's associativty and presedence operands are evaluated.
    //In contrast function calls show that even with parentheses func2 was called first because it is decided at runtime. 
    //But the evaluation is done according to rules.
    
   
    boolean = func2() && (func1() || func3());
    fmt.Print("\n");
    
    boolean = func2() && (func1() && func3());
    fmt.Print("\n");
    
   
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //6.Short-circuit evaluation
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    fmt.Println();
    fmt.Println("6.Short-circuit evaluation");
    fmt.Println("--------------------------");
    
    
    // &&(AND) operator checks the left operand first and if its false it immediately returns and 
    //the right operand is not evaluated
    
    fmt.Print("func2() is never executed\n");
    boolean = false && func2(); 
    fmt.Print("\n");
    fmt.Print("--------------------------\n");
    
    fmt.Print("func2() is executed\n");
    boolean = true && func2();
    fmt.Print("\n");
    fmt.Print("--------------------------\n");
    
    
    // ||(OR) operator checks the left operand first and if its true it immediately returns and 
    //the right operand is not evaluated
   
    fmt.Print("func2() is never executed\n");
    boolean = true || func2();
    fmt.Print("\n");
    fmt.Print("--------------------------\n");
     
    fmt.Print("func2() is executed\n");
    boolean = false || func2();
    fmt.Print("\n");
    fmt.Print("--------------------------\n");
   
 
}

