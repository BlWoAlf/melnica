@extends('adfm::public.catalog.catalog-layout')
@section('meta-title', $product->title)

@section('catalog-content')
<div class="row section_product">
    <div class="col-12 col-sm-4">
        <div class="product">
            <div class="product__content">
                <div class="product__image">
                    @if (count($product->files) > 0)
                        {!! ImageCache::get($product->files[0], ['w' => 300, 'h' => 300, 'fit' => 'crop']); !!}
                    @endif
                </div>
                <div class="product__data">
                    <div class="product__price">
                        {{$product->price}} руб.
                    </div>
                </div>
            </div>
            <div class="product__name">{{$product->title}}</div>
            <livewire:add-to-cart-button :productid="$product->id">
        </div>
    </div>
    <div class="col-12 col-sm-8">
        <div class="product__description">
            {!! $product->content !!}
        </div>
    </div>
</div>
@endsection