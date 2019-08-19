<?php
use App\Cosme;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
    return view('hello/index');
});


Route::get('nikibi',function(){
    return view('hello/nikibi');
});

Route::get('detail',function(){
    $cosmes = Cosme::orderBy('created_at','desc')->get();
    return view('hello/detail',['cosmen' => $cosmes]);
});

Route::post('/detail', function (Request $request) {
     //バリデーション
     $validator = Validator::make($request->all(), [
        'name' => 'required|min:1|max:255',
        'title' => 'required|min:1|max:255',
        'text' => 'required|min:3|max:255',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/detail')
            ->withInput()
            ->withErrors($validator);
    }
    //Eloquentモデル
    $cosmes = new Cosme;
    $cosmes->name = $request->name;
    $cosmes->value = $request->value;
    $cosmes->title = $request->title;
    $cosmes->text = $request->text;
    $cosmes->save(); 
return redirect('/detail')->with('cosmes');
});




Route::get('detail',function(){
    return view('hello/detail');
});

// Route::get('detail',function(){
//     $details = Detail::orderBy('created_at', 'asc')->get();
//     return view('hello/detail',['detail' => $details]);
// });