@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="inputNombre" class="form-label">
            nombre tarea
        </label>
        <input type="text" name="nombre" id="inputNombre" class="form-control" value="{{ old('nombre', $tarea->nombre) }}">
    </div>
    <div class="col-sm-4">
        <div class="form-check">
            {{-- <input type="checkbox" name="finalizada" id="inputFinalizada" class="form-check-input" @checked(old('finalizada', $tarea->finalizada)) > // laravel 9 --}}
            <input type="checkbox" name="finalizada" id="inputFinalizada" class="form-check-input" value="1">
        </div>
        <label for="inputFinalizada" class="form-check-label">
            Finalizada
        </label>
    </div>
    <div class="col-sm-4">
        <label for="selectUrgencia" class="form-label">Urgencia</label>
        <select name="urgencia" id="selectUrgencia" class="form-select">
            @for($i = 0; $i < count($urgencias); $i++)
                {{-- <option value="{{$i}}" @selected(old('urgencia', $tarea->urgencia))>{{$urgencias[$i]}}</option>  //laravel 9--}}
                <option value="{{$i}}">{{$urgencias[$i]}}</option>
            @endfor
        </select>
    </div>
    <div class="col-sm-4">
        <label for="inputFechaLimite" class="form-label">Fecha limite</label>
        <input type="datetime-local" name="fecha_limite" id="inputFechaLimite" class="form-control"
            value="{{ old('fecha_limite', isset($tarea->fecha_limite) ? $tarea->fecha_limite->format('Y-m-d\TH:i') : '') }}">
    </div>
    <div class="col-sm-12">
        <label for="form-label" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" id="textAreaDescripcion" class="form-control" value="{{old('descripcion',$tarea->descripcion)}}">
    </div>
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
