<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
   'register_route_models' => true;
|
*/
use Illuminate\Support\Facades\Route;

//visitors
Route::get('/index', [App\Http\Controllers\VisitorsController::class, 'index'])->name('inde');
Route::get('/', [App\Http\Controllers\VisitorsController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\VisitorsController::class, 'about'])->name('about');
Route::get('/coinbuy', [App\Http\Controllers\VisitorsController::class, 'coinbuy'])->name('coinbuy');
Route::get('/logout', [App\Http\Controllers\VisitorsController::class, 'logout'])->name('logout');
Route::get('/course/{course}', [App\Http\Controllers\VisitorsController::class, 'course'])->name('course');
Route::get('/cointransactions', [App\Http\Controllers\VisitorsController::class, 'cointransactions'])->name('cointransactions');
Route::get('/gallery', [App\Http\Controllers\VisitorsController::class, 'gallery'])->name('gallery');
Route::get('/coinqr', [App\Http\Controllers\VisitorsController::class, 'coinqr'])->name('coinqr');
Route::get('/coinsell', [App\Http\Controllers\VisitorsController::class, 'coinsell'])->name('coinsell');

Route::post('/visitorssubscribe', [App\Http\Controllers\VisitorsController::class, 'visitorssubscribe'])->name('visitorssubscribe');

Route::get('/contact', [App\Http\Controllers\VisitorsController::class, 'contact'])->name('contact');
Route::post('/contactcreate', [App\Http\Controllers\VisitorsController::class, 'contactcreate'])->name('contactcreate');






//admin routes
Route::get('/nanoadmin', [App\Http\Controllers\Nanoadmins::class, 'index'])->name('nanoadmin');
//courses
Route::get('/coursesall', [App\Http\Controllers\Nanoadmins::class, 'coursesall'])->name('coursesall');
Route::get('/coursesandstudents', [App\Http\Controllers\Nanoadmins::class, 'coursesandstudents'])->name('coursesandstudents');
Route::get('/coursespayments', [App\Http\Controllers\Nanoadmins::class, 'coursespayments'])->name('coursespayments');
Route::get('/coursetimetable', [App\Http\Controllers\Nanoadmins::class, 'coursetimetable'])->name('coursetimetable');
Route::get('/coursecreate', [App\Http\Controllers\Nanoadmins::class, 'coursecreate'])->name('coursecreate');
Route::get('/courseoutlineview/{id}', [App\Http\Controllers\Nanoadmins::class, 'courseoutlineview'])->name('courseoutlineview');
Route::post('/courseoutlinecreate', [App\Http\Controllers\Nanoadmins::class, 'courseoutlinecreate'])->name('courseoutlinecreate');
Route::post('/courseoutlineupdate', [App\Http\Controllers\Nanoadmins::class, 'courseoutlineupdate'])->name('courseoutlineupdate');
Route::get('/courseoutlinedelete/{id}', [App\Http\Controllers\Nanoadmins::class, 'courseoutlinedelete'])->name('courseoutlinedelete');


// course reviews
Route::get('/coursereviewview/{courseid}', [App\Http\Controllers\Nanoadmins::class, 'coursereviewview'])->name('coursereviewview');
Route::post('/reviewadd', [App\Http\Controllers\Nanoadmins::class, 'reviewadd'])->name('reviewadd');
Route::get('/coursereviewapprove/{id}', [App\Http\Controllers\Nanoadmins::class, 'coursereviewapprove'])->name('coursereviewapprove');
Route::get('/coursereviewdelete/{id}', [App\Http\Controllers\Nanoadmins::class, 'coursereviewdelete'])->name('coursereviewdelete');


//course what you will learn
Route::get('/whatyouwilllearnview/{id}', [App\Http\Controllers\Nanoadmins::class, 'whatyouwilllearnview'])->name('whatyouwilllearnview');
Route::post('/whatyouwilllearncreate', [App\Http\Controllers\Nanoadmins::class, 'whatyouwilllearncreate'])->name('whatyouwilllearncreate');
Route::post('/whatyouwilllearnupdate}', [App\Http\Controllers\Nanoadmins::class, 'whatyouwilllearnupdate'])->name('whatyouwilllearnupdate');
Route::get('/youwilllearndelete/{id}', [App\Http\Controllers\Nanoadmins::class, 'youwilllearndelete'])->name('youwilllearndelete');

//our services
Route::get('/ourservices', [App\Http\Controllers\Nanoadmins::class, 'ourservices'])->name('ourservices');

Route::post('/serviceadd', [App\Http\Controllers\Nanoadmins::class, 'serviceadd'])->name('serviceadd');
Route::post('/serviceupdate', [App\Http\Controllers\Nanoadmins::class, 'serviceupdate'])->name('serviceupdate');
Route::get('/ourservicesdelete/{id}', [App\Http\Controllers\Nanoadmins::class, 'ourservicesdelete'])->name('ourservicesdelete');













Route::post('/post_create_course', [App\Http\Controllers\Nanoadmins::class, 'post_create_course'])->name('post_create_course');
Route::post('/courseupdate', [App\Http\Controllers\Nanoadmins::class, 'courseupdate'])->name('courseupdate');

Route::get('/deletecourse/{id}', [App\Http\Controllers\Nanoadmins::class, 'deletecourse'])->name('deletecourse');




//staff
Route::get('/staffcreate', [App\Http\Controllers\Nanoadmins::class, 'staffcreate'])->name('staffcreate');
Route::get('/staffview', [App\Http\Controllers\Nanoadmins::class, 'staffview'])->name('staffview');
Route::get('/staffcourses', [App\Http\Controllers\Nanoadmins::class, 'staffcourses'])->name('staffcourses');

Route::post('/staffmemberupdate', [App\Http\Controllers\Nanoadmins::class, 'staffmemberupdate'])->name('staffmemberupdate');
Route::get('/deletestaffmember/{id}', [App\Http\Controllers\Nanoadmins::class, 'deletestaffmember'])->name('deletestaffmember');
Route::post('/post_create_staff', [App\Http\Controllers\Nanoadmins::class, 'post_create_staff'])->name('post_create_staff');




//crypto transactionsdelete marktransactionpaid
Route::get('/transactionsdelete', [App\Http\Controllers\Nanoadmins::class, 'transactionsdelete'])->name('transactionsdelete');
Route::get('/marktransactionpaid', [App\Http\Controllers\Nanoadmins::class, 'marktransactionpaid'])->name('marktransactionpaid');
Route::get('/cryptoall', [App\Http\Controllers\Nanoadmins::class, 'cryptoall'])->name('cryptoall');
Route::get('/cryptopaid', [App\Http\Controllers\Nanoadmins::class, 'cryptopaid'])->name('cryptopaid');
Route::get('/cryptopending', [App\Http\Controllers\Nanoadmins::class, 'cryptopending'])->name('cryptopending');

//student management
Route::get('/studentall', [App\Http\Controllers\Nanoadmins::class, 'studentall'])->name('studentall');
Route::get('/studentregister', [App\Http\Controllers\Nanoadmins::class, 'studentregister'])->name('studentregister');

Route::post('/post_create_student', [App\Http\Controllers\Nanoadmins::class, 'post_create_student'])->name('post_create_student');
Route::post('/studentupdate', [App\Http\Controllers\Nanoadmins::class, 'studentupdate'])->name('studentupdate');


//Email management

Route::get('/emailstudents/{id?}', [App\Http\Controllers\Nanoadmins::class, 'emailstudents'])->name('emailstudents');
Route::get('/emailstaff/{id?}', [App\Http\Controllers\Nanoadmins::class, 'emailstaff'])->name('emailstaff');
Route::get('/emailsubscriberss', [App\Http\Controllers\Nanoadmins::class, 'emailsubscriberss'])->name('emailsubscriberss');
Route::get('/emailall', [App\Http\Controllers\Nanoadmins::class, 'emailall'])->name('emailall');
Route::post('/postemailstudents', [App\Http\Controllers\Nanoadmins::class, 'postemailstudents'])->name('postemailstudents');
Route::post('/postemailstaff', [App\Http\Controllers\Nanoadmins::class, 'postemailstaff'])->name('postemailstaff');
Route::post('/postemailsubscriberss', [App\Http\Controllers\Nanoadmins::class, 'postemailsubscriberss'])->name('postemailsubscriberss');
Route::post('/postemailall', [App\Http\Controllers\Nanoadmins::class, 'postemailall'])->name('postemailall');


//enquiry
Route::get('/enquiry', [App\Http\Controllers\Nanoadmins::class, 'enquiry'])->name('enquiry');
Route::post('/enquiryresponse', [App\Http\Controllers\Nanoadmins::class, 'enquiryresponse'])->name('enquiryresponse');
Route::get('/enquirynew', [App\Http\Controllers\Nanoadmins::class, 'enquirynew'])->name('enquirynew');


//gallery sprites
Route::get('/gallerysprites', [App\Http\Controllers\Nanoadmins::class, 'gallerysprites'])->name('gallerysprites');
Route::get('/galleryspritesapprove/{id}', [App\Http\Controllers\Nanoadmins::class, 'galleryspritesapprove'])->name('galleryspritesapprove');
Route::get('/galleryspritesdelete/{id}', [App\Http\Controllers\Nanoadmins::class, 'galleryspritesdelete'])->name('galleryspritesdelete');


//dashboard
Route::get('/dashboardindex', [App\Http\Controllers\Userdashb::class, 'dashboardindex'])->name('dashboardindex');

Route::post('/studentstory', [App\Http\Controllers\Userdashb::class, 'studentstory'])->name('studentstory');

Route::post('/studentreview', [App\Http\Controllers\Userdashb::class, 'studentreview'])->name('studentreview');
