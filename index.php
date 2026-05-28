<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEPRETEC - Sistema de Gestión</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #003366 0%, #001a33 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }
        .login-container h1 {
            color: #003366;
            margin-bottom: 10px;
        }
        .login-container h2 {
            color: #ff9900;
            margin-bottom: 30px;
            font-size: 18px;
        }
        input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #e0e7f0;
            border-radius: 12px;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border-color: #ff9900;
        }
        button {
            width: 100%;
            background: #003366;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background: #ff9900;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>CEPRETEC</h1>
        <h2>Sistema de Gestión Académica</h2>
        <form action="admin/dashboard.php" method="POST">
            <input type="text" placeholder="Usuario" required>
            <input type="password" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>