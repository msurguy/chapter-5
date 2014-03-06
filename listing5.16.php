class CoffeeController extends BaseController {
  ...

  public function showDrink($kind)
  {
    return 'Requested kind of coffee drink: '.$kind;
  }

  ...
}
