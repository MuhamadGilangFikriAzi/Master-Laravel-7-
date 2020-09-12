<div class="form-group {{ $class ?? '' }}">
    <label>{{ $label }}</label>
    <textarea name="{{ $name }}" class="form-control form-control-sm" cols="30" rows="10">{{ old($name) }}</textarea>
    @error($name)
        <span class="text-danger">{{ $name }} Harus Diisi</span>
    @enderror
</div>
