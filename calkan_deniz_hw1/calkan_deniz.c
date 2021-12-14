#include <stdio.h>
#include <stdlib.h>

int func1(void);
int func2(void);
int func3(void);

int main(int argc, const char * argv[]) {
    
    int a = 30;
    int b = 40;
    int boolean = 0;
    
   
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //1.Boolean operators provided
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    
    printf("\n");
    printf("1.Boolean operators provided\n");
    printf("----------------------------\n");
    
    // In C programming language &&(and), ||(or) and !(not) logical operators are provided.
    // In C programming language 0 is accepted as false and anything other than 0 is false.
    // Return value of a logical operator is 0 if the expression is false and 1 if the expression is true.
    
    // int a = 30, int b = 40, int boolean = 0.
    
    // && : If both of the operands are nonzero retruns true else returns false.
    boolean = a && (b > a);
    printf("a && (b > a) returns ");
    printf("%d\n", boolean);
    
    boolean = b && 0;
    printf("b && 0 returns ");
    printf("%d\n", boolean);
    
    
    // || : If both of the operands are zero retruns false else returns true.
    boolean = (a > b) || b;
    printf("(a > b) || b returns ");
    printf("%d\n", boolean);
    
    boolean = b || 0;
    printf("b || 0 returns ");
    printf("%d\n", boolean);
    
    
    // ! : Reverses the boolean value.
    boolean = !(a || b);
    printf("!(a && b) returns ");
    printf("%d\n", boolean);
    
    boolean = !(b && 0);
    printf("!(b && 0) returns ");
    printf("%d\n", boolean);
    
    
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //2.Data types for operands of boolean operators
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    printf("\n");
    printf("2.Data types for operands of boolean operators\n");
    printf("----------------------------------------------\n");
    
    // Different data types can be used as operands.Also different data types can be used together in the same expression.
    //Anything other than 0 is considered as true.
    
    boolean = 2.11 && 'c';
    printf("2.11 && 'c' returns ");
    printf("%d\n", boolean);
    
    boolean = 1 && 0;
    printf("1 && 0 returns ");
    printf("%d\n", boolean);
    
    boolean = !'c'|| "hello" ;
    printf("!c || hello returns ");
    printf("%d\n", boolean);
    
    boolean = !"hello";
    printf("!hello returns ");
    printf("%d\n", boolean);
    
    boolean = 12.3455 && 23;
    printf("12.3455 && 23 returns ");
    printf("%d\n", boolean);
    
   
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //3.Operator precedence rules
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    printf("\n");
    printf("3.Operator precedence rules\n");
    printf("--------------------------\n");
    
    // Returns true which means not > and
    boolean = !0 && 1;
    printf("!0 && 1 returns ");
    printf("%d\n", boolean);

    
    // Proof
    boolean = (!0) && 1;
    printf("(!0) && 1 returns ");
    printf("%d\n", boolean);

    
    //Returns false which means not > and > or
    boolean = !1 || 1 && 0;
    printf("!1 || 1 && 0 returns ");
    printf("%d\n", boolean);

    
    //Proof
    boolean = (!1) || (1 && 0);
    printf("(!1) || (1 && 0) returns ");
    printf("%d\n", boolean);

    
    //Returns true which means not > and > or
    boolean = !1 && 0 || 1;
    printf("!1 && 0 || 1 returns ");
    printf("%d\n", boolean);

    
    //Proof
    boolean = (!1 && 0) || 1;
    printf("(!1 && 0) || 1 returns ");
    printf("%d\n", boolean);

    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //4.Operator associativity rules
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    printf("\n");
    printf("4.Operator associativity rules\n");
    printf("--------------------------\n");
    
    // In C programming langugage if the presendences of two operators are same the evaluation is done from left to right for && and || logical operators beacuse their associativty is left to right.
    // ! logical operator's associativity is right to left
    
    
    boolean = func3() && func2() && func1();
    printf("\n");
    
    boolean = func2() && func3() && func1();
    printf("\n");
    
    boolean = func1() || func1() || func3();
    printf("\n");
    
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //5.Operand evaluation order
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    printf("\n");
    printf("5.Operand evaluation order\n");
    printf("--------------------------\n");
      
    //According to operator's associativty and presedence operands are evaluated.
    //In contrast function calls show that even with paranthesis func2 was called first because it is decided at runtime. But the evaluation is done according to rules.
    
   
    boolean = func2() && (func1() || func3());
    printf("\n");
    
    boolean = func2() && (func1() && func3());
    printf("\n");
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    //6.Short-circuit evaluation
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    printf("\n");
    printf("6.Short-circuit evaluation\n");
    printf("--------------------------\n");
    
    
    // &&(AND) operator checks the left operand first and if its false it immediately returns and the right operand is not executed
    
    printf("func2() is never executed\n");
    boolean = 0 && func2();
    printf("\n");
    printf("--------------------------\n");
    
    printf("func2() is executed\n");
    boolean = 1 && func2();
    printf("\n");
    printf("--------------------------\n");
    
    
    // ||(OR) operator checks the left operand first and if its true it immediately returns and the right operand is not executed
   
     printf("func2() is never executed\n");
     boolean = 1 || func2();
     printf("\n");
     printf("--------------------------\n");
     
     printf("func2() is executed\n");
     boolean = 0 || func2();
     printf("\n");
     printf("--------------------------\n");
   
       
    
    return 0;
}


int func1() {
    
    printf("func1 ");
    return 0;
}

int func2() {
    
    printf("func2 ");
    return 1;
}

int func3() {
    
    printf("func3 ");
    return 1;
}



