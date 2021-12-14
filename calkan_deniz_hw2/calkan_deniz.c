#include <stdio.h>
#include <stdlib.h>



int main(int argc, const char * argv[]) {


    printf("---------------------------------\n");
    printf("1. Iteration statements provided\n");
    printf("---------------------------------\n");
    
    // In C programming language for, while and do while statements are provided
    
    
    // The for statement has three control expressions and executes the loop body until the second controlling expression evaluates to false.
    
    for (int i = 0; i < 4; i++){
        
         printf("For ");
         printf("%d\n", i);
    }
    
    // The while statement checks the control expression before executing the loop body and executes the loop body until the control expression evaluates to false.
    int a = 0;
    while( a < 4) {
       
        printf("While ");
        printf("%d\n", a);
        a++;
        
    }
    
    // The do statement checks the contol expression after executing the loop body each time and also executes the loop body at least once.
    int b = 4;
    do {
        
        printf("Do While ");
        printf("%d\n", b);
        b++;
        
    } while( b < 4);
    

     printf("-----------------------------------------\n");
     printf("2. Data Structures Suitable for Iteration\n");
     printf("-----------------------------------------\n");
    
    //Array and string
    
    const int SIZE = 3;
    int arr[SIZE] = { 1, 2, 3,};

    for (int i = 0; i < SIZE; i++) {
      printf("%d ", arr[i]);
    }
   
    printf("\n");
    
    char* str = "deniz";
    int ch = 0;
    while (str[ch] != '\0') {
        printf("%c ", str[ch]);
        ch++;
    }
    printf("\n");
    
    printf("------------------------------------\n");
    printf("3. The Way the Next Item is Accessed\n");
    printf("------------------------------------\n");
    
    
    const int S = 3;
    int ar[S] = { 1, 2, 3,};

    //Each item has the address =  start address + (i * 4).
    //So, next item is accessed by this manner using pointers.
    for (int i = 0; i < S; i++) {
      printf("%d ", (int)&ar[i]); //&ar[i] is the address of ar[i] (element at i'th index)
    }
     printf("\n");
    
    for (int i = 0; i < S; i++) {
      printf("%d ", *(ar + i)); // *(ar + i)) is the value of ar[i]
    }
     printf("\n");
     printf("%d ", (int)ar); // ar is the poniter to the starting address of the array.
     printf("\n");
    
    
    return 0;
}
