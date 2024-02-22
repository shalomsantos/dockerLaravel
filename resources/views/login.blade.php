<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 340px; /* Ajuste para incluir o padding */
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: calc(100% - 16px); /* Considera o padding de 8px de cada lado */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #2980b9;
        }

        .form-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .form-links a {
            margin-right: 10px;
            color: #3498db;
            text-decoration: none;
        }

        .form-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Tela de Login</h2>
    <form class="login-form">
        <div class="form-group">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Entrar</button>
        </div>
    </form>
    <div class="form-links">
        <a href="#">Esqueceu a senha?</a>
        <span>|</span>
        <a href="#">Cadastre-se</a>
    </div>
</div>

</body>
</html>
