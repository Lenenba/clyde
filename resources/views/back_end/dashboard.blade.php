@extends('back_end.layouts.back', ['title'=>"DashBoard"])
@section('contenu')
    <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-cutlery"></i> Nombre de Plats</span>
              <div class="count">{{$plat->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-cutlery"></i> Nouveau Plats</span>
              <div class="count">{{$plat_new->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-male"></i> Client</span>
              <div class="count green">{{$cde->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-male"></i> Commande Livrer</span>
              <div class="count blue">{{$cde->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calculator"></i> Commandes Non Livrer</span>
              <div class="count red">{{$cde->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calendar"></i> Total Reservation</span>
              <div class="count">7,325</div>
            </div>
    </div>
@stop