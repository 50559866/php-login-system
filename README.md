xxamp
Create a database by starting apache and mysql then create a table in it always start with id and tick AI to autogenerate the id(this separates it) length of 5
Varchar length is 255 as the default
Create table before any sort of connections
Name tables and databases appropriately
Save as a php file not a html otherwise wont run
Htdocs folder takes you to the place where u need to put ur web files
Argument one is always localhost, 2 is root, 3 is blank:
     $con = mysqli_connect("localhost", "root", "", "courses") #mysql lite
Echo in php is basically print
Each text box added to form must have a unique name
Create a variable for the date 
Names of table colums:
     $query = "INSERT into 'users' (username, password, email, create_datetime)
