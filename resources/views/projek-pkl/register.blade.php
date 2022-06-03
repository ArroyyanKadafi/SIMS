<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/frontend/stylelr.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="/frontend/fontawesome-free/css/all.min.css">
    <!-- Icon -->
    <link rel="icon" href="/frontend/img/desktop.png" type="image/gif"/>
    <title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title>
</head> 
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">       
            <div class="front">
                    <img src="/frontend/img/y1.jfif" alt="">
                    <div class="text">
                        <span class="text-1">“Your life is as good as your mindset.”</span>
                        <span class="text-2">– NN -</span>
                    </div>
                </div>     
            <div class="back">
                <img class="backImage" src="/frontend/img/bedroom.jfif" alt="">
                <div class="text">
                    <span class="text-1">“The roots of education are bitter, <br> but the fruit is sweet.”</span>
                    <span class="text-2">- Aristotle -</span>
                </div>
            </div>
        </div>

            <!-- Sign In -->
        <div class="forms">
            <div class="form-content">
                <div class="signin-form">
                    <div class="title">Sign In</div>
                        <form action="/login" method="POST">
                            @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror placeholder="Enter your Email" autofocus required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your Password" required>
                        </div>
                        <!-- <div class="text">
                            <a href="#"><b>Forgot Password ?</b></a>
                        </div> -->
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-in-text">Don't have an account ? 
                            <label for="flip"><b>Sign Up Now !</b></label>
                        </div>
                    </div>
                        </form>
                </div>
    
                <!-- Sign Up -->
                <div class="signup-form">
                    <div class="title">Sign Up</div>
                <form action="/register" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password" required>
                        </div>                    
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-up-text">Already have an account ? </b>
                            <label for="flip"><b>Sign In Now !</b></label>
                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <!-- Sweetalert -->
  @include('sweetalert::alert')
  <!-- End Sweetalert -->
</body>
</html>

