FROM php:8.3-apache

# Copia o nosso arquivo index.php para a pasta raiz do servidor web dentro do contêiner.
COPY index.php /var/www/html/

# --- NOVA LINHA: Copia a imagem de fundo para a pasta raiz do servidor web. ---
COPY background.png /var/www/html/

# --- NOVAS LINHAS: Copia os arquivos de ícone. ---
COPY favicon.ico /var/www/html/
COPY apple-touch-icon.png /var/www/html/
COPY logo-DeI.png /var/www/html/