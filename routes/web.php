<?php

use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Tag;
use Carbon\Carbon;
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

Route::get('/', function () 
{
   return view('welcome');
});

// Route::get('/about', function () 
// {
//    return "Hi About Page";
// });

// Route::get('/contact', function () 
// {
//    return "Hi I'm Contact";
// });


// Route::get('/post/{id}/{name}', function($id, $name)
// {

// 	return "This is the number " . $id	.	" and the name is "	. $name;
// });

// Route::get('admin/posts/example', array('as' => 'admin.home',	function(){
// 	$url = route('admin.home');

// 	return "this url is ". $url;
// }));

/* DB Raw Queries*/
//Route::get('/post/{id}','PostsController@index');


// Route::get('/insert',function (){
// 	DB::insert('insert into posts(title, content, is_admin) values (?,?,?)'	,	['PHP  with Laravel', 'Laravel Is Good', 1]);
// });

// Route::get('/read', function(){
// 	$results = DB::select('select * from posts where id=?'	,	[1]);

// 	foreach($results as $results)
// 	{
// 		echo $results->title;
// 	}
// });

// Route::get('/update', function(){
// 	$updated = DB::update('update posts set title="Update Title" where id=?', [1]);

// 	return $updated;
// });

// Route::get('/delete', function(){
// 	$deleted = DB::delete('delete from posts where id=?', [1]);

// 	return $deleted;
// });


/*Eloquent ORM*/

// Route::get('/read', function(){
// 	$posts = Post::all();
// 	foreach ($posts as $post) {
		
// 		echo $post->title."<br>";
// 	}

// });

// Route::get('/findwhere' , function(){
// 	$posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
// 	return $posts;
// });


// Route::get('/findmore', function(){
// 	// $posts = Post::findOrFail(2);
// 	$posts = Post::where('users_count' ,'<', '50')->firstOrFail();
// 	return $posts;
// });

	// Route::get('/basicinsert' , function(){
	// 	$post = new Post;
	// 	$post->title = 'new ORM Title';
	// 	$post->content = 'Wow Eloquent. By Omar Angelino';
	// 	$post->is_admin = 0;
	// 	$post->save();
	// });

	// Route::get('/basicupdate' , function(){
	// 	$post = Post::find(4);
	// 	$post->title = $post->title. '2';
	// 	$post->content = $post->content . ' 2';
	// 	$post->save();
	// });

	// Route::get('/massinsert' , function(){
	// 	Post::create(['title' => 'the create method', 'content' => 'I\'m learining a lot of Php']);
	// });

	// Route::get('/update' , function(){
	// 	Post::where('id' , 2)->where('is_admin' , 0)->update(['title' => ' new title from a new method' , 'content' => 'new content from a new method']);
	// });

	// Route::get('/delete' , function(){
	// 	$post = Post::find(2);
	// 	$post->delete();
	// });

// 	Route::get('/delete2' , function(){
// 		Post::destroy([4,5]);
// 	});
// Route::resource('post','PostsController');

// Route::get('/view','PostsController@showview');

// Route::get('/view/{id}/{name}','PostsController@showpost');

// Route::get('/softdelete' , function(){
// 		Post::find(2)->delete();
// });

// Route::get('/readsoftdelete', function(){
// 	// $post = Post::find(1);
// 	// return $post;

// 	// $post = Post::withTrashed()->where('id', 1)->get();
// 	// return $post;

// 	$posts = Post::onlyTrashed()->get();
// 	return $posts;
// });

// Route::get('/restore', function(){
// 	$post = Post::onlyTrashed()->where('id', 1)->first();
// 	if($post)
// 	{
// 		$post->restore();
// 	}
// 	return $post;
// });

// Route::get('/forcedelete', function(){
// 	$post = Post::withTrashed()->where('id', 2)->first();
// 	$post->forcedelete();
// 	return $post;
// });


/*Eloquent Relationship*/

// /*one to one*/
// Route::get('/user/{id}/post',function($id){
// 	$post = User::find($id)->post;
// 	return $post;
// });

// one to one inverst 
// Route::get('/post/{id}/user',function($id){
// 	$user = Post::find($id)->user;
// 	return $user;
// });

// /*one to many*/
// Route::get('user/{id}/posts', function($id){
// 	$user = User::find($id);
// 	foreach($user->posts as $post)
// 	{
// 		echo $post->title;
// 	}
// });

// many to one inverst 
// Route::get('/post/{id}/user',function($id){
// 	$user = Post::find($id)->user;
// 	return $user;
// });


/* Many to Many*/

// Route::get('/user/{id}/role', function($id){
// 	$user = User::find($id);

// 	foreach ($user->roles as $role) {
// 		return $role;
// 	}
// });

// /*Access pivot table from intermediate table from many to many */
// Route::get('/user/{id}/role/pivot', function($id){
// 	$user = User::find($id);

// 	foreach ($user->roles as $role) {
// 		echo $role->pivot->user_id;
// 	}
// });

// /* Has  many through*/
// Route::get('/country/{id}/posts', function($id){
// 	$country = Country::find($id);

// 	return $country->posts;
	
// });


/*Polymorph relationship*/

// Route::get('user/{id}/photos', function($id){
// 	$user = User::find($id);

// 	foreach($user->photos as $photo)
// 	{
// 		return $photo;
// 	}
// });

// Route::get('post/{id}/photos', function($id){
	
// 	$post = Post::find($id);
// 	foreach($post->photos as $photo)
// 	{
// 		return $photo;
// 	}
// });



// Route::get('photo/{id}/owner' , function($id){
// 	$photo = Photo::findOrFail($id);

// 	$photoOwner = $photo->imageable;
// 	return $photoOwner;
// });

// /*Polymorph relationship  many to many*/

// Route::get('post/{id}/tags', function($id){
// 	$post = Post::find($id);
// 	foreach ($post->tags as $tag) {
// 		echo $tag->name . "<br>";
// 	}
// });

// /*Polymorph relationship  many to many retriwing owner*/

// Route::get('tag/{id}/owner', function($id){
// 	$tag = Tag::find($id);
// 	echo 'Tag '.$tag->name.'<br>';
// 	echo 'Posts <br>';
// 	foreach ($tag->posts as $post) {
// 		echo $post->title . "<br>";
// 	}
// 	echo 'Videos <br>';
// 	foreach ($tag->videos as $video) {
// 		echo $video->name . "<br>";
// 	}
// });

/*
	crud Application

*/

Route::resource('/posts', 'PostsController');

Route::get('/dates',function()
{
	$date = new DateTime('+1 week');
	echo $date->format('m-d-y');
	echo "<br>";
	echo Carbon::now()->addDays(10)->diffForHumans();
	echo "<br>";
	echo Carbon::now()->addDays(10);
	echo "<br>";
	echo Carbon::now()->subMonths(5);
	echo "<br>";
	echo Carbon::now()->subMonths(5)->diffForHumans();
	echo "<br>";
	echo Carbon::now()->yesterday()->diffForHumans();
});

Route::get('/user/{id}/getname', function($id)
{
	$user = User::find($id);
	echo $user->name;
});

Route::get('/user/{id}/update', function($id)
	{
		$user = User::find($id);
		$user->name = "valentina";
		$user->save();
	});