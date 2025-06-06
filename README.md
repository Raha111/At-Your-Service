# At Your Service

At Your Service (AYS) is a web platform that helps households book trusted professionals for all kinds of home maintenance. Built with Laravel, it allows customers to request services while admins oversee workers and orders from a single dashboard.

## Key Features

- **Easy booking** – choose a service, pick a date and provide details in seconds.
- **Real‑time order tracking** – monitor each request from pending to completion.
- **Worker management** – add workers, set their expertise and assign them to jobs.
- **Admin tools** – manage services, view feedback and track revenue in the dashboard.
- **User accounts** – sign up, log in and view your service history.
- **Feedback system** – customers can rate completed jobs to help maintain quality.

Major controllers include `AdminController` and `customAuth` under `app/Http/Controllers`.

## Tech Stack

- PHP 8+ with the Laravel framework
- MySQL or another compatible database
- Composer for dependency management

## Getting Started

1. Clone the repository.
2. Run `composer install` to install PHP dependencies.
3. Copy `.env.example` to `.env` and update your database credentials.
4. Generate an application key with `php artisan key:generate`.
5. Run migrations using `php artisan migrate`.
6. Start the server with `php artisan serve` and visit `http://localhost:8000`.

## Usage

- Customers sign up, browse available services and book appointments.
- Admins manage the service catalog, assign workers and view ongoing requests.
- Workers receive assignments and update their status when jobs are finished.

## Running Tests

Tests live in the `tests` directory. Execute them with:

```bash
php artisan test
```

## License

This project is open-source software released under the MIT license.
