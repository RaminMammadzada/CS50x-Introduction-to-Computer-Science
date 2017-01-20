#include<stdio.h>
#include<cs50.h>
#include<string.h>
#include<ctype.h>
#include<stdlib.h>

int main (int argc, string argv[])
{
    if ( argc<2 || argc>2 ) // make sure the comman-line input has just 2 element
    {printf("You must enter the key !");
    return 1;}
    
    int k = atoi(argv[1]); // atoi() function converts string to int
                           // atoi() function is given in stdlib.h library

    int c_num=0; // number corresponding to cyphered charachter
    
    string text=GetString();
    string c_text=text;
    for (int i=0, n=strlen(text); i<n ; i++)
    {
        if(text[i]!=' ')
        {
            c_num=(int)text[i] + k%26; // c_num: is cypered letter, text[i]: original letter, k: integer shifting value
            
            if(isupper(text[i])){
                
                if(c_num>(int)'Z'){
                    c_num-=26;
                    c_text[i]=(char)c_num;
                }
                else{
                    c_text[i]=(char)c_num;
                }
            }



            if(islower(text[i])){
                if(c_num>(int)'z'){
                    c_num-=26;
                    c_text[i]=(char)c_num;
                }
                else{
                    c_text[i]=(char)c_num;
                }
            }
          
        }
        
    }
    
    printf("%s\n", c_text);
    
    return 0;
    
}