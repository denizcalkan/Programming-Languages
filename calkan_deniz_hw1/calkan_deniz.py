def func1() :
    print("I'm in func1 ")
    one = False
    return one


def func2() :
    
    print("I'm in func2 ")
    two = True;
    return two


def func3() :
    
    print("I'm in func3 ")
    three = True
    return three


def main() :
    
    a = 30 
    b = 40 
    boolean = False 
    
    
    print("1.Boolean operators provided")
    print("----------------------------")
    #In Python programming language and, or, not logical operators are provided and the keywords are reserved.
    #In Python programming language False and True keywords are reserved for boolean type.
    #If the result of a boolean operator is true return value is True which is type bool else return value is False.
    
    
    # a = 30,  b = 40, boolean = False.

    # and : If both of the operands are true retruns true else returns false.
    boolean = (a < b) and (b == b)
    print("(a < b) and (b == b) returns"),
    print(boolean)
    
    # or : If both of the operands are false retruns false else returns true.
    boolean = (b > a) or (a > b)
    print("(b > a) or (a > b) returns "),
    print(boolean)
    
    # not : Reverses the boolean value.
    boolean = not((b > a) or (a > b))
    print("not((b > a) or (a > b)) returns "),
    print(boolean)
    
    print("\n2.Data types for operands of boolean operators")
    print("----------------------------------------------")
    
    # Different data types can be used but the results are unreasonable.
    # If the first operand of an or is False it always prints the second operand's value.
    # If the first operand of an and is True it always prints the second operand's value.
    # If the first operand is an unexpected type it is printed.
    
    # If the data to be inverted is 0 or False not operator returns true for any other data it returns false.
   
    boolean = True and (b == b)
    print("True and (b == b) returns"),
    print(boolean)
    
    boolean = True and 'c'
    print("True and 'c' returns"),
    print(boolean)
   
    boolean = 0 or (a > b)
    print("0 or (a > b) returns "),
    print(boolean)
    
    boolean = 1 or True
    print("1 or True returns "),
    print(boolean)
    
    boolean = 5 or (a < b)
    print("5 or (a < b) returns "),
    print(boolean)
    
    boolean = False or 5
    print("False or 5 returns "),
    print(boolean)
    
    boolean = not(7)
    print("not(7) returns "),
    print(boolean)
    
    boolean = not(0)
    print("not(0) returns "),
    print(boolean)
    
    boolean = not(True)
    print("not(True) returns "),
    print(boolean)
    
    boolean = not(False)
    print("not(False) returns "),
    print(boolean)
    
    boolean = not("hello")
    print("not(hello) returns "),
    print(boolean)
    
    
    print("3.Operator precedence rules")
    print("--------------------------")
    
    # Returns True which means not > and
    boolean = not False and True 
    print("not False and True returns "),
    print(boolean)
    
    # Proof
    boolean = (not False) and True 
    print("(not False) and True returns "),
    print(boolean)
    
    #Returns false which means not > and > or 
    boolean = not True or True and False
    print("not True or True and False returns "),
    print(boolean)
    
    #Proof
    boolean = (not True) or (True and False)
    print("(not True) or (True and False) returns "),
    print(boolean)
    
    #Returns true which means not > and > or
    boolean = not True and False or True
    print("not True and False or True returns "),
    print(boolean)
    
    #Proof
    boolean = (not True and False) or True
    print("(not True and False) or True returns "),
    print(boolean)
    
    
    
    
    print("\n4.Operator associativity rules")
    print("--------------------------")
    
    #In Python programming langugage if the presendences of two operators are same the evaluation is done from left to right for and, or logical operators beacuse their associativty is left to right.
    # not logical operator's associativity is right to left.
    
   
    boolean = func3() and func2() and func1()
    print("\n")
    
    boolean = func2() and func3() and func1()
    print("\n")
    
    boolean = func1() or func1() or func3()
    print("\n")
    
    
    
    print("\n5.Operand evaluation order")
    print("--------------------------")
    
    #According to operator's associativty and presedence operands are evaluated.
    #In contrast function calls show that even with paranthesis func2 was called first because it is decided at runtime. 
    #But the evaluation is done according to rules.
    
   
    boolean = func2() and (func1() or func3())
    print("\n")
    
    boolean = func2() and (func1() and func3())
    print("\n")
    
    
    print("\n6.Short-circuit evaluation")
    print("--------------------------")
    
    #and( operator checks the left operand first and if its false it immediately returns and the right operand is not evaluated
    
    print("func2() is never executed\n")
    boolean = False and func2() 
    print("\n")
    print("--------------------------\n")
    
    print("func2() is executed\n")
    boolean = True and func2()
    print("\n")
    print("--------------------------\n")
    
    
    #or operator checks the left operand first and if its true it immediately returns and the right operand is not evaluated
   
    print("func2() is never executed\n")
    boolean = True or func2();
    print("\n")
    print("--------------------------\n")
     
    print("func2() is executed\n")
    boolean = False or func2()
    print("\n")
    print("--------------------------\n")
   
main()   






