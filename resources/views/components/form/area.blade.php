<div>
    <div class="form-group {{ $class ?? '' }}">
        <label>{{ $label }}</label>
        <textarea name="{{ $name }}" class="form-control form-control-sm" cols="30" rows="10">{{ old($name) }}</textarea>
    </div>
</div>
