<form class="card-body" action="{{ route('admin.signup.report') }}" target="_blank">
    @csrf

    <div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div style="" class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imprimir Relatório de Participantes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Categoria <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select required name="category" class="form-control">
                                <option value="CONVIDADO">CONVIDADO</option>
                                <option value="IMPRENSA">IMPRENSA</option>
                                <option value="APOIO TÉCNICO">APOIO TÉCNICO</option>
                                <option value="ORGANIZAÇÃO">ORGANIZAÇÃO</option>
                                <option value="all">all</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <h4 class="text-center"><b class="col-md-12 text-center">Incluir Colunas no Relatório</b></h4>
                        <div class="col-md-12">
                            <div class="row text-left mx-2">

                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="name" checked>
                                    <small>Nome Completo</small>
                                </div>
                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="idcard" checked>
                                    <small>Passaporte/Bilhete de Identidade</small>
                                </div>

                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="country" checked>
                                    <small>País</small>
                                </div>

                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="email">
                                    <small>Email</small>
                                </div>

                      

                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="startDate">
                                    <small>Data de Chegada</small>
                                </div>

                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="endDate">
                                    <small>Data de Partida</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
</form>