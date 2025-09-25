<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daven & Iori - Em Breve</title>

    <link rel="icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest">


    <style>
        /* Importa as fontes do Google */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap');

        /* --- Estilo da Seleção de Texto --- */
        ::selection,
        ::-moz-selection {
            background-color: #4A0E4A;
            /* Tom de Roxo Profundo da sua paleta */
            color: #ffffff;
        }

        body {
            margin: 0;
            padding: 1rem;
            box-sizing: border-box;
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
            max-width: 600px;
            background: rgba(28, 28, 43, 0.9);
            border-radius: 10px;
            box-shadow: 0 5px 35px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            box-sizing: border-box;

            /* --- ALTERAÇÕES PARA O LOGO FLUTUANTE --- */
            position: relative;
            /* Essencial para o posicionamento do logo */
            margin-top: 60px;
            /* Garante espaço para a parte do logo que fica para fora */
            padding: 3rem;
            padding-top: 80px;
            /* Aumenta o padding superior para o conteúdo não ficar atrás do logo */
        }

        /* --- NOVA REGRA PARA O LOGO FLUTUANTE --- */
        .logo {
            width: 100px;
            /* Tamanho do logo */
            height: 100px;
            border-radius: 50%;
            /* Garante que a imagem e a borda sejam perfeitamente redondas */
            border: 4px solid #1c1c2b;
            /* Cria uma borda com a cor do card para um acabamento melhor */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);

            /* A mágica do posicionamento */
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Puxa o logo para cima e para a esquerda para centralizá-lo na borda */
        }


        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.8rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 1px;
            background-image: linear-gradient(145deg,
                    #AE9249 0%,
                    #FFF8C9 50%,
                    #CFB53B 70%,
                    #AE9249 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            font-size: 1.2rem;
            font-weight: 300;
            color: #a98fc1;
            opacity: 0.8;
            margin-top: 0.5rem;
            margin-bottom: 3rem;
        }

        .main-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #CFB53B;
            /* Cor dourada sólida, como solicitado */
            background-color: transparent;
            /* Garante que não haja cor de fundo */
            letter-spacing: 5px;
            border: 2px solid #CFB53B;
            padding: 10px 25px;
            display: inline-block;
            border-radius: 5px;
            margin-bottom: 2rem;
            text-transform: uppercase;
            transition: all 0.4s ease;
        }

        .main-content h2:hover {
            /* Efeito de gradiente metálico aplicado no hover */
            background-image: linear-gradient(145deg,
                    #AE9249 0%,
                    #FFF8C9 50%,
                    #CFB53B 70%,
                    #AE9249 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;

            /* Mantém a borda e outros efeitos */
            border-color: #CFB53B;
            box-shadow: 0 0 25px rgba(207, 181, 59, 0.4);
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
                align-items: flex-start;
                padding-top: 5vh;
            }

            .container {
                padding: 2rem 1.5rem;
                padding-top: 70px;
                /* Ajusta o padding do topo para telas menores */
                margin-top: 50px;
            }

            .logo {
                width: 80px;
                /* Logo um pouco menor no celular */
                height: 80px;
            }

            .header h1 {
                font-size: 2.8rem;
            }

            .main-content h2 {
                font-size: 1.8rem;
                letter-spacing: 3px;
                padding: 8px 18px;
            }

            .subtitle,
            .main-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="logo-DeI.png" alt="Logo Daven & Iori" class="logo">

        <header class="header">
            <h1>Daven & Iori</h1>
            <p class="subtitle">A elegância em cada detalhe.</p>
        </header>
        <main class="main-content">
            <a href="https://daveniori.lojavirtualnuvem.com.br">
                <h2>EM BREVE</h2>
            </a>
            <p>Estamos preparando algo incrível para você. Nosso site está em construção, mas em breve estará no ar!</p>
        </main>
        <footer class="footer">
            <p>&copy; <?php echo date("Y"); ?> Daven & Iori. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>