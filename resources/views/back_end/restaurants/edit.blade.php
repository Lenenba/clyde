@extends('back_end.layouts.back', ['title'=>"Modifier Restaurant"])
@section('contenu')

 <div class=" row">
            <div class="page-title">
              <div class="title_left">
                <h3>RESTAURANT</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier le Restaurant {{$resto->nom_resto}}</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="{{route('store_restaurant')}}" enctype="multipart/form-data" method="POST" novalidate="true">
                        {{ method_field('PUT')}}
                      @include('back_end.partials.form')
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Annuler</button>
                          <button id="send" type="submit" class="btn btn-success">Modifier Restaurant</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
  </div>


@stop