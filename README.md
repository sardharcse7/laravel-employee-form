# Laravel Employee Management Form

A simple Laravel application to create and store employee details using MySQL.  
This project demonstrates Laravel CRUD basics, form validation, migrations, and GitHub best practices.

**Author:** [Sardhar Naina Mohamed](mailto:sardharcse7@gmail.com)

---

## 🛠 Tech Stack

- PHP 7.4
- Laravel 8.x (supports PHP 7.4)
- MySQL
- Bootstrap 5
- Composer

---

## ✨ Features

- Responsive Bootstrap employee form
- Server-side validation
- Store employee details in MySQL
- Clean MVC structure
- GitHub-ready setup

---

## 📋 Employee Fields

- First Name
- Last Name
- Email
- Mobile Number
- Gender (Radio Button)
- Address (Textarea)
- City (Dropdown)
- Pincode (6 digits)

---

## 📂 Project Structure

```
app/
└── Models/Employee.php
app/Http/Controllers/
└── EmployeeController.php
database/migrations/
└── *_create_employees_table.php
resources/views/employees/
└── create.blade.php
routes/
└── web.php
```

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone <repository-url>
cd employee-app
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Create Environment File

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Configure Database

Edit `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=emp_db
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in MySQL:

```sql
CREATE DATABASE emp_db;
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Run the Application

```bash
php artisan serve
```

Open in browser: **http://127.0.0.1:8000/employee/create**

## 📄 License

This project is licensed under the [MIT License](LICENSE).

