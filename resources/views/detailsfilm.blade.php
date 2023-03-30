<x-main>
    <x-slot:title>

        Netflix-Dettaglio film : {{$film['name']}}

    </x-slot>

        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home"> {{$film['name']}} </h1>
            
                <div class="box">
                    <img src="{{$film['cover']}}" alt="">

                </div>
<p>INIZIA A GUARDARE ORA</p>
                
            </div>

        </section>

        <footer>

        </footer>
    </div>
</x-main>