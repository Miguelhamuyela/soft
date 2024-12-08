

<div class="col-md-8">
    <div class="form-group">
        <label for="place">Local</label>
        <input type="text" name="place" id="place"
            value="{{ isset($schedule->place) ? $schedule->place : old('place') }}"
            class="form-control border-secondary" placeholder="Local" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="day">Dia do Evento</label>
        <select name="day" id="day" class="form-control" required>
            @if (isset($schedule->day))
                <option value="{{ $schedule->day }}" class="text-primary h6" selected>
                    {{ $schedule->day }}
                </option>
            @else
                <option disabled selected>Selecione o dia do evnto</option>
            @endif

            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>
            

        </select>
    </div>

</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="start">Data de Início</label>
        <input type="datetime-local" name="start" id="start"
            value="{{ isset($schedule->start) ? date('Y-m-d\TH:i:s', strtotime($schedule->start)) : old('start') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="end">Data de Termino</label>
        <input type="datetime-local" name="end" id="end"
            value="{{ isset($schedule->end) ? date('Y-m-d\TH:i:s', strtotime($schedule->end)) : old('end') }}"
            class="form-control border-secondary" >
    </div>
</div> <!-- /.col -->



<div class="col-md-12 mb-4 mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Programa</h5>
            <!-- Create the editor container -->
            <textarea name="program" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($schedule->program) ? $schedule->program : old('program') }}
            </textarea>
        </div>
    </div>
</div>



<div class="col-md-12 mb-4 mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor2" style="min-height:300px; min-width:100%">
                {{ isset($schedule->description) ? $schedule->description : old('description') }}
            </textarea>
        </div>
    </div>
</div>
