<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2014/04/02/10/38/house-304072_960_720.png">
    <style><?php include __DIR__ . '/../css/style.css'; ?></style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,900;1,300;1,400;1,500&display=swap');
    </style>
    
    <title>Dízimo</title>
</head>
<body>
<div class="header">
        <a href="/">
            <h1 class="logo">Igreja de Gyro</h1>
        </a>
        <nav class="links-nav">
            <a href="/about">Sobre</a>
            <a href="/register">Cadastro</a> 
            <a href="/offer">Dízimo</a>
            <a href="/show">Doadores</a>
        </nav>
    </div>

    <h2 class="h2-title">Dízimo</h2>

    <div class="offer-form">
    <form action="/saveoffer" method="post">
        <div class="offer-camp">
        <label for="salary">
            Salário
        </label>
        <input type="number" name="salary" min="10" required>

        <label for="members">
            Membro
        </label>

        <!-- Select cujas options representam os membros (e seus value o id respectivo deles) -->
        
        <select name="members" id="members">
            <?php
                while ($members = $query->fetchArray()) {
                    echo "<option value=" . $members['id_member'] . ">" . $members['name'] ."</option>";
                }
            ?>
        </select>
        <button class="offer-button">
            Enviar
        </button>
        </div>
    </form>
    </div>

    <div class="footer">
        <ul>
            <li class="list-title">Igreja de Gyro</li>
            <li class="list-adress">&#x1F4CD Rua Quebra Bolas 1866, Bairro Família Zeppeli,</li>
            <li>Palma do Diavolo (PD) - Reino de Nápoles</li>
            <li>&#x2709 igrejadegyro@email.com</li>
            <li>&#x1F4DE (+00) 00 0000-0000</li>
        </ul>
    </div>

</body>
</html>