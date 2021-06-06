<form id="signup" class="tab-pane active" method="POST" action="{{ route('common.store') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-8 col-form-label text-md-left">{{ __('Nome') }}</label>

        <div class="col-md-12">
            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="points" class="col-md-8 col-form-label text-md-left">{{ __('Pontos') }}</label>

        <div class="col-md-12">
            <input id="points" type="number" class="form-control @error('points') is-invalid @enderror" name="points" value="{{ old('points') ?? 0 }}" autocomplete="points">

            @error('points')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="indicator" class="col-md-8 col-form-label text-md-left">{{ __('Indicado por') }}</label>

        <div class="col-md-12">
            <select class="form-control @error('indicator') is-invalid @enderror" name="indicator">
                    <option value="">Sem indicação</option>
                @foreach($commons as $id => $name)
                    <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
            @error('indicator')
                <span class="invalid-feedback" role="alert">
                    <strong class="offset-md-2">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-8 col-form-label text-md-left">{{ __('Senha') }}</label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-8 col-form-label text-md-left">{{ __('Confirmar senha') }}</label>

        <div class="col-md-12">
            <input id="password-confirm" type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary float-right">
                Cadastrar
            </button>
        </div>
    </div>
</form>