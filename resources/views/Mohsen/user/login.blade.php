
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

<link href="{{{ asset('/Mohsen/Css/bootstrap.min.css') }}}" rel="stylesheet">
  
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="{{{ asset('/Mohsen/Css/nprogress.css') }}}" rel="stylesheet">
    
       <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">


        <link href="{{{ asset('/Mohsen/Css/custom.min.css') }}}" rel="stylesheet">
    
  </head>

  <body class="login">
<button class="btn btn-default source" onclick="new PNotify({&#10;                                  title: 'Sticky Danger',&#10;                                  text: 'Sticky Danger... I\'m not even gonna make a joke.',&#10;                                  type: 'error',&#10;                                  hide: false,&#10;                                  styling: 'bootstrap3'&#10;                              });">Error</button>
@foreach ($errors->all() as $message) 
    <div class="alert alert-danger" align="right">

  <strong>!!!!!!خطا  </strong>
</div>
@endforeach





    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
              <h1>ورود</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="ایمیل" required oninvalid="setCustomValidity('لطفا ایمیل خود را وارد کنید')" 
   oninput="setCustomValidity('')" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="گذرواژه" required="required" oninvalid="setCustomValidity('گذرواژه خود را وارد کنید')" 
   oninput="setCustomValidity('')" />
              </div>
              <div>
              <label>
                                        <input type="checkbox" name="remember"> مرا بخاطر بسپار
                                    </label>
                                    <br>
              <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>ورود
                                </button>
                <a class="reset_pass" href="#">فراموشی رمز ورود</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register">ساخت اکانت </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
             <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

              <h1>عضویت</h1>
            <!--  <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              -->
               <div>
              
              <input type="text" class="form-control" placeholder="نام" name="name" value="{{ old('name') }}"  required="required" oninvalid="setCustomValidity('لطفا نام خود را وارد کنید')" 
   oninput="setCustomValidity('')">
              </div>
              <div>
              
                <input type="email" class="form-control" placeholder="آدرس ایمیل" name="email" value="{{ old('email') }}" required="required" oninvalid="setCustomValidity('لطفا ایمیل خود را وارد کنید')" 
   oninput="setCustomValidity('')">
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="رمز ورد" required="required" oninvalid="setCustomValidity('گذرواژه خود را وارد کنید')" 
   oninput="setCustomValidity('')"/>
              </div>
               <div>
                <input type="password" class="form-control" name="password_confirmation" placeholder="تکرار رمز ورود" required="required" oninvalid="setCustomValidity('گذرواژه خود را وارد کنید')" 
   oninput="setCustomValidity('')" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>عضویت
                                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link"> 
                  <a href="#signin" class="to_register">ورود </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
@if($state='login')
    <script>
  window.location.href="#sigin";
</script>
@endif

@if($state='register')
    <script>
  window.location.href="#signup";
</script>
@endif
  </body>
</html>