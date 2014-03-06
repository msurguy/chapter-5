// app/routes.php
Route::resource('books','BooksController');

// app/controllers/BookController.php
class BooksController extends \BaseController {
  ...
  public function show($id){
    return 'Showing a book with ID '.$id;
  }
  ...
}
