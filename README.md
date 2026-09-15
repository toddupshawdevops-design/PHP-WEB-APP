# Todd Upshaw Wk 2 PHP Performance Assessment

## Overview

This project is a PHP web application created for the Week 2 Performance Assessment.

The application collects personal information from a user through a web form and displays the submitted information after the form is submitted.

## Project Information

- **Student:** Todd Upshaw
- **Project:** Week 2 Performance Assessment
- **Language:** PHP
- **Environment:** VCASTLE / XAMPP
- **Web Server:** Apache
- **Database:** None required

## Application Features

The application includes text fields for:

- Name
- Date of Birth
- Favorite Color
- Favorite Place To Visit
- Nickname

After the user selects **Submit Information**, the application:

- Displays each value that was entered.
- Displays an appropriate message when a field was left empty.
- Uses PHP `$_POST` variables to retrieve form information.
- Uses conditional statements to determine whether information was entered.
- Uses `htmlspecialchars()` when displaying user-entered information.

## Project Structure

```text
Upshaw_wk2pa/
│
├── .vscode/
│   └── launch.json
│
├── index.php
│
└── README.md
