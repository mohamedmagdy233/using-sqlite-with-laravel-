## Using SQLite in a Laravel Project

Follow these steps to set up and use SQLite in your Laravel project:

### Step 1: Update the `.env` File

1. Open your `.env` file.
2. Comment out the MySQL database settings:

    ```env
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=laravel
    # DB_USERNAME=root
    # DB_PASSWORD=
    ```

3. Set the `DB_CONNECTION` to `sqlite`:

    ```env
    DB_CONNECTION=sqlite
    ```

### Step 2: Create SQLite Database File

1. Navigate to the `database` directory in your Laravel project.
2. Create a new file named `database.sqlite`:

    ```sh
    touch database/database.sqlite
    ```

### Step 3: Download and Install DB Browser for SQLite

1. Search for "DB Browser for SQLite" on Google or visit [DB Browser for SQLite](https://sqlitebrowser.org/dl/).
2. Download the appropriate version for your operating system.
3. Install and run the application.

### Step 4: Open the SQLite Database

1. Open DB Browser for SQLite.
2. Select `Open Database`.
3. Navigate to your Laravel project's `database` folder and select the `database.sqlite` file.

### Step 5: Run Migrations

1. Open a terminal and navigate to your Laravel project root.
2. Run the following command to execute the migrations:

    ```sh
    php artisan migrate
    ```

Your data will now be stored in the SQLite database.

### Additional Notes

- Ensure your `config/database.php` is set up to use the SQLite connection when the environment variable is set:

    ```php
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
        // Other connections...
    ],
    ```

That's it! You are now set up to use SQLite in your Laravel project.
