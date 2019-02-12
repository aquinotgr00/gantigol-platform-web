FROM php:7.2.15-cli-alpine3.9

RUN apk add --no-cache tini bash supervisor

RUN echo "memory_limit=-1" > "$PHP_INI_DIR/conf.d/memory-limit.ini" \
    && echo "date.timezone=${PHP_TIMEZONE:-UTC}" > "$PHP_INI_DIR/conf.d/date_timezone.ini"

RUN apk add --no-cache --virtual .build-deps \
        # for all
        zlib-dev \
        # to build xdebug from PECL
        $PHPIZE_DEPS \
    && docker-php-ext-install \
        pdo_mysql \
        zip \
    && pecl install xdebug-2.6.1 \
    && docker-php-ext-enable xdebug \
    # next will add runtime deps for php extensions
    # what this does is checks the necessary packages for php extensions Shared Objects
    # and adds those (won't be removed when .build-deps are)
    && runDeps="$( \
        scanelf --needed --nobanner --format '%n#p' --recursive /usr/local/lib/php/extensions \
            | tr ',' '\n' \
            | sort -u \
            | awk 'system("[ -e /usr/local/lib/" $1 " ]") == 0 { next } { print "so:" $1 }' \
        )" \
    && apk add --virtual .phpext-rundeps $runDeps \
    && apk del .build-deps

# install composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 1.7.3

RUN curl -s -f -L -o /tmp/installer.php https://getcomposer.org/installer \
    && curl -s -f -L -o /tmp/signature https://composer.github.io/installer.sig \
    && php -r " \
        \$signature = trim(file_get_contents('/tmp/signature')); \
        \$hash = hash('SHA384', file_get_contents('/tmp/installer.php')); \
        if (!hash_equals(\$signature, \$hash)) { \
            unlink('/tmp/installer.php'); \
            echo 'Integrity check failed, installer is either corrupt or worse.' . PHP_EOL; \
            exit(1); \
        }" \
    && php /tmp/installer.php --no-ansi --install-dir=/usr/bin --filename=composer --version=${COMPOSER_VERSION} \
    && composer --ansi --version --no-interaction \
    && rm -rf /tmp/*

WORKDIR /app
