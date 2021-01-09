<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 13 Assignment</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

</head>
    <body>
        <form action="assign13.php" method="POST">
            <h1>Register for Music Lessons</h1>
            <p>* Please enter all the required fields</p>

            <div>
                <h2>Performance Type *</h2>
                <label>Solo</label>
                <input required type="radio" value="Solo" onclick="hidey()" name="performance"><br>
                <label>Duet</label>
                <input required type="radio" value="Duet" onclick="hidey()" name="performance"><br>
                <label>Concerto</label>
                <input required type="radio" value="Concerto" onclick="hidey()" name="performance"><br>
            </div>

            <div class="boxes">
                <h2>Student Info</h2>
                <label>First Name*</label>
                <input required type="text" name="first_name" id="first_name"><br>
                <label>Last Name*</label>
                <input required type="text" name="last_name" id="last_name"><br>
                <label>Student ID*</label>
                <input required type="text" name="student_id" id="student_id"><br>
            </div>

            <div class="student2 hide">
                <h4>Duet Partner Info</h4>
                <label>First Name</label>
                <input type="text" name="first_name_2" id="first_name_2"><br>
                <label>Last Name</label>
                <input type="text" name="last_name_2" id="last_name_2"><br>
                <label>Student ID</label>
                <input type="text" name="student_id_2" id="student_id_2"><br>
            </div>
            
            <br>
            <label>Skill Level*</label>
            <select required id="skill" name="skill">
                <option selected="selected" disabled="disabled" value="">Select Skill Level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Pre-advanced">Pre-Advanced</option>
                <option value="Advanced">Advanced</option>
            </select>
            
            <br>
            <label>Instrument*</label>
            <select required id="instrument" name="instrument">
                <option selected="selected" disabled="disabled" value="">Select Instrument</option>
                <option value="Piano">Piano</option>
                <option value="Voice">Voice</option>
                <option value="String">String</option>
                <option value="Organ">Organ</option>
                <option value="Other">Other</option>
            </select>
            
            <br>
            <label>Location*</label>
            <input required type="text" name="location" id="location">
            
            <br>
            <label>Room Number*</label>
            <input required type="text" name="room" id="room">
            
            <br>
            <h2>Time Slot*</h2>
            <select id="time_slot" name="time_slot" required>
                <option selected="selected" disabled="disabled" value="">Select Time Slot</option>
                <option value="8:00 AM">8:00 AM</option>
                <option value="9:30 AM">9:30 AM</option>
                <option value="11:00 AM">11:00 AM</option>
                <option value="12:30 PM">12:30 PM</option>
                <option value="2:00 PM">2:00 PM</option>
                <option value="3:30 PM">3:30 PM</option>
            </select><br>

            
            <button type="submit" name="register">Register</button>
            <button type="reset" name="reset">Reset</button>
        </form>

        <div id="studentList">
            <table>            
                <tr>
                    <th>Name</th>
                    <th>Instrument</th>
                    <th>Performance</th>
                    <th>Skill</th>
                    <th>Location</th>
                    <th>Room</th>
                    <th>Student ID</th>
                    <th>Time</th>
                </tr>
                
                
                <?php 
                $_SESSION['lines'] = file('data/data.txt');

                if (isset($_SESSION['lines'])) {
                        foreach ($_SESSION['lines'] as $line_num => $line) {
                            echo "<tr>" . html_entity_decode($line) . "</tr>";
                    }
                } 
                ?>
            </table>
        </div>


    <script src="assign13.js"></script>
    </body>
</html>
