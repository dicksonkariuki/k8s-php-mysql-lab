# k8s-php-mysql-lab
This repository contains a containerized and deployed a simple PHP application connected to a MySQL database and managed through phpMyAdmin on kubernetes

# Build the application frontend and backend.
![alt text](<Screenshot 2026-07-07 074726.png>)

# Containerize the application 

***Run the dockerfile to build the image***

![alt text](<Screenshot 2026-07-07 082625.png>)

***Running docker images to confirm if the iamge has been created***

![alt text](<Screenshot 2026-07-07 082728.png>)

# Load Image into Kubernetes

![alt text](<Screenshot 2026-07-07 083000.png>)

# Deploy MySQL

![alt text](<Screenshot 2026-07-07 083811.png>)

***Verify that pods ,service,and PVC are running***

![alt text](<Screenshot 2026-07-07 084356.png>)

# Deploy Phpmy admin

![alt text](<Screenshot 2026-07-07 084734.png>)

![alt text](<Screenshot 2026-07-07 085058.png>)

![alt text](<Screenshot 2026-07-07 111607.png>)


***login to the database***
![alt text](<Screenshot 2026-07-07 111724.png>)

![alt text](<Screenshot 2026-07-07 112506.png>)

# Deploy PHP application 

![alt text](<Screenshot 2026-07-07 114942.png>)

![alt text](<Screenshot 2026-07-07 114921.png>)

![alt text](<Screenshot 2026-07-07 115154.png>)

# Scale deployment 

![alt text](<Screenshot 2026-07-07 115613.png>)

***The app has 3 replicas so it shows 3 pods***

# Test self Healing

Delete a pod and watch kubernetes recreate it .

![alt text](<Screenshot 2026-07-07 120358.png>)

Deleted pod is automatically recreated.This shows kubernetes elf healing capabilities.



