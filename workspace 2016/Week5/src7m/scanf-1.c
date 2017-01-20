/**
 * scanf-1.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Reads a string from the user into memory it shouldn't.
 *
 * Demonstrates possible attack!
 */
       
#include <stdio.h>

int main(void)
{
    char* buffer;
    printf("String please: ");
    scanf("%s", buffer);
    printf("Thanks for the %s!\n", buffer);
}
