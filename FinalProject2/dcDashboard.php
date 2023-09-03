<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Portal</title>
</head>
<body>
    <header>
        <h1>Doctor's Portal</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Appointments</a></li>
                <li><a href="#">Patients</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Upcoming Appointments</h2>
            <ul>
                <li>
                    <h3>Patient Name</h3>
                    <p>Appointment Date: <time datetime="2023-03-15T09:00">March 15, 2023 at 9:00 AM</time></p>
                    <p>Reason: Consultation</p>
                </li>
                <li>
                    <h3>Patient Name</h3>
                    <p>Appointment Date: <time datetime="2023-03-20T11:00">March 20, 2023 at 11:00 AM</time></p>
                    <p>Reason: Follow-up</p>
                </li>
            </ul>
        </section>
        <section>
            <h2>Patient List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Last Visit Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>32</td>
                        <td>Male</td>
                        <td><time datetime="2023-02-28">February 28, 2023</time></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Jane Doe</td>
                        <td>28</td>
                        <td>Female</td>
                        <td><time datetime="2023-03-05">March 5, 2023</time></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Doctor's Portal. All rights reserved.</p>
    </footer>
</body>
</html>
