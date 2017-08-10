@extends('front_end.layouts.default' , ['title' =>'liste de plats'])

@section('contenu')

                <div class="col-md-9">
                <div class="breadcrumb">
                 <li><a href="{{route('homepage')}}">ACCUEIL</a></li>
                 <li><a href="#"> {{$resto->nom}}</a></li>
                </div>
                        <div class="row">
                    @if($plats->count() == 0)
                      <h3> {{$resto->nom}} ne dispose pour l'instant d'aucun plat</h3>
                    @else
                        @foreach($plats as $plat)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="col-item">
                                      <div class="post-img-content">
                                        <img src="{{asset('images/'.$plat->image2)}}" class="img-responsive" />
                                        <span class="post-title">
                                        </span>
                                    </div>
                                    <div class="info">
                                         <div class="row" style="text-align: center;">
                                            <div class="price col-md-12">
                                                <h5 class="small"> {{$plat->libelle}} </h5>
                                                <h5 class="price-text-color">{{$plat->prix}} XFA</h5>
                                            </div>
                                        </div>
                                       
                                        <div class="separator clear-left">
                                             
                                            <p class="btn-add">
                                                <a href="{{route('cart_content', $plat->id)}}" class="hidden-sm"><i class="glyphicon glyphicon-shopping-cart" style="color: #337ab7"></i></a>
                                            </p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#" class="hidden-sm">details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                               </div>
                         </div>

                            @endforeach
                    @endif
                        </div>
                </div>
@stop
