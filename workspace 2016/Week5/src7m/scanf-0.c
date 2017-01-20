/**
 * scanf-0.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Reads a number from the user into an int.
 *
 * Demonstrates scanf and address-of operator.
 */
       
#include <stdio.h>

int main(void)
{
    int x;
    printf("Number please: ");
    scanf("%i", &x);
    printf("Thanks for the %i!\n", x);
}
