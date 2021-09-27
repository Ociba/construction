<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\SuppliesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::Class,'getFrontPage']);
Route::get('/about', function () { return view('pages.about');});
Route::get('/construction', function (){ return view('pages.construction');});
Route::get('/architecture', function (){ return view('pages.house-plan');});
Route::get('/land-surveying', function (){ return view('pages.land-survey');});
Route::get('/education-and-training', function (){ return view('pages.education-and-training');});
Route::get('/property-and-asset', function (){ return view('pages.property');});
Route::get('/recruitment', function (){ return view('pages.recruitment');});
Route::get('/physical-planning', function (){ return view('pages.physical-planning');});
Route::get('/estates', function (){ return view('pages.estates');});
Route::get('/general-engineering', function (){ return view('pages.general-engineering');});
Route::get('/agriculture', function (){ return view('pages.agriculture');});
Route::get('/microfinance', function (){ return view('pages.microfinance');});
Route::get('/general-supplies', function (){ return view('pages.general-supplies');});
Route::get('/projects', [ProjectsController::Class,'getFrontProjects']);
Route::get('/projects-archieve',[ProjectsController::Class,'getProjectsThisMonth']);
Route::get('/blog', [BlogController::Class,'getFrontBlog']);
Route::get('contact', [ContactsController::Class, 'getFrontContact']);
Route::get('/career', function (){ return view('pages.career');});
Route::get('/branches', [BranchesController::Class, 'getFrontBranches']);
Route::get('/services', [ServicesController::Class, 'getFrontServices']);
Route::get('/post',[BlogController::Class,'getPost']);
Route::get('/materials', function (){ return view('pages.materials');});
//Route::get('/home', function (){ return view('admin.dashboard');})->name('Dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('service',[ServicesController::Class, 'getServices'])->name('Services');
Route::post('/create-service',[ServicesController::Class,'validateService']);
Route::get('/edit-service/{id}',[ServicesController::Class, 'editService'])->name('Edit Service Form');
Route::get('/update-service/{id}',[ServicesController::Class, 'updateService']);
Route::get('/delete-service/{id}', [ServicesController::Class, 'deleteService']);

Route::get('/project',[ProjectsController::Class, 'getProjects'])->name('Projects');
Route::post('create-project',[ProjectsController::Class, 'validateProject']);
Route::get('/edit-project/{id}',[ProjectsController::Class, 'editProject'])->name('Edit Project');
Route::get('/update-project/{id}',[ProjectsController::Class, 'updateProject']);
Route::get('/delete-project/{id}', [ProjectsController::Class, 'deleteProject']);

Route::get('/blogs',[BlogController::Class, 'getBlog'])->name('Blog');
Route::post('create-blog',[BlogController::Class, 'validateBlog']);
Route::get('/edit-blog/{id}',[BlogController::Class, 'editBlog'])->name('Edit Blog');
Route::get('/update-blog/{id}',[BlogController::Class, 'updateBlog']);
Route::get('/delete-blog/{id}', [BlogController::Class, 'deleteBlog']);

Route::get('/send-messages',[ContactsController::Class, 'validateContactMessage']);
Route::get('/contact-messages',[ContactsController::Class, 'getcontactMessages'])->name('Contact Messages');
Route::get('/delete-contact-message/{id}',[ContactsController::Class, 'deleteContactMessage']);
Route::get('/comment',[ContactsController::Class, 'validateComment']);
Route::get('/get-comments',[ContactsController::Class, 'getComments'])->name('Comments');
Route::get('delete-comment/{id}',[ContactsController::Class,'deleteComment']);
Route::get('validate-comment/{id}',[ContactsController::Class, 'changePendingCommentsToActive']);

Route::get('branch',[BranchesController::Class, 'getBranches'])->name('Company Branches');
Route::post('/create-branch',[BranchesController::Class, 'validateBranch']);
Route::get('/edit-branch/{id}',[BranchesController::Class, 'editBranch'])->name('Edit Branch');
Route::get('/update-branch/{id}',[BranchesController::Class, 'updateBranch']);
Route::get('/delete-branch/{id}', [BranchesController::Class, 'deleteBranch']);

Route::get('get-supplies',[SuppliesController::Class,'getSupplies'])->name('General Supplies');
Route::post('/create-supply', [SuppliesController::Class, 'validateSupply']);
Route::get('/edit-supply/{id}',[SuppliesController::Class, 'editSupply'])->name('Edit Supply');
Route::get('update-supply/{id}',[SuppliesController::Class, 'updateSupply']);
Route::get('/delete-supply/{id}',[SuppliesController::Class, 'deleteSupply']);

Route::get('/get-events',[EventController::Class, 'getEvents'])->name('Events');
Route::get('/create-event',[EventController::Class, 'validateEvent']);
Route::get('/edit-event/{id}',[EventController::Class, 'editEvent'])->name('Edit Event');
Route::get('/update-event/{id}',[EventController::Class, 'updateEvent']);
Route::get('/delete-event/{id}',[EventController::Class, 'deleteEvent']);

Route::get('/get-material',[MaterialsController::Class, 'getMaterial'])->name('Materials');
Route::get('/create-material',[MaterialsController::Class, 'validateMaterial']);
Route::get('/delete-material/{id}',[MaterialsController::Class, 'deleteMaterial']);
