/**
 * helpers.c
 *
 * Computer Science 50
 * Problem Set 3
 *
 * Helper functions for Problem Set 3.
 */
       
#include <cs50.h>
#include <stdio.h>
#include "helpers.h"

/**
 * Returns true if value is in array of n values, else false.
 */
bool search(int value, int values[], int n)
{
    if(n<1)
        return false;
    else
    {
        for(int i=0;i<n;i++)
        {
            if(values[i]==value)
            return true;
        }
    }
    
    return false;
        
    
    
}

/**
 * Sorts array of n values.
 */
void sort(int values[], int n)
{
    int min_ind;
    int temp;
    
    
    for(int i=0 ; i<=n ; i++)
    {   
        min_ind=i;
        for(int j=i+1 ; j<n ; j++)
        {   
            if(values[j]<values[min_ind])
                min_ind=j;
        }
        temp=values[i];
        values[i]=values[min_ind];
        values[min_ind]=temp;
    }
    
    return;
}