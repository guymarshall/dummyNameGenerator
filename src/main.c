// inputs
/*
number of random names
min length of name
max length of name
 */

#include <stdio.h>

void print_usage()
{
    printf("*** Usage ***\n");
    printf("./main numberOfRandomNames minimumLengthOfName maximumLengthOfName\n");
    printf("./main 1000 3 15\n");
}

int main(int argc, char *argv[])
{
    int error = 0;
    switch (argc)
    {
        case 0:
        case 1:
            printf("No arguments provided.\n");
            print_usage();
            error = argc;
            break;
        case 2:
            printf("Only number of random names to generate provided.\n");
            print_usage();
            error = argc;
            break;
        case 3:
            printf("Only number of random names to generate and minimum length of name provided.\n");
            print_usage();
            error = argc;
            break;
        case 4:
            // TODO: correct number of arguments provided
            printf("Number of random names: %s\n", argv[1]);
            printf("Min length of name: %s\n", argv[2]);
            printf("Max length of name: %s\n", argv[3]);

            // TODO: read first_names.txt into firstNames
            // TODO: read last_names.txt into lastNames
        default:
            printf("Too many arguments provided.\n");
            print_usage();
            error = argc;
            break;
    }

    if (error > 0)
    {
        printf("An error has occurred.\n");
        return error;
    }

    return 0;
}