
Project: Living Duck Website

Description: A website for a fictional company that provides information about ducks and their habitats.nThe main function is about a Virtual Pet Duck you should <BR>
feed him - pet him <br> 
feed him - play with him<br> 
 to keep him healthy and happy 

Features:

Home page with information about the company and its mission
About page with information about the company
Blog page with a list of articles about ducks and their habitats
Article detail page with the full text of the article
Contact page with a form for sending a message to the company
Database schema:

articles table with columns for id, title, body, author, and image
Routes:
<ul>
<li>GET / - Home page</li>
<li>GET /about - About page</li>
<li>GET /blog - Blog page</li>
<li>GET /blog/{id} - Article detail page</li>
<li>GET /contact - Contact page</li>
<li>POST /contact - Send message</li>
</ul>
Folder Structure:

- app/<br>
-- Http/<br>
--- Controllers/<br>
---- HomeController.php<br>
---- AboutController.php<br>
---- BlogController.php<br>
---- ContactController.php<br>
-- Requests/<br>
--- ContactRequest.php<br>
-- Models/<br>
--- Article.php<br>
- resources/<br>
-- views/<br>
--- home.blade.php<br>
--- about.blade.php<br>
--- blog/<br>
---- index.blade.php<br>
---- show.blade.php<br>
--- contact.blade.php<br>
- routes/<br>
-- web.php<br>
- database/<br>
-- migrations/<br>
--- 2023_05_10_000000_create_articles_table.php<br><br>
