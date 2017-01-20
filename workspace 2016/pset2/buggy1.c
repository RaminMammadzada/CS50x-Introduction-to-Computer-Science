#include <cs50.h>
#include <stdio.h>

int main(void)
{
    printf("Please enter a numberL: ");
    
    int num = GetInt();
    
    num=num/2;
    
    for(int i=1; i<num; i++)
    {
        printf("%i!\n", i);
    }
    
    return 0;
}