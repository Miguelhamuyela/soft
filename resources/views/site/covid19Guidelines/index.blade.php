@extends('layouts.merge.site')
@section('titulo', 'Covid-19 ')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white">Covid-19 </h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class="container">
            <div class="row py-5 my-5">

                <div class="col-md-12">
                    <b>ENTRADAS E SAÍDAS NO PAÍS (ANGOLA):</b><br><br>
                    <p>Relativamente a entradas e saídas no país (Angola), de acordo com o Decreto Presidencial nº 152/23 de
                        14 de Julho do ARTIGO 2º referente a gestão administrativa da COVID-19 e Vigilância sanitária nas
                        fronteiras</p>
                    <ul>
                        <li> <b>Passo 1  –</b> São livres as entradas e saídas do território nacional, não estando dependentes da
                            apresentação de Certificado de Vacinação, nem da apresentação de resultado negativo de teste do
                            Vírus SARS-CoV-2.</li><br>
                            <li><b>Passo 2  – </b> Sem prejuízo do disposto no número anterior, as saídas do território nacional podem estar sujeitas às exigências de vigilância sanitária definidas pelo país de destino.</li>
                    </ul><br><br>
                    <p class="text-justify">
                        <b><a target="_blank" href="/site/4206f481184248059c583f01eadabe1ep.pdf"> Diário da República -
                                Actualização sobre a Covid-19</a></b> <br>

                </div>

            </div>
        </section>


    </main>

@endsection
