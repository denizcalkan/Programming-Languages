fn func1() -> bool {
    println!("I'm in func1\n");
    return false;

}
fn func2() -> bool {
    
    println!("I'm in func2\n");
    return true;
}

fn func3() -> bool {
    
    println!("I'm in func3\n");
    return true;

}



fn main() {
    
    let a = 30;
    let b = 40;
    let mut boolean = false;
    
    
    
    println!("1.Boolean operators provided");
    println!("----------------------------");
    
    // In Rust programming language &&(and), ||(or) and !(not) logical operators are provided.
    // In Rust programming language false and true keywords are reserved for boolean type.
    // If the result of a boolean operator is true return value is true which is type bool else return value is false.
  
    // let a = 30, let b = 40, let mut boolean = false.

    // && : If both of the operands are true retruns true else returns false.
    boolean = (a < b) && (b == b);
    print!("(a < b) && (b == b) returns ");
    println!("{ }",boolean);
    
    // || : If both of the operands are false retruns false else returns true.
    boolean = (b > a) || (a > b);
    print!("(b > a) || (a > b) returns ");
    println!("{ }",boolean);
    
    // ! : Reverses the boolean value.
    boolean = !((b > a) || (a > b));
    print!("!((b > a) || (a > b)) returns ");
    println!("{ }",boolean);
    
    println!("\n2.Data types for operands of boolean operators");
    println!("----------------------------------------------");
    
    //Operands should be bool.
    
    //Gives error
    //boolean =  0 && 1; 
    //print!("0 && 1 returns ");
    //println!("{ }",boolean);
    
    boolean =  false && (b > a); 
    print!("false && (b > a) returns ");
    println!("{ }",boolean);
    
    boolean = (a > b) || (b > a); 
    print!("(a > b) || (b > a) returns ");
    println!("{ }",boolean);
    
    boolean = !true; 
    print!("!true returns ");
    println!("{ }",boolean);
    
    
    
    println!("\n3.Operator precedence rules");
    println!("--------------------------");
    
    // not > and
    boolean =  !false && true; 
    print!("!false && true returns ");
    println!("{ }",boolean);
    
    //Proof
    boolean =  (!false) && true; 
    print!("(!false) && true returns ");
    println!("{ }",boolean);
    
    // not > and > or
    boolean =  !true && false || true; 
    print!("!true && false || true returns ");
    println!("{ }",boolean);
    
    boolean =  (!true && false) || true; 
    print!("(!true && false) || true returns ");
    println!("{ }",boolean);
    
    
    
    println!("\n4.Operator associativity rules");
    println!("--------------------------");
    
    // In Rust programming language if the precedences of two operators are same the evaluation is 
    // done from left to right for && and || logical operators because their associativity is left to right.
    // ! logical operator's associativity is right to left.
    
   
    boolean = func3() && func2() && func1();
    println!("\n");
    
    boolean = func2() && func3() && func1();
    println!("\n");
    
    boolean = func1() || func1() || func3();
    println!("\n");
    
    
    println!("5.Operand evaluation order");
    println!("--------------------------");
    
    //According to operator's associativity and precedence operands are evaluated.
    //In contrast function calls show that even with parentheses func2 was called first because it is decided at runtime. 
    //But the evaluation is done according to rules.
    
   
    boolean = func2() && (func1() || func3());
    println!("\n");
    
    boolean = func2() && (func1() && func3());
    println!("\n");
    
    
    println!("6.Short-circuit evaluation");
    println!("--------------------------");
    
    // &&(AND) operator checks the left operand first and if its false it immediately returns and 
    //the right operand is not evaluated
    
    println!("func2() is never executed");
    boolean = false && func2(); 
    println!();
    println!("--------------------------");
    
    println!("func2() is executed");
    boolean = true && func2();
    println!();
    println!("--------------------------");
    
    // ||(OR) operator checks the left operand first and if its true it immediately returns and 
    //the right operand is not evaluated
   
    println!("func2() is never executed");
    boolean = true || func2();
    println!("\n");
    println!("--------------------------");
     
    println!("func2() is executed");
    boolean = false || func2();
    println!();
    println!("--------------------------");

}  

