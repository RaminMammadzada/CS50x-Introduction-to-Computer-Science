#include<stdio.h>
#include<cs50.h>
#include<string.h>
#include<ctype.h>

int main (void){
    
   string s =GetString();
   if(s!=NULL){
    for(int i=0, n=strlen(s); i<n; i++)   
    {
        if(islower(s[i]))
        {
            printf("%c",toupper(s[i]));
        }
        else
        {
           printf("%c",s[i]); 
        }
    }
   }
}

