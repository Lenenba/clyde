@extends('back_end.layouts.back', ['title'=>"Nouveau Plat"])
@section('contenu')
    <div class=" row">
            <div class="page-title">
              <div class="title_left">
                <h3>Plats</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Enregistrement d'un nouveau Plats</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="{{route('store_plat')}}" enctype="multipart/form-data" method="POST" novalidate="true">
                        {{ csrf_field()}}
                      @include('back_end.partials.platform')
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="{{route('list_plats_back')}}" class="btn btn-primary">Annuler</a>
                          <button id="send" type="submit" class="btn btn-success">Ajouter un Plat</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>
    
          
@stop