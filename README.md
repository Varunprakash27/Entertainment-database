# Entertainment Database 🎮🧠

A web-based entertainment hub featuring interactive **quizzes** and **games** built using **HTML**, **CSS**, **JavaScript**, and **PHP**.

---

## 💡 Features

- ✅ General Knowledge, Aptitude, and AI quizzes (with timer)
- 🎮 Games: Snake Game, Tic-Tac-Toe, Memory Match
- 🗂️ User login, session-based quiz tracking
- 📊 Score submission and result display
- 🎨 Minimalist and responsive interface

---

## 🧰 Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (`mysqli`)  
- **Local Server:** XAMPP or PHP CLI  

---

## 🚀 Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/Varunprakash27/Entertainment-database.git
cd Entertainment-database
```

### 2. Run with built-in PHP server (if PHP is installed)

```bash
php -S localhost:8000
```

Then open your browser at:

```
http://localhost:8000/index.html
```

### 3. Or use XAMPP (Recommended)

- Install [XAMPP](https://www.apachefriends.org/)
- Move this folder to:
  ```
  C:/xampp/htdocs/entertainment-database
  ```
- Start Apache from XAMPP Control Panel
- Visit: `http://localhost/entertainment-database/index.html`

---

## 🧮 Database Setup

1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
2. Create a database (e.g., `entertainment_db`)
3. Import the SQL file (if provided) from `sql/` folder
4. Edit `server.php` with your database credentials:

```php
$conn = mysqli_connect("localhost", "root", "", "entertainment_db");
```

---

## 📁 Folder Structure

```
entertainment-database/
├── index.html
├── gk.php
├── ai.php
├── apt.php
├── login.php
├── server.php
├── res.php
├── result.php
├── skindex.html         # Snake Game
├── tic.html             # Tic-Tac-Toe
├── mem.html             # Memory Match
├── css/
│   └── *.css
├── js/
│   └── *.js
├── sql/
│   └── entertainment_db.sql
└── README.md
```

---

## 🙋‍♂️ Author

**Varun Prakash**  
[GitHub Profile]([https://github.com/YOUR_USERNAME](https://github.com/Varunprakash27))

---

## 📜 License

This project is open source and available under the [MIT License](LICENSE).
