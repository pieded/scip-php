FROM composer:2.5.8@sha256:572a3d91b1233a8dc9397627f41832a6aa4d0dc63b18c1da816490e6b7f9536a AS builder

COPY composer.json /app/
COPY composer.lock /app/
RUN composer install --no-dev --no-progress --no-interaction

FROM sourcegraph/src-cli:5.1.0@sha256:c7e4865c65623aba97fd031d3f6dc6ac15478e88fd8a6092029bb13d77117f47 AS src-cli

FROM php:8.2-cli-alpine3.17@sha256:2af057cd287e0ac4421d8cd5f078846a95f2f2666b29b5ab448b42479ef09bd5

RUN echo 'memory_limit=2G' >> /usr/local/etc/php/conf.d/docker-php-memory-limit.ini;

COPY --from=builder /app/vendor /app/vendor
COPY bin /app/bin
COPY src /app/src

COPY --from=src-cli /usr/bin/src /usr/bin/src
RUN ln -s /app/bin/scip-php /usr/bin/scip-php
RUN apk add --no-cache git

WORKDIR /src
