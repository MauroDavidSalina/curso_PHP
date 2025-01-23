<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>INGRESE SUS DATOS</h1>
    <form action="check_login.php" method="post">
        <table>
            <tr>
                <td class="izq">
                    Login:
                </td>
                <td class="der">
                    <input type="text" name="login" id="login">
                </td>
            </tr>
            <tr>
                <td class="izq">
                    Password:
                </td>
                <td class="der">
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
            </tr>
        </table>


    </form>
    
</body>
</html>