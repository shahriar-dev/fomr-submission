<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="registration-form-with-validation">
    <title>Registration Form</title>
</head>

<body>

    <body>
        <h1>Registration form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <fieldset>
                <legend>Basic Information</legend>

                <p>
                    <label for="input_firstname">First Name:</label>
                    <input type="text" id="input_firstname" placeholder="First Name" name="firstName" required>
                </p>

                <p>
                    <label for="input_lastname">Last Name:</label>
                    <input type="text" id="input_lastname" placeholder="Last Name" name="lastName" required>
                </p>

                <p>
                    <label for="gender_option">Gender</label>
                    <input type="radio" id="gender_option" name="gender" value="Male">Male</input>
                    <input type="radio" id="gender_option" name="gender" value="Female">Female</input>
                </p>

                <p>
                    <label for="input_dob">Date of Birth:</label>
                    <input type="date" id="input_dob" name="dob" required>
                </p>

                <p>
                    <label for="select_religion">Religion</label>
                    <select name="religion" id="select_religion" value="None">
                        <option>None</option>
                        <option>Muslim</option>
                        <option>Hindu</option>
                        <option>Christian</option>
                    </select>
                </p>
            </fieldset>

            <fieldset>
                <legend>Contact Information</legend>

                <p>
                    <span><label for="input_presentAddress">Present Address:</label></span>
                    <br>
                    <span>
                        <textarea name="presentAddress" id="input_presentAddress" cols="50" rows="5" placeholder="Enter Present Address Here"></textarea>
                    </span>
                </p>

                <p>
                    <span><label for="input_permanentAddress">Permanent Address</label></span>
                    <br>
                    <span><textarea name="permanentAddress" id="input_permanentAddress" cols="50" rows="5" placeholder="Enter Permanent Address Here"></textarea></span>
                </p>

                <p>
                    <label for="input_phonenumber">Phone:</label>
                    <input id="input_phonenumber" type="tel" placeholder="(+88) 0xxxxxxxxxx">
                </p>

                <p>
                    <label for="input_email">Email:</label>
                    <input type="email" id="input_email" placeholder="something@domain.com" name="email" required>
                </p>

                <p>
                    <label for="input_personalWebsite">Personal Website Link:</label>
                    <input id="input_personalWebsite" type="url" placeholder="http://somesite.com" name="url">
                </p>
            </fieldset>

            <fieldset>
                <legend>Account Information</legend>

                <p>
                    <span><label for="input_username">Username:</label></span>
                    <span><input type="text" id="input_username" placeholder="Username" name="username" required></span>
                </p>

                <p>
                    <span><label for="input_username">Username:</label></span>
                    <span><input type="password" id="input_password" placeholder="Password" name="password" required></span>
                </p>

            </fieldset>

            <p>
                <input type="submit"> &nbsp;&nbsp;
                <input type="reset" value="Clear Form">
            </p>

        </form>
    </body>

</html>