Controllers: --php artisan make:controller CartController
    HomeController -> index dropdowns
    AboutUsController (not sure)
    BlogController (not sure)
    LocationController: functions 
                                -> index list all tours
                                -> show tour
                                -> filter tours
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
        Route::get('/locations', [LocationController::class, 'index'])->name('location-list'); //index or list --we will see //rename location to location-list
        Route::get('/locations/{id}', [LocationController::class, 'show'])->name('location'); //show or view --we will see //rename location-description to location-details
        Route::get('/cart', [CartController::class, 'index'])->name('cart'); // --we will see about the name
        Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout'); // --we will see about the name



Models: --php artisan make:model CartItem
model for each table!!!!
countries, seasons, activities, locations, tourActivities, orders
maybe users
Do not forget relationships!!!!
    <!-- User.php
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
        -> It might have attributes like user_id, total_amount, status, etc. -->


HomeController
    <?php 
    
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Countries;
    use App\Models\Seasons;
    use App\Models\Activities;

    class HomeController extends Controller
    {
        public function index()
        {
            $countries = Countries::pluck('name', 'country_id');
            $seasons = Seasons::pluck('name', 'season_id');
            $activities = Activities::pluck('name', 'activity_id');

            return view('home', ['countries' => $countries, 'seasons' => $seasons]);
        }
    }
    
    ?>


LocationController
    <?php
 
    namespace App\Http\Controllers;
 
    use App\Http\Controllers\Controller;
    use App\Models\Locations;
    use Illuminate\Http\Request;

    class LocationsController extends Controller
    {
        public function index()
        {
            $tours = Locations::all();

            return view('location-list', ['tours' => $tours]);
        }

        public function show($id) 
        {
            $tour = Locations::findOrFail($id);

            return view('location', ['tour' => $tour]);
        }

        public function filter(Request $request) ///how do we deferentiate for php when to use index and when filter? by request? parametrs? variables?
        {
            $query = Locations::query();

            ///finish

            if ($request->has('season')) {
                $query->where('season_id', $request->input('name'));
            }

            if ($request->has('from')) {
                $query->where('', $request->input('name'));
            }

            if ($request->has('till')) {
                $query->where('', $request->input('name'));
            }

            if ($request->has('activity')) {
                $query->where('activity_id', $request->input('name'));
            }

            if ($request->has('budget')) {
                $query->where('', '<=', $request->input('price'));
            }

            if ($request->has('spots_left')) {
                $query->where('', '>=', $request->input('spots_left'));
            }

            ///understanding

            $filteredTours = $query->get();

            return view('locations.filtered-home', ['filteredTours' => $filteredTours]);
        }
    }
    ?>
    //index location-list
     @foreach ($tours as $tour)
            <li>
                <h3>{{ $tour->name }}</h3>
                <p>{{ $tour->description }}</p>
                <p>Country: {{ $tour->country->name }}</p>
                <p>Hotel: {{ $tour->hotel }}</p>
                <p>Price: ${{ $tour->price }}</p>
                <p>Spots Left: {{ $tour->spots_left }}</p>
                <p>Start Date: {{ $tour->start_date }}</p>
                <p>End Date: {{ $tour->end_date }}</p>
                <p>Duration: {{ $tour->duration }} days</p>
                <a href="{{ route('location', ['id' => $tour->id]) }}">View Details</a>

            </li>
    @endforeach

    //show location-detail
    <div class="container">
        <h2>Tour Details</h2>
        <h3>{{ $tour->name }}</h3>
        <p>{{ $tour->description }}</p>
        <p>Country: {{ $tour->country->name }}</p>
        <p>Season: {{ $tour->season->name }} </p>
        <p>Hotel: {{ $tour->hotel }}</p>
        <p>Price: ${{ $tour->price }}</p>
        <p>Spots Left: {{ $tour->spots_left }}</p>
        <p>Start Date: {{ $tour->start_date }}</p>
        <p>End Date: {{ $tour->end_date }}</p>
        <p>Duration: {{ $tour->duration }} days</p>
    </div>

    //filter location-list
    <div class="container">
        <h2>Filtered Tours</h2>
        <ul>
            @foreach ($filteredTours as $tour) ///if for the html part
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
                    <!-- You can add more details here as needed -->
                </li>
            @endforeach
        </ul>
    </div>

        //homepage
    <div class="container">
        <h2>Filter Tours</h2>
        <form action="{{ route('locations.filter-home') }}" method="get">
            <label for="country">Country:</label>
            <select name="country">
                <option value="">Select Country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>

            <label for="spots_left">Spots Left:</label>
            <input type="number" name="spots_left" min="0">

            <label for="season">Season:</label>
            <select name="season">
                <option value="">Select Season</option>
                @foreach ($seasons as $seasonId => $seasonName)
                    <option value="{{ $seasonId }}">{{ $seasonName }}</option>
                @endforeach
            </select>

            <button type="submit">Apply Filters</button>
        </form>
    </div>

