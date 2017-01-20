/**
 * hello-4.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Says hello to argv[1].
 *
 * Demonstrates argc.
 */
       
#include <cs50.h>
#include <stdio.h>

int main(int argc, string argv[])
{
    if (argc == 2)
    {
        printf("hello, %s\n", argv[1]);
    }
    else
    {
        printf("hello, you\n");
    }
}
