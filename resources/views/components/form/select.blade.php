<div>
    <div class="form-group {{ $class ?? '' }}">
        <label>{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $id ?? '' }}" class="form-control form-control-sm select2">
            <option value="">...</option>
            @foreach ($data as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        @error($name)
            <span class="text-danger">{{ $name }} Harus Dipilih</span>
        @enderror
    </div>
</div>
