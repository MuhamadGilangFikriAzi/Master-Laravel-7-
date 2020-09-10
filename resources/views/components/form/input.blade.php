<div>
    <div class="form-group {{ $class ?? '' }}">
        <label>{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" class="form-control form-control-sm" placeholder="Isi Input {{ $name }}">
        @error($name)
            <span class="alert alert-danger">{{ $massage }}</span>
        @enderror
    </div>
</div>
