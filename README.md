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

## Extra Stuff

-   Simple form validation

```
<div class="mb-4">
    <label for="name" class="sr-only">Name</label>
    <input type="text" name="name" id="name" placeholder="Your name"
        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
        value="{{ old('name') }}">
    {{-- Error handling or Form validation --}}
    @error('name')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
    @enderror
</div>
```
