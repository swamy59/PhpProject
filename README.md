This is simple Php Login Project for Dockerization
--------------------------------------------------
Below changes has to be made in order to execute this on your system.
1. Change the db_host, dbuser, password, DB Name and table name in Dockerfile and db_connection file according to your DB, Here I have used AWS RDS and connected to its endpoint.
2. Insert few values into your table manually to validate login
Use Below Commands and simply run below commands
1. docker build -t college:v1 .
2. docker run -itd --name cont1 -p 81:80 college:v1

Finally access your application on port 81
