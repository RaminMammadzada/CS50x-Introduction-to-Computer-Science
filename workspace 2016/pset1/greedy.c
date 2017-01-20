#include <stdio.h>
#include <cs50.h>

int main(void)
{

    float u_input; //
    int hun_based=0;
    int quarter=0, dime=0, nickel=0, penny=0;
    int sum_of_coins;
    
    do{
        printf("Cashier owe to customer:  ");
        u_input = GetFloat(); //prompt the user for the input
    }
    while( u_input < 0 ); // user input mustn't be less than 0
    
    //printf("Total amount: %.2f\n", u_input);
    
    hun_based=(u_input*100);
    //printf("Hundred based amount: %i\n",hun_based);
    
    while( hun_based != 0 ){
        
        if ( hun_based >= 25 ){
        quarter = hun_based / 25;
        hun_based = hun_based % 25;
        }
        else if ( hun_based >= 10 ){
        dime = hun_based / 10;
        hun_based = hun_based % 10;            
        }
        else if ( hun_based >= 5 ){
        nickel = hun_based / 5;
        hun_based = hun_based % 5;            
        
        }
        else if ( hun_based >= 1 ){
        penny = hun_based / 1;
        hun_based = hun_based % 1;            
        }
        
    }
    
    //printf("quarter: %i\n", quarter);
    //printf("dime: %i\n", dime);
    //printf("nickel: %i\n", nickel);
    //printf("penny: %i\n", penny);
    
    sum_of_coins = quarter + dime + nickel + penny;
    //printf("Minimum number of coins: %i\n", sum_of_coins);
    printf("%i\n", sum_of_coins);
    
}