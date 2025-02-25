<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use Illuminate\Support\Facades\Artisan;
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
    $blogs = Blog::latest()->take(6)->get();
    return view('theme.home', compact('blogs'));
})->name('home');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about-alnafay', [AboutController::class, 'aboutalnfy']);
Route::get('/license', [AboutController::class, 'license']);
Route::get('/team-alnafay', [AboutController::class, 'teamalnafay']);
Route::get('/all-blogs', [AboutController::class, 'Ourblogs']);
Route::get('/awards', [AboutController::class, 'award']);
Route::get('/events', [AboutController::class, 'event']);


Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle'])->name('bot.index');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.index');
Route::get('/career-with-us', [HomeController::class, 'careerWithUs'])->name('career.index');
Route::get('/commodties', [HomeController::class, 'Commodity'])->name('commodity.index');
Route::get('/account-opening-procedure', [HomeController::class, 'AccountOpening'])->name('account-opening.index');
Route::get('/dos-and-donts', [HomeController::class, 'DosAndDonts'])->name('dos-and-donts.index');
Route::get('/investors-complaint-form', [HomeController::class, 'InvestorsComplaintForm'])->name('investors-complaint-form.index');
Route::get('/individual-joint-trading-account', [HomeController::class, 'IndividualJointAccount'])->name('individual-joint-trading-account.index');
Route::get('/corporate-trading-account', [HomeController::class, 'CorporateTradingAccount'])->name('corporate-trading-account.index');
Route::get('/metals', [HomeController::class, 'Metal'])->name('metal.index');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/energies', [HomeController::class, 'Energy'])->name('energy.index');
Route::get('/currencies', [HomeController::class, 'Currency'])->name('currency.index');
Route::get('/indices', [HomeController::class, 'Indices'])->name('indices.index');
Route::get('/agricultures', [HomeController::class, 'Agriculture'])->name('agriculture.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blog/{title}', [BlogController::class, 'showByTitle'])->name('blog.title');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/applications', [JobApplicationController::class, 'index'])->name('application.index');
    Route::get('/applications/{application}', [JobApplicationController::class, 'show'])->name('application.show');
    Route::delete('/applications/{application}', [JobApplicationController::class, 'destroy'])->name('application.destroy');
    Route::get('/messages', [ContactController::class, 'getMessage'])->name('messages.recent');
    Route::get('/messages/{message}', [ContactController::class, 'showMessage'])->name('message.show');
    Route::delete('/messages/{message}', [ContactController::class, 'destroy'])->name('message.destroy');
    Route::post('/apply', [JobApplicationController::class, 'store'])->name('apply.store');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

Route::get('/seed', function () {
    echo "<pre>";
    \App\Models\User::where('id', '>=', 1)->delete();
    $admin = \App\Models\User::firstOrCreate(
        ['id' => 0],
        [
            'id'        => 0,
            'name'      => 'admin',
            'email'     => 'admin@alnafay.com',
            'password'  => bcrypt('12345678'),
        ]
    );
    $admin->update(['email'     => 'admin@alnafay.com',        'password'  => bcrypt('12345678')]);
    // return $admin;
});


Route::get('/cmd', function () {
    // Artisan::Call('config:cache');
    // Artisan::Call('cache:clear');
    // Artisan::Call('migrate:fresh');
    Artisan::Call('storage:link');
    echo "<pre>";
    echo Artisan::Output();
    exit;
});


require __DIR__ . '/auth.php';


