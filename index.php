<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daven & Iori - Em Breve</title>

    <link rel="icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />


    <style>
    /* Importa as fontes do Google */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap');

    /* --- Estilo da Seleção de Texto --- */
    ::selection,
    ::-moz-selection {
        background-color: #e1a1faff;
        color: #ffffff;
    }

    body {
        margin: 0;
        padding: 1rem;
        /* Adiciona um respiro nas bordas da tela */
        box-sizing: border-box;
        /* Garante que o padding não cause overflow */
        background-color: #12121a;
        color: #e0e0e0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background-image: url('background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: rgba(18, 18, 26, 0.85);
        background-blend-mode: multiply;
    }

    .container {
        width: 100%;
        /* Ocupa 100% do espaço disponível */
        max-width: 600px;
        /* Mas não passa de 600px em telas grandes */
        padding: 3rem;
        background: rgba(28, 28, 43, 0.9);
        border-radius: 10px;
        box-shadow: 0 5px 35px rgba(155, 89, 182, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
        box-sizing: border-box;
        /* Garante que o padding não cause overflow */
    }

    .header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.8rem;
        font-weight: 700;
        margin: 0;
        letter-spacing: 1px;

        /* --- INÍCIO DO EFEITO DOURADO METÁLICO --- */

        /* 1. O gradiente que simula o dourado com brilho e sombra. */
        background-image: linear-gradient(145deg,
                #AE9249 0%,
                /* Sombra do ouro */
                #FFF8C9 50%,
                /* Ponto de brilho máximo (ouro claro) */
                #CFB53B 70%,
                /* Tom médio do ouro */
                #AE9249 100%
                /* Sombra final do ouro */
            );

        /* 2. Propriedades mágicas que aplicam o fundo ao texto. */
        -webkit-background-clip: text;
        /* Para compatibilidade com Chrome/Safari */
        background-clip: text;

        /* 3. O texto em si fica transparente para que o fundo (gradiente) apareça. */
        color: transparent;

        /* 4. (Opcional) Uma sombra sutil para dar profundidade e destacar o texto. */
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);

        /* --- FIM DO EFEITO --- */
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

    /* --- REGRAS PARA TELAS MENORES (CELULARES) --- */
    @media (max-width: 640px) {
        body {
            /* Alinha o card no topo em vez de no centro verticalmente */
            align-items: flex-start;
            padding-top: 5vh;
        }

        .container {
            padding: 2rem 1.5rem;
            /* Diminui o padding interno */
        }

        .header h1 {
            font-size: 2.8rem;
            /* Diminui a fonte principal */
        }

        .main-content h2 {
            font-size: 1.8rem;
            /* Diminui a fonte "Em Breve" */
            letter-spacing: 3px;
            padding: 8px 18px;
        }

        .subtitle,
        .main-content p {
            font-size: 1rem;
            /* Ajusta o tamanho do texto do parágrafo */
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Daven & Iori</h1>
            <p class="subtitle">Estilo diário, elegância universal.</p>
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