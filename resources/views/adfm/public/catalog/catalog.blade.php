@extends('adfm::public.catalog.catalog-layout')
{{-- @section('meta-title', $catalog->title) --}}

@section('catalog-content')
<div class="row section_catalog">
    @foreach ($catalog as $product)
    <div class="col-6 col-sm-4">
        <div class="product">
            <div class="product__content">
                <div class="product__image">
                    @if (count($product->files) > 0)
                        {!! ImageCache::get($product->files[0], ['w' => 300, 'h' => 300, 'fit' => 'crop']); !!}
                    @endif
                </div>
                <div class="product__data">
                    <div class="add-basket">
                        <i class="fas fa-shopping-cart"></i> <span class="add-basket__text">В корзину</span>
                    </div>
                    <a class="product__link" href="{{route('adfm.show.product', $product)}}">
                        <div class="product__price">
                            {{$product->price}} руб.
                        </div>
                    </a>
                </div>
            </div>
            <div class="product__name"><a href="{{route('adfm.show.product', $product)}}">{{$product->title}}</a></div>
        </div>
    </div>
    @endforeach
</div>
@endsection