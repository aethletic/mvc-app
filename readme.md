# Web App Skeleton (MVC)

A simple skeleton with the necessary set of tools for a quick start.

## Use cases
When big daddies like Laravel, Symfony, etc. are out of place because need to make a quick simple app/prototype.

## Features
* Back-end
  * Laravel Database
  * Laravel Helpers (Arr, Str, Collection)
  * Laravel Blade (Standalone)
  * Monolog
  * Symfony Http Foundation (Request, Response, Session, Cookie, Headers)
  * Bramus Router (modified)
* Front-end
  * Tailwind CSS 2.0 out the box
  * jQuery
  * Alpine.js
  * Dashboard theme (WIP)

## Installation

```bash
git clone https://github.com/chipslays/mvc-app.git blog
```

```bash
cd blog
```

```bash
composer install
```

```bash
npm install
```

```bash
npm run dev
```

For watch auto-changes `js` and `scss`:

```bash
npm run watch
```

For purge unused styles:

```bash
npm run prod
```

## Development

File structure Laravel flavored.

`/app/Controllers/*` - Controllers

`/app/Models/` - Models

`/bootstrap/*` - Bootstrap application pieces

`/bootstrap.php` - Bootstrap app compose

`/routes/web.php/` - Routes

`/resources/assets/app.css` - CSS

`/resources/assets/app.js` - Javascript

`/resources/views/` - Views templates

`/config/*` - Configs








