
<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>

    <h2>Student Information Form</h2>

    <form method="POST">

        Name:
        <input type="text" name="name" required>
        <br><br>

        Student ID:
        <input type="text" name="id" required>
        <br><br>

        Email:
        <input type="email" name="email" required>
        <br><br>

        Department:
        <select name="department">
            <option>CSE</option>
            <option>EEE</option>
            <option>BBA</option>
        </select>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>

        Address:
        <textarea name="address"></textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        echo "<h2>Student Information</h2>";

        echo "Name: " . $name . "<br>";
        echo "Student ID: " . $id . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Department: " . $department . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Address: " . $address;
    }
    ?>

</body>
</html>
