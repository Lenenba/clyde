@extends('front_end.layouts.default' , ['title' =>'Acceuil'])

@section('contenu')

                <div class="col-md-9">

                    @include('front_end.partials.carousel')

                        <div class="row">
                        @foreach($restos as $resto)
                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{asset('images/'.$resto->logo)}}" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right"></h4>
                                        <center>
                                            <h4><a href="{{route('list_plats_front', $resto->id)}}">{{$resto->nom}}</a></h4> 
                                            <p>{{$resto->slogan}}</p>
                                        </center>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right">notes</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
@stop
