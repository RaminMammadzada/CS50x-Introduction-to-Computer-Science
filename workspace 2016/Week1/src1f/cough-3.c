/**
 * cough-3.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Coughs three times.
 *
 * Demonstrates parameterization.
 */

#include <stdio.h>

// prototype
void cough(int n);

int main(void)
{
    // cough three times
    cough(3);
}

/**
 * Coughs n times.
 */
void cough(int n)
{
    for (int i = 0; i < n; i++)
    {
        printf("cough\n");
    }
}