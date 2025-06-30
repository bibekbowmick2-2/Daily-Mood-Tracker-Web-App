<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# 🌤 Daily Mood Tracker

A web application built with *Laravel 12, **Blade, **Bootstrap 5, and **Chart.js* that allows users to track their daily mood, review their mood history, visualize emotional trends, and more.

---

## 🧩 Features

### ✅ User Authentication
- Register & login using *phone number* and *password*
- Secure authentication via *Laravel Breeze*
- Logout functionality
- Each user has access to *only their own mood data*

### 📅 Mood Entry (CRUD)
- Select *one mood per day* (e.g., Happy, Sad, Angry, Excited)
- Add an optional short note
- Prevent multiple entries for the same day
- *Edit* or *soft delete* entries

### 🕓 Mood History
- Chronological list (latest first) of mood entries
- *Filter by date range*
- View as *table or timeline*

### 📊 Weekly Mood Summary
- Dynamic bar chart using *Chart.js*
- Visualizes total moods selected from *Monday to Sunday*
- Each mood type appears as a distinct bar

### 🗑 Soft Delete & Restore
- Soft delete any mood entry
- Option to *restore deleted* entries from trash

### 🔥 Streak Badge
- Automatically shows a *"Streak Badge"* if a user logs moods for *3+ consecutive days*

---

## 🌟 Bonus Features

- *Mood of the Month*: Displays the most frequently selected mood in the last 30 days
- *Export to PDF*: Export your entire mood log as a formatted PDF

---

## 🛠 Tech Stack

| Layer       | Technology        |
|-------------|-------------------|
| Backend     | Laravel 12        |
| Frontend    | Blade, Bootstrap 5|
| Charts      | Chart.js          |
| Auth        | Laravel Breeze    |
| Database    | MySQL / PostgreSQL|

---

## 📲 UI/UX Highlights

- Fully *responsive* and *mobile-friendly*
- Built with modern UI using *Bootstrap 5*
- Uses *modals* and *smooth transitions* for user interactions

---

## ScreenShots

![1](https://github.com/user-attachments/assets/7c45bb5b-98ab-4f05-a508-a22f85862c41)
![2](https://github.com/user-attachments/assets/16ef8813-0c32-45b2-aea2-6f8523af3d60)
![3](https://github.com/user-attachments/assets/b7d66170-fe66-4e30-ac8a-26bb569070d0)
![4](https://github.com/user-attachments/assets/5acd41e6-e14c-4027-b080-13a79debfdac)
![5](https://github.com/user-attachments/assets/59ce40dc-49ff-453c-818f-5637c48d593a)


## 🚀 Getting Started

### 📦 Installation

```bash
git clone https://github.com/your-username/daily-mood-tracker.git
cd daily-mood-tracker

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install && npm run build

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Laravel Setup
laravel new application-name

# For running the application
composer run dev






