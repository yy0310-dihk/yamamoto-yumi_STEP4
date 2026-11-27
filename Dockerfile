FROM php:8.6.0-apache
COPY src/ /var/www/html/index.php

COPY src/form_book.php /var/www/html/

COPY src/confirm_book.php /var/www/html/

COPY src/style_book.css /var/www/html/

COPY src/style_confirm.css /var/www/html/

COPY src/form.php /var/www/html/
COPY src/confirm.php /var/www/html/
COPY src/style.css /var/www/html/