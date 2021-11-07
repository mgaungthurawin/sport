<p align="center"><img src="http://myanmar-sport.co/web/images/logo_l.png"></p>


## Myanmar Sport Domain

- **http://myanmar-sport.co/**

## Test Case

- **https://docs.google.com/presentation/d/1lsx1FnpzKDiiPc7B-WMmJzS-FUDuU1_v5fZVWe9y-e8/edit?usp=sharing**

## Developer

If you need help related smartkid, please send an e-mail to Aung Thura Win via [mgaungthurawin@gmail.com](mgaungthurawin@gmail.com). Before you contect me please read the below project document.

## Myanmar Sport Web Portal

Frontend Modules

- Landing Page
- FAQ
- News
- Videos
- Favourite
- Unsubscribe (Api Request Only)

Backend Modules

- **[Admin Login URL](http://myanmar-sport.co/admin/login)**
- Authentication Module
- Categories Module
- Text Article Module
- Video Article Module

## Project Requirement 

- Laravel Version (5.7)
- PHP Version (7.1^) required
- Composer
- need to run composer-dump autoload command after setup project to load common_helper.php file

## Main Code Files

Common Code Files

- web.php (Handle Route)
- config/global.php (Store all Global Constant Values)
- app/Helpers/common_helper.php has all of helper functions
- app/Moldel Folder contain all Model php files

Frontend Code Files

- App\Http\Middleware\SignatureMiddleware.php is main handler to show content or not after subscription
- app/Http/Controllers/Web/WebController.php (Handle all frontend modules)
- Frontend view path is resources/views/web/

Backend Code Files

- app/Http/Controllers/Admin/ArticleCategoryController.php is CRUD of categories module
- app/Http/Requests/ArticleCategoryRequest.php is form vaildation of categories moduel
- app/Http/Controllers/Admin/TextArticleController.php is CRUD of text articles module
- app/Http/Requests/TextArticleRequest.php is form vaildation of text articles moduel
- app/Http/Controllers/Admin/VideoArticleController.php is CRUD of video articles module
- app/Http/Requests/VideoArticleRequest.php is form vaildation of video articles moduel
- app/Http/Controllers/Admin/MediaController.php is to remove image
- Frontend view path is resources/views/admin/

## Media and Resources

Frontend Media and Resources

- public/web/css and public/web/js is main UI/UX resource

Backend Midea and Resources

- public/web/css and public/bower_components is main UI/UX resource


## Database and Tables

- All migration files are include in database/migrations path

## Hosting/Server

Server is Digital Ocean Droplet. Server credentials will provide via mail.









