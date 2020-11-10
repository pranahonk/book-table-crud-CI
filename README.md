----------------
Book Table CodeIgniter :
----------------

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Book Table is a program to show data table from mysql, also edit data and delete data from mySQl and also i am using bootstrap for view.

  - Create
  - Read
  - Update
  - Delete



### Tech

Book Table uses a number of open source projects to work properly:

* [Codeigniter] - Php based enhanced for web apps!
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [jQuery] - is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers

And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

### Installation

Dillinger requires [php](https://www.php.net/) v5+ to run.

1. Unzip directory into www/ or htdocs/
2. Run the db_1911510996.sql file inside PhpMyAdmin. (this will create the database/table)
3. Update config files:
	application/config/database.php
		- your database host (localhost:3306 is the default usually)
		- username / password
	application/config/config.php
		- Update the base_url with your localhost:port number for Apache/Nginx


All database interactions are available in the messages_model located at
	application/models/buku_model.php
		- There's an example of a select, update, insert, and delete from the database using active record.


Controllers are available in
	/application/controllers/buku.php

View are available in
	/application/views/buku_input|buku_table|buku_update|header|footer.php


### Plugins

Dillinger is currently extended with the following plugins. Instructions on how to use them in your own application are linked below.

| Plugin | README |
| ------ | ------ |
| Dropbox | [plugins/dropbox/README.md][PlDb] |
| GitHub | [plugins/github/README.md][PlGh] |
| Google Drive | [plugins/googledrive/README.md][PlGd] |
| OneDrive | [plugins/onedrive/README.md][PlOd] |
| Medium | [plugins/medium/README.md][PlMe] |




**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [Codeigniter]: <https://codeigniter.com/>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>


   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
