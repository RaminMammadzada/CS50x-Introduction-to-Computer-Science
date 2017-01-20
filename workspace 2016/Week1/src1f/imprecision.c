/**
 * imprecision.c
 * 
 * David J. Malan
 * malan@harvard.edu
 * 
 * Divides one floating-point value by another.
 * 
 * Demonstrates imprecision of floating-point values.
 */

#include <stdio.h>

int main(void)
{
    printf("%.29f\n", 1.0 / 10.0);
}