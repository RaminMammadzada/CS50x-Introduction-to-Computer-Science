#include <stdio.h>
#include <cs50.h>

int main(void)
{
    int height; // half-pyramid's height
    int blank=0; //
    int hash=0; //
    int i; // loop counter
    
    do{
        printf("Height:  ");
        height=GetInt(); //prompt the user for the input
    }
    while(height<0||height>23); // user input should be between 0 and 23


    for(i=0;i<height;i++)
    {
        while(blank<=height-i-2){
        printf(" ");
            blank++; }
        blank=0;
        while(hash<=i+1){
            printf("#");
            hash++;  }
        hash=0;
        printf("\n");
    }
    
    
}