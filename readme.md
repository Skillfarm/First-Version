# Laravel Quickstart - Intermediate - Task List With Authentication

http://laravel.com/docs/quickstart-intermediate
#for login and signup

this code must br change
public function showLoginForm()
    {
        $view = property_exists($this, 'loginView')
                    ? $this->loginView : 'auth.authenticate';

        if (view()->exists($view)) {
            return view($view);
        }

        //return view('auth.login');
    return view ('Mohsen.user.login',['stats'=> 'login']);
    }



 public function showRegistrationForm()
    {
        if (property_exists($this, 'registerView')) {
            return view($this->registerView);
        }

       //return view('auth.register');
        return view ('Mohsen.user.login',['state'=>'register']);
    }