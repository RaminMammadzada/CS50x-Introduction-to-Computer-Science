#include <stdio.h>
#include <cs50.h>

int main(void)
{

    long long cred_card_n=0;
    int dig_num=0;
    long long num=0;
    int var=0;
    int l_dig=0;
    int total1=0;
    int total2=0;
    int total3=0;
    int num1=0; 
    int dig1=0; 
    int dig2=0;
    int first_dig=0;

       printf("Enter your credit card number:  ");
        cred_card_n = GetLongLong(); //
        
        num = cred_card_n;
        dig_num=0;
        while(num!=0){
            num=num/10;
            dig_num++;
            //printf("dig_num: %i\n",dig_num);
        }
    
    var=dig_num;
    num=cred_card_n;
    while(var!=0){
    l_dig=num%10;
    num/=10;
    if(var%2==0){
        printf("last digit: %i   ", l_dig);
        num1=l_dig*2;
        dig1=num1%10;
        dig2=num1/10;
        total1+=(dig1+dig2);
        printf("total: %i\n",total1);
        
    if(num/10<10)
    first_dig=num;
    
    }
    var--;
    }
    
    printf("=======\n");
    var=dig_num;
    num=cred_card_n;
    while(var!=0){
    l_dig=num%10;
    num/=10;
    if(var%2!=0){
        printf("last digit: %i   ", l_dig);
        total2+=l_dig;
        printf("total 2: %i\n",total2);
    }
    var--;
    }
    
    total3=total2+total1;
    
    
    
    //printf("\nfirst digit: %i\n", first_dig);
    //printf("digit numbers: %i", dig_num);
    if ( (dig_num==13 || dig_num==16) && total3%10==0 && first_dig==4)
    printf("VISA\n");
    else if ( dig_num==15 && total3%10==0 && first_dig==3)
    printf("AMEX\n");
    else if ( dig_num==16 && total3%10==0 && first_dig==5)
    printf("MASTERCARD\n");
    else 
    printf("INVALID\n");
    
    //printf("finish\n");
    
    return 0;
}