//if -else //


// if (condition){
//  do something if true;     

// }
// else{
//     do somthing else false ;
// }

#include<stdio.h>
int main(){

// int age ;
// printf("My age is:");
// scanf("%d",&age);

//     if(age>18){
//         printf("adult\n");
//         printf("you can vote...");
//     }
//     else{
//         printf("Not adult\n");
//          printf("you canot vote...");
//     }



    // int masks;
    // printf("your collage masks is ");
    // scanf("%d",&masks);

    // if(masks>90){
    //     printf("A++");
    // }
    // else(masks>80 && masks <=90){
    //     printf("A+");
    // }

    

    int age ;
    printf("your age is:");
    scanf("%d",&age);

    if(age >=18){
        printf("adult\n");
    }
    else if(age >13 && age < 18){
        printf("teenager \n");
    }

    else{
        printf("child");
    }





    return 0 ;
}