class AccountsController extends BaseController
{
  public function __construct()
  {
    $this->beforeFilter('auth', ...);
  }

  public function getShow($id){...}
}
