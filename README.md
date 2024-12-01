<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Restoring Ignored Files and Folders

When cloning the project, some files and folders listed in `.gitignore` will not be present. Follow these steps to restore or regenerate them:

## **Install PHP dependencies:**

```bash
composer install
```

## Install Node.js dependencies:

```bash
npm install
```
## Build front-end assets:

### For development:

```bash
npm run dev
```

### For production:

```bash
npm run build
```

## Create the symbolic link for /public/storage:

```bash
php artisan storage:link
```

### Configure the .env file:

### Create or update the .env file based on .env.example. Fill in your environment-specific settings like database credentials, app key, etc.

## Generate the application key:

```bash
php artisan key:generate
```
