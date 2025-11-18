# ✨ Laravel + Inertia.js + Vue.js Portfolio

A modern, full-stack portfolio application built with Laravel, Inertia.js, and Vue.js.

> **Note**: This is a school project created for educational purposes.

## Requirements

- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

## Installation

1. Clone the repository

```bash
git clone <repository-url>
cd portfolio
```

2. Install dependencies

```bash
composer install
npm install
```

3. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database

```bash
php artisan migrate --seed
```

5. Start development server

```bash
npm run dev
```

## Usage

- **Frontend**: Visit `http://localhost:8000`
- **Admin Panel**: Login at `http://localhost:8000/admin`

## Tech Stack

- **Backend**: Laravel
- **Frontend**: Vue.js 3
- **Bridge**: Inertia.js
- **UI Components**: shadcn-vue
- **Styling**: Tailwind CSS

## License

MIT
