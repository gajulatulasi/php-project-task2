Blog App (PHP & MySQL)
Project Overview

This is a simple PHP web application for managing blog posts.
It includes user authentication and CRUD (Create, Read, Update, Delete) operations for posts.

Technologies Used

Backend: PHP

Database: MySQL / MariaDB

Frontend: HTML, CSS, JavaScript

Development Environment: XAMPP (Apache + MySQL)

Version Control: Git & GitHub

Database Setup

Open phpMyAdmin or MySQL shell.

Create database:

CREATE DATABASE blog;


Create tables:

Users Table

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


Posts Table

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Installation & Setup

Install XAMPP

Start Apache and MySQL.

Place the PHP files in:

C:\xampp\htdocs\blog-app


Configure MySQL port & password

Check C:\xampp\mysql\bin\my.ini for MySQL port.

Update config.php:

<?php
session_start();

$host = "localhost";
$port = 3307; // MySQL port (update if changed)
$user = "root";
$pass = "YourNewRootPassword"; // your MySQL root password
$db   = "blog";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


Open in browser:

http://localhost/blog-app/

Features

User registration & login

Password hashing for secure storage

Session management for logged-in users

CRUD operations on posts:

Create: Add new blog posts

Read: Display all posts

Update: Edit existing posts

Delete: Remove posts

Troubleshooting

Access Denied for Root

Ensure config.php password matches MySQL root password.

Reset root password via MariaDB if forgotten.

Port Conflict

If MySQL won’t start, check my.ini port and update config.php accordingly.

MySQL Won’t Start

Stop conflicting services using port 3306 or 3307.

Ensure data folder and backup files are properly placed.

Project Structure
blog-app/
│
├── config.php       # Database connection
├── register.php     # User registration
├── login.php        # User login
├── logout.php       # Logout
├── index.php        # Homepage / Post list
├── create.php       # Add new post
├── edit.php         # Edit post
├── delete.php       # Delete post
└── README.md        # Project documentation


This README now covers all steps you’ve done: XAMPP setup, MySQL port changes, password reset, PHP config, and CRUD + authentication features.
