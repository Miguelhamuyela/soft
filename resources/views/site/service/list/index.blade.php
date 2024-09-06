@extends('layouts.merge.site')
@section('titulo', 'Projecto Social')
@section('content')

<main>
    <section class="pb-4 pt-12 bg-primary" id=content>
        <div class=container>
            <div class=row>
                <div class=col>
                    <h1 class="text-white">Projecto</h1>
                </div>
            </div>
        </div>
    </section>
    @include('extra._culture.index')
   

    <section class=container>
        <div class="row my-5">
            <div class="col-md-12 col-12">
                <p class="text-justify">
             
                </p>
            </
        <div class="row justify-content-center">

            <div class=col-lg-12>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($services as $item)
                        <div id="borderDivDiv" class="grid-item branding col-md-6 col-lg-4 px-3 mb-5">
                            <a href="{!! route('site.services.show', urlencode($item->name)) !!}" class="card shadow lift rounded text-body">
                                <div
                                    style='background-image:url("/storage/{{ $item->photo }}");background-position:center;background-size:cover;height:200px;  border-radius: 5px;'>
                                </div>
                                <div style=" box-shadow: 0px 0px 20px 0px rgb(11 35 65 / 20%);" class="card-body py-4">
                                    <p class=card-text><strong> {{ $item->name }}</strong><br>
                                        
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>

</main>







@endsection
