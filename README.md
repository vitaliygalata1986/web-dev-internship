# Setup Instructions

## This project requires:

1. 🐳 Docker installed
2. 🐳 Docker Compose installed

### Installation and Launch

🔹 1. **Clone the Repository**

 ```sh
git clone https://github.com/vitaliygalata1986/web-dev-internship.git
cd web-dev-internship
 ```

🔹 2. **Start Containers**

 ```sh
docker-compose up -d
 ```

🔹 3. **Install Dependencies**

🔍 3.1. **Check running containers**

 ```sh
docker ps
```

🔍 3.2. **Find the PHP CLI container**

Look for a container named something like web-dev-internship_php-cli

⚙ 3.3.  **Install dependencies inside the container**

 ```sh
docker exec -it web-dev-internship_php-cli_1 composer install
```

*(Replace `web-dev-internship_php-cli_1` with the actual container name if different.)*

🔹 4. **Environment Configuration**

📋 4.1. **Copy the example environment file**

 ```sh
cp .env.examples .env
```

📝 4.2. **Then, open the .env file and make sure the database connection settings are correct**

 ```sh
DB_USERNAME=root
DB_PASSWORD=secret
DB_DATABASE=laravel
```
> **Important:**
 
<ul>
<li>By default, a database named laravel will be created automatically.</li>
<li>You can change DB_DATABASE to another name if needed.</li>
<li>If using custom MySQL credentials, update DB_USERNAME and DB_PASSWORD.</li>
</ul>

🔹 5. **Run Migrations**

 ```sh
docker exec -it web-dev-internship_php-cli_1 php artisan migrate
```

🔹 6. **Seed the Database**

 ```sh
docker exec -it web-dev-internship_php-cli_1 php artisan db:seed
```

🔹 7. **Generate Application Key (Required!)**

 ```sh
docker exec -it web-dev-internship_php-cli_1 php artisan key:generate
```

🌐 8. **Access the Application**

🔗 **8. Access the Application**  
🔗 **Live Demo:** [http://localhost:8080](http://localhost:8080)  
📊 **phpMyAdmin:** [http://localhost:8083](http://localhost:8083)  
