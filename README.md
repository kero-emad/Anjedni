# Enjedni (أنجدني) 🚀


**Enjedni** is a modern, all-in-one service marketplace platform designed to provide hassle-free home services. Whether you need cleaning, plumbing, electrical work, or carpentry, Enjedni connects you with skilled professionals to ensure your home is well-maintained with speed and reliability.

---

## ✨ Features

- **Dual-User System**: Specialized roles for **Customers** and **Service Providers**.
- **Service Requests**: Customers can easily post requests for specific home maintenance tasks.
- **Provider Offers**: Skilled professionals can browse requests and submit competitive offers.
- **Appointment Management**: Seamless scheduling and tracking of service appointments.
- **Provider Portfolios**: Visual showcases of past work to build trust and ensure quality.
- **Payment Integration**: Secure handling of payment details for completed services.
- **Responsive Dashboard**: Intuitive management interfaces for both customers and providers.
- **Clean UI**: Built with modern CSS frameworks for a premium user experience.

---

## 🛠️ Tech Stack

- **Backend**: [Laravel 11.x](https://laravel.com/) (PHP 8.2+)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/) & [Bootstrap 5](https://getbootstrap.com/)
- **Build Tool**: [Vite](https://vitejs.dev/)
- **Database**: MySQL / PostgreSQL / SQLite
- **Environment**: Laravel Sail (optional Docker environment)

---

## 🚀 Getting Started

Follow these steps to set up Enjedni locally:

### 1. Clone the repository
```bash
git clone https://github.com/Kero-Emad/Anjedni.git
cd Anjedni
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Frontend dependencies
npm install
```

### 3. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```
*Update your `.env` file with your database credentials.*

### 4. Database Setup
```bash
php artisan migrate --seed
```

### 5. Start the Application
```bash
# Run the development server
php artisan serve

# Run Vite for frontend assets
npm run dev
```

---

## 🏗️ Project Architecture

The project follows the standard **Laravel MVC (Model-View-Controller)** pattern:

- **Models**: `User`, `ServiceRequest`, `Offer`, `Appointment`, `Payment`, `PortfolioImage`.
- **Controllers**: Handlers for auth, service management, and scheduling.
- **Views**: Blade templates styled with Tailwind and Bootstrap.

---

## 🤝 Contributing

Contributions are welcome! If you'd like to improve Enjedni, please follow these steps:
1. Fork the Project.
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`).
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the Branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

---

<p align="center">Made with ❤️ for a better home experience.</p>
