# Commands for Docker
sudo docker build -t unencrypted .

sudo docker run -p 4000:80 -v ${PWD}/html:/var/www/html -d unencrypted

# Notice
The index2.php file does not contain a flag and is required to record the Wireshark capture.

