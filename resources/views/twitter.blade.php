<html>
<title>my tweets</title>

<head>
<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css"/>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

      </ul>

    </div>
    </nav>

    <div class="container">
    @if(!empty($data))
        @foreach($data as $key=>$tweet)

            <div class="well">

                <h3>{{$tweet['text']}}
                    <i class="glyphicon glyphicon-heart">{{$tweet['favorite_count']}}</i>
                    <i class="glyphicon glyphicon-repeat">{{$tweet['retweet_count']}}</i>
                </h3>

            </div>

            <hr>
        @endforeach
    @else
        <p>no tweets</p>
    @endif

    </div>

</body>

</html>