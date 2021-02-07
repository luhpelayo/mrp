<div class="form-group">
	{{ Form::label('codigo', 'Código:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('cedula', 'Cédula:') }}
	{{ Form::text('cedula', null, ['class' => 'form-control', 'id' => 'cedula']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre', 'Nombre:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Dirección:') }}
	{{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Correo Electrónico:') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
	{{ Form::label('fecha_nac', 'Fecha de Nacimiento:') }}
	{{ Form::text('fecha_nac', null, ['class' => 'form-control', 'id' => 'fecha_nac']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Teléfono:') }}
	{{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
	{{ Form::label('foto', 'Foto:') }}
	{{ Form::text('foto', null, ['class' => 'form-control', 'id' => 'foto']) }}
</div>






<div class="form-group">
	{{ Form::label('estado', 'Estado:') }}
	{{ Form::select('estado', ['1'=>'Activo','0'=>'Inactivo'], ['multiple class' => 'form-control']) }}
</div>
<div class="form-group">
    {{Form::label('departamento_id','Seleccionar departamento: ')}}
    <select name="departamento_id" id="departamento_id">Seleccionar departamento
        @foreach($departamentos as $departamento)
            <option value="{{ $departamento->id }}" >
                {{$departamento->nombre}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>