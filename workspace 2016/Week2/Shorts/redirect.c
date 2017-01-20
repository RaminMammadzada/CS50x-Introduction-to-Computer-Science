#include<stdio.h>
#include<cs50.h>

int main (void){
    
    string n;
    
    {
       printf("Input string: ");
       n = GetString();
       //l = GetString();
    }
    while(n==NULL);
   
    printf("%s\n", n);
    
}

