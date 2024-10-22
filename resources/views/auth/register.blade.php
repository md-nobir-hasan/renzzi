<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

    <style>
        .password,.comfirm-password{
            position: relative;
        }
        .password .eye, .comfirm-password .eye{
            position: absolute;
            top: 10px;
            right: 22px;
            font-size: 25px;
        }
    </style>
<body>



<section class="vh-100" style="background-color: #508bfc;">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">

                    <div class="card-body p-4">
                        <h1 class="text-center">Registration</h1>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                            <div class="">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                            </div>
                            <!-- Phone -->
                            <div class="">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" required>
                            </div>
                            <!-- Address -->
                            <div class="">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}" required>
                            </div>
                            <!-- Email Address -->
                            <div class="">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                            </div>
                            <!-- Password -->
                            <div class="">
                                <label for="password" class="form-label">Password</label>
                               <div class='password'>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                <i class="fa-solid fa-eye eye"></i>
                                <i class="fa-solid fa-eye-slash eye"></i>
                               </div>
                            </div>
                            
                            <!-- Confirm Password -->
                            <div class="pb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <div class='comfirm-password'>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                                    <i class="fa-solid fa-eye eye"></i>
                                    <i class="fa-solid fa-eye-slash eye"></i>
                                    
                                </div>
                                <a class="" href="{{ route('login') }}">Already registered?</a>
                            </div>

                            <div class="d-grid gap-1 col-5">
                                <button class="btn btn-primary btn-lg" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $('.fa-eye').hide();
    
    $('.fa-eye-slash').on('click',function(){
        $(this).hide();
        $(this).parent().find('.fa-eye').show();
        $(this).parent().find('input').attr('type','text');
    })
    
    $('.fa-eye').on('click',function(){
        $(this).hide();
        $(this).parent().find('.fa-eye-slash').show();
        $(this).parent().find('input').attr('type','password');
    })
</script>

</body>
</html>



