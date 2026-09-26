# Personal Task Manager

Project Code: WST21-PM-2026-SF
Student Name: Ryan G. Sapanta
Course & Year: BSIT - 2

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
