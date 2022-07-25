# Basic Relationships

I created this application as a guideline for Redberry interns.

 In this App, I have implemented Three kinds of Relationships.
 - One to One
 - One to Many
 - Many to Many
none of those Relationships are polymorphic.  if you're interested in polymorphic relationships, you should visit my redberry-interns-polymorphic-relationships repository.

## Table of Contents

* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Recourses](#resources)

<h2 id="tech-stack">Tech Stack:</h2>

- PHP     - ^8.0
- laravel - ^9.0

<h2 id="getting-started">Getting Started:</h2>

1\. Clone repository from GitHub:
```sh
git clone https://github.com/BekaBadzagua/redberry-interns-basic-relationships
```

```sh
cd redberry-interns-basic-relationships
```


2\. Install all the dependencies.
```sh
composer install
```
```sh
npm install
```
```sh
npm run dev
```

3\. set up and Fill .env file.
```sh
cp .env.example .env
```

4\. Generate the application key and link the storage:
```sh
php artisan key:generate
```

```sh
php artisan storage:link
```

5\. You're ready to go
```
php artisan serve
```

<h2 id="Recourses">Resources:</h2>

- Laravel Documentations - Eloquent ORM Relationships 
https://laravel.com/docs/9.x/eloquent-relationships

- DrawSQL - Database Structure
https://drawsql.app/redberry-17/diagrams/redberry-interns-basic-relations

