Operation of Notebuster

The project aims to develop a web application that works like Evernote.  
•	Used PHP to create maintainable code and MySQL for database design and development 
•	Call JavaScript & jQuery to control content like note content after pressing the del button.  
• Designed UI using HTML5, CSS3, jQuery, AJAX, and JavaScript 
•	CRUD features on both accounts and notes section. 
•	Involved in all the stages of Software Development Life Cycle


Below passages show introduction to each files
=============================================
HTML file
index.html- registration page user interface
login.html- login page
=============================================
JavaScript file

login.js	
after login, 
1.	send credential to login.php
2.	active getVerify(), if login, we should pass the user to addnote.php, where a platform to add/delete, edit note

addNote.js	
1.	control the logic of addnote.php, which is a user interface to note management platform
2.	CRUD and presentation of the note are controlled from here use for loop to generate html code that presents the notes and buttons underneath in a dynamic way
js.js	1.	data validation in capital letter, password length, confirm password check
2.	fetch of verified data to register.php by using a POST method
3.	writing a greeting message with username, so getusername() first fetch a request to getUsername.php, a PHP that retrieves the username from the database, and then getusername() pass the username to success to do a simple amendment on greeting msg and print it out
==============================================

PHP file
connect.php	
it is a PDO that connect the database

login.php	
1.	Filter the incoming message
2.	validate if there is any matching email and password in the database, if match, throwback message to login.js
3.	if verification success, assign an email to the session 

addnote.php	
user is bought from login.js, all verified as a user.
•	This is a platform to manage your notes. It shows an HTML interface for the user. The addNote.js control buttons’ logic
•	PHP part of the code open session and verify the session validity

Register.php	
1.	filter the incoming msg
2.	validate if there is any matching email in the database before inserting credentials to the database
3.	writing a greeting message with username, so getusername() first fetch a request to getUsername.php, a PHP that retrieves username from the database, and then getusername() pass the username to success to do simple amendment on greeting msg and print it out

getUsername.php	
1.	after receiving a request from js.js, use SQL command to inquire the database for username
2.	send username after JSON encode

throwNote.php	
PHP part verify the session is correct, then starts. this page receive a message from addNote.js, line 78, a fetch function active after the save button is pressed, then we throw newly created note to db, and reply 

updateNote.php	
session verification and then find the matching note to update

Logout.php	
Log out and end the session

getNote.php	
1. to retrieve existing id and content by searching notes all under the email in session
2. throwback the notes in [ ] to loadNotes() in addNote.js, where raise the request

DeleteNote.php	
delete the note according to the id received vs. id in the database
