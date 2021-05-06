<p align="center"><a href="http://educoin.top/" target="_blank">
<img src="http://fs-thb01.getcourse.ru/fileservice/file/thumbnail/h/6d9198367559701854c2e7cfea5dc07c.png/s/x50/a/74362/sc/119" width="200"></a></p>

We present You the foundation for your online application, in which the admin panel is already configured. 
<br>Already implemented:
<br> - authentication
<br> - validation of mail
<br> - password reset
<br> - CRUD of users
<br> - CRUD of roles
<br> - User and Role SEEDS

Getting Started:

1. "Place the parent directory on a web server or local server"
2. Run 
    ###### composer install
3. Copy the "env.example" file in the root directory and rename it to ".env"
4. Create database
5. In .env file update the database configuration variables 
6. Generate APP_KEY - php artisan key: generate
7. Run migration and seed 
    ######php artisan migrate --seed
8. To get back access to registration form remove <span style="color:blue">**showRegistrationForm()**</span> overriding method in <span style="color:blue">**RegisterController.php**</span>

9. For email verification to work correctly you will need to update your email variables in .env file. If you want to test email verification You can use a free mail server [mailtrap.io](https://mailtrap.io/)

![alt text](public/img/mailtrap-settings_1.png "Описание будет тут")
###then
![alt text](public/img/mailtrap-settings_2.png "Описание будет тут")

Enjoy your use!
