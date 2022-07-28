<h1>{{ $modo }} empleado</h1>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
<br>
<label for="Apellido"> Apellido </label>
<input type="text" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:'' }}" id="Apellido">
<br>
<label for="Correo"> Correo </label>
<input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
<br>
<label for="Foto"> Foto </label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="{{ $modo }} datos">
<a href="{{ url('empleado/') }}">Regresar</a>
<br>