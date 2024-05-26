<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--     <title>DBMS Project on Hotel Management</title> -->
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
</body>
</html>
