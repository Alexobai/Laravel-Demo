# Laravel-Demo
# Steps:

1. set up composer and nodejs
1. do command:composer global require laravel/installer for using composer in laravel
1. call laravel in command to ensure it works
4.ensure composer in PATH
5.command:laravel new project name // create project
6.cd to the directory
7.command: php artisan serve
8.go to the address
9.add new terminal
10.go to welcome.blade.php page to edit for front end
11.command:php artisan make:auth //use ui:auth instead if the composer version is higher than 5.8
12.command:npm install
13.command:npm run dev
14.add database file with sqlite type and also a folder of database
15.edit env file to change the DB lines
16.command:php artisan make:migrate
17.reboot serve as doing changes in database
18.register a new user
19.go to app.blade.php to edit title after login
20.add a svg folder for storing pictures
21.add the img src on app.blade.php and adjust the format
22.instead of dashboard edit the frontend as a profile
23.use div and class to set the styles for now and hard code for variables
24.add font in app.scss file and background in variables
25.command: npm run dev to refresh the page
26.go to register.blade.php to add a username col for front end
27.also add username in register controller and add validation
28.databse migrate add username in the database table
29.command:php artisan migrate:fresh //refresh the database to register again for username
30.go to user model to add username element
31.go to app.blade.php to change the name to username when logged in //frontend
32.command: php artisan make:controller ProfilesController
33.copy the index method from homecontroller
34.add routes in web.php
35.the view is calling the prefix.blade.php
36.add user parameter in index method and use a variable to contain the user info
37.return the correct view and change the hardcode username in frontend
38.command:php artisan make:model Profile -m
39.add elements and keys in table
40.command:php artisan migrate //refresh
41.Profile model create user method to indicate the relation of profile and user
42.Also do so in User model
43.command:php artisan tinker 
44.tinker: $profile = new \App\Profile(); $profile->title = 'blah'; $profile->description='description';$pofile->user_id = 1;$profile->save();
45.change the hardcode of title and description in frontend
46.tinker: push() method save all
47. command:php artisan make:model Post -m
48. add elements in table
49. refresh the database
50.add posts method in user model for relation
51.also in the Post model
52.add new post link front end
53.add route for add post
54.command: php artisan make:controller PostController
55.create method in controller to view posts
56.create folder under view for profile methods and webpages
57. do front end things in create.blade.php
58.use post as method for submittion
59.postcontroller store method to store info when submit new post
60.csrf in php level for protection
61.store method validation for info and redirect return value
62.add fillable in post model
63.make sure only the auth user can add new post
64.add contructor for postcontroller middleware auth//jump to login page if not logged in
65.use store method of laravel enter the parameters to store img
66.command: php artisan storage:link //store img directory
67.post order reverse in user model
68.count() in front end for count the post numbers
69.command: composer require intervention/image //resize images be aware for use before
70.do save image code in profilecontroller
71.add route for show the post
72.add show method in post controller and post parameter
73.also create the front end
74.return view post/show
75.do front end design for show post
76.add edit profile in profile index front end
77.add route for edit and create method in profile model
78.return edit
79.add update method in profile model after edit 
80.use patch method and add patch in route
81.add currect profile info in front end
82.do validation for update
83.add fillable in profile model including auth
84.use policy to protect edit link
85.command:php artisan make:policy ProfilePolicy -m Profile
86.edit update method in policy file return true or false;
87.use @can in frontend php level to protect edit link
88.also do it for add new post
89.change the route order to prevent confliction of routes
90.do migrate refresh for img path
91.add boot method in user model for new user info
92.change img hardcode
93.do front end adjust
94.do default img for new register
95.reference commits on github for follow button and email to new users
