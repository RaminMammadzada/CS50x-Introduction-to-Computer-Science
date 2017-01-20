/**
 * argv-0.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Prints program's first command-line argument; assumes it's present.
 *
 * Demonstrates use of argv.
 */

#include <cs50.h>
#include <stdio.h>

int main(int argc, string argv[])
{
    printf("%s\n", argv[1]);
}
