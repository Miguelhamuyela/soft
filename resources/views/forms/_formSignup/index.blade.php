<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="idcard">Passaporte/Bilhete de Identidade</label>
        <input type="text" name="idcard" id="idcard"
            value="{{ isset($signup->idcard) ? $signup->idcard : old('idcard') }}" class="form-control"
            placeholder="Passaporte/Bilhete de Identidade" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-8">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name"
            value="{{ isset($signup->name) ? $signup->name : old('name') }}" class="form-control" placeholder="Nome"
            required>
    </div>
</div> <!-- /.col -->



<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="country">País</label>
        <select name="country" class="form-control" id="country" required>
            @if (isset($signup->country))
                <option value="{{ $signup->country }}" class="text-primary h6" selected>
                    {{ $signup->country }}
                </option>
            @else
                <option value="" disabled selected>Selecione o seu País</option>
            @endif
            @include('extra._nacionality.index')
        </select>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="startDate">Data de Chegada</label>
        <input type="date" name="startDate" id="startDate"
            value="{{ isset($signup->startDate) ? $signup->startDate : old('startDate') }}" class="form-control"
            placeholder="Data de Chegada" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="endDate">Data de Partida</label>
        <input type="date" name="endDate" id="endDate"
            value="{{ isset($signup->endDate) ? $signup->endDate : old('endDate') }}" class="form-control"
            placeholder="Data de Chegada" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
            value="{{ isset($signup->email) ? $signup->email : old('email') }}" class="form-control"
            placeholder="E-mail" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="email_confirmation">Confirmar Email</label>
        <input type="email" name="email_confirmation" id="email_confirmation"
            value="{{ isset($signup->email) ? $signup->email : old('email') }}" class="form-control"
            placeholder="E-mail" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-12 mb-5 pb-5">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label" for="photo">Fotografia de Identificação <small>(A foto precisa estar no modelo
                    abaixo)</small></label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="photo">
            <small class="text-danger">
                Insira uma fotografia do tipo "passe", actualizada e colorida para que sua inscrição seja Aprovada.
                A fotografia será utilizada para Impressão do Credencial de Identificação.
            </small> <br><br>
            <small class="text-danger">
                Extensões Permitidas: jpg, png, jpeg || Tamanho Máximo: 1MB
                <br>
            </small>


            <img src="/site/images/modelphoto.jpg" width="50%">
        </div>
    </div>
</div> <!-- /.col -->

@if (isset($signup->status))
    <div class="col-12 col-md-6 col-lg-4">
        <div class="form-group">
            <label for="status">ESTADO</label>
            <select type="status" name="status" id="status" class="form-control" required>
                @if (isset($signup->status))
                    <option value="{{ $signup->status }}" class="text-primary h6" selected>
                        {{ $signup->status }}
                    </option>
                @else
                    <option value="">Selecione o Estado</option>
                @endif
                <option value="RECEBIDO">RECEBIDO</option>
                <option value="APROVADO">APROVADO</option>
                <option value="RECUSADO">RECUSADO</option>
            </select>
        </div>
    </div> <!-- /.col -->
@endif
@if (isset($signup->category))
    <div class="col-12 col-md-6 col-lg-4">
        <div class="form-group">
            <label for="category">CATEGORIA</label>
            <select type="category" name="category" id="category" class="form-control" required>
                @if (isset($signup->category))
                    <option value="{{ $signup->category }}" class="text-primary h6" selected>
                        {{ $signup->category }}
                    </option>
                @else
                    <option value="">Selecione a categoria</option>
                @endif
                <option value="CONVIDADO">CONVIDADO</option>
                <option value="IMPRENSA">IMPRENSA</option>
                <option value="APOIO TÉCNICO">APOIO TÉCNICO</option>
                <option value="ORGANIZAÇÃO">ORGANIZAÇÃO</option>
            </select>
        </div>
    </div> <!-- /.col -->
@endif

<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
    <div class="col-12 col-md-6 col-lg-12">
        {!! RecaptchaV3::field('register') !!}
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>
</div>
