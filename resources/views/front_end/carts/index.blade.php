@extends('front_end.layouts.default' , ['title' =>'votre panier'])

@section('contenu')
   <div class="col-md-9">
      <div class="breadcrumb">
      <li><a href="{{route('homepage')}}">ACCUEIL</a></li>
      <li><a href="#">LISTE D'ARTICLE</a></li>
  </div>
<a href="#" class="btn btn-default" style="float: right;"><span class="glyphicon glyphicon-chevron-left"></span> Continuer ces courses</a></br></br>
<div class="table-responsive">
            <table class="table table-condensed">
                <thead style="background-color:#337ab7 ">
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Libelle</td>
                        <td class="price">Prix</td>
                        <td class="quantity">Quantite</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::content() as $item)

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{asset('images/'.$item->options->image)}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$item->name}}</a></h4>
                            <p>Restaurant: {{$item->options->resto}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{$item->price}} XFA</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="btn btn-default sm" href=""><span class="glyphicon glyphicon-minus"></span> </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="btn btn-default sm" href=""><span class="glyphicon glyphicon-plus"></span> </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$item->subtotal}} XFA</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="glyphicon glyphicon-trash" style="color: red;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                    <td colspan="4" style="text-align:right">Montant H.T: </td>
                    <td style="text-align:right"> {{Cart::subtotal()}} XFA</td>
                      </tr>
                     <tr>
                        <td colspan="4" style="text-align:right">Taxe: </td>
                        <td style="text-align:right"> {{Cart::tax()}} XFA</td>
                     </tr>
                     <tr>
                        <td colspan="4" style="text-align:right"><strong>Montant TTC :</strong></td>
                        <td style="display:block; text-align:right" > <strong> {{Cart::total()}} XFA</strong> </td>
                     </tr>
                </tbody>
            </table>
        </div></br></br></br>
        <div class="row" style="float: right;">        
            <a href="#" class="btn btn-default" ><span class="glyphicon glyphicon-chevron-left"></span> Continuer ces courses</a>
            <a href="{{route('store')}}" class="btn btn-primary" >Commander</a>
        </div>
               
@stop
