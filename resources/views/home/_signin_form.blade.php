<form id="signin" class="tab-pane fade" method="POST" action="{{ route('common.login') }}">
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
        <label for="password" class="col-md-8 col-form-label text-md-left">{{ __('Password') }}</label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary float-right">
                Logar
            </button>
        </div>
    </div>
</form>