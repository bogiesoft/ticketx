TicketX: Open Source Support Ticket system
============================================
> TicketX is a Open Source Support Ticket system released under the MIT license. It is built with the awesome Laravel 5.2 Framwork. It includes Socialite logins, roles & permissions, ticket system, responsive email templates and much more.



> This is my "Learning Laravel project", so i would not recommend anyone to use this is production. I take no responsibility what so ever!


> Maybe this project can help other learn Laravel


![](http://ticket.stiligt.no/screenshot/2.png)

### Features

* Laravel 5.2
* Register/Login/Logout/Password Reset
* Authentication/Users/Roles/Permissions (zizaco/entrust)
* Third party login (Github/Facebook/Twitter/Google)
* Administrator Management
* Change/Create/Manage Users/Roles/Permissions
* Default Responsive Layout
* Frontend and Backend Controllers
* Administration Dashboard with Admin LTE Theme
* Master Layout Files with common sections
* Javascript/jQuery Snippets
* Bootstrap 3
* Font Awesome
* Socialite Integration
* Gravatar
* Ticketsystem (Create ticket, comment ticket, change priority, status, category. Reopen closed tickets).
* Responsive E-mail templates (New ticket created, status change, new comment on ticket)

### Install

1. Clone this repository: ```git clone https://github.com/w00p/ticketx.git ``` 
2. If you want to specify wich folder to clone to use: ```git clone <project url> my-folder```
3. ```composer install```
4. Create .env file (.env.example included, just copy that one to .env)
5. ```php artisan key:generate```
6. ```php artisan migrate --seed```
7. MAIL_DRIVER is set to log as default. Change to prefered settings in .env file
9. Thats it, visit your URL. Log in with one of the users below.

### Useful

TicketX commes with 3 default users. 
1. Admin / Admin (admin@example.com) (Role: Admin, Permission: view-backend, manage-users, manage-ticket, manage-permissions, manage-roles)
2. Sally Sixpack / Moderator (sally@example.com) (Role: Moderator, Permission: view-backend, manage-users, manage-tickets)
3. John Doe / Agent (john@example.com) (Role: Agent, Permission: view-backend, manage-tickets)
4. Password: 12345678

### Upload Avatar 

Default avatar is Gravatar. But if you will change the avatar you need go get a free account on [http://cloudinary.com/](http://cloudinary.com/).


Grab the API Key, and enter it in .env file.

### Resources i used

[laravel-hackathon-starter](https://github.com/unicodeveloper/laravel-hackathon-starter)


[Entrust](https://github.com/Zizaco/entrust)


[Scotch.io](https://scotch.io/tutorials/build-a-support-ticket-application-with-laravel-part-1)

### Screenshots

![](http://ticket.stiligt.no/screenshot/1.png)
![](http://ticket.stiligt.no/screenshot/3.png)
![](http://ticket.stiligt.no/screenshot/4.png)
![](http://ticket.stiligt.no/screenshot/5.png)
![](http://ticket.stiligt.no/screenshot/6.png)
![](http://ticket.stiligt.no/screenshot/7.png)
![](http://ticket.stiligt.no/screenshot/8.png)
![](http://ticket.stiligt.no/screenshot/9.png)
![](http://ticket.stiligt.no/screenshot/10.png)
![](http://ticket.stiligt.no/screenshot/12.png)
