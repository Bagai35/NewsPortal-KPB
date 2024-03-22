# `NewsPortal-KPB` 

Welcome to **NewsPortal-KPB**, a simple news portal project written in **native PHP** with an **attached database**. This project aims to provide a platform for publishing and managing news articles efficiently.

## Features

+ **User Authentication:** Users can register, login, and manage their accounts.

+ **Article Management:** Admins can create, edit, and delete articles.

+ **Category Management:** Admins can manage news categories.

+ **Comment System:** Users can comment on articles.

+ **Search Functionality:** Users can search for articles based on keywords.

+ **Responsive Design:** The portal is designed to work seamlessly across devices of all sizes.

## Installation
### 1. Clone the repository to your local machine:

```cmd
git clone https://github.com/Bagai35/NewsPortal-KPB
```

2. Navigate to the project directory: 
```cmd
cd NewsPortal-KPB
```
### 3. Import the provided SQL database into your PHPMyAdmin:

- Open PHPMyAdmin in your web browser.

- Create a new database named newsportal.

- Click on the newly created database.

- Choose the Import tab.

- Click on Choose File and select the SQL file provided (newsportal.sql).

- Click Go to import the database structure.

### 4. Configure the database connection:

- Navigate to the config directory.

- Open config.php file.

- Update the database connection settings according to your PHPMyAdmin credentials:
```PHP
define('DB_HOST', 'localhost');
define('DB_USER', 'your_database_username');
define('DB_PASS', 'your_database_password');
define('DB_NAME', 'newsportal');
```

Start your local server (e.g., using XAMPP, WAMP, MAMP).

Visit http://localhost/NewsPortal-KPB in your web browser to access the application.

## Usage

- Reader: Browse through categories, read articles, and use the search functionality to find specific articles.
- Author: Register as an author, log in, and start creating new articles. Authors can also edit or delete their own articles.

## Acknowledgements

- PHP: Server-side scripting language.

- MySQL: Relational database management system.

- phpMyAdmin: Web-based administration tool for MySQL databases.

## **p.s**
Feel free to customize and enhance this news portal according to your needs. Happy coding! 🚀




