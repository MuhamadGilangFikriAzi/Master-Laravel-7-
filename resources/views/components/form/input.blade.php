<div>
    <div class="form-group {{ $class ?? '' }}">
        <label>{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" class="form-control form-control-sm" placeholder="Isi Input {{ $name }}">
        @error($name)
            <span class="text-danger">{{ $name }} Harus diisi</span>
        @enderror
    </div>
</div>
