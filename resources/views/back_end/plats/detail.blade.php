@extends('back_end.layouts.back', ['title'=>"liste de Plat"])
@section('contenu')
           <div class=" row">
            <div class="page-title">
              <div class="title_left">
                <h3>{{ $plat->libelle}}</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Details de votre Plats</h2>
                     <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                       <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="{{asset('images/'.$plat->image)}}" alt="..." />
                      </div>
                      <div class="product_gallery">
                        <a>
                          <img src="{{asset('images/'.$plat->image)}}" alt="..." />
                        </a>
                        <a>
                          <img src="{{asset('images/'.$plat->image2)}}" alt="..." />
                        </a>
                        <a>
                          <img src="{{asset('images/'.$plat->image3)}}" alt="..." />
                        </a>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">{{ $plat->libelle}}</h3>

                      <p>{{ $plat->description}}</p>
                      <br />

                      <div class="">
                        <h2>Couleur du produit</h2>
                        <ul class="list-inline prod_color">
                          <li>
                            <p>vert</p>
                            <div class="color bg-green"></div>
                          </li>
                          <li>
                            <p>Bleue</p>
                            <div class="color bg-blue"></div>
                          </li>
                          <li>
                            <p>Rouge</p>
                            <div class="color bg-red"></div>
                          </li>
                          <li>
                            <p>Orange</p>
                            <div class="color bg-orange"></div>
                          </li>

                        </ul>
                      </div>
                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price">{{$plat->prix}} XFA</h1>
                        </div>
                      </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
</div>
@stop