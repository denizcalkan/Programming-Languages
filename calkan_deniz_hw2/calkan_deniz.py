import numpy
print("---------------------------------")
print("1. Iteration statements provided")
print("---------------------------------")
    
# In Python programming language for in and while statements are provided and both statements can be used with else clause.

#The for in statement continues until there is no iteration left
for i in range(1,5):
   print("For in" ),
   print(i)
else: #For loop can be used without this else.
    print("Inside else i = "),
    print(i)

a = 0
while ( a < 4):
    print("While "),
    print(a)
    a = a + 1
else: #While loop can be used without this else.
    print("Inside else a = "),
    print(a)

print("-----------------------------------------")
print("2. Data Structures Suitable for Iteration")
print("-----------------------------------------")

#Dictionary
d = {"one": "1",  "two": "2",  "three": "3"}
for k in d:
    print(k) #There is no fixed order
    
#List
list = [8, 9, 10]

for i in list:
    print(i)

#Tuple
tuple = ("I", "am", "bored")
for i in tuple:
  print(i)
  
#Set
set = {"me", "myself", "I"}
for i in set:
  print(i) #There is no fixed order
  
#Array
arr = numpy.array([0, 1, 2])
for i in arr:
  print(i)
  
#String
str = "hey"
for i in range( len(str) ):
    print(str[i])
    
print("-------------------------------------")
print("3. The Way the Next Item is Accessed ")
print("-------------------------------------")

#There are no pointers in Python
#Elemets are accessed through indexing

list = [8, 9, 10]

#When looping through iterables iter() and next() built in functions are called.
for i in list:
    print(i)

#Doing manually what the above statement does
a = [8, 9, 10]

itr = iter(a)
itr
print(next(itr))
print(next(itr))
print(next(itr))
    
    
    
    
