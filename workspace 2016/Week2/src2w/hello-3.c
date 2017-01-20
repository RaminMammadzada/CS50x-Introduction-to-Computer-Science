/**
 * hello-3.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Says hello to argv[1].
 *
 * Demonstrates a command-line argument.
 */
       
#include <cs50.h>
#include <stdio.h>

int main(int argc, string argv[])
{
    printf("hello, %s\n", argv[1]);
}
