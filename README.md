# laravel-adminlte-starter
Laravel AdminLTE starter.html integration

## Installation
- Install admin-lte via npm `npm install admin-lte --save`
- Copy content of src folder to your Laravel project folder

## What was done:

### Integration of starter.html to laravel blade's files

- Create views and slice to parth like header, footer, sidebars etc.
- Create some layouts like default starter layout and auth layout 
- Modify webpack.js to copy admin-lte plugins, images, css, js

### Create additional auth views

- Merge AdminLTE login and register html with Laravel make:auth views
- Additionaly create password reset and password email views with Laravel make:auth views and on the base AdminLTE login html

### Localization

- Localize auth views (add @lang on blade templates and create admin-lte localization file)
- Localize some admin-lte strings like sign out, profile etc.
- Add ru translation

### Other small things

- Add CSRF token to forms
- Make Sign Out button workable
- Change name to {{ Auth::user()->name }} (your name)
- Edit Member since string, add real created_ad with Carbon
- Edit company name and current year in footer
