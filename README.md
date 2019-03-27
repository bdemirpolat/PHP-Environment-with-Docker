# PHP-Environment-with-Docker
Ready to use, easy PHP Environment setup with Docker

# Clone the repository
 ```
  $ git clone git@github.com:bdemirpolat/PHP-Environment-with-Docker.git
 ```
# docker-compose up
Run 
 ```
  $ docker-compose up
 ```
Docker Compose will pull all images in YAML file and run.


# MySQL Connection
MySQL serving with localhost:3000 on local but PHP will not reach localhost:3000

We need to find the IP address that MySQL and PHP can talk to.
 ```
  $ sudo docker inspect burak-mysql | grep "IPAddress"
 ```
Use returned IP Adress when you are connecting in PHP.


Thanks [phpdocker](https://github.com/phpdocker-io/phpdocker.io)
