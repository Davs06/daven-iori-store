FROM php:8.3-apache

# Copia o nosso arquivo index.php para a pasta raiz do servidor web dentro do contêiner.
COPY index.php /var/www/html/

# --- NOVA LINHA: Copia a imagem de fundo para a pasta raiz do servidor web. ---
COPY background.png /var/www/html/