//rustc 1.39.0

fn main() {
    
    print!("---------------------------------\n");
    print!("1. Iteration statements provided\n");
    print!("---------------------------------\n");
    // In Rust programming language for in, while and loop statements are provided.
    
    //Loops in range [0,4)
    for x in 0..4{
         println!("For in {}", x);
      }
    
    let mut i = 0;
    while i < 5{
        println!("While {}", i);
        i+=1;
   }
   //Acts like indefinite while loop.
   let mut n = 0;
   loop {
       if n == 5 {
         break;
       }
       println!("Loop {}", n);
       n+=1;
   }
    
   print!("-----------------------------------------\n");
   print!("2. Data Structures Suitable for Iteration\n");
   print!("-----------------------------------------\n");
   
   //Vector
   let v1 = vec![1,2,3];
   for i in &v1 {
        print!("{} ", i);
   }
   println!();
   
   //Vector using iter()
   let v2 = vec![1, 2, 3];
   let v2_iter = v1.iter();
   for i in v2_iter {
        print!("{} ", i);
   }
   println!();
    
   //Array using iter()
   let arr = [1, 2, 3];
   for i in arr.iter() {
       print!("{} ", i);
   }
    
   print!("\n------------------------------------\n");
   print!("3. The Way the Next Item is Accessed\n");
   print!("------------------------------------\n");
   
   //Rust uses built in iterator functions
    
   let arr2 = [1, 2, 3];
   for i in arr2.iter() { //without calling iter() this statement gives error
       print!("{} ", i); //calls next() built in function
   }
    
    
}
