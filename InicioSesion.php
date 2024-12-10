<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal de Inicio de Sesión</title>
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
</head>
<body>

<input type="checkbox" id="modal-toggle" class="modal-toggle">
<label for="modal-toggle" class="open-modal">Iniciar Sesión</label>

<div class="modal">
    <div class="modal-content">
        <label for="modal-toggle" class="close-modal">&times;</label>
        <h2>Iniciar Sesión</h2>
        <form id="loginForm">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</div>

</body>
</html>
