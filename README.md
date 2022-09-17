
## Project overview

Junior Laravel Developer Test

### Assignment requirements
TBA

### Project setup
TBA



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
* Added filter method called getByCompany(), to get collection data of Employees filtered by company name;









## Contacts
<span><strong>Project developed by: </strong> Dalius Kriaučiūnas  2022 <a href="https://www.linkedin.com/in/dalius-kriauciunas/">Link to Linked In </a></span>


