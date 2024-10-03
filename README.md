# Vuetify Boilerplate for Laravel 11 & Vue.js 3 Authentication

Welcome to the Vuetify Boilerplate designed for easy integration with Laravel 11 and Vue.js 3. This boilerplate provides basic authentication functionalities such as login, register, and forgot password, along with a simple dashboard menu and an elegant homepage built using Vuetify.

## Features

- **User Authentication:**
  - **Login:** Secure login functionality with validation.
  - **Register:** User registration with email verification.
  - **Forgot Password:** Password reset via email.

- **Dashboard:**
  - **Simple Dashboard Menu:** Navigation menu for easy access to features.
  - **Homepage:** Elegant and responsive homepage design.

- **Dark Mode Support:**
  - Toggle between light and dark themes for better user experience.

## Requirements

- Laravel 11.x
- Vue.js 3.x
- PHP 8.2 or higher
- MySQL or any supported database by Laravel

## Installation

1. **Clone the repository:**

   ```bash
   git clone <repository-url>
   cd <project-folder>
2. **Install PHP dependencies:**

   ```bash
   composer install
3. **Install Node dependencies:**
   ```bash
   npm install
4. **Set up environment variables:**

    - Rename `.env.example` to `.env` and configure your database settings.

5. **Run migrations and seeders:**
   ```bash
   php artisan migrate --seed
6. **Compile assets:**
   ```
   npm run dev
7. **Start the development server:**
   ```
   php artisan serve

Access your application at `http://localhost:8000`.

## Usage

- **Authentication Routes:**
- `/login`: User login page.
- `/register`: User registration page.
- `/forgot-password`: Forgot password page.

- **Dashboard:**
- After logging in, access the dashboard via `/dashboard`.

## Customization

- Modify Vuetify components and styles in `/resources/js` to customize the frontend.
- Extend Laravel controllers and models in `/app` to add more features.
- Configure routes in `/routes/web.php` for additional functionalities.

## Contributing

Contributions are welcome! If you have any suggestions, improvements, or bug fixes, feel free to open an issue or create a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
