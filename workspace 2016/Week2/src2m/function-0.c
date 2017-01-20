/**
 * function-0.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Prints a user's name.
 *
 * Demonstrates a function (not from a library) with a side effect.
 */

#include <cs50.h>
#include <stdio.h>

// prototype
void PrintName(string name);

int main(void)
{
    printf("Your name: ");
    string s = GetString();
    PrintName(s);
}

/**
 * Says hello to someone by name.
 */
void PrintName(string name)
{
    printf("hello, %s\n", name);
}
