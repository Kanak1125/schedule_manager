# schedule_manager
Simple schedule manager using HTML, CSS, and PHP*

<h1>Prerequisites</h1>
<ul>
  <li>Xampp</li> 
</ul>

<h1>Steps to follow</h1>
<ul>
  <li>Run Xampp control panel</li>
  <li>Run Apache server and MySQL server</li>
  <li>Run this query and create a database named schedule_manager through phpmyadmin:<br>
  Create database schedule_manager;
  </li>
  <li>
    Run this query and create a table named routine:<br>
    Create TABLE routine (
    Period int AUTO_INCREMENT PRIMARY KEY,
    Subject_name varchar(100),
    Teacher varchar(50),
    Start_time time,
    End_time time
    );
  </li>
</ul>
