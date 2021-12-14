package main

import (
    "fmt"
)

func main() {


    fmt.Print("---------------------------------\n")
    fmt.Print("1. Iteration statements provided\n")
    fmt.Print("---------------------------------\n")
    
    /* In GO programming language only for statement is provided but
    there are different ways to write for loop to satisfy different needs.*/
    
    
    for i := 0; i < 4; i++ {
        
         fmt.Print("First For ")
         fmt.Println(i);
    }
    
    n := 1
    for n < 5 {
        fmt.Print("Second For ")
         fmt.Println(n);
         n = n * 2;
    }

    fmt.Print("-----------------------------------------\n")
    fmt.Print("2. Data Structures Suitable for Iteration\n")
    fmt.Print("-----------------------------------------\n")

    
    str := []string{"zero", "one"}
    for i, s := range str {
        fmt.Println(i, s)
    }


    for i, ch := range "yes" {
        fmt.Printf("%#U %d\n", ch, i)
    }

    m := map[string]int{
    "I":     1,
    "am":    2,
    "bored": 3,
    }
    for i, n := range m {
        fmt.Println(i, n)
    }

    channel := make(chan int)
    go func(){
        channel <- 1
        channel <- 2
        channel <- 3
        channel <- 4
        close(channel)
    }()
    for i:= range channel {
       fmt.Println(i)
    }
    
    fmt.Print("-------------------------------------\n")
    fmt.Print("3. The Way the Next Item is Accessed \n")
    fmt.Print("-------------------------------------\n")

    //An array variable denotes the entire array. It is not a pointer to the first array element.
    st := [3]int{2, 4, 6} //Just three integers laid out sequentially
    
    fmt.Println(st) //Prints all of the array.
    
    //Elemets are accessed using indexing
    for i, s := range st {
        fmt.Println(i, &s) //All items are in the same memory location
    }

}
