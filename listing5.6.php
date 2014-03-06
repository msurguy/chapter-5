// app/routes.php
Route::get('login', 'LoginController@showLogin');
Route::post('login', 'LoginController@processLogin');			

// app/controllers/LoginController.php
class LoginController extends BaseController {				

  public function showLogin()
  {
    return View::make('login');
  }

  public function processLogin()
  {
    $username = Input::get('username');
    $password = Input::get('password');
    if ($username === 'prince' && $password === 'c@spiAN') {
      return 'Access granted!';
    } else {
      return 'Access denied! Wrong username or password.';
    }
  }
}

// app/views/login.blade.php
<form action="login" method="post">					
  Username: 									
  <input type="text" name="username"><br>					
  Password: 									
  <input type="password" name="password">					
  <input type="submit" value="Login">					
</form>
