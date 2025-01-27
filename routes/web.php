<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JoinusController;
use App\Http\Controllers\OurserviceController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\OurleadershipController;
use App\Http\Controllers\PrivacypolicyController;
use App\Http\Controllers\PurchaseRequestController;
use App\Models\PurchaseRequest;

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

Auth::routes();

Route::get('/contactus', [MailController::class, 'index'])->name('pages.contactus');
Route::post('/contactus', [MailController::class, 'store'])->name('contactus.send.mail');

Route::get('/join-us', [JoinusController::class, 'joinus'])->name('pages.joinus');
Route::get('/join-us/add', [JoinusController::class, 'create'])->name('pages.add.joinus');
Route::post('/join-us/add', [JoinusController::class, 'store'])->name('pages.add.joinus');

Route::get('/our-service', [OurserviceController::class, 'ourservice'])->name('pages.ourservice');
Route::get('/our-service/add', [OurserviceController::class, 'create'])->name('pages.ourservice.add');
Route::post('/our-service/add', [OurserviceController::class, 'store'])->name('pages.ourservice.post');
Route::get('/our-service/index', [OurserviceController::class, 'index'])->name('pages.ourservice.index');

Route::get('/newsroom/index', [NewsroomController::class, 'index'])->name('pages.newsroom.index');
Route::get('/newsroom/add', [NewsroomController::class, 'create'])->name('pages.add.newsroom');
Route::post('/newsroom/add', [NewsroomController::class, 'store'])->name('pages.post.newsroom');
Route::get('/newsroom', [NewsroomController::class, 'news'])->name('pages.newsroom');

Route::get('/ourleadership/index', [OurleadershipController::class, 'index'])->name('pages.ourleadership.index');
Route::get('/ourleadership/add', [OurleadershipController::class, 'create'])->name('pages.ourleadership.add');
Route::post('/ourleadership/add', [OurleadershipController::class, 'store'])->name('pages.ourleadership.post');
Route::get('/ourleadership', [OurleadershipController::class, 'ourlead'])->name('pages.ourleadership');

Route::get('/terms', [TermController::class, 'terms'])->name('pages.terms');
Route::get('/terms/add', [TermController::class, 'create'])->name('pages.add.term');
Route::post('/terms/add', [TermController::class, 'store'])->name('pages.post.term');
Route::get('/terms/index', [TermController::class, 'index'])->name('pages.term.index');

Route::get('/privacy-policy', [PrivacypolicyController::class, 'privacypolicy'])->name('pages.privacypolicy');
Route::get('/privacy-policy/add', [PrivacypolicyController::class, 'create'])->name('pages.add.privacypolicy');
Route::post('/privacy-policy/add', [PrivacypolicyController::class, 'store'])->name('pages.post.privacypolicy');
Route::get('/privacy-policy/index', [PrivacypolicyController::class, 'index'])->name('pages.privacypolicy.index');

Route::get('/about', [AboutController::class, 'about'])->name('pages.about');
Route::get('/indexabout', [AboutController::class, 'index'])->name('pages.indexabout');
Route::get('/inputabout', [AboutController::class, 'create'])->name('pages.add.inputabout');
Route::post('/inputabout', [AboutController::class, 'store'])->name('pages.post.inputabout');

Route::get('/property/index', [PropertyController::class, 'index'])->name('pages.property.index');
Route::get('/property/add', [PropertyController::class, 'add'])->name('pages.add.property');
Route::post('/property/add', [PropertyController::class, 'store'])->name('pages.post.property');

Route::get('/', [CustomerController::class, 'home'])->name('pages.home');
Route::post('purchase-requests', [PurchaseRequestController::class, 'store'])->name('pages.property.apply');

Route::get('/ourleadership/{name}', [OurleadershipController::class, 'ourview']);
Route::get('/newsroom/{title}', [NewsroomController::class, 'newsroomview']);
// Route::get('category', [CustomerController::class, 'category']);
Route::get('/{name}', [CustomerController::class, 'viewcategory'])->name('pages.category');
Route::get('/{category_name}/{property_name}', [CustomerController::class, 'propertyview'])->name('pages.view');
// Route::post('/{category_name}/{property_name}', [PurchaseRequestController::class, 'store'])->name('pages.property.apply');









