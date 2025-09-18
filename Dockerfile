# Estágio 1: Build da aplicação React
FROM node:18-alpine AS builder
WORKDIR /app
COPY package.json ./
COPY package-lock.json ./
RUN npm install
COPY . .
RUN npm run build

# Estágio 2: Servir a aplicação com Nginx
FROM nginx:1.25-alpine
# Copia os arquivos estáticos gerados no estágio de build
COPY --from=builder /app/build /usr/share/nginx/html
# Remove a configuração padrão do Nginx
RUN rm /etc/nginx/conf.d/default.conf
# Copia nossa configuração personalizada do Nginx
COPY nginx.conf /etc/nginx/conf.d
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]