@extends("layouts.master")
@section('title')
    <title>home pages</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection
@section('js')
    <link rel="stylesheet" href="{{asset('home/home.js')}}">
@endsection

@section('content')

    <!--/slider-->
    @include('home.components.banner')
    <!--/slider-->


    <section>
        <div class="container">
            <div class="row">
                @include('component.sidebar')

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        @include('home.components.feature_product')
                        <!--features_items-->
                        <!--/category-tab-->
                        @include('home.components.category_tab')
                        <!--/category-tab-->
                        <!--/recommended_items-->
                        @include('home.components.recommend_product')
                        <!--/recommended_items-->

                    </div>
                </div>
            </div>
    </section>

@endsection
<body>


</body>
</html>
