docker run -p 8080:80 -v $(pwd):/var/www/html $(docker build -q .)
