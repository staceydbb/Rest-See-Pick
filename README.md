# 🍽️ Rest-See-Pick

**Rest-See-Pick** is a simple PHP & MySQL web application that demonstrates basic **CRUD (Create, Read, Update, Delete)** operations. The system allows users to manage restaurant-related records through a clean and straightforward interface.

This project is ideal for beginners learning **PHP, MySQL, and database-driven web applications**.

---

## ✨ Features

* 📋 View records (Read)
* ➕ Add new entries (Create)
* ✏️ Edit existing entries (Update)
* 🗑️ Delete records (Delete)
* 🖼️ Image support for entries
* 🔗 MySQL database integration

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP / WAMP / Localhost

---

## 📂 Project Structure

```
Rest-See-Pick/
│── index.php        # Main page (display records)
│── add.php          # Add new record
│── update.php       # Update record
│── delete.php       # Delete record
│── about.php        # About page
│── contact.php      # Contact page
│── db.php           # Database connection
│── restseepick.sql  # Database file
│── Images/          # Image assets
```

---

## ⚙️ Setup Instructions

1. **Download or clone** this repository
2. Move the folder to your local server directory:

   * `htdocs` (XAMPP)
   * `www` (WAMP)
3. Open **phpMyAdmin**
4. Create a new database (e.g., `restseepick`)
5. Import the provided `restseepick.sql` file
6. Configure database credentials in `db.php`
7. Run the project in your browser:

```
http://localhost/Rest-See-Pick/
```

---

## 🗄️ Database

The database file `restseepick.sql` contains the required tables and sample data to run the system properly.

---

## 🎯 Purpose of the Project

* Practice PHP CRUD operations
* Understand database connectivity using MySQL
* Apply basic backend logic with frontend integration
* Serve as a foundation for more advanced web systems

---

## 📌 Notes

* Ensure your local server is running before accessing the system
* File permissions may be required for image uploads


✨ *Learning by building, one project at a time.*
