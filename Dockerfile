FROM php:8.3-cli

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli zip gd

# نسخ composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# نسخ المشروع
COPY . .

# تثبيت dependencies
RUN composer install --no-dev --optimize-autoloader

# صلاحيات
RUN chmod -R 775 storage bootstrap/cache

# تشغيل السيرفر من public
CMD php -S 0.0.0.0:$PORT -t public