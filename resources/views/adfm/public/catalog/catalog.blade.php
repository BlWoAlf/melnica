@extends('adfm::public.catalog.catalog-layout')
@section('meta-title', 'какой-то загловок')

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
                    <livewire:add-to-cart-button :productid="$product->id">
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