#include<stdio.h>
#include<cs50.h>
#include<string.h>
#include<ctype.h>
#include<stdlib.h>

int main (int argc, string argv[])
{
    // firstly we need to control command-line intputs
    
    // make sure the comman-line argument doesn't contain any non-alphabetical char
     for (int a=0, l=strlen(argv[1]); a<l; a++)
    {
        if(!(isalpha(argv[1][a])||isdigit(argv[1][a])))
            return 1;
    }
    
    // make sure the comman-line input has just 2 element
    if ( argc<2 || argc>2){
        //printf("You must enter the key !");
        return 1;}
        
    
    // ----------------------------------------------------- 
    
    
    string key = argv[1]; // my secret word
    string text=GetString(); // Sentence given by user and needed to be encrypted
    char key_text[strlen(text)];// key_text: key which will be used to calculate ciphered text

    // copy text string t0 key_text string
    for(int h=0, n=strlen(text); h<n; h++)
    {
        key_text[h]=text[h];
    }
    
    
    int c=0;
    // creating key with my secret word
    for(int b=0, ll=strlen(text); b<ll; b++)
    {
        
        if(key_text[b]!=' '){
            key_text[b]=key[c];
            c++;
        }
        
        if(c==strlen(key))
            c=0;
        
    }
    
    
    //parting original text and creating of cipered text
    
    int c_num=0; // number corresponding to ciphered charachter
    string c_text=text; // c_text: ciphered text
    int add=0;
    
    for (int i=0, n=strlen(text); i<n; i++)
    {
        if(isupper(key_text[i]))
            add=65;
        else
            add=97;
        
        if( !(
        ((int)text[i]>=32&&(int)text[i]<=47)||
        ((int)text[i]>=58&&(int)text[i]<=64)||
        ((int)text[i]>=91&&(int)text[i]<=96)||
        ((int)text[i]>=123&&(int)text[i]<=126)))
        {
            
            if(isupper(text[i])){
                
                c_num=(int)text[i] + ((int)key_text[i]-add)%26;// c_num: is cypered letter, text[i]: original letter
                if(c_num>(int)'Z'){
                    c_num-=26;
                    c_text[i]=(char)c_num;
                }
                else{
                    c_text[i]=(char)c_num;
                }
            }



            if(islower(text[i])){
                c_num=(int)text[i] + ((int)key_text[i]-add)%26;
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