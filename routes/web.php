<?php

use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Users\UserConsultationController;
use App\Http\Controllers\Consultants\ConsultantController;
use App\Http\Controllers\Users\RequestController;
use App\Http\Controllers\Users\SearchController;
use App\Http\Controllers\Users\RepliesController;
use App\Http\Controllers\Consultants\RepliesConsultantController;
use App\Models\Consultation;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
use App\Http\Middleware\IsConsultant;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/create-session', [App\Http\Controllers\DonationController::class,'createSession'])->name('donations.createSession');
Route::get('/', function () {
    return view('land');
});
Route::get('/test2', function () {
    dd(session()->all());
});
// Route::get('/test22', function () {
//     return view('land');
// });
// Route::get('/test7', function () {
//     // Auth::user()->logout();
// });
// Route::get('/test33', function () {
//     return view('users.organisation_form');
// });
// Route::get('/test34', function () {
//     return view('users.individual_form');
// });
// Route::get('/test35', function () {
//     return view('auth.category');
// });
// Route::get('/test5', function () {
//     return view('admin.newsletter.index2');
// });
// Route::get('/test3', function () {
//     return view('login-test');
// });
// Route::get('/test32', function () {
//     return view('login-test2');
// });
// Route::get('/test4', function () {
//     return view('landing-page');
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return view('login-test2');
});

Route::middleware(['auth:sanctum', 'verified','documented', 'redirect.consultant'])->get('/dashboard', function () {
    return view('dashboard_main');
})->name('dashboard');

Route::prefix('newsletter')->name('newsletter.')->group(function () {
    Route::get('/subscribe',[App\Http\Controllers\NewsletterController::class,'subscribe'])->name('subscribe');
    Route::post('/store',[App\Http\Controllers\NewsletterController::class,'store'])->name('store');

    Route::post('/store_user',[App\Http\Controllers\NewsletterController::class,'store_user'])->name('store_user');
    Route::get('/create',[App\Http\Controllers\NewsletterController::class,'createCampaign'])->name('create');

});
Route::prefix('users')->middleware(['auth:sanctum', 'verified', 'redirect.consultant'])->name('users.')->group(function () {
    Route::get('/organisation/create',[App\Http\Controllers\Users\OrganisationController::class,'create'])->name('organisation.create');
    Route::post('/organisation/store',[App\Http\Controllers\Users\OrganisationController::class,'store'])->name('organisation.store');

    Route::get('/organisation/edit',[App\Http\Controllers\Users\OrganisationController::class,'edit'])->name('organisation.edit');
    Route::put('/organisation//update',[App\Http\Controllers\Users\OrganisationController::class,'update'])->name('organisation.update');

    Route::get('/individual/create',[App\Http\Controllers\Users\IndividualController::class,'create'])->name('individual.create');
    Route::post('/individual/store',[App\Http\Controllers\Users\IndividualController::class,'store'])->name('individual.store');
    Route::get('/individual/edit',[App\Http\Controllers\Users\IndividualController::class,'edit'])->name('individual.edit');
    Route::put('/individual/update',[App\Http\Controllers\Users\IndividualController::class,'update'])->name('individual.update');

    Route::get('/orphanage/create',[App\Http\Controllers\Users\OrphanageController::class,'create'])->name('orphanage.create');
    Route::post('/orphanage/store',[App\Http\Controllers\Users\OrphanageController::class,'store'])->name('orphanage.store');


    Route::get('/orphanage/edit',[App\Http\Controllers\Users\OrphanageController::class,'edit'])->name('orphanage.edit');
    Route::put('/orphanage/update',[App\Http\Controllers\Users\OrphanageController::class,'update'])->name('orphanage.update');

    Route::get('/categorize',function(){
        return view('auth.category');
    })->name('user_category');
    Route::post('/categorize',function(Request $request){
        $user = Auth::user();
        $user->update([
            'category' => $request->category,
        ]);
        return redirect()->route('dashboard');
    })->name('categorize');
    Route::get('/edit',function(){
        if(Auth::user()->category == 'orphanage'){
            return redirect()->route('users.orphanage.edit');
        }else if(Auth::user()->category == 'individual'){
            return redirect()->route('users.individual.edit');
        }else if(Auth::user()->category == 'organization'){
            return redirect()->route('users.organisation.edit');
        }else{
            return redirect()->route('dashboard');
        }
    })->name('edit');

/*     Route::get('/consultation/main',function() {
        return view('users.consultation_main');
    }); */
/*     Route::get('/consultation/chat',function() {
        return view('users.consultation_chat');
    }); */
    Route::get('/consultation/en',function() {
        return view('users.consultation_en');
    });
    Route::get('/consultation/admin',function() {
        return view('users.consultation_admin');
    });
    Route::get('/consultation/admin/chat',function() {
        return view('users.consultation_admin_chat');
    });
    Route::get('/consultation/about',function() {
        return view('users.consultation_about');
    });

    Route::get('/consultation/request/create',[RequestController::class,'create'])->name('consultation.create');
    Route::post('/consultation/request/store',[RequestController::class,'store'])->name('consultation.store');
    Route::get('/consultation/main',[RequestController::class,'index'])->name('consultation.index');
    Route::get('/consultation/new',[RequestController::class,'newConsultations'])->name('consultation.new');
    Route::get('/consultation/closed',[RequestController::class,'closedConsultations'])->name('consultation.closed');
    Route::get('/consultation/assigned',[RequestController::class,'assignedConsultations'])->name('consultation.assigned');
    Route::get('/consultation/rejected',[RequestController::class,'rejectedConsultations'])->name('consultation.rejected');
    Route::get('/consultation/main/status/{id}',[RequestController::class,'status']);

    Route::get('/consultation/chat/{id}',[RepliesController::class,'index'])->name('consultation.chat');
    Route::get('/consultation/reply/{id}',[RepliesController::class,'reply'])->name('consultation.reply');
    Route::post('/consultation/chat/store',[RepliesController::class,'store']);

    Route::get('/consultation/stepper',function() {
        return view('users.consultation_stepper');
    });

    // Route::get('/consultation/faq',function() {
    //     return view('users.consultation_faq');
    // });

/*   Route::resource('consultation', UserConsultationController::class)
    ->only(['index','edit', 'store', 'update','destroy'])
    ->middleware(['auth', 'verified']); */

});

Route::prefix('consultants')->middleware(['auth:sanctum', 'verified','is.consultant'])->name('consultants.')->group(function () {

    Route::get('/consultation/main',[ConsultantController::class,'index'])->name('consultation.index');
    Route::get('/consultation/new',[ConsultantController::class,'newConsultations'])->name('consultation.new');
    Route::get('/consultation/closed',[ConsultantController::class,'closedConsultations'])->name('consultation.closed');
    Route::get('/consultation/assigned',[ConsultantController::class,'assignedConsultations'])->name('consultation.assigned');
    Route::get('/consultation/rejected',[ConsultantController::class,'rejectedConsultations'])->name('consultation.rejected');
    Route::get('/consultation/main/status/{id}',[ConsultantController::class,'status']);

    Route::get('/consultation/chat/{id}',[RepliesConsultantController::class,'index'])->name('consultation.chat');
    Route::get('/consultation/reply/{id}',[RepliesConsultantController::class,'reply'])->name('consultation.reply');
    Route::post('/consultation/chat/store',[RepliesConsultantController::class,'store']);

});



/* Route::post('users/consultation/{reques}', function ($request) {
    ->name('consultation.store')
}); */

Route::get('users/consultation/faq',[SearchController::class,'index'])->name('users.consultation.faq');
Route::get('users/consultation/search',[SearchController::class,'search'])->name('users.consultation.search');

Route::get('admin/consultations/new',[ConsultationController::class,'new'])->name('admin.consultations.new');
Route::get('admin/consultations/rejected',[ConsultationController::class,'rejected'])->name('admin.consultations.rejected');
Route::get('admin/consultations/assigned',[ConsultationController::class,'assigned'])->name('admin.consultations.assigned');


Route::get('admin/consultations/{consultation}/consultants',[ConsultationController::class,'consultants'])->name('admin.consultations.consultants');
Route::get('admin/consultations/{consultation}/consultants/assign/{consultant}',[ConsultationController::class,'assignConsultant'])->name('admin.consultations.consultants.assign');
Route::post('admin/consultations/{consultation}/reject',[ConsultationController::class,'reject'])->name('admin.consultations.reject');
Route::get('admin/consultations/{consultation}/close',[ConsultationController::class,'close'])->name('admin.consultations.close');
Route::get('admin/consultations/{consultation}/manage',[ConsultationController::class,'manage'])->name('admin.consultations.manage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
