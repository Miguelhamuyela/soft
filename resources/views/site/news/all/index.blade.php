@extends('layouts.merge.site')
@section('titulo', 'Notícias')
@section('content')

<main>
  <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Notícias do Evento</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section class="container">
                <div class="row mx-n3 grid py-5 my-5" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($news as $item)
                        <div  class="grid-item branding col-md-6 col-lg-4 px-3 mb-5 py-4">
                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}" class="card shadow lift rounded text-body">
                             
                                <div 
                                    style='background-image:url("/storage/{{ $item->path}}");background-position:center;background-size:cover;height:200px; border-radius: 5px;'>
                                </div>

                                <div style='box-shadow: 0px 0px 20px 0px rgb(11 35 65 / 20%);' class="card-body py-4">
                                    <p class=card-text><strong> {{ $item->title }}  
                                    </strong><br>{{ date('d/m/Y', strtotime($item->date)) }}</p>
                     
                                </div>
                            </a>
                        </div>
                    @endforeach
                 
                </div>

                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 py-5">
                            <b>{{ $news->links() }}</b>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

@endsection
