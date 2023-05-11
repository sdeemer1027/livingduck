
Project: Living Duck Website

Description: A website for a fictional company that provides information about ducks and their habitats.nThe main function is about a Virtual Pet Duck you should <BR>
feed him - play with him<br> 
 to keep him healthy and happy 


Steps :
Clone this repository <br>
create a database named livingduck <br>
if you need to copy the .env.example to .env<BR>
Run <BR>
composer Install <br>
npm install<br>
php artisan migrate:fresh --seed<br>
npm run dev<br>




Features:

Database schema:
users table seeded with one demo user<br>
email : demo@demo.com<br>
password : password<br>
virtual_pet_ducks Not seeded and empty <br>
When you visit the duck on first pass it will create a duck and start his life

every 10 seconds that pass he will grow hungry and become less happy 
while on that page do not forget to feed him and play with him 
if you just wait 20 to 30 seconds and reload the page you will see he becomes more hungry and less happy 

