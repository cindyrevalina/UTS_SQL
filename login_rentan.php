<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Rentan</title>
    <style>
        body { font-family: Arial; padding: 50px; }
        .container { width: 300px; margin: auto; border: 1px solid #ccc; padding: 20px; }
        input { width: 100%; padding: 8px; margin: 5px 0 15px 0; }
        button { background: blue; color: white; padding: 10px; border: none; cursor: pointer; }
        .hasil { margin-top: 20px; padding: 10px; }
        .sukses { background: lightgreen; }
        .gagal { background: lightcoral; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login (Versi Rentan)</h2>
        <form method="POST">
            Username: <input type="text" name="username" required>
            Password: <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // KONEKSI DATABASE
            $conn = mysqli_connect("localhost", "root", "", "uts_sql_injection");
            
            // AMBIL INPUT DARI FORM
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // INI KODE RENTAN - LANGSUNG GABUNG INPUT KE QUERY
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            
            echo "<div class='hasil'>";
            echo "<strong>Query yang dijalankan:</strong><br>";
            echo "<code style='background:#f0f0f0; padding:5px; display:block;'>" . $query . "</code><br>";
            
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0) {
                echo "<div class='sukses'>LOGIN BERHASIL! Selamat datang, " . $username . "</div>";
            } else {
                echo "<div class='gagal'>LOGIN GAGAL! Username atau password salah.</div>";
            }
            echo "</div>";
            
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>