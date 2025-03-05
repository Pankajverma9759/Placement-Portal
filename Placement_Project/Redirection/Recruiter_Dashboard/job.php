<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Dashboard</title>
    <link rel="stylesheet" href="job.css">
</head>
<body>

    <div class="container">
        <header>
            <h1>Recruiter Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="#job-post">Job Post</a></li>
                    <li><a href="#share-jd">Share JD</a></li>
                    <li><a href="#list-students">List of Students</a></li>
                    <li><a href="#interview-schedule">Interview Scheduling</a></li>
                </ul>
            </nav>
        </header>

        <div class="content">
            <section id="job-post" class="section">
                <h2>Job Post</h2>
                <form>
                    <label for="job-title">Job Title:</label>
                    <input type="text" id="job-title" placeholder="Enter job title" required><br><br>
                    <label for="job-location">Location:</label>
                    <input type="text" id="job-location" placeholder="Enter job location" required><br><br>
                    <label for="job-description">Job Description:</label><br>
                    <textarea id="job-description" rows="4" placeholder="Enter job description" required></textarea><br><br>
                    <button type="submit">Post Job</button>
                </form>
            </section>

            <section id="share-jd" class="section">
                <h2>Share Job Description ( Optional )</h2>
                <form>
                    <label for="jd-file">Upload JD File:</label>
                    <input type="file" id="jd-file" required><br><br>
                    <button type="submit">Share JD</button>
                </form>
            </section>

            <section id="list-students" class="section">
                <h2>List of Students</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>Applied</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>Not Applied</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="interview-schedule" class="section">
                <h2>Interview Scheduling</h2>
                <form>
                    <label for="student-name">Student Name:</label>
                    <input type="text" id="student-name" placeholder="Enter student name" required><br><br>
                    <label for="interview-date">Interview Date:</label>
                    <input type="date" id="interview-date" required><br><br>
                    <label for="interview-time">Interview Time:</label>
                    <input type="time" id="interview-time" required><br><br>
                    <button type="submit">Schedule Interview</button>
                </form>
            </section>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>


