# Laravel CRUD Assessment

## Description
A simple CRUD application in Laravel for managing products. Includes create, read (paginated), update, delete, validation, and bonus search functionality. Built with Laravel 11.x and Tailwind CSS 3.4.1.

## Setup Instructions
1. Clone the repo: `git clone https://github.com/yourusername/laravel-crud-assessment.git`
2. Install dependencies: `composer install` and `npm install`
3. Copy `.env.example` to `.env` and configure DB (SQLite used here: `touch database/database.sqlite`)
4. Run migrations: `php artisan migrate`
5. Compile assets: `npm run dev`
6. Start server: `php artisan serve`
7. Visit `http://127.0.0.1:8000/products`

## Screenshots
- Index Page: ![Index](screenshots/index.png) *(Add your actual screenshot)*
- Create Form: ![Create](screenshots/create.png)
- Edit Form: ![Edit](screenshots/edit.png)
- Show Page: ![Show](screenshots/show.png)

## Extras
- Search functionality on index page.
- Tailwind CSS for styling.