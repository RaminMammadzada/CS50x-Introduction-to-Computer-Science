/**
 * cough-4.c
 *
 * David J. Malan
 * malan@harvard.edu
 *
 * Coughs three times and sneezes three times.
 *
 * Demonstrates further abstraction.
 */
       
#include <cs50.h>
#include <stdio.h>

// prototypes
void cough(int n);
void say(string word, int n);
void sneeze(int n);

int main(void)
{
    // cough three times
    cough(3);

    // sneeze three times
    sneeze(3);

}

/**
 * Coughs n times.
 */
void cough(int n)
{
    say("cough", n);
}

/**
 * Says word n times.
 */
void say(string word, int n)
{
    for (int i = 0; i < n; i++)
    {
        printf("%s\n", word);
    }
}

/**
 * Sneezes n times.
 */
void sneeze(int n)
{
    say("achoo", n);
}