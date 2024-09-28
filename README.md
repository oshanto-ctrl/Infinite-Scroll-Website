## Infinite Scroll Project
#### Learned basics a new concept. Contents loads automatically when user scrolls. Like social networks.

## Technology Used
- PHP
- JQuery
- AJAX
- HTML5
- CSS3
- MySQL Database

## Files

#### Index.html
- This file contains the html structure and the Jquery logics to load up the contents.

### Styles.css
- All the container, box, box's contents design are in this file.

### db_connection.php
- This file contains the logic to connect to MySQL Schema for this project with PHP's mysqli_connect()

### build_contents.php
- This is where the lorem ipsum dummy text is used to populate the database on query to api of loripsum website api (https://loripsum.net/api/short). For practice purpose too near to 100 data from them.

### api.php
- This file is for querying the data from DB to json format.

## Database Table Structure
#### DB name: infinite_scroll_db, Table name: posts, columns 3
- id: Auto Increment
- content: text
- date: integer(11)

## Udemy Course of This Project (FROM WHERE I Learned)
#### Link: https://www.udemy.com/course/ajax-project/


## Things to check
- Contest loading as logic set?
- Date format to HH:MM:SS Format.