# Wardrobe Management System

A web application for managing wardrobe items, built with Vue 3 (frontend) and Laravel 11 (backend).

# Features

User authentication (login/registration)

Add, edit, and delete clothing items

Categorize items (e.g., tops, bottoms, shoes)

Filter and search functionality

Responsive and user-friendly UI

# Tech Stack

**Frontend**: Vue 3

**Backend**: Laravel 11

**Database**: MySQL (or any preferred database)

**Authentication**: Laravel Sanctum

# Setup Instructions

# Prerequisites

Ensure you have the following installed:

* Node.js (for Vue 3 frontend)

* PHP (for Laravel 11 backend)

* Composer

* MySQL (or another compatible database)

# Backend Setup (Laravel 11)

# Install dependencies:

* composer install

# Copy the environment file:

* cp .env.example .env

# Configure the database in .env:

* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=wardrobe
* DB_USERNAME=root
* DB_PASSWORD=

# Generate the application key:

* php artisan key:generate

# Run migrations and seed the database:

* php artisan migrate --seed

# Start the Laravel development server:

* php artisan serve

# Frontend Setup (Vue 3)

# Install dependencies:

* npm install

# Start the Vue development server:

* npm run dev
