# 📘 Attendance Management System

A web-based Attendance Management System built with **PHP** and **MySQL** that enables educational institutions to efficiently track and manage student attendance.


## 📋 Description

This system simplifies the attendance process by providing dedicated dashboards for both **staff** and **students**, featuring secure role-based access. Staff can manage attendance and student data, while students can view their attendance and submit feedback.


### 🌟 Key Features

- **Dual User Interface**
  - Separate dashboards for Staff and Students

- **Staff Features**
  - Mark attendance for students
  - View attendance records
  - View student list
  - Change password

- **Student Features**
  - View personal attendance history
  - Change password

- **Feedback System**
  - Anonymous feedback form for students


### 🛠 Technologies Used

- PHP  
- MySQL  
- HTML  
- CSS  
- JavaScript  


### 🚀 Installation

1. Clone this repository to your local machine
2. Set up a local web server (e.g., **XAMPP**)
3. Import the MySQL database (not included in the repo)
4. Configure the database connection in `connection.php`
5. Access the application via your web browser (e.g., `http://localhost/your-folder-name/`)


### 🔧 Database Configuration

Update the following details in your `connection.php` file:

$servername = "localhost";
$username = "root";
$password = "";
$db = "hwproject";
Make sure the database hwproject is created and relevant tables are imported before using the system.


### 💡 Usage

## Staff Login  
Log in to mark attendance, view attendance records, student lists, and manage passwords.

## Student Login  
Log in to view attendance history and submit anonymous feedback.

## Attendance Marking  
Staff selects a date and marks each student as present or absent.

## Feedback  
Students can submit anonymous feedback to share their experience.


### 📁 Project Structure

| File                          | Description                             |
|-------------------------------|-----------------------------------------|
| `index.php`                   | Login page for staff and students       |
| `config.php`                  | Handles login authentication            |
| `connection.php`              | Manages database connection             |
| `staff.php`                   | Staff dashboard                         |
| `student.php`                 | Student dashboard                       |
| `attendance_save.php`         | Saves attendance to the database        |
| `view_attendance.php`         | View attendance (Staff side)            |
| `view_attendance_student.php` | View attendance (Student side)          |
| `form.php`                    | Anonymous feedback submission           |


### ✅ Final Thoughts

This Attendance Management System offers a lightweight yet effective solution for educational institutions to streamline daily attendance tracking and enhance student-teacher communication.  
Perfect for beginner-level web developers looking to explore PHP-MySQL applications!

Thankyou for checking out my repo:)
