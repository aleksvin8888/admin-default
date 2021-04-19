We present you the foundation for your online application, in which the admin panel is already configured.
<br>Users and their roles are implemented here.
<br>By entering one command, the database will be filled with fake users and roles to test the functionality, do not be afraid to start with this and see how it all works.

Getting Started:

1. "Place the parent directory on a web server or local server"
2. We give a command: "composer install"
3. We give a command: "npm install"
4. Copy the "env.example" file in the root directory and rename it to "env."
5. Create database
6. Register the parameters for connecting to the database in the "env." file.
7. Generate key in "env." file "php artisan key: generate" command
8. Enter the migration command "php artisan migrate --seed"

Enjoy your use!
