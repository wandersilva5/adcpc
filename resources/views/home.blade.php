@extends('layouts.principal')

@section('titulo-pag')
Dashboard
@section('sub-titulo')
Control panel
@endsection
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>150</h3>

                <p>Entrada</p>
            </div>
        <div class="icon">
            <i class="ion ion-arrow-up-a"></i>
        </div>
            <a href="#" class="small-box-footer">Veja Mais.. <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
            <!-- small box -->
          <div class="small-box bg-red">
              <div class="inner">
                  <h3>150</h3>
  
                  <p>Saída</p>
              </div>
          <div class="icon">
              <i class="ion ion-arrow-down-a"></i>
          </div>
              <a href="#" class="small-box-footer">Veja Mais.. <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <div class="col-lg-3 col-xs-6">
            <!-- small box -->
          <div class="small-box bg-blue">
              <div class="inner">
                  <h3>150</h3>
  
                  <p>Membros</p>
              </div>
          <div class="icon">
              <i class="ion ion-person"></i>
          </div>
              <a href="#" class="small-box-footer">Veja Mais.. <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <div class="col-lg-3 col-xs-6">
            <!-- small box -->
          <div class="small-box bg-fuchsia">
              <div class="inner">
                  <h3>150</h3>
  
                  <p>Meu Dízimo</p>
              </div>
          <div class="icon">
              <i class="ion ion-person"></i>
          </div>
              <a href="#" class="small-box-footer">Veja Mais.. <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
</div>
@endsection
