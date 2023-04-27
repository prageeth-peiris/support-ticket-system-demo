### ONLINE SUPPORT TICKET SYSTEM DEMO


### REQUIREMENTS
- PHP 8.1
- MYSQL
- NPM
- COMPOSER


### HOW TO DEPLOY 
- Clone the repository to your local machine
- Run <code>composer install</code>
- Run <code>npm install </code>
- Run <code>vite build </code>
- Edit Database Connection in .env file
- Run <code>php artisan migrate</code>
- Run <code>php artisan make:filament-user </code> to create admin user
- Run the app on Laravel Testing Server or Apache / Nginx


### APP SCRFEENSHOTS
[ScreenShots] (https://github.com/prageeth-peiris/support-ticket-system-demo/tree/master/resources/screenshots)

### APP FUNCTIONS
- Guest User can open a ticket
- Guest user can check status of the ticket using ticket reference no
- Support Agent can log into the system and see tickets list
- Support Agent can add many replies to the ticket
- Guest User gets an email whenever a reply is sent
- Guest User can not reply to the ticket



### CREDITS
- FilamentPhp (https://filamentphp.com/)
- Livewire (https://laravel-livewire.com/)
- TailwindCSS (https://tailwindcss.com/)
- Laravel 
