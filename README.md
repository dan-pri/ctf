# Commands for Docker
sudo docker build -t unencrypted .

sudo docker run -p 4000:80 -v ${PWD}/html:/var/www/html -d unencrypted
