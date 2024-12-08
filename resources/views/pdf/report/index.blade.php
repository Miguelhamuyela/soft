<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório De Participantes - {{ date('d-m-Y') }}</title>
    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body style='height:auto; width:100%;'>

    <header class="col-12 mt-2 mb-5">

        <img src="site/images/credencial.jpg" alt="" width="320">

        <p>
        <h2 style="" class="text-center">Relatório de Participantes da CPLP</h2>

      
        <b>Data:</b> {{ date('d-m-Y') }}
        <br>


        @if ($checkbox['category'] != 'all')
        <b> Categoria:</b> {{ $checkbox['category'] }}<br>

        @if ($checkbox['category'] == 'CONVIDADO')
        <b> Total de Inscrições:</b> {!! count($totalInvited) !!}<br>  

        @elseif($checkbox['category'] == 'ORGANIZAÇÃO')
        <b> Total de Inscrições:</b> {!! count($totalOrganizer) !!}<br>

        @elseif ($checkbox['category'] == 'IMPRENSA')
        <b> Total de Inscrições:</b> {!! count($totalPress) !!}<br>
        @else
        <b> Total de Inscrições:</b> {!! count($totalTechnicalSuporte) !!}<br>
        @endif

        @else
        <b> Categoria:</b> Todas<br>
        <b> Total de Inscrições:</b> {!! count($signups) !!}<br> 
        @endif
    
        <br>



        @if ($checkbox['category'] == 'all')
        <b>Total de Inscrições por Países</b> <br> <br> 

        <div style="display: inline-block;" class="mr-4">
            <b>Angola:</b>
            <p>{!! count($totalAngola) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> Brasil:</b> 
            <p>{!! count($totalBrasil) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> Cabo Verde:</b> 
            <p>{!! count($totalCaboVerde) !!}</p>
        </div>
        
        <div style="display: inline-block;" class="mr-4">
            <b> Guiné-Bissau:</b> 
            <p>{!! count($totalGuineBissau) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> Guiné Equatorial:</b> 
            <p>{!! count($totalGuineEquatorial) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> Moçambique:</b> 
            <p>{!! count($totalMoz) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> Portugal:</b> 
            <p>{!! count($totalPortugal) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> São Tomé e Príncipe:</b> 
            <p>{!! count($totalSaoTome) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b> São Tomé e Príncipe:</b> 
            <p>{!! count($totalTimorLeste) !!}</p>
        </div>
        <br>


        <b style="text-align: left;">Total de Inscrições por Categoria</b> <br> <br>
        

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalTechnicalSuporte) !!}</p>
        </div>

        <br>
        <br>
        <b style="text-align: left;">Total de Inscrições por Países em Relação a Categoria</b> <br> <br>
        
        <b>ANGOLA</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalAngolaOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalAngolaInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalAngolaPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalAngolaTechnicalSuport) !!}</p>
        </div>

        <br><br>




        <b>BRASIL</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalBrasilOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalBrasilInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalBrasilPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalBrasilTechnicalSuporte) !!}</p>
        </div>

        <br><br>


        <b>CABO VERDE</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalCaboVerdeOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalCaboVerdeInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalCaboVerdePress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalCaboVerdeTechnicalSuporte) !!}</p>
        </div>


        <br><br>


        <b>GUINÉ-BISSAU</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalGuineBissauOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalGuineBissauInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalGuineBissauPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalGuineBissauTechnicalSuporte) !!}</p>
        </div>


        <br><br>


        <b>GUINÉ EQUATORIAL</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalGuineEquatorialOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalGuineEquatorialInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalGuineEquatorialPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalGuineEquatorialTechnicalSuporte) !!}</p>
        </div>


        <br>


        <b>MOÇAMBIQUE</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalMozOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalMozInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalMozPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalMozTechnicalSuporte) !!}</p>
        </div>


        <br><br>


        <b>PORTUGAL</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalPortugalOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalPortugalIvented) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalPortugalPress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalPortugalTechnicalSuporte) !!}</p>
        </div>

        <br><br>


        <b>SÃO TOMÉ e PRÍNCIPE</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalSaoTomeOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalSaoTomeInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalSaoTomePress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalSaoTomeTechnicalSuporte) !!}</p>
        </div>


        <br><br>


        <b>TIMOR LESTE</b> <br> <br>

        <div style="display: inline-block;" class="mr-4">
            <b>ORGANIZAÇÃO:</b> 

            <p>{!! count($totalTimorLesteOrganizer) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>CONVIDADO:</b> 

            <p>{!! count($totalTimorLesteInvited) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>IMPRENSA:</b> 

            <p>{!! count($totalTimorLestePress) !!}</p>
        </div>

        <div style="display: inline-block;" class="mr-4">
            <b>APOIO TÉCNICO:</b> 

            <p>{!! count($totalTimorLesteTechnicalSuporte) !!}</p>
        </div>

        @endif

        </p>






        
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    @isset($checkbox['name'])
                        <th>NOME</th>
                    @endisset
                    @isset($checkbox['idcard'])
                        <th>PASSAPORTE/BI</th>
                    @endisset
                    @isset($checkbox['category'])
                        <th>CATEGORIA</th>
                    @endisset
                    @isset($checkbox['email'])
                        <th>EMAIL</th>
                    @endisset
                    @isset($checkbox['country'])
                        <th>PAÍS</th>
                    @endisset
                    @isset($checkbox['startDate'])
                        <th>DATA DE CHEGADA</th>
                    @endisset

                    @isset($checkbox['endDate'])
                    <th>DATA DE PARTIDA</th>
                @endisset
                </tr>
            </thead>
            <tbody>
                @foreach ($signups as $item)
                    <tr class="text-center text-dark">
                        @isset($checkbox['name'])
                            <td>{{ $item->name }} </td>
                        @endisset
                        @isset($checkbox['idcard'])
                            <td>{{ $item->idcard }} </td>
                        @endisset
                        @isset($checkbox['category'])
                            <td>{{ $item->category }} </td>
                        @endisset
                        @isset($checkbox['email'])
                            <td>{{ $item->email }}</td>
                        @endisset
                        @isset($checkbox['country'])
                            <td>{{ $item->country }}</td>
                        @endisset
                        @isset($checkbox['startDate'])
                            <td>{{ $item->startDate }}</td>
                        @endisset

                        @isset($checkbox['endDate'])
                            <td>{{ $item->endDate }}</td>
                        @endisset
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>



    <footer class="col-12 mt-5" id="footer">
       
    </footer>

</body>

</html>