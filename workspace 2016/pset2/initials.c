#include<stdio.h>
#include<cs50.h>
#include<string.h>
#include<ctype.h>

int main ()
{
    string s = GetString();
    for( int i=0, n=strlen(s); i<n; i++ )
    {
        if (i == 0)
        printf("%c", toupper(s[i]) );
        
        if ( i > 0 )
        if ( s[i-1] == ' ' )
        printf ( "%c", toupper(s[i]) );
        
    }
    printf("\n");
    
}
