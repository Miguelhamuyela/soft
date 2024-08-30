<section class="py-6 py-lg-7">
    <div class=container>
        <div class=row>
            <div class=col>
                <div class="row justify-content-between align-items-baseline">
                    <div class="col my-5">

                        <a href="{{ route('site.schedule') }}">
                            <h2 class="text-dark">Agenda </h2>
                        </a>
                    </div>
                    <div class="col-auto small">
                        <ul class="nav nav-tabs border-0" id=myTab role=tablist>

                            @if ($schedulesI)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0 active" id=day16-tab
                                        data-toggle=tab href=#day16 role=tab aria-controls=day16 aria-selected=true>
                                        Dia 16</a>
                                </li>
                            @endif

                            @if ($schedulesII)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0 " id=day17-tab data-toggle=tab
                                        href=#day17 role=tab aria-controls=day17 aria-selected=false>
                                        Dia 17</a>
                                </li>
                            @endif

                            @if ($schedulesIII)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day18-tab data-toggle=tab
                                        href=#day18 role=tab aria-controls=day18 aria-selected=false>
                                        Dia 18</a>
                                </li>
                            @endif

                            @if ($schedulesIV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day19-tab data-toggle=tab
                                        href=#day19 role=tab aria-controls=day19 aria-selected=false>
                                        Dia 19</a>
                                </li>
                            @endif

                            @if ($schedulesV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day20-tab data-toggle=tab
                                        href=#day20 role=tab aria-controls=day20 aria-selected=false>
                                        Dia 20</a>
                                </li>
                            @endisset
                            @if ($schedulesVI)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day21-tab data-toggle=tab
                                        href=#day21 role=tab aria-controls=day21 aria-selected=false>
                                        Dia 21</a>
                                </li>
                            @endisset


                </ul>
            </div>
        </div>


        <div class=tab-content id=myTabContent>
            @if ($schedulesI)
                <div class="tab-pane fade show active" id=day16 role=tabpanel aria-labelledby=day16-tab>
                    <div class=table-responsive>
                        <table class="table table-striped font-size-5 mb-0">
                            <thead>
                                <tr class="font-size-6 text-secondary">
                                    <th scope=col>Período</th>
                                    <th scope=col>Programa</th>
                            </thead>
                            <tbody>
                                @foreach ($schedulesI as $item)
                                    <tr>
                                        <td style=" width: 300px"> Manhã e Tarde </td>

                                        <td>{!!html_entity_decode($item->program)!!}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            @if ($schedulesII)
                <div class="tab-pane fade" id=day17 role=tabpanel aria-labelledby=day17-tab>
                    <p class="text-center"><b> VIII Reunião dos Pontos Focais da Governação Eletrónica </b></p>
                    <div class=table-responsive>
                        <table class="table table-striped font-size-5 mb-0">
                            <thead>
                                <tr class="font-size-6 text-secondary">
                                    <th scope=col>Horário</th>
                                    <th scope=col>Programa</th>
                            </thead>
                            <tbody>
                                @foreach ($schedulesII as $item)
                                    <tr>
                                        <td style=" width: 300px">
                                            {{ date('H:i', strtotime($item->start)) }} -
                                            @isset($item->end) {{ date('H:i', strtotime($item->end)) }}   @endisset
                                        </td>

                                        <td>{!!html_entity_decode($item->program)!!}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            @if ($schedulesIII)
                <div class="tab-pane fade" id=day18 role=tabpanel aria-labelledby=day18-tab>
                    <div class=table-responsive>
                        <table class="table table-striped font-size-5 mb-0">
                            <thead>
                                <tr class="font-size-6 text-secondary">
                                    <th scope=col>Horário</th>
                                    <th scope=col>Programa</th>
                            </thead>
                            <tbody>
                                @foreach ($schedulesIII as $item)
                                    <tr>
                                        <td style=" width: 300px">
                                            {{ date('H:i', strtotime($item->start)) }} -
                                            @isset($item->end) {{ date('H:i', strtotime($item->end)) }}   @endisset
                                        </td>

                                        <td>{!!html_entity_decode($item->program)!!}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            @if ($schedulesIV)
                <div class="tab-pane fade" id=day19 role=tabpanel aria-labelledby=day19-tab>
                    <div class=table-responsive>
                        <table class="table table-striped font-size-5 mb-0">
                            <thead>
                                <tr class="font-size-6 text-secondary">
                                    <th scope=col>Período</th>
                                    <th scope=col>Programa</th>
                            </thead>
                            <tbody>
                                @foreach ($schedulesIV as $item)
                                    <tr>
                                        <td style=" width: 300px"> Manhã e Tarde </td>

                                        <td>{!!html_entity_decode($item->program)!!}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif


            @if ($schedulesV)
                <div class="tab-pane fade" id=day20 role=tabpanel aria-labelledby=day20-tab>
                        <p class="text-center"><b> II Reunião Interministerial da Governação Electrónica </b></p>
                    <div class=table-responsive>
                        <table class="table table-striped font-size-5 mb-0">
                            <thead>
                                <tr class="font-size-6 text-secondary">
                                    <th scope=col>Horário</th>
                                    <th scope=col>Programa</th>
                            </thead>

                            
                            <tbody>
                                @foreach ($schedulesV as $item)
                                    <tr>
                                        <td style=" width: 300px"> 
                                            {{ date('H:i', strtotime($item->start)) }} -
                                              @isset($item->end) {{ date('H:i', strtotime($item->end)) }}   @endisset   </td>

                                        </td>

                                        <td>{!!html_entity_decode($item->program)!!}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            @if ($schedulesVI)
                <div class="tab-pane fade" id=day21 role=tabpanel aria-labelledby=day21-tab>
                    <p class="text-center"> <b>XI Reunião de Ministros das Comunicações da CPLP</b> </p>
                    <div class=table-responsive>
                        <table class="table table-striped font-size-5 mb-0">
                            <thead>
                                <tr class="font-size-6 text-secondary">
                                    <th scope=col>Horário</th>
                                    <th scope=col>Programa</th>
                            </thead>
                            <tbody>
                                @foreach ($schedulesVI as $item)
                                    <tr>
                                        <td style=" width: 300px"> {{ date('H:i', strtotime($item->start)) }} -
                                              @isset($item->end) {{ date('H:i', strtotime($item->end)) }}   @endisset   </td>

                                        <td>{!!html_entity_decode($item->program)!!}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
</div>
</section>
