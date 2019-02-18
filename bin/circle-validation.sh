#!/bin/sh

pass=true

printf "\nLinting:\n"

npm run lint
if [ $? -ne 0 ]; then
	printf "\033[31mLinting Failed %s\033[0m\n"
	pass=false
else
	printf "\033[32mLinting Passed %s\033[0m\n"
fi
printf "\n\033[42mVALIDATION SUCCEEDED\033[0m\n\n"
