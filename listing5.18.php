// app/routes.php
Route::get('coffee/{kind}/{size}','CoffeeController@showDrink');

// app/controllers/CoffeeController.php

class CoffeeController extends BaseController {

  public function showDrink($kind, $size)
  {
    return 'Kind of coffee drink: '.$kind.', size: '.$size;
  }
}
