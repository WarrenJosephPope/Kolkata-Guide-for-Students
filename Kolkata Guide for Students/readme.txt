Go to your XAMPP folder. Click on xampp_start to get the server running.

Open your browser and type "localhost" and click on phpmyadmin. Create a database called "kgs". Open the database and click on
the "Import" tab and import "database.sql" from the Final Project folder.

Go to the XAMPP/htdocs folder. Copy and paste the KGS folder into this folder and you can run it from your browser by typing 
"localhost/KGS/". To stop the server safely, click on xampp_stop.

For php mail functions to work, please do the following
1) Go to your XAMPP/PHP folder, create a backup of the php.ini folder and open the original php.ini in notepad. Using the 
   Find function, look for "[mail function]". 
   Replace the [mail function] section with the following code : 

; For Win32 only.
; http://php.net/smtp
SMTP=smtp.gmail.com
; http://php.net/smtp-port
smtp_port=587

; For Win32 only.
; http://php.net/sendmail-from
sendmail_from = kolkataguideforstudents@gmail.com

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "\"C:\Users\ASUS\Desktop\XAMPP\sendmail\sendmail.exe\" -t"

; Force the addition of the specified parameters to be passed as extra parameters
; to the sendmail binary. These parameters will always replace the value of
; the 5th parameter to mail().
;mail.force_extra_parameters =

; Add X-PHP-Originating-Script: that will include uid of the script followed by the filename
mail.add_x_header=Off

; The path to a log file that will log all mail() calls. Log entries include
; the full path of the script, line number, To address and headers.
;mail.log =
; Log mail to syslog (Event Log on Windows).
;mail.log = syslog

2) In the php.ini file under the [mail function] section, you need to change the sendmail_path to your own sendmail path.
   You can replace the path till \XAMPP\sendmail\sendmail.exe\ and it should work alright.

3) In the XAMPP/sendmail folder, search for sendmail.ini and create a backup of this file.
   Then replace it with the sendmail.ini file found in the Final Project folder.

*NOTE*
	If you don't get any mail even after doing these settings, then most probably due to security reasons, Google has blocked your
	device. If this happens, please email us at kolkataguideforstudents@gmail.com and we will review the activity.