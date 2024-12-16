// #include <stdio.h>
// {
//     int a,b;
    
//     printf ("give me a width");
//     scanf ("%d", &a);

//      printf ("give me a length");
//      scanf ("%d", &b);
    
//     printf("the multipication is :%d", a * b);
//     return 0;

// }


#include <stdio.h>

int main{

    float celsius ,fahrenheit;

    printf ("enter the temperature in celsius:");
    scanf ("%d", &celsius);

     fahrenheit = (celsius * 9/5) + 32;
     printf("the temperature in fahrenheit is:%f",fahrenheit );
     return 0;
}