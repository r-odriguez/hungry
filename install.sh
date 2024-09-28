mkdir libs
mkdir bin

# backend dependencies
git clone https://www.github.com/i3elj/tusk ./libs/tusk

# frontend dependencies
curl -sL https://github.com/tailwindlabs/tailwindcss/releases/download/v3.4.13/tailwindcss-linux-x64 \
     -o bin/tailwindcss
