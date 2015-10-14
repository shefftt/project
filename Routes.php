<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|يقوم المستخدم بعرض فورم الدخول اذا كان اسم المستخدم وكلة السر صحيتين يقوم بتحويلة للصفحه الداش بورد 
اما اذا كان خطاء يقوم الموقع بعرض رساله خطاء


ولكن مايحدث شى غريب يقوم الموقع بتوجيهك لصفحه الدخول مرة اخرى اذا كانتا كلمه السر واسم المستخدم صحيحتين
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login',function()
{
	return '<form action="login2" method="POST">
	         '.Form::token().'
	         <input type="text" name="username">
			 <input type="text" name="password">
			 <input type="submit" value = "insert">
			
			 </form>';
});

///////////////////////////////////////////////////////////////////////////////////// End of  login viwe
/*
   المسار الذى يتم ارسال المعلومات علية
*/
Route::post('login2',function()
{
	$method  = array('username' => Input::get('username') , 'password' => Input::get('password'));
               if (Auth::attempt($method)) 
               	return Redirect::intended('dashbord');
		else
			return "Sorry username or password wrong ...";
		});
/////////////////////////////////////////////////////////////////////////////////// End of auth function
/*
   المسار المحمى
   */
Route::get('dashbord', array('before'=>'auth', function()
{
	return "auth";
}));

////////////////////////////////////////////////////////////////////////////// End of Hidden area
