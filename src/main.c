// inputs
/*
number of random names
min length of name
max length of name
 */

#include <stdio.h>

int main(int argc, char *argv[])
{
    if (argc == 4)
    {
        printf("Number of random names: %s\n", argv[1]);
        printf("Min length of name: %s\n", argv[2]);
        printf("Max length of name: %s\n", argv[3]);
    }
    else if (argc > 4)
    {
        printf("Too many arguments supplied.\n");
    }
    else
    {
        printf("Three argument expected.\n");
    }

    // TODO: check correct number of arguments

    // TODO: read first_names.txt into firstNames

    // TODO: read last_names.txt into lastNames
    return 0;
}