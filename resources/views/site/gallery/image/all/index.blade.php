@extends('layouts.merge.site')
@section('titulo', 'Galeria')
@section('content')

    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Galeria</h1>

                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="pt-5 pt-lg-5">
            <div class=container>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($galleries as $item)
                        <div class="grid-item branding col-md-6 col-lg-4 px-3 mb-5">
                            <a href="{!! url('/galeria/' . urlencode($item->name)) !!}" class="card shadow lift rounded text-body">
                                <div
                                    style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;height:200px; border-radius: 5px;'>
                                </div>


                                <div class="card-body py-4">
                                    <p class=card-text><strong> {{ $item->name }}</strong></p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                  
                </div>

            </div>
        </section>

    </main>

@endsection
