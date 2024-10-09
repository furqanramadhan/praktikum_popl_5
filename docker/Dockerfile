# Menggunakan image dasar PHP
FROM php:8.3-fpm

# Menginstal dependensi
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Set direktori kerja
WORKDIR /var/www

# Menyalin semua file proyek ke dalam container
COPY . .

# Menginstal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Menginstal dependensi PHP
RUN composer install --no-interaction

# Mengatur izin folder storage dan bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Perintah untuk menjalankan PHP-FPM
CMD ["php-fpm"]

# Mengekspos port 3000 untuk PHP-FPM
EXPOSE 3000

