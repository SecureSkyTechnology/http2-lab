FROM php:7-fpm-alpine
ENV HOME /root
WORKDIR /tmp
RUN apk --no-cache update && \
    apk add --no-cache libpng libjpeg-turbo libjpeg-turbo-dev freetype freetype-dev libpng-dev iproute2 && \
    docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/

RUN NUMPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) \
    && docker-php-ext-install -j${NUMPROC} gd

WORKDIR $HOME