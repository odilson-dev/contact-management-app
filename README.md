# Contact Management Application

This is a web-based contact management application built using **Laravel** for the backend and **Vue.js** for the frontend. The application allows users to create, view, update, and delete (CRUD) contacts. It also includes an admin panel for managing users and contacts using **Backpack for Laravel**.

![Screenshots](./images/Screenshot%202024-09-25%20at%2023-04-51%20Contacts%20-%20Laravel.png)

## Features

-   User authentication (registration, login, and logout)
-   Manage contacts: Create, Read, Update, and Delete (CRUD) operations
-   Contacts can have names, phone numbers
-   Admin panel for user and contact management (powered by Backpack for Laravel)
-   Role-based access control (admin vs regular user)
-   Responsive frontend built with Vue.js

## Installation

### Prerequisites

Before you begin, ensure you have the following installed:

-   [PHP](https://www.php.net/) >= 8.0
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/en/) >= 12
-   [Git](https://git-scm.com/)
-   [MySQL](https://www.mysql.com/) or any other supported database

### Clone the Repository

To clone the project repository, run:

```bash
git clone https://github.com/your-username/contact-management-app.git
cd contact-management-app

```

### Install Dependencies

-   Install PHP dependencies:

```bash

composer install
```

### Install JavaScript dependencies:

```bash

npm install
```

### Run Migrations

-   To set up the database tables, run the migrations:

```bash

php artisan migrate
```

### Seed the Database (Optional)

-   You can seed the database with some dummy data for testing:

```bash

php artisan db:seed
```

### Serve the Application

-   To start the development server, run:

```bash

php artisan serve
```

The application will be available at `http://localhost:8000`.

To start the frontend development server (for Vue.js), run:

```bash

npm run dev
```

# Backpack Admin Panel

To access the admin panel, go to http://localhost:8000/admin after logging in as an admin user. The default admin credentials can be set in the database after seeding or by creating an admin user manually.
![Screenshots](./images/Screenshot%202024-09-25%20at%2023-00-49%20Users%20Backpack%20Admin%20Panel.png)

## Usage

### Authentication

-   Users can register, log in, and log out.
-   Only authenticated users can manage their contacts.
-   Admin users have access to the Backpack admin panel for managing users and contacts.

### Contact Management

-   Users can add new contacts using the form on the main page.
-   Contacts can be edited and deleted.
-   The list of contacts is dynamically updated using Vue.js.

### Admin Panel (Backpack for Laravel)

-   Admins can log in to the Backpack admin panel to view and manage users and contacts.
-   Admin panel provides CRUD interfaces for managing the data.

## Conclusion

This Contact Management Application demonstrates the seamless integration of Laravel as a backend framework with Vue.js on the frontend. It provides a user-friendly interface for managing contacts, and an efficient admin panel built using Backpack for Laravel. With role-based access control and a responsive design the application is robust and scalable. This project highlights best practices in full-stack web development, focusing on modern technologies and frameworks, and serves as a foundation for building more advanced CRM-like applications.

Feel free to clone, modify, and contribute to this project to suit your specific needs!
