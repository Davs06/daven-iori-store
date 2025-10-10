FROM php:8.3-apache

# Habilita o módulo de reescrita do Apache para o .htaccess funcionar
RUN a2enmod rewrite

# Copia todos os arquivos da aplicação para a pasta do servidor
COPY . /var/www/html/

