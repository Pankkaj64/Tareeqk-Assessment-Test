Towing Request System

A simple full-stack towing request system with:

- **Laravel API** (Backend)
- **React Web App** (Customer-facing form)
- **React Native Mobile App** (Driver-facing view)

---
## 📁 Project Structure

towing-request-system/
├── backend/ -- Laravel API (PHP, MySQL)
├── web/ -- React App (Customer submits towing request)
└── mobile/ -- React Native App 



Backend (Laravel)

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve --host=0.0.0.0 --port=8000



web app (React)
cd web
npm install
npm start

Mobile App (React Native with Expo)
cd mobile
npm install --legacy-peer-deps
npx expo start



