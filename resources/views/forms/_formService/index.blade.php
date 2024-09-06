<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome do Projecto</label>

        <input type="text" name="name" id="name"
            value="{{ isset($services->name) ? $services->name : old('name') }}" class="form-control border-secondary"
            placeholder="Nome do Projecto" required>
        @if ($errors->first('name'))
            <div class="alert alert-danger">
                {{ $errors->first('name') }} </div>
        @endif
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="servicesName">Foto de capa do projecto</label>

        <input type="file" name="photo" id="photo"
            value="{{ isset($services->photo) ? $services->photo : old('photo') }}" class="form-control border-secondary"
            placeholder="">
        @if ($errors->first('photo'))
            <div class="alert alert-danger">
                {{ $errors->first('photo') }} </div>
        @endif
    </div>
</div> <!-- /.col -->




<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-servicesName">Descrição</h5>
            <!-- Create the editor container -->


            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($services->description) ? $services->description : old('description') }}
            </textarea> 
            @if ($errors->first('description'))
                <div class="alert alert-danger">
                    {{ $errors->first('description') }} </div>
            @endif
        </div>
    </div>
</div>
