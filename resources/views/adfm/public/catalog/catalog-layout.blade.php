@extends('adfm::public.layout')

@section('content')
<section class="section header-section">
    <div class="container">
        <div class="section__header">
            <h1 class="h1-header">Каталог продукции</h1>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="catalog-menu">
                    @php($categories = \App\Models\Adfm\Catalog\Category::getData())
                    <ul class="vertical-list menu__list">
                        @foreach ($categories[0] as $el)
                            <li class="list__item"><a href="{{$el->slug}}">{{$el->title}}</a>
                                @if (isset($categories[$el->id]) && $el->id != 0)
                                <ul class="vertical-list menu__sub-list">
                                    @foreach ($categories[$el->id] as $sub_el)
                                    <li class="list__sub-item"><a href="{{$sub_el->slug}}">{{$sub_el->title}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9">
                @yield('catalog-content')
            </div>
        </div>
    </div>
</section>
@endsection
