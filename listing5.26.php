class AccountsController extends BaseController
{
  public function __construct()
  {
    $this->beforeFilter('auth', array('except' => 'showLogin'));
  }
  ...
}
