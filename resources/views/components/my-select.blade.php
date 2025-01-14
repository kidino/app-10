<select name="{{ $name }}" id="{{$id}}">
    @foreach ($options as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>