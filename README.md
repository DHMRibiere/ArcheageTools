# ArcheageTools
Archeage Tools is a comprehensive PHP driven open source tool. 

# Setup
ArcheAge Tools is build upon NGINX with PHP8.1 and MariaDB. Please enable the ProxyEngine, and allow for .htaccess modrewrite. 
Create an SQL user and database, and point it in config.php. It will detect if the database has been initialized, and, if needed, install it. 

# Access
If there is no database installed, it will install the database AFTER you have entered a superuser and password. If you are running the panel locally, then you can access it on https://localhost/ or http://localhost/
If you installed it on a remote server, you can access it on the URL you have given it. 

# Admin
Once you log in, you will be able to access the admin panel. You can create more users, and deligate permissions to the website. 

# WARNING: DEVELOPMENT STAGE
Everything above will be provided as soon as I can find a better coding IDE. Currently I am using PHPDesigner 8, and it's giving me a headache. 
TODO: 
- Admin Panel
- Discord Bot Panel
- User Panel
- User based Permissions

# FREE TO USE, FREE TO MODIFY
MIT License

Copyright (c) 2023 - Archeage Tools - DHMRibiere

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
