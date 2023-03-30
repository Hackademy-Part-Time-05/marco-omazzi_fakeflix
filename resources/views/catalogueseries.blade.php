<x-main>
    <x-slot:title>

        Netflix-Catalogo Serie Tv

    </x-slot>

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
</x-main>