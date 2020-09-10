<div>
    <div class="form-group {{ $class ?? '' }}">
        <label>{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $id ?? '' }}" class="form-control form-control-sm select2">
            @foreach ($data as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        @error($name)
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
