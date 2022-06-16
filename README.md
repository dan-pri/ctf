# Commands for Docker

#Build the Container from Dockerfile
sudo docker build -t unencrypted .

#Create html directory
mkdir html

#copy the index.php in the created directory
copy index.php html/

#Run the Container
sudo docker run -p 4000:80 -v ${PWD}/html:/var/www/html -d unencrypted
