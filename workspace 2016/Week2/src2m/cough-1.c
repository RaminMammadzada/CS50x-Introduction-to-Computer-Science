/**
 * cough-1.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Coughs three times.
 *
 * Demonstrates better design via a loop.
 */
       
#include <stdio.h>

int main(void)
{
    // cough three times
    for (int i = 0; i < 3; i++)
    {
        printf("cough\n");
    }
}