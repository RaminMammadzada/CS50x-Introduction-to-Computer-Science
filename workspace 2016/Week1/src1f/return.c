/****************************************************************************
 * return.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Cubes a variable.
 *
 * Demonstrates use of parameter and return value.
 ***************************************************************************/

#include <stdio.h>

// function prototype
int cube(int a);

int main(void)
{
    int x = 2;
    printf("x is now %i\n", x);
    printf("Cubing...\n");
    x = cube(x);
    printf("Cubed!\n");
    printf("x is now %i\n", x);
}

/**
 * Cubes argument.
 */
int cube(int n)
{
    return n * n * n;
}
