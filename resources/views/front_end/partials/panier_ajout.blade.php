<form method="POST" action="{{route('cart_content', $resto->id)}}">
					 <input type="hidden" name="id" value="{{$plat->id}}">
	                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <button type="submit" class="btn btn-block btn-success"> Ajouter au Panier
                     <i class="icon-shopping-cart"></i></button>
</form>