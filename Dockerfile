FROM php:8.3-apache

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli zip gd

# تفعيل mod_rewrite
RUN a2enmod rewrite

# تعيين public كـ document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# نسخ المشروع
COPY . /var/www/html

# تثبيت composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تثبيت dependencies
RUN composer install --no-dev --optimize-autoloader

# صلاحيات
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 storage bootstrap/cache