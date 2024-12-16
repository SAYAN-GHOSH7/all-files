// /5 => /10 => "this is divisible by 5 and 10 both"
//         => "this is divisible by 5"
// /3  => "this is divisible by 3"

// / => "this is not divisible by 5 10 and 3";

#include <stdio.h>

int main()
{

    int number;
    printf("enter the number:  ");
    scanf("%d", &number);

    // elseif(number =>20 && >= 5 )/5;
    // printf("this is divisible by 5");

    // elseif(number  )

    // if(number % 5 == 0){
    //     //
    // }
    // else if(number % 3 == 0){

    // }
    // else{
    //     //
    // }



    // if (number % 5 == 0)
    // {
    //     if (number % 10 == 0)
    //     {
    //         printf("this is divisible by 5 and 10 both \n");
    //     }
    //     else
    //     {
    //         printf("this is divisible by 5 \n");
    //     }
    // }

    // else if (number % 3 == 0)
    // {
    //     printf("this is divisible by 3");
    // }

    // else
    // {
    //     printf("this is not divisible by 5 10 and 3\n");
    // }

    int k = (number + 10 ) / 5;
    printf("%d" , k);

    return 0;
}