#include <stdio.h>
#include <stdlib.h>

char *size(unsigned int bytes)
{
    
    int KB = 1024;
    int MB = 1024 * 1024;
    int GB = 1024 * 1024 * 1024;

    if(bytes == 0){
        printf("[+] 0 bytes always be 0 bytes ");
    }
    else if (bytes < KB)  
    {
        printf("[+] %d bytes",bytes);
    }
    else if(bytes < MB)
    {
        printf("[+] %.2f KB",(float) bytes/KB);
    }
    else if(bytes < GB)
    {
        printf("[+] %.2f MB",(float) bytes/MB);
    }
    else
    {
        /*
            I don't know way around integer overflow 
            if i found i will make GB count possible in the future  
        */
        //printf("[+] %.2f GB", (float) bytes/GB);
        exit(1);
    }
}


int main(int argc,char *argv)
{   int input;
    printf("Enter Byte value : ");
    scanf("%u",&input);
    size(input);
    return 0;
}