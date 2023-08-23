<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET" action="{{route('searchMagebit')}}">
        <input name="searchKeyword" type="text" placeholder="Enter your search keyword" value="old">
        <button type="submit"> Search</button>
    </form>

    @if (count($searchResults) == 0)
    <h1>Nothing was found for: {{$keyword}}</h1>
    @else
    <h1>
        <ul>Search result is for: {{$keyword}}</h1>
            @foreach ($searchResults as $result)
            <li>{{$result['title']}}</li>
        </ul>
            @endforeach
    @endif




</body>
</html>
