#!/bin/sh

echo "**************  Start Testing application **************"

# vendor/bin/phpunit --coverage-clover tests

php -r 'include "./division/TestsDivision.php"; TestsDivision::execTests();'

echo "************** End Tests **************"

exec "$@"
