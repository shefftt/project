<?php


/*
هذا المسارات يقوم الملف باختبار الرابط مثلا 
example.com/help
هل هذا المسار موجود اذا كان موجوداضمن المصفوفة التى تسمى 
$page 
اذا كان موجود داخل المصفوفة يذهب للمسار للصفحة  
main_f
الموجوده داخل المجلد
footer

*/
Route::get('/{page}' ,function($page)
{
	$pages = array('privicy','terms','help','about');
	if(in_array( $page , $pages))
	//
     return View::make('footer.main_f')->with('page' , $page);
 
});



?>