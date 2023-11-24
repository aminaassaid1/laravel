<?php
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function (Request $Request ) {
//     return [
//         "name" => $Request->input('name', 'amina assaid'),
//         "Article" => "Article 1"
//     ];
// });

Route ::prefix('/blog')->name('blog.')->group(function (){
    Route::get('/', function (Request $Request ) {


            // Avec cette classe on a la possibilité d'initialiser un nouvel article en faisant:
        // $post = new \App\Models\Post();
        // $post->title = 'Mon troiseme article';
        // $post->slug = 'mon-troiseme-article';
        // $post->content='mon contenu';
        // $post->save();
        // return $post;


        // $post = \App\Models\Post::all('id' , 'title');
        // dd($post->first());

        // $post = \App\Models\Post::find(1);
        // dd($post);
        // return $post ;


        //     paginations
        // $post = \App\Models\Post::paginate(1);
        // dd($post);
        // return $post ;

        // $post = \App\Models\Post::where('id' , '>' , 0)->limit(1)->get();
        // dd($post);
        // return $post ;


            // update les donneres
        // $post = \App\Models\Post::find(1);
        // $post-> title = "noveaux title";
        // $post->save();
        // return $post ;

        $post = \App\Models\Post::find(1);
        $post-> title = "noveaux title";
        $post->();
        return $post ;



        return [
            "link" => \route('blog.show' , ['slug' => 'article' , 'id'=>13],)
        ];
    })->name('index');

    Route::get('/{slug}-{id}' , function (string $slug , string $id , Request $Request){
        return [
            "slug" => $slug ,
            "id" => $id ,
            'name' => $Request->input ('name'),
        ];
    })->where([
        'id'=> '[0-9]+' ,
        'slug'=> '[a-z0-9\-]+'
    ])->name('show');
});




