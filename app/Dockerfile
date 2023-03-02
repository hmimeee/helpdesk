FROM php:7.4-fpm

# Copying project files to the container
COPY . /var/www

# Set the user to root
USER root

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libc-client-dev \
    ssmtp \
    libkrb5-dev \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install mbstring intl imap fileinfo iconv mysqli gd

# Making the owner of the path to have access
RUN chown -R www-data:root /var/www

# Set working directory
WORKDIR /var/www