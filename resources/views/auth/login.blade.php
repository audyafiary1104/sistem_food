<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom fonts for this template-->
    <link href="{{asset('templates/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style>
        .buttonload {
            background-color: #4CAF50;
            /* Green background */
            border: none;
            /* Remove borders */
            color: white;
            /* White text */
            padding: 12px 24px;
            /* Some padding */
            font-size: 16px;
            /* Set a font-size */
        }

    </style>
    <!-- Custom styles for this template-->
    <link href="{{asset('templates/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <form class="user" role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username ...">
                                        </div>
                                        <div class="alert alert-danger" role="alert" id="email" hidden>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="alert alert-danger" role="alert" id="passsword" hidden>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>

                                        <a href="#" id="login-btn" class="btn btn-primary btn-user btn-block">
                                        <i id="muter_muter"class="fa fa-circle-o-notch fa-spin" ></i>

                                            Login
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('templates/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('templates/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('templates/js/sb-admin-2.min.js')}}"></script>
    <script>
        $(document).ready(function (params) {
            $('#muter_muter').hide();

            $('#login-btn').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{ route('login') }}',
                data: {
                    "_token" : "{{ csrf_token() }}",
                    "email" : $('#exampleInputEmail').val(),
                    "password" : $('#exampleInputPassword').val(),
                },
                beforeSend: function () {
                        $('#muter_muter').show();
                },
                success: function(data) {
                    $('#muter_muter').hide();
                    if (data.failed) {
                        if (data.failed.email) {
                                $('#email').text((data.failed.email[0]));   
                                $('#email').removeAttr('hidden');   
                                setTimeout(function(){ 
                                 $('#email').fadeOut();
                                }, 3000);
                            }
                         if (data.failed.password) {
                                $('#passsword').text(data.failed.password[0]);
                                $('#passsword').removeAttr('hidden');
                                setTimeout(function(){ 
                                    $('#passsword').fadeOut();
                                }, 3000);

                            }
                    } else if(data.successs) {
                        window.location.href = "{{route('dashboard')}}";
                    }else if(data.email){
                        $('#email').text(data.email);   
                        $('#email').removeAttr('hidden');   
                        setTimeout(function(){ 
                         $('#email').fadeOut();
                         }, 3000);
                    }else if(data.password){
                        $('#passsword').text(data.password);
                          $('#passsword').removeAttr('hidden');
                            setTimeout(function(){ 
                        $('#passsword').fadeOut();
                                }, 3000);
                    }
                },
            });
        });
    });
       
    </script>
</body>

</html>
