#include <stdio.h>
#include <cs50.h>

int main(void)
{
    int len_of_s;
    int bottles;
    printf("minutes: ");
    len_of_s=GetInt();
    
    bottles=len_of_s*12;
    printf("bottles: %i ",bottles);
    printf("\n");
    
}