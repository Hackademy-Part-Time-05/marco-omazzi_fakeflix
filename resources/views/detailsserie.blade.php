<x-main>
<x-slot:title>
    Netflix-Dettaglio serie : {{$serie['name']}}


</x-slot>
        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home"> {{$serie['name']}} </h1>
            
                <div class="box">
                    <img src="{{$serie['cover']}}" alt="">

                </div>
<p>INIZIA A GUARDARE ORA</p>
                
            </div>

        </section>

        <footer>

        </footer>
    </div>
</x-main>
