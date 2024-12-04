# CRUD API

This repository contains a basic implementation of a CRUD (Create, Read, Update, Delete) API built using PHP. The project is designed to handle common database operations through API endpoints.

## Features

- **Insert API**: Adds new records to the database.
- **Fetch All API**: Retrieves all records from the database.
- **Fetch API**: Retrieves a specific record by ID.
- **Update API**: Updates an existing record.
- **Delete API**: Deletes a record by ID.
- **Search API**: Searches for records based on criteria.

## Setup Instructions

1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/Andrul01/Crud_Api.git

2.Set up your local server (e.g., XAMPP) and place the repository folder in the htdocs directory.

3.Create a database in your MySQL server and configure the database connection in config.php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'your_database_name';

4.Import the provided database schema (if available) into your MySQL database.

5.Access the API endpoints using a REST client like Postman or via AJAX requests.

## API Endpoints

Endpoint	           Method	     Description
/insert_api.php	     POST	       Inserts a new record
/fetch_all_api.php	 GET	       Fetches all records
/fetch_api.php	     GET	       Fetches a record by ID
/update_api.php	     PUT	       Updates an existing record
/delete_api.php	     DELETE	     Deletes a record by ID
/search_api.php	     GET	       Searches for records

## Dependencies

PHP 7.4 or higher
MySQL
jQuery (included in the js/ folder)

## Usage
Use a tool like Postman to t
For AJAX-based operations, integrate the APIs with a frontend application using the proviest the API endpoints by sending appropriate HTTP requests. 
ded js/jquery-3.7.1.js library.


Feel free to contribute to the repository by submitting issues or pull requests!

Make sure to include the file in your repository by committing it:

```bash
echo "# CRUD API" > README.md
git add README.md
git commit -m "Added README file"
git push
