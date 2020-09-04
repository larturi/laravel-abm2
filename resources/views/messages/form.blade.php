@csrf

@unless (isset($message) && $message->user_id)

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control bg-light shadow-sm border-0" type="text" name="nombre"
               value="{{ $message->nombre ?? old('nombre') }}">
        {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control bg-light shadow-sm border-0" type="text" name="email"
               value="{{ $message->email ?? old('email') }}">
        {!! $errors->first('email', '<span class="error">:message</span>') !!}
    </div>

@endunless


<div class="form-group">
    <label for="mensaje">Mensaje</label>
    <textarea class="form-control bg-light shadow-sm border-0" name="mensaje">{{ $message->mensaje ?? old('mensaje') }}</textarea>
    {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
</div>

<input class="btn btn-primary btn-block" type="submit" value="{{ $btnText ?? 'Guardar' }}">
