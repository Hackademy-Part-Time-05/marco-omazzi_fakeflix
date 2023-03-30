
<x-main>
    <x-slot:title>

        Netflix-Catalogo Film

    </x-slot>
        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home">Film su FakeFlix</h1>
                <div class="box">
                   
                   @foreach ( $films as $film)
                   <a href="{{route('detailsfilm', ['id'=>$film['id']])}}">
                    <img src="{{$film['cover']}}" alt="">
                </a>
                   @endforeach
                
                    

                </div>
            </div>

        </section>

        <footer>

        </footer>
    </div>

</x-main>