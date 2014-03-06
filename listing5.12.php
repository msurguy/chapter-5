class ContactController extends BaseController {

  public function showForm()
  {
    return View::make('contact');
  }

  public function processForm()
  {
    $email 	  	= Input::get('email');
    $name 	  	= Input::get('name');
    $message	= Input::get('message');

    ...

    return View::make('thanks');
  }

}
