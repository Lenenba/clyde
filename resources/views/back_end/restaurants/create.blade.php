@extends('back_end.layouts.back', ['title'=>"Nouveau Restaurant"])
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
                    <h2>Enregistrement d'un nouveau Restaurant</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="{{route('store_restaurant')}}" enctype="multipart/form-data" method="POST" novalidate="true">
                        {{ csrf_field()}}
                      @include('back_end.partials.restaurantform')
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Annuler</button>
                          <button id="send" type="submit" class="btn btn-success">Ajouter un Restaurant</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            


       <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste de tous les Restaurants  <small>Enregistrer</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      listes des restaurants de la ville de douala et leur localisation
                    </p>
                    <table id="datatable-buttons" class="table table-striped jambo_table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>nom</th>
                          <th>logo</th>
                          <th>localisation</th>
                          <th>telephone</th>
                          <th>adresse</th>
                          <th>email</th>
                          <th>action</th>
                        </tr>
                      </thead>
                    @foreach($restaurant as $restaurants)
                      <tbody>
                        <tr>
                          <td>{{$restaurants->id_resto}}</td>
                          <td>{{$restaurants->nom_resto}}</td>
                          <td>{{$restaurants->logo}}</td>
                          <td>{{$restaurants->localisation}}</td>
                          <td>{{$restaurants->telephone_resto}}</td>
                          <td>{{$restaurants->adresse_resto}}</td>
                          <td>{{$restaurants->email_resto}}</td>
                          <td><a class="btn btn-success btn-sm" href="{{route('edit_restaurant', $restaurants->id_resto)}}" ><span class="fa fa-edit"></span></a><a class="btn btn-danger btn-sm" href="#" ><span class='fa fa-trash'></span></a></td>
                        </tr>                     
                      </tbody>
                    @endforeach
                    </table>
                  </div>
                </div>
              </div>
          </div>
          
@stop