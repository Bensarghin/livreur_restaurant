@extends('layouts.app')
@section('content')
<div class="m-4">

<div class="card mt-3 mb-3">
    <div class="card-body">
      <h4 class="card-title">{{$data->name}}</h4>
      <p class="card-text">{{$data->adresse}}</p>
      <h5 class="card-title">{{$data->tele}}</h5>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
@foreach ($data->categorie as $categ)
<div class="card mt-3">
    <div class="card-header" style="background: #fff">
        <h3>{{$categ->name}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
        @foreach ($categ->produit as $item)
        <div class="col-md-3">
            <div class="card mt-3">
                <input type="hidden" name="" class="product" value="{{$item->id}}">
                <img src="{{asset('products/'.$item->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$item->name}}</h4>
                    <p class="card-text">{{$item->desc}}</p>
                    <h5 class="card-title"> {{$item->prix}}, 00DH</h5>
                    <small><i class="far fa-clock"></i> {{$item->duree_preparation}} min</small>
                    <br>
                    <a href="{{route('AddToCart',['produit'=>$item])}}" class="btn btn-success">+</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>
  @endforeach


</div>
<div class="col-md-3">
    <div class="card mt-3" style="border:solid #E45826 1px;">
        <div class="card-header" style="background:#E45826;">
            <h5 class="text-light">Commandes Lits</h5>
        </div>
        <div class="card-body" id="panel">
            @if($card->getDetails()->get('items')->count() > 0)
            @foreach($card->getDetails()->get('items') as $cart)
            <p>({{$cart->get('quantity')}} x ) | {{$cart->get('title')}}</p>
            @endforeach
            <p>{{$card->getItemsSubtotal()}} DH</p>
            <a class="btn btn-success" href="{{route('deleteCard')}}">Commander</a>
            <a class="btn btn-dark" href="{{route('deleteCard')}}">Annuler</a>
            @else
            <p>Choisir un produit</p>
            @endif
        </div>
    </div>
</div>
</div>
    
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $(function() {
        const foods = [];
        let a = [];
        let j = 1;
            $(".addToPanel").click(function() {
                let x = $(this).attr('data-name');
                foods.push(x);
                const counts = {};
                $('#panel').html('');
                for (var i=0, l=foods.length; i<l; i++) {
                    if (a.indexOf(foods[i]) === -1 && foods[i] !== '') {
                            a.push(foods[i]);
                        }
                }
                
                $.each(a, function( index, value ) {
                    $('#panel').append("<p class='row'><span class='col-sm-8'> <span class='badge bg-secondary'>"+j+"</span> " +value+"</span><a class='btn btn-success col-sm-2 btn-sm plus'>+</a> <a class='btn btn-danger btn-sm ml-2 col-sm-2 minus'>-</a></p>");
                });
                // foods.forEach((i) => {
                //     counts[i] = (counts[i] || 0) + 1;
                // });
                // if($.inArray(x, foods)) {
                //     i++;
                    // $('#panel').append(i+" "+x+" </br>");
                // }
                // else {
                //     $('#panel').append(i+" "+x+" </br>");
                // }
                console.log(j);
            });
            
                
            $('.plus').click(function() {
                    j++;
                });
    });
</script>