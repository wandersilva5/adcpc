@extends('layouts.master')

@section('title') 
<i class="fas fa-lg fa-file"></i> Nova Ata @section('description') Lançamento de uma nova ata @endsection       
@endsection

@section('content')
<div class="row clearfix">
    <form action="{{ route('ata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('layouts.formulario.input', ['type'=>'text','label'=>'Participantes', 'for_name'=>'participantes', 'class'=>'form-control','col'=>'12', 'dataRole'=>'tagsinput'])
        @include('layouts.formulario.input', ['type'=>'text','label'=>'Titulo', 'for_name'=>'titulo', 'class'=>'form-control ','col'=>'12'])
        @include('layouts.formulario.textarea', ['type'=>'text','label'=>'Texto', 'for_name'=>'pauta', 'class'=>'form-control', 'rows'=>'20','col'=>'12'])

        <br>
        @include('layouts.formulario.footer', ['link'=>'ata.index'])
    </form>
</div>

@push('styles')
<link href="{{ asset('css/upload/input-file.css') }}" rel="stylesheet">
<link href="{{ asset('css/tagsinput.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/tagsinput.min.js') }}"></script>
@endpush

@endsection