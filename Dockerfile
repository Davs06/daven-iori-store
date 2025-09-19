# Usa a imagem oficial do PHP 8.3 com o servidor Apache já configurado.
FROM php:8.3-apache

# Copia o nosso arquivo index.php para a pasta raiz do servidor web dentro do contêiner.
COPY index.php /var/www/html/