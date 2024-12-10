# LV Webtechnologien Semesterprojekt
Hotel Website (Room Booking, User Management, ...)
(HTML; CSS; PHP)

---

For Local Database initialization:
1. Start Local Apache Server
2. Change database info in "data/dbaccess.php" ($user, $password)
3. Import the db/schema/initial.php file
4. Verify the data (e.g. SELECT * FROM userdata;)

Activate GD-Extension in php.ini (to enable image rescaling functions)
1. Open php.ini (e.g.: "..\xampp\php" or "../MAMP/bin/php/php8.2.0/bin/php.ini")
2. Search "extension=gd" or "extension=gd2"
3. Remove the Semicolon ";" in front of "extension=gd" or "extension=gd2"
4. Save the php.ini file

admin User-Login:

E-Mail: 'admin@admin.com'\
Password: 'mango'
