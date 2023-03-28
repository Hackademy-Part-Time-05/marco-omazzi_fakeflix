<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header>
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a href="{{route('welcome')}}">Home</a>
                <a href="{{route('cataloguefilms')}}">Film</a>
                <a href="{{route('catalogueseries')}}">Serie TV</a> 

            </nav>
        </header>

        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home">Serie su FakeFlix</h1>
                <div class="box">
                   
                   @foreach ( $series as $serie)
                   <a href="{{route('detailsserie', ['id'=>$serie['id']])}}">
                    <img src="{{$serie['cover']}}" alt="">
                </a>
                   @endforeach
                
                    

                </div>
            </div>

        </section>

        <footer>

        </footer>
    </div>
</body>

</html> 
