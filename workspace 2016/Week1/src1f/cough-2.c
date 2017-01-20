/**
 * cough-2.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Coughs three times.
 *
 * Demonstrates abstraction and hierarchical decomposition.
 */

#include <stdio.h>

// prototype
void cough(void);

int main(void)
{
    // cough three times
    for (int i = 0; i < 3; i++)
    {
        cough();
    }
}

/**
 * Coughs once.
 */
void cough(void)
{
    printf("cough\n");
}