
Project: Living Duck Website

Description: A website for a fictional company that provides information about ducks and their habitats.

Features:

Home page with information about the company and its mission
About page with information about the company
Blog page with a list of articles about ducks and their habitats
Article detail page with the full text of the article
Contact page with a form for sending a message to the company
Database schema:

articles table with columns for id, title, body, author, and image
Routes:

GET / - Home page
GET /about - About page
GET /blog - Blog page
GET /blog/{id} - Article detail page
GET /contact - Contact page
POST /contact - Send message
Folder Structure:

app/
Http/
Controllers/
HomeController.php
AboutController.php
BlogController.php
ContactController.php
Requests/
ContactRequest.php
Models/
Article.php
resources/
views/
home.blade.php
about.blade.php
blog/
index.blade.php
show.blade.php
contact.blade.php
routes/
web.php
database/
migrations/
2023_05_10_000000_create_articles_table.php
