# Personal Task Manager

**Project Code:** WST21-PM-2026-SF  
**Student Name:** Ryan G. Sapanta  
**Course & Year:** BSIT - 2

The Personal Task Manager is a Laravel web application for managing personal tasks.

The application allows users to add, view, edit, update, delete, and change the status of tasks.

## Features

- Add a new task
- View all tasks
- Edit a task
- Update task information
- Delete a task
- Change task status
- Set a due date
- Add a task description

## Task Information

Each task contains:

- Task Name
- Description
- Status
- Due Date

Available statuses:

- Pending
- Completed

## How the System Works

The application follows the basic Laravel flow:

**Route → Controller → Model/Database → View → Browser**

### 1. Route

The routes are defined in:

```text
routes/web.php
```

The route receives the user's request and decides which controller function should handle it.

For example:

```php
Route::get('/tasks', [TaskController::class, 'index']);
```

This means that when the user visits `/tasks`, Laravel calls the `index()` function in the `TaskController`.

### 2. Controller

The controller is located at:

```text
app/Http/Controllers/TaskController.php
```

The controller handles the application's actions.

For example, the `index()` function gets all tasks from the database:

```php
public function index()
{
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
}
```

The controller then sends the task data to the Blade view.

### 3. Model and Database

The model is located at:

```text
app/Models/Task.php
```

The `Task` model represents the tasks stored in the database.

The application uses SQLite as its database.

The tasks table contains:

- ID
- Task Name
- Description
- Status
- Due Date
- Created At
- Updated At

The controller uses the model to create, retrieve, update, and delete tasks.

### 4. View

The views are created using Laravel Blade.

They are located at:

```text
resources/views/tasks/
```

The main views are:

```text
index.blade.php
create.blade.php
edit.blade.php
updated.blade.php
```

The Blade views display the task information to the user and provide forms for adding, editing, and deleting tasks.

### 5. Browser

After Laravel processes the request, the Blade view is displayed in the browser.

The basic system flow is:

```text
User
  ↓
Browser
  ↓
Route
  ↓
TaskController
  ↓
Task Model
  ↓
Database
  ↓
TaskController
  ↓
Blade View
  ↓
Browser
```

## Technologies Used

- Laravel
- PHP
- SQLite
- Blade
- HTML
- GitHub Codespaces

## Project Structure

```text
app/
├── Http/
│   └── Controllers/
│       └── TaskController.php
└── Models/
    └── Task.php

resources/
└── views/
    └── tasks/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        └── updated.blade.php

routes/
└── web.php

database/
└── migrations/
    └── 2026_09_25_154112_create_tasks_table.php

public/
└── index.php
```

## How to Run

1. Open the project in GitHub Codespaces.

2. Install the project dependencies:

```bash
composer install
```

3. Create the environment file:

```bash
cp .env.example .env
```

4. Generate the application key:

```bash
php artisan key:generate
```

5. Run the database migration:

```bash
php artisan migrate
```

6. Start the Laravel development server:

```bash
php artisan serve --host=0.0.0.0 --port=8000
```

7. Open port `8000` from the GitHub Codespaces Ports tab.

## Author

**Ryan G. Sapanta**

BSIT - 2
