server:
	@echo "starting server..."
	@php -S localhost:8080 -t ./public --php-ini=./php.ini

css:
	@echo "starting tailwindcss..."
	./bin/tailwindcss -i ./public/css/input.css -o ./public/css/output.css --watch

css-init:
	@echo "intiliazing tailwind..."
	./bin/tailwindcss init
