Controllers: --php artisan make:controller CartController
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



Models: --php artisan make:model CartItem
model for each table!!!!
countries, seasons, activities, tours, tourActivities, orders
maybe users
Do not forget relationships!!!!
    User.php
        -> This model can represent the registered users of your website.
        -> It might have attributes like name, email, password, etc.
        -> You can use Laravel's built-in authentication system to handle user registration and login.
    Location.php
        -> This model could represent different travel destinations or locations.
        -> It might have attributes like name, description, image, price, etc.
    CartItem.php
        -> This model could represent items in the user's cart.
        -> It might have attributes like user_id, location_id, quantity, etc.
        -> This model would help manage the user's cart before the checkout process.
    BlogPost.php (not sure needed)
        -> This model could represent the blog posts on your website.
        -> It might have attributes like title, content, author, image, etc.
    Order.php
        -> This model could represent the orders placed by users during the checkout process.
        -> It might have attributes like user_id, total_amount, status, etc.



LocationController
    <?php
 
    namespace App\Http\Controllers;
 
    use App\Http\Controllers\Controller;
    use App\Models\Location;

    class LocationController extends Controller
    {
        public function list()
        {
            $tours = Location::all();

            return view('location', ['tours' => $tours];
        }
    }
    ?>

     @foreach ($tours as $tour)
            <li>
                <h3>{{ $tour->name }}</h3>
                <p>{{ $tour->description }}</p>
                <p>Country: {{ $tour->country->name }}</p>
                <p>Season: {{ $tour->season->name }}</p>
                <p>Hotel: {{ $tour->hotel }}</p>
                <p>Price: ${{ $tour->price }}</p>
                <p>Spots Left: {{ $tour->spots_left }}</p>
                <p>Start Date: {{ $tour->start_date }}</p>
                <p>End Date: {{ $tour->end_date }}</p>
                <p>Duration: {{ $tour->duration }} days</p>
            </li>
    @endforeach
