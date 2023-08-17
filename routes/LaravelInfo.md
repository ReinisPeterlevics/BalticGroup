Controllers:
    HomeController
    AboutUsController (not sure)
    BlogController (not sure)
    LocationController: functions 
                                -> list tours
                                -> view tours
    CartController: 
                    -> list chosen tour info (how chosen? transmit this data, as well as data about the amount of people going on a tour)
    CheckoutController:
                        -> insert data into orders table in db
                        -> upadate tours table spots_left field (- peron_count from orders table field)


Routes for Controllers:
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\AboutUsController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\LocationController;
    use App\Http\Controllers\CartController;
    use App\Http\Controllers\CheckoutController;

    Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [AboutUsController::class, 'index'])->name('about'); OR simple using function
        Route::get('/blog', [BlogController::class, 'index'])->name('blog'); OR simple using function
    Route::get('/locations', [LocationController::class, 'index'])->name('location'); //index or list --we will see //rename location to location-list
    Route::get('/locations/{id}', [LocationController::class, 'show'])->name('location-description'); //show or view --we will see //rename location-description to location-details
    Route::get('/cart', [CartController::class, 'index'])->name('cart'); // --we will see about the name
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout'); // --we will see about the name
