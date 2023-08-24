<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/location-description.css">
    <link href="/css/cart.css" rel="stylesheet">
    <script src="/js/cart.js"></script>
    <title>Magebit Travel - Blog</title>
</head>
<body>


    <div class="app">
        <div class="app-container">
        @include('header')
        @include('cart')
        @if(!empty(Session::get('cartIsVisible')) && Session::get('cartIsVisible') == true)
            <script>
                showCart();
            </script>
        @endif
        <div class="blog-container">
        <div class="blog">
            <h1>Blog</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis aut aperiam eveniet! Nostrum excepturi placeat libero, nam enim nulla modi dolor non eius esse in obcaecati iusto totam.
            Assumenda autem harum officiis sapiente temporibus reprehenderit dicta nulla perspiciatis fugiat sunt eius ratione laborum,
            aut ipsam, sequi modi magni obcaecati. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sunt Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis eos eius, earum reiciendis reprehenderit consectetur rem rerum fugiat labore temporibus?
        </p>


        <!-- content from db by 3 column -->
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="blog-column">
                        <div class="container">
                            <div class="row row-bottom-padded-md">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <a href="https://magebit.com/">
                                        <img class="img-responsive"
                                        width="293"
                                        height="260"
                                        src="{{ '/images/' . $blog->image }}"
                                        alt="vacation image">
                                    </a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3>{{ $blog->title }}</h3>
                                            <span class="posted_by">{{ $blog->created_at }}</span>
                                            <span class="comment"><i class="fas fa-comment"></i> 23 comments</span>
                                            <p> {{ $blog->description }}
                                            </p>
                                            <p>Learn more....</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- pagination -->
        <div class="pagination">
            @for ($i=0; $i < $blogs->lastPage(); $i++)
            <a href="{{ request()->fullUrlWithQuery(['page' => $i+1]) }}"><button class="page-button">{{ $i+1 }}</button></a>
            @endfor
        </div>

            @include('footer')
        </div>
    </div>


</body>
</html>
