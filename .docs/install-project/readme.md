# Set project

Hi Developer of future.
On this section we'll  set the project for local testing , before start you must have something requirements: 

- Docker and Docker compose 

Now, type docker ps on the console and you can see all containers with status up
Go to the container php , type ***docker exec -it your_finance_dev bash*** , after type 
1. composer update
2. cp .env.example. env
3. php artisan key:generate

Ready :D 
## Note 
Remember set file .env before step 3