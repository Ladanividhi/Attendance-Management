# 📘 Attendance Management System

A web-based Attendance Management System built with **PHP** and **MySQL** that enables educational institutions to efficiently track and manage student attendance.


## 📋 Description

This system simplifies the attendance process by providing dedicated dashboards for both **staff** and **students**, featuring secure role-based access. Staff can manage attendance and student data, while students can view their attendance and submit feedback.


## 🌟 Key Features

The system provides two separate user dashboards—one for staff and one for students.  
Staff members can mark attendance, view attendance records, access the student list, and update their passwords.  
Students can view their own attendance history and change their passwords.  
An anonymous feedback system is also available for students to share their experience.


## 🛠 Technologies Used

- PHP  
- MySQL  
- HTML  
- CSS  
- JavaScript  


## 🚀 Installation

1. Clone this repository to your local machine
2. Set up a local web server (e.g., **XAMPP**)
3. Import the MySQL database (not included in the repo)
4. Configure the database connection in `connection.php`
5. Access the application via your web browser (e.g., `http://localhost/your-folder-name/`)


## 🔧 Database Configuration

1. Open the `connection.php` file in your project.
2. Update the database connection details as shown below:

    ```
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "hwproject";
    ```

3. Make sure:
   - The database named **hwproject** is created in your local MySQL server.
   - All required tables are properly imported into the **hwproject** database.



## 💡 Usage

- **Staff Login**
  - Log in to:
    - Mark attendance
    - View attendance records
    - View student lists
    - Change password

- **Student Login**
  - Log in to:
    - View personal attendance history
    - Submit anonymous feedback

- **Attendance Marking**
  - Staff can:
    - Select a date
    - Mark students as present or absent

- **Feedback**
  - Students can:
    - Submit anonymous feedback about their experience
   
      
## 📁 Project Structure

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


## ✅ Takeaway

This Attendance Management System offers a lightweight yet effective solution for educational institutions to streamline daily attendance tracking and enhance student-teacher communication.  
Perfect for beginner-level web developers looking to explore PHP-MySQL applications!

Thankyou for checking out my repo:)
