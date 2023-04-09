FROM lfelipeapo/php-nginx-web:1.0.0

## Diretório das aplicações
ARG APP_DIR=/var/www

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    apt-utils build-essential libssl-dev curl && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql pgsql session xml zip iconv simplexml pcntl gd fileinfo

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

# Cria system user para rodar Composer e Artisan Commands
WORKDIR $APP_DIR
RUN chmod 755 -R *

# carregar configuração padrão do NGINX
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/nginx/sites /etc/nginx/sites-available

# configuração do htop
RUN apt-get update && apt-get install -y supervisor htop sudo && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./docker/supervisord/supervisord.conf /etc/supervisor
COPY ./docker/supervisord/conf /etc/supervisord.d/

CMD ["bash", "-c", "php artisan queue:work & /usr/bin/supervisord -c /etc/supervisor/supervisord.conf"]

SHELL ["/bin/bash", "--login", "-c"]

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash

RUN nvm install 16.19.1

RUN node -v

RUN echo "Finalizado instalação!"

