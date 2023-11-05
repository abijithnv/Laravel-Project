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

    <ul class="nav">
        <li class="nav-item ">
            <br><br><br>
            <a class="nav-link" href="home">Go to Homepage</a>
        </li>
    </ul>

    @if( $message= Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
    @endif
    <div class="signup-container">


        <div>
            <form class="signup-form" action="home" method="post" id="form">
                @csrf
                <h2>Sign Up</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
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
                <div class=" ">Known Languages ?<br>
                                <input type="checkbox" name="languages[]" value="malayalam"> Malayalam 
                                <input type="checkbox" name="languages[]" value="telugu"> Telugu 
                                <input type="checkbox" name="languages[]" value="english"> English 
                                <input type="checkbox" name="languages[]" value="hindi"> Hindi
                                <input type="checkbox" name="languages[]" value="arabic"> Arabic
                            </div>




                <!-- 
                <div class="languages ">
                    Known languages?
                    <br>
                    <label for="malayalam">Malayalam
                        <input type="checkbox" id="malayalam" name="language" value="malayalam">
                        <p id="languageError" class="language-set"></p>
                    </label>&nbsp; Telugu
                    <label for="telugu">
                        <input type="checkbox" id="telugu" name="language" value="telugu">
                        <p id="languageError" class="language-set"></p>
                    </label>&nbsp;English
                    <label for="english">
                        <input type="checkbox" id="english" name="language" value="english">
                        <p id="languageError" class="language-set"></p>
                    </label>&nbsp;Hindi
                    <label for="hindi">
                        <input type="checkbox" id="Hindi" name="language" value="hindi">
                        <p id="languageError" class="language-set"></p>
                    </label>

                </div>
                 -->

        </div>
        <div class="signup-button">
            <button type="submit">Sign Up</button>
        </div>
        </form>
    </div>

</body>

</html>