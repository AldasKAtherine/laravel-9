<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
Reoute::get consultar
post guardar
delete eliminar
put actualizar
*/
/*
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');
    //consilta a base de datos
    // $posts=[
    //     ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
    //     ['id'=>1, 'title'=>'laravel', 'slug'=>'laravel'],
    // ];
    // return view('blog',['posts'=>$posts]);


Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
    // $post = $slug;

    //   return view('post',['post'=>$post]);


*/
Route::controller(PageController::class)->group(function(){
    Route::get('/','home' )->name('home');
    Route::get('blog',  'blog')->name('blog');
    Route::get('blog/{slug}', 'post')->name('post');
  
});
