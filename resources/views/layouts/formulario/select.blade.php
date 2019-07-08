<div class="col-md-{{$col ?? '2'}}">
    <b>{{$label ?? ''}}</b>
    <select class="form-control show-tick" name="{{ $for_name ?? '' }}" id="{{ $id ?? '' }}" data-live-search="{{$busca ?? 'false'}}">
        <option value="">--Selecione--</option>
        @if(isset($lista))
        @foreach ($lista as $nome)
    <option value="{{ $nome }}">{{ $nome }}</option>
        @endforeach
        @endif
    </select>
</div>
