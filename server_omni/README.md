# Description
This topic is intended to introduce you to system administration. It will make you aware
of the importance of using scripts to automate your tasks. For that, you will discover
the "docker" technology and use it to install a complete web server. This server will run
multiples services: Wordpress, phpMyAdmin, and a SQL database.

# Build
`docker build . -t ft:server`
### docker build
The docker build command builds Docker images from a Dockerfile. \
*-t* : Name and optionally a tag in the ‘name:tag’ format

# Run
`docker run -p 80:80 443:443 -i -t ft:server`
### docker run
The docker run command first creates a writeable container layer over the specified image, and then starts it using the specified command. \
*-p* : (-p, --expose) Publish or expose port \
*-i* : Keep STDIN open even if not attached \
*-t* : Allocate a pseudo-TTY

# Note
This project is a 42 school project and shared for educational purposes only, no copy pasta or -42 :wink:
