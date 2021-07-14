# Posty

> App in laravel

## Workflow

-   Scaffolded basic views
-   installed tailwind css
-   npm install
-   npm run dev

## Routes

-   Resources
    -   Views
        -   layouts
            -   app.blade (@yeild)
        -   posts
            -   index.blade (extends)

## Useful commands

-   Database migration: **`php artisan migrate`**
-   If we need to modify the table or add a new column on one of the table please add: **`php artisan make:migration add_username_to_users_table`**
-   Make changes to the migration files and to add the fields on the DB just enter **`php artisan migrate`**

-   The database is handled using models and ORM's
