<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS Project on Hotel Management</title>
</head>
<body>
    <h1>DBMS Project on Hotel Management</h1>

    <h2>Introduction</h2>
    <p>This project is a comprehensive hotel management system developed as part of a database management system (DBMS) course. The application is built using the LAMP stack (Linux, Apache, MySQL, PHP) and phpMyAdmin for database management. It includes various functionalities to manage different aspects of a hotel, such as customer management, room management, employee management, and amenities management.</p>

    <h2>Table of Contents</h2>
    <ul>
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#technologies-used">Technologies Used</a></li>
        <li><a href="#setup-instructions">Setup Instructions</a></li>
        <li><a href="#project-structure">Project Structure</a></li>
        <li><a href="#screenshots">Screenshots</a></li>
        <li><a href="#contributing">Contributing</a></li>
        <li><a href="#license">License</a></li>
    </ul>

    <h2 id="features">Features</h2>
    <ul>
        <li><strong>Customer Management</strong>: Add, update, and delete customer information.</li>
        <li><strong>Room Management</strong>: Manage room availability, bookings, and details.</li>
        <li><strong>Employee Management</strong>: Handle employee records and their responsibilities.</li>
        <li><strong>Amenities Management</strong>: Manage hotel amenities such as catering, rooms, and other facilities.</li>
        <li><strong>Authentication</strong>: Separate login portals for managers, receptionists, and staff.</li>
    </ul>

    <h2 id="technologies-used">Technologies Used</h2>
    <ul>
        <li><strong>LAMP Stack</strong>:
            <ul>
                <li><strong>Linux</strong>: Operating system.</li>
                <li><strong>Apache</strong>: Web server.</li>
                <li><strong>MySQL</strong>: Relational database management system.</li>
                <li><strong>PHP</strong>: Server-side scripting language for backend development.</li>
            </ul>
        </li>
        <li><strong>phpMyAdmin</strong>: A free and open-source administration tool for MySQL and MariaDB.</li>
        <li><strong>HTML/CSS</strong>: Frontend development.</li>
        <li><strong>JavaScript</strong>: Client-side scripting for enhanced user interactions.</li>
    </ul>

    <h2 id="setup-instructions">Setup Instructions</h2>
    <p>To set up this project locally, follow these steps:</p>
    <ol>
        <li><strong>Clone the repository</strong>:
            <pre><code>git clone https://github.com/FarshanaFathima/hotel-management-system.git
cd hotel-management-system</code></pre>
        </li>
        <li><strong>Set up the database</strong>:
            <ul>
                <li>Open phpMyAdmin.</li>
                <li>Create a new MySQL database.</li>
                <li>Import the provided SQL file (<code>database.sql</code>) into your new database via phpMyAdmin's import feature.</li>
            </ul>
        </li>
        <li><strong>Configure the project</strong>:
            <ul>
                <li>Update the database configuration in <code>db_config.php</code> with your database credentials.</li>
            </ul>
        </li>
        <li><strong>Run the project</strong>:
            <ul>
                <li>Ensure you have a local server running (e.g., XAMPP, WAMP).</li>
                <li>Place the project folder in the server's root directory (e.g., <code>htdocs</code> for XAMPP).</li>
                <li>Access the project via <code>http://localhost/hotel-management-system</code>.</li>
            </ul>
        </li>
    </ol>

    <h2 id="project-structure">Project Structure</h2>
    <pre><code>hotel-management-system/
├── AboutUS.html
├── HomeMain.php
├── MH.css
├── MR.css
├── ManagerAmenities.php
├── ManagerCaterers.php
├── ManagerCustomer.php
├── ManagerEmployee.php
├── ManagerHome.php
├── ManagerHotel.php
├── ManagerLogin.php
├── ManagerRoom.php
├── Managerlo.css
├── New Text Document.txt
├── RH.css
├── RR.css
├── ReadCaterersM.php
├── ReadCustomerM.php
├── ReadCustomerR.php
├── ReadEmployeeM.php
├── ReceptionAmenities.php
├── ReceptionCaterer.php
├── ReceptionCustomer.php
├── ReceptionHome.php
├── ReceptionHotel.php
├── ReceptionLogin.php
├── ReceptionRoom.php
├── Receptionlo.css
├── Receptionlog.css
├── SH.css
├── SR.css
├── StaffAmenities.php
├── StaffHome.php
├── StaffLogin.php
├── StaffRoom.php
├── Stafflog.css
├── WriteCustomerR.php
├── assets/
│   ├── beach1.jpg
│   ├── beach2.jpg
│   ├── buffedi.jpg
│   ├── buffet.jpg
│   ├── castle.jpg
│   ├── cater.jpg
│   ├── door.jpg
│   ├── dubai1.jpg
│   ├── food.jpg
│   ├── grandstairs.jpg
│   ├── home.jpg
│   ├── homema.css
│   ├── lobby.jpg
│   ├── lobbyan.jpg
│   ├── masonlobby.jpg
│   ├── meetingdin.jpg
│   ├── oberoi.jpg
│   ├── pinkblue.jpg
│   ├── roofswim.jpg
│   ├── room1.jpg
│   ├── room3.jpg
│   ├── room4.jpg
│   ├── roomtv.jpg
│   ├── sea.jpg
│   ├── searesort.jpg
│   ├── step.jpg
│   ├── swimtwo.jpg
│   ├── towel.jpg
│   ├── traditional.jpg
├── m_removecat.php
├── m_removecust.php
├── m_removecust1.php
├── m_removeemp.php
├── m_removeemp1.php
├── m_writecaterer1.php
├── m_writecaterer2.php
├── m_writecaterers.php
├── m_writecust.php
├── m_writecust1.php
├── m_writecust2.php
├── m_writeemp.php
├── m_writeemp1.php
├── m_writeemp2.php
├── r_removecust.php
├── r_removecust1.php
├── try.php</code></pre>

    <h2 id="screenshots">Screenshots</h2>
    <p><!-- Add screenshots of your project here if available --></p>

    <h2 id="contributing">Contributing</h2>
    <p>Contributions are welcome! Please fork this repository and submit a pull request with your changes. Ensure your code adheres to the project's coding standards.</p>

    <h2 id="license">License</h2>
    <p>This project is licensed under the MIT License - see the <a href="LICENSE">LICENSE</a> file for details.</p>
</body>
</html>
