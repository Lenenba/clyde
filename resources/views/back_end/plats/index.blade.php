@extends('back_end.layouts.back', ['title'=>"liste de Plat"])
@section('contenu')
           <div class=" row">
            <div class="page-title">
              <div class="title_left">
                <h3>Plats</h3>
              </div>
              <div class="pull-right">
              <a class="btn btn-round btn-primary" href="{{route('create_plat')}}"><i class="fa fa-plus">  AJOUTER UN PLAT</i></a>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste de Plats</h2>
                     <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                @foreach($plats as $plat)
                   <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{asset('images/'.$plat->image2)}}" alt="image" />
                            <div class="mask">
                              <p>{{$plat->libelle}}</p>
                              <div class="tools tools-bottom">
                                <a href="{{route('detail_plat', $plat->id)}}"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>{{$plat->libelle}}</p>
                          </div>
                        </div>
                      </div>    
                @endforeach               
                  </div>
                </div>
              </div>
            </div>
</div>
@stop