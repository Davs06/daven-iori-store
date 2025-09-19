<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daven & Iori - Em Breve</title>
    <style>
    /* Importa as fontes do Google: Playfair Display para elegância e Montserrat para legibilidade */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap');

    body {
        margin: 0;
        background-color: #12121a;
        /* Cor de fundo original */
        color: #e0e0e0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;

        /* --- NOVAS PROPRIEDADES PARA O BACKGROUND --- */
        background-image: url('background.png');
        /* Aponta para a imagem */
        background-size: cover;
        /* Faz a imagem cobrir todo o fundo */
        background-position: center;
        /* Centraliza a imagem */
        background-repeat: no-repeat;
        /* Evita que a imagem se repita */
        /* Fundo escuro com uma tonalidade mais escura para que o texto se destaque e a imagem seja sutil */
        background-color: rgba(18, 18, 26, 0.85);
        /* Aplica uma cor sobreposta à imagem */
        background-blend-mode: multiply;
        /* Mistura a cor com a imagem para escurecer */
        /* --- FIM DAS NOVAS PROPRIEDADES --- */
    }

    .container {
        max-width: 600px;
        padding: 3rem;
        /* Fundo do container agora é mais translúcido para que a imagem apareça por trás */
        background: rgba(28, 28, 43, 0.9);
        /* Usando rgba para transparência */
        border-radius: 10px;
        box-shadow: 0 5px 35px rgba(155, 89, 182, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.8rem;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        letter-spacing: 1px;
    }

    .subtitle {
        font-size: 1.2rem;
        font-weight: 300;
        color: #a98fc1;
        margin-bottom: 3rem;
        opacity: 0.9;
    }

    .main-content h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #9B59B6;
        letter-spacing: 5px;
        border: 2px solid #9B59B6;
        padding: 10px 25px;
        display: inline-block;
        border-radius: 5px;
        margin-bottom: 2rem;
        text-transform: uppercase;
        transition: all 0.4s ease;
    }

    .main-content h2:hover {
        background-color: #9B59B6;
        color: #ffffff;
        box-shadow: 0 0 25px rgba(155, 89, 182, 0.6);
        transform: scale(1.05);
    }

    .main-content p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #bdc3c7;
    }

    .footer {
        margin-top: 3rem;
        font-size: 0.9rem;
        color: #7f8c8d;
        opacity: 0.7;
    }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Daven & Iori</h1>
            <p class="subtitle">Sua nova experiência em moda.</p>
        </header>
        <main class="main-content">
            <h2>EM BREVE</h2>
            <p>Estamos preparando algo incrível para você. Nosso site está em construção, mas em breve estará no ar!</p>
        </main>
        <footer class="footer">
            <p>&copy; <?php echo date("Y"); ?> Daven & Iori. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>