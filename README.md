# kictfest-web

This project is a web application for Kictfest. This README provides instructions on how to set up and run the application using Docker.

## Prerequisites

- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/get-started)

## Getting Started

### Step 1: Clone the Repository

```bash
git clone https://github.com/ArifPeycal/kictfest-web.git
```


### Step 3: Build the Docker Image


```bash
cd kictfest-web
```
Build the Docker image for the application with the following command:

```bash
docker build -t kictfest .
```

### Step 4: Run the Docker Container

After building the image, you can run the Docker container using:

```bash
docker run -d -p 8080:80 kictfest
```

### Accessing the Application

Once the container is running, you can access the Kictfest web application in your web browser by navigating to:

```
http://localhost:8080
```

### Stopping the Application

To stop the running container, you can use:

```bash
docker ps  # to list running containers
docker stop <container_id>  # replace <container_id> with the actual ID of your container
```
