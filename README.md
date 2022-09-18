
## Project overview

Junior Laravel Developer Test

### Assignment requirements

Junior Laravel Developer Test
* JWT Auth: ability to log in as administrator (can use Laravel
Passport)
* Use database seeds to create first user with email
admin@admin.com and password “password”
* CRUD functionality (Create / Read / Update / Delete) for
items: Companies and Employees.
* Companies DB table consists of these fields: Name
(required), email, website
* Employees DB table consists of these fields: First name
(required), last name (required), Company (foreign key to
Companies), email, phone, age, salary.
* Use database migrations to create those schemas above
* Use Laravel api resource for data response formatting.
* Use Laravel’s validation function, using Request classes
* Use middleware for protection of Companies and
Employees crud.
* System should send email notification to the company after
a new employee was added.
* Add data filtering to Employees CRUD to filter employees
by Company on api request.

### Project setup
You need to have following apps installed:

* XAMPP, MySQL Workbench;


### Install
To run this project enter these commands into opened project terminal:
* Clone repository to your local device: <code> git clone https://github.com/XElderX/Laravel-Assignment.git </code>(git bash)
* Install depndences: <clone>composer update </clone>(powershell or cmd prompt)
* Create a new database: <i>e.g</i> <code>laravel_task</code>(mySQL workbench)
* Open <code>.env.example</code> file. Find the line: <code>DB_DATABASE=laravel</code> change to <code>i.g</code>DB_DATABASE=laravel_task</code>
* Use command line (powershell only) <code>cp .env.example .env</code>
* Fill up <b>.env</b> file with required data like mail_host or DB_host etc.
* Generate app key with command (powershell or cmd prompt)<code>php artisan key:generate</code>
* Generate JWT secret key with command(powershell or cmd prompt) <code>php artisan jwt:secret</code>
* Run migrations and seeds <code>php artisan:migrate</code><code> php artisan db:seed</code> or both and with dummy factory data with single command line (powershell or cmd prompt)  <code>php artisan migrate --seed</code>
* Run the server with command line (powershell or cmd prompt) <code>php artisan:serve</code>

### How to check if API working
* Check available route methods with command <code>php artisan route:list</code>
* Use postman. Sent login request with POST method to <b> http://127.0.0.1:8000/api/login </b> providing login data email: <b>admin@admin.com</b> and password:<b>password</b>;
* As response you have to get authorisation token, cope it with ctrl + c;
* Sending HTTP methods as authorisation select Bearer token and paste it;
* Use <b>x-www-form-urlencoded</b> for form data requests;
* As for entering employee' salary use <b>integer data type</b> entering value in lowest curency form(e.g) for salary like 1500.99 enter 150099 in API it automatically divides by 100 giving correct value.


### Project Changelog

##### 2022.09.12

* Added README md file;
* Implemented JWT Auth;
* Created migrations for new tables (Companies, Employees);
* Created Models;
* Created Controllers;
* Filled up models with fillables, set up relationships; 
* Added factories to fill up databases table's with details(for testing);
* Created and setted seeders (To migrate with seeding and generated factory data run command: php artisan migrate --seed);

##### 2022.09.13

* Fixed /config/auth.php auth guard correctly; 
* Filled up controllers with index and show method;
* Created resource controllers;
* Changed admin_seeder email from admin@support.com to admin@admin.com as required for task; 
* Implemented store method for both controllers (works as submiting data as form request );
* Implemented update method for both controllers (works as submiting data as form request(x-www-form-urlencoded));
* Created request validation classes for store and update methods;
##### 2022.09.15
* Slightly modified perameters naming in routes; 
* Added update method return response;
* Implemented Delete method for both controllers;
##### 2022.09.16
* Small changes in EmployeeResource.php;
* Implemented system notification when new employee added to the company;
##### 2022.09.17
* Modified controllers for returning api responses;
* Updated Store and Update Request Controllers for both models, adding failed Validation method to get validation error response;
* Changes in Exeptions/handler.php making to throw 404 not found response messages;
* Added filter method called getByCompany, to get collection data of Employees filtered by company name;
##### 2022.09.18

* Updated Readme md with assignment requiments, and instaliation guide







## Contacts
<span><strong>Project developed by: </strong> Dalius Kriaučiūnas  2022 <a href="https://www.linkedin.com/in/dalius-kriauciunas/">Link to Linked In </a></span>


