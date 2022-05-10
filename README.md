# Commands for Docker
sudo docker build -t unencrypted .

sudo docker run -d -p 4000:80 unencrypted 

# Notice
The index2.php file does not contain a flag and is required to record the Wireshark capture.

How to use:
1. Rename the file index2.php to index.php
2. Build the Docker Container and run it
3. Record the HTTP request with Wireshark and save it
4. Stop an delete the container, image and index.php
5. Paste the original index.php into the folder
6. Build the Docker Container and run it
