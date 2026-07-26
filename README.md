# Mood Journal – Mental Wellness Tracker

## Project Overview

Mood Journal is a web-based Mental Wellness Tracking System developed using CodeIgniter 4 and MySQL. It allows users to register, log in, record their daily moods, write journal entries, view mood history, track weekly mood reports, and receive wellness suggestions. The application helps users monitor their emotional well-being and build healthy daily habits.

## Features

- User Registration
- User Login & Logout
- Daily Mood Selection
- Mood Journal Writing
- Mood History
- Weekly Mood Report
- Mood Score Display
- Wellness Resources
- About Page
- User Dashboard
- Secure Session Management

## Technologies Used
### Frontend
- HTML5
- CSS3
- Bootstrap 5
- JavaScript
### Backend
- PHP
- CodeIgniter 4 (MVC Framework)
### Database
- MySQL
### IDE
- Visual Studio Code
### Server
- XAMPP (Apache & MySQL)
### Version Control
- Git
- GitHub

## 📂 Project Structure

MoodJournal/
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
├── public/
│   ├── css/
│   ├── images/
├── writable/
├── system/
├── .env
├── composer.json
├── README.md

## Software Requirements

- PHP 8.1 or above
- CodeIgniter 4
- MySQL
- XAMPP
- Visual Studio Code

## How to Run the Project

### Step 1
Download or clone the project from GitHub.
### Step 2
Copy the project folder into the **htdocs** folder of XAMPP.
### Step 3
Start **Apache** and **MySQL** from the XAMPP Control Panel.
### Step 4
Create a database named:
moodjournal
### Step 5
Import the provided SQL file into phpMyAdmin.
### Step 6
Update the database configuration in the `.env` file.
### Step 7
Open the project in Visual Studio Code.
### Step 8
Run the CodeIgniter development server.
php spark serve
### Step 9
Open the application in your browser.
Example:
http://localhost:8080
### Step 10
Register a new account.
### Step 11
Login using your credentials.
### Step 12
Select your daily mood and write a journal entry.
### Step 13
View your Dashboard, Mood History, Weekly Report, and Wellness Resources.

## Database
MySQL is used to store:

- User Information
- Mood Records
- Journal Entries
- Wellness Resources

### Tables
- users
- moods
- journals
- resources
