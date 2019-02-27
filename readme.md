Gantigol Platform
=================


Notes for development using Docker
----------------------------------

A helper script named `dev` is provided as a shortcut for the docker-compose commands to simplify the development process.

### Requirements

- Docker Engine
- Docker Compose


### Getting Started

Create .env file by copying from .env.example

```bash
cp .env.example .env
```

Install project dependencies

```bash
./dev composer install
```

Generate application key

```bash
./dev artisan key:generate
```

### Available command

#### serve

Start the containers

```bash
./dev serve
```

You can change the port where PHP server is running on different port from the one definend in .env file

```bash
APP_PORT=8080 ./dev serve
```

#### down

Stop the containers

```bash
./dev down
```

#### composer

Run `composer` and pass-thru any extra arguments inside a new app container

```bash
./dev composer help
```

#### artisan

Run `artisan` and pass-thru any extra arguments inside a new app container

```bash
./dev artisan help
```

#### test

Run `phpunit` and pass-thru any extra arguments inside a new app container

```bash
./dev test --help
```

### add middleware custom passport

'passport-administrators' => \App\Http\Middleware\PassportCustomProvider::class, to kernel route middleware

