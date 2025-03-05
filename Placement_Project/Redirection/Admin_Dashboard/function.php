<?php
// Simulate data for each section
function show_student_management() {
    echo '<table>';
    echo '<tr><th>Student ID</th><th>Name</th><th>Email</th><th>Course</th></tr>';
    echo '<tr><td>001</td><td>John Doe</td><td>johndoe@example.com</td><td>Computer Science</td></tr>';
    echo '<tr><td>002</td><td>Jane Smith</td><td>janesmith@example.com</td><td>Mechanical Engineering</td></tr>';
    echo '</table>';
}

function show_job_management() {
    echo '<table>';
    echo '<tr><th>Job Title</th><th>Company</th><th>Location</th><th>Deadline</th></tr>';
    echo '<tr><td>Software Engineer</td><td>ABC Corp</td><td>New York</td><td>2025-05-30</td></tr>';
    echo '<tr><td>Data Scientist</td><td>XYZ Ltd</td><td>San Francisco</td><td>2025-06-15</td></tr>';
    echo '</table>';
}

function show_placement_management() {
    echo '<table>';
    echo '<tr><th>Student Name</th><th>Company</th><th>Job Title</th><th>Placement Date</th></tr>';
    echo '<tr><td>John Doe</td><td>ABC Corp</td><td>Software Engineer</td><td>2025-06-01</td></tr>';
    echo '<tr><td>Jane Smith</td><td>XYZ Ltd</td><td>Data Scientist</td><td>2025-07-01</td></tr>';
    echo '</table>';
}

function show_event_management() {
    echo '<table>';
    echo '<tr><th>Event Title</th><th>Date</th><th>Location</th><th>Status</th></tr>';
    echo '<tr><td>Placement Drive</td><td>2025-03-15</td><td>Campus Auditorium</td><td>Upcoming</td></tr>';
    echo '<tr><td>Mock Interviews</td><td>2025-04-01</td><td>Online</td><td>Upcoming</td></tr>';
    echo '</table>';
}
?>
