# Iziechem - Premium Painting & Screeding Platform

A fully responsive, production-ready web application built for **Iziechem**, a professional property design and decoration company operating across Lagos and Lokoja, Nigeria. 

This platform serves as a modern client-facing application, allowing users to book appointments, explore painting and screeding services, read updates, and view completed local projects.

🌐 **Live Production Site:** [iziechem.com.ng](https://iziechem.com.ng)

---

## 🚀 Key Features Built
* **Dynamic Content Management:** Structured routing and MVC architecture to manage services (paint production, screeding, wall paneling, and interior décor).
* **Client Engagement System:** Appointment booking setup and client interaction interfaces.
* **Modern Blog/Updates Section:** Integrated update feed to share professional painting, screeding, and decor articles.
* **Fully Responsive Design:** Seamlessly styled layouts optimized across desktop and mobile devices.

## 🛠️ Tech Stack
* **Backend Framework:** PHP (Laravel)
* **Frontend:** Blade Templates, CSS, JavaScript, HTML5
* **Architecture:** Model-View-Controller (MVC) with secure database schema migrations

## 📦 Local Installation & Setup

To clone and run this project locally on your machine, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com
   ```
2. Install backend and frontend dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Set up your environment configuration:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Spin up the local development server:
   ```bash
   php artisan serve
   ```
