##StudentActivityTracker

A program to track students activity by monitoring data based on the activity
of a student and their feeling on difficulty/pleasure per activity and overall.

##Database connection

To make a database work with the S.A.T. you need:
- A MySql database
- A user with basic read-write acces
- Change the file config.sample.inc to configure the program to work with the database.

(info on how to change the sample-file is included in the sample-file)

##User registration and permissions
When a user registers they enter the platform on the lowest level being registered.
- Teacher can change registered -> student
- Admin can change registered -> student & user -> teacher
