@csrf

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input class="form-control bg-light shadow-sm border-0" type="text" name="name" value="{{ $user->name ?? old('name') }}">
    {!! $errors->first('name', '<span class="error">:message</span>') !!}
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control bg-light shadow-sm border-0" type="text" name="email" value="{{ $user->email ?? old('email') }}">
    {!! $errors->first('email', '<span class="error">:message</span>') !!}
</div>

@unless ($user->id)
    <div class="form-group">
        <label for="nombre">Password</label>
        <input class="form-control bg-light shadow-sm border-0" type="password" name="password">
        {!! $errors->first('password', '<span class="error">:message</span>') !!}
    </div>

    <div class="form-group">
        <label for="nombre">Password</label>
        <input class="form-control bg-light shadow-sm border-0" type="password" name="password_confirmation">
        {!! $errors->first('password_confirmation', '<span class="error">:message</span>') !!}
    </div>
@endunless

<p>Roles</p>
{!! $errors->first('roles', '<span class="error">:message</span>') !!}


<div class="form-group form-inline">
    @foreach ($roles as $id => $name)
    <div class="form-check mb-3 mr-3">
        <label class="form-check-label">
        <input type="checkbox"
                value="{{ $id }}"
                {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
                class="form-check-input"
                name="roles[]">
            {{ $name }}
        </label>
    </div>
    @endforeach
</div>




