<?php
// Initialize variables
$name = $email = $dob = $gender = $blood_group = "";
$degree = [];

$errors = [
    'name' => '',
    'email' => '',
    'dob' => '',
    'gender' => '',
    'degree' => '',
    'blood_group' => ''
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['Name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $dob = $_POST['dob'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $degree = $_POST['degree'] ?? [];
    $blood_group = $_POST['blood_group'] ?? '';

    // Name validation
    if (
        empty($name) ||
        strlen($name) < 2 ||
        !preg_match("/^[A-Za-z]/", $name) ||
        !preg_match("/^[A-Za-z.\- ]+$/", $name)
    ) {
        $errors['name'] = "Enter a valid name.";
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // DOB validation
    if (empty($dob)) {
        $errors['dob'] = "Date of Birth is required.";
    }

    // Gender validation
    if (empty($gender)) {
        $errors['gender'] = "Gender is required.";
    }

    // Degree validation
    if (count($degree) < 2) {
        $errors['degree'] = "Select at least two degrees.";
    }

    // Blood group validation
    if (empty($blood_group)) {
        $errors['blood_group'] = "Blood group is required.";
    }

    // Check if no errors
    $hasError = false;
    foreach ($errors as $err) {
        if (!empty($err)) {
            $hasError = true;
            break;
        }
    }

    if (!$hasError) {
        echo "<p class='success'>Form submitted successfully!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form Validation</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        .form {
            background-color: #a39292ff;
            border: 2px solid black;
            border-radius: 5px;
            width: 60%;
            padding: 20px;
            margin: 30px auto;
        }

        .form-row {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            padding: 6px;
        }

        .options {
            display: flex;
            gap: 10px;
        }

        .btn {
            background-color: #066609ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 400px;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .success {
            color: green;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h2>Registration Form Validation</h2>

<div class="form">
<form method="POST">

    <!-- Name -->
    <div class="form-row">
        <label>Name:</label>
        <input type="text" name="Name" value="<?= htmlspecialchars($name) ?>">
        <span class="error"><?= $errors['name'] ?></span>
    </div>

    <!-- Email -->
    <div class="form-row">
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
        <span class="error"><?= $errors['email'] ?></span>
    </div>

    <!-- DOB -->
    <div class="form-row">
        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?= $dob ?>">
        <span class="error"><?= $errors['dob'] ?></span>
    </div>

    <!-- Gender -->
    <div class="form-row">
        <label>Gender:</label>
        <div class="options">
            <input type="radio" name="gender" value="male" <?= ($gender=="male")?'checked':'' ?>> Male
            <input type="radio" name="gender" value="female" <?= ($gender=="female")?'checked':'' ?>> Female
            <input type="radio" name="gender" value="other" <?= ($gender=="other")?'checked':'' ?>> Other
        </div>
        <span class="error"><?= $errors['gender'] ?></span>
    </div>

    <!-- Degree -->
    <div class="form-row">
        <label>Degree:</label>
        <div class="options">
            <input type="checkbox" name="degree[]" value="ssc" <?= in_array("ssc",$degree)?'checked':'' ?>> SSC
            <input type="checkbox" name="degree[]" value="hsc" <?= in_array("hsc",$degree)?'checked':'' ?>> HSC
            <input type="checkbox" name="degree[]" value="bsc" <?= in_array("bsc",$degree)?'checked':'' ?>> BSc
            <input type="checkbox" name="degree[]" value="msc" <?= in_array("msc",$degree)?'checked':'' ?>> MSc
        </div>
        <span class="error"><?= $errors['degree'] ?></span>
    </div>

    <!-- Blood Group -->
    <div class="form-row">
        <label>Blood Group:</label>
        <select name="blood_group">
            <option value="">Select</option>
            <?php
            $groups = ["A+","A-","B+","B-","O+","O-","AB+","AB-"];
            foreach ($groups as $g) {
                echo "<option value='$g' ".($blood_group==$g?'selected':'').">$g</option>";
            }
            ?>
        </select>
        <span class="error"><?= $errors['blood_group'] ?></span>
    </div>

    <input type="submit" value="Submit" class="btn">

</form>
</div>

</body>
</html>
