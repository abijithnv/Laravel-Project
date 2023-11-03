<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
    <script defer src="js/script.js"></script>
</head>

<body>
    <div class="signup-container">


        <div>
            <form class="signup-form" action="/home" method="post" id="form">
                @csrf
                <h2>Sign Up</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" >
                    <p id="nameError" class="error"></p>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                    <p id="emailError" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone">
                    <p id="phoneError" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="place">Place</label>
                    <input type="text" id="place" name="place">
                    <p id="placeError" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="college">College</label>
                    <input type="text" id="college" name="college">
                    <p id="collegeError" class="error"></p>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="5" rows="3"></textarea>
                    <p id="descriptionError" class="error"></p>

                </div>
                <div class="">
                    <label for="fresher">
                        <input type="radio" id="fresher" name="experience" value="fresher">Fresher
                        <p id="fresherError" class="error"></p>
                    </label>
                    <br>
                    <label for="experienced">
                        <input type="radio" id="experienced" name="experience" value="experienced">Experienced
                      
                        <p id="experiencedError" class="error"></p>
                    </label>

                </div>

        </div>
        <div class="signup-button">
            <button type="submit">Sign Up</button>
        </div>
        </form>
    </div>

</body>

</html>