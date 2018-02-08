# Mini Project

Name of the project: Bloodbank Management System

Description:
An application designed to maintain blood bank inventory system which consists of blood donation input output and processed/ unprocessed blood data.It provides interactive and user friendly environment so that users can easily access blood units whenever in need.Also, regular events being organised by the bloodbank in order to promote blood donation and help people save more lives.This application is a great initiative being taken to solve the problems faced by many blood bank websites and integrate more add-on functionalities.

Scope of the project:
1. Routine blood transfusion
2. Emergency issue of blood
3. Management of  unused units
4. Management of database including details of donors,acceptors and hospitals
5. Organising events regularly to promote blood donation
6. Notifying the donors in case of emergency
7. Admin has been given the authority to add, update, delete the database.
8. Admin can also generate pdfs related to registered donors,events organised,for data analytics.

Database Design and Structure:
There are have mainly 5 collections made which are blood,eventr,events,org and users.
1. Blood
   This collection includes data related to blood units.The structure is as -
   {"_id":{"$oid":"57d88b53981c5054d5718158"},"Blood-group":"A+","no_of_units":94,"b_id":"Ap"}
   
2. Eventr
   This collection includes data related to  users who have registered for variuos blood donation camps/events.The structure is as-
   {"_id":{"$oid":"57e5342cfe862fd4098b4568"},
"firstname":"Shara",
"lastname":"Kulkarni",
"age":"34",
"gender":"Female",
"address":"Bibwewadi,Pune",
"email":"shara@gmail.com",
"mobile":"8989234567",
"b_grp":"AB+",
"event_no":"4"} 

3. Events
   This collection provides information about the upcoming events so that eligible donors can register for interested ones.The structre is as-
   {"_id":{"$oid":"5809bdf4c320b928d538c75d"},
   "cname":"Donate!",
   "date":"25-10-2016",
   "place":"Fergusson College,Pune",
   "time":"10:00am - 6:00pm",
   "sponsor":"FC Social group",
   "event_no":1.0}
   
4. Org
   This collection is being maintained at the admin side to keep a track of organised events and generate data analytics reports.It's an embedded one and the format is as follows-
   {"_id":{"$oid":"57ef978f2f879fec7323a5e9"},
"expireAt":{"$date":"2016-10-25T11:30:00.000Z"},
"events":{"cname":"Come and experience something new!Donate blood",
"place":"Fergusson College,Pune",
"date":"25-9-2016",
"time":"12:00am-6:00pm",
"sponsor":"Fergusson College","t_n_d":"200","no":"200"},
"units":{"ap":"50","an":"5","bp":"50","bn":"6","op":"40","on":"9","abp":"30","abn":"10"}}

5. User
   This is a collection formed to maintain the users data.The structure is-
   {"_id"{"$oid":"57eb4d42fe862f470a8b4567"},
"firstname":"shra",
"lastname":"majali",
"age":"24",
"gender":"Female",
"address":"pict,pune",
"email":"shra@gmail.com",
"mobile":"9987657843",
"b_grp":"B+"}

HARDWARE REQUIREMENTS FOR PRESENT PROJECT:
PROCESSOR:Intel Dual Core i3
RAM : 2 GB
HARD  DISK:10 GB
 
SOFTWARE REQUIREMENTS FOR PRESENT PROJECT:
OPERATING SYSTEM: Ubuntu 14.04 64bit OS
FRONT  END: HTML,CSS,Javascript,Bootstrap
SERVER SIDE SCRIPT: PHP
DATABASE: MONGODB 3.2 64BIT VERSION

Steps to run the project:
1.Restore the database
Use the mongorestore command to restore the bloodbank database which is present in database_files folder.

b)Localhost
Copy all the files into the var/www/html folder i.e in the default root folder of the web server.

c)Run
open the index1.php to start the project
