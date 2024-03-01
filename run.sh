#!/bin/bash

gcc src/main.c -o main

if [ ! -d "target" ]; then
    mkdir target
fi

mv main target/main

target/main 1000 3 20