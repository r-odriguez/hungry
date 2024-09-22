all: run

run:
	@echo "starting server..."
	@php -S localhost:8080 -t ./public --php-ini=./php.ini
