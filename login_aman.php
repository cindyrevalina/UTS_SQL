<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Aman</title>
    <style>
        body { font-family: Arial; padding: 50px; }
        .container { width: 300px; margin: auto; border: 1px solid #ccc; padding: 20px; background: #f9f9f9; }
        input { width: 100%; padding: 8px; margin: 5px 0 15px 0; }
        button { background: green; color: white; padding: 10px; border: none; cursor: pointer; }
        .hasil { margin-top: 20px; padding: 10px; }
        .sukses { background: lightgreen; }
        .gagal { background: lightcoral; }
        kode { background: #eee; padding: 5px; display: block; font-family: monospace; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login (Versi Aman - Prepared Statement)</h2>
        <form method="POST">
            Username: <input type="text" name="username" required>
            Password: <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conn = mysqli_connect("localhost", "root", "", "uts_sql_injection");
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            //  INI KODE AMAN - PAKAI PREPARED STATEMENT
            $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ? AND password = ?");
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            echo "<div class='hasil'>";
            echo "<strong> Menggunakan Prepared Statement (Aman!)</strong><br>";
            
            if(mysqli_num_rows($result) > 0) {
                echo "<div class='sukses'>LOGIN BERHASIL! Selamat datang, " . $username . "</div>";
            } else {
                echo "<div class='gagal'>LOGIN GAGAL! Username atau password salah.</div>";
            }
            echo "</div>";
            
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>