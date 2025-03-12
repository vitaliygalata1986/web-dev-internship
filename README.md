#Setup Instructions

## Prerequisites

### This project requires:

1. 🐳 Docker installed
2. 🐳 Docker Compose installed

# Installation and Launch

1. Clone the Repository:

 ```sh
git clone https://github.com/vitaliygalata1986/web-dev-internship.git
cd web-dev-internship
 ```

2. Start Containers:

 ```sh
docker-compose up -d
 ```

3. Install Dependencies:

3.1 Check running containers:

 ```sh
docker ps
```

3.2 Find the container running PHP CLI, e.g., web-dev-internship_php-cli

3.3. Run the following command (replace web-dev-internship_php-cli_1 with the actual container name if different):

 ```sh
docker exec -it web-dev-internship_php-cli_1 composer install
```

4. Environment Configuration

4.1 Copy the example environment file:

 ```sh
cp .env.examples .env
```

4.2 Then, open the .env file and make sure the database connection settings are correct:

 ```sh
DB_USERNAME=root
DB_PASSWORD=secret
DB_DATABASE=laravel
```
> **Important:**

#### By default, a database named laravel will be created automatically. You can change the DB_DATABASE value to any database name you prefer.
#### If you are using different MySQL credentials, replace root and secret with the correct values.

5. Run Migrations:

 ```sh
docker exec -it web-dev-internship_php-cli_1 php artisan migrate
```

6. Seed the Database:

 ```sh
docker exec -it web-dev-internship_php-cli_1 php artisan db:seed
```

7. Generate Application Key (Required!):

 ```sh
docker exec -it web-dev-internship_php-cli_1 php artisan key:generate
```

8. Access the Application:

🌐 Laravel App: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a>

🗄️ phpMyAdmin: <a href="http://localhost:8083" target="_blank">http://localhost:8083</a>

Your Laravel application should now be running with the configured MySQL database and seeded data.
