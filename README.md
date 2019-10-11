# Laravel-Demo
# Steps:

1. set up composer and nodejs
1. do command:composer global require laravel/installer for using composer in laravel
1. call laravel in command to ensure it works
1. ensure composer in PATH
1. command:laravel new project name // create project
1. cd to the directory
1. command: php artisan serve
1. go to the address
1. add new terminal
1. go to welcome.blade.php page to edit for front end
1. command:php artisan make:auth //use ui:auth instead if the composer version is higher than 5.8
1. command:npm install
1. command:npm run dev
1. add database file with sqlite type and also a folder of database
1. edit env file to change the DB lines
1. command:php artisan make:migrate
1. reboot serve as doing changes in database
1. register a new user
1. go to app.blade.php to edit title after login
1. add a svg folder for storing pictures
1. add the img src on app.blade.php and adjust the format
1. instead of dashboard edit the frontend as a profile
1. use div and class to set the styles for now and hard code for variables
1. add font in app.scss file and background in variables
1. command: npm run dev to refresh the page
1. go to register.blade.php to add a username col for front end
1. also add username in register controller and add validation
1. databse migrate add username in the database table
1. command:php artisan migrate:fresh //refresh the database to register again for username
1. go to user model to add username element
1. go to app.blade.php to change the name to username when logged in //frontend
1. command: php artisan make:controller ProfilesController
1. copy the index method from homecontroller
1. add routes in web.php
1. the view is calling the prefix.blade.php
1. add user parameter in index method and use a variable to contain the user info
1. return the correct view and change the hardcode username in frontend
1. command:php artisan make:model Profile -m
1. add elements and keys in table
1. command:php artisan migrate //refresh
1 .Profile model create user method to indicate the relation of profile and user
1. Also do so in User model
1. command:php artisan tinker 
1. tinker: $profile = new \App\Profile(); $profile->title = 'blah'; $profile->description='description';$pofile->user_id = 1;$profile->s ave(); 
1.chan ge the hardcode of title and description in frontend
1.tink er: push() method save all
1. com mand:php artisan make:model Post -m
1. add  elements in table
1. ref resh the database
1. add posts method in user model for relation
1. also in the Post model
1. add new post link front end
1. add route for add post
1. command: php artisan make:controller PostController
1. create method in controller to view posts
1. create folder under view for profile methods and webpages
1.  do front end things in create.blade.php
1. use post as method for submittion
1. postcontroller store method to store info when submit new post
1. csrf in php level for protection
1. store method validation for info and redirect return value
1. add fillable in post model
1. make sure only the auth user can add new post
1. add contructor for postcontroller middleware auth//jump to login page if not logged in
1. use store method of laravel enter the parameters to store img
1. command: php artisan storage:link //store img directory
1. post order reverse in user model
1. count() in front end for count the post numbers
1. command: composer require intervention/image //resize images be aware for use before
1. do save image code in profilecontroller
1. add route for show the post
1. add show method in post controller and post parameter
1. also create the front end
1. return view post/show
1. do front end design for show post
1. add edit profile in profile index front end
1. add route for edit and create method in profile model
1. return edit
1. add update method in profile model after edit 
1. use patch method and add patch in route
1. add currect profile info in front end
1. do validation for update
1. add fillable in profile model including auth
1. use policy to protect edit link
1. command:php artisan make:policy ProfilePolicy -m Profile
1. edit update method in policy file return true or false;
1. use @can in frontend php level to protect edit link
1. also do it for add new post
1. change the route order to prevent confliction of routes
1. do migrate refresh for img path
1. add boot method in user model for new user info
1. change img hardcode
1. do front end adjust
1. do default img for new register
1. reference commits on github for follow button and email to new users
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```
