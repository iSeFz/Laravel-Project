# Laravel Registration Website

This is a collaboration to complete the project of the **Web-based Information Systems** course at FCAI CU.

## General Instructions

- Always `git pull` before you push any new edits  
- Separate commits where each commit has a certain change  
- Do NOT push all work in just one commit (unless the edit is small)  
- Write a meaningful message in the commit message  

## Important instructions to run the project

1. Make your local Laravel project using the following command  
```bash
laravel new registration_project
```  
2. Run the following SQL command at the PHPMyAdmin panel to create the correct database table  
```sql
DROP TABLE Users;
CREATE TABLE Users (
    username varchar(40) primary key,
    email text,
    fullname text,
    password text,
    address text,
    phone text,
    imageName varchar(40),
    birthdate Date
);
```  
3. Replace all folders from the Github repo into your local Laravel project  
4. Run the Laravel project using the following comamnd  
```bash

5. replace MAIL_MAILER content with this in .env file
    MAIL_MAILER=smtp 
    MAIL_HOST=smtp.gmail.com 
    MAIL_PORT=587 
    MAIL_USERNAME=adham.kh.fahmy@gmail.com 
    MAIL_PASSWORD=kmuwfsqoxuhwyxod 
    MAIL_ENCRYPTION=tls 
    MAIL_FROM_ADDRESS="adham.kh.fahmy@gmail.com" 
    MAIL_FROM_NAME="Web Assignment"
php artisan serve
```

## Important note when uploading your updated files

> Do NOT push the `vendor` folder to the Github, only upload the modified folders except the vendor
