@extends('layouts.layout', ['search_action' => $search_action])
    @section('content')

      <!-- ******************** -->
      <!-- ***** Breadcrumb *****  -->
      <!-- ******************** -->
      @isset($breadcrumbs)
      <div class="m-3 px-1" id="#breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb px-2 py-1 my-2">

            @foreach ($breadcrumbs as $breadcrumb)
              @if($loop -> first)
                <li class="breadcrumb-item"><a href="/products">{{$breadcrumb->name}}</a></li>
              @elseif($loop -> last)
               <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->name }}</li>
              @else
                <li class="breadcrumb-item"><a href="/products/{{$breadcrumb->name}}">{{$breadcrumb->name}}</a></li>
              @endif
            @endforeach
          </ol>
        </nav>
      </div>
      @endisset


      <!-- ******************** -->
      <!-- ***** Heading & Sort *****  -->
      <!-- ******************** -->
      <section class="shadow p-3 bg-white rounded" id="gridSection">

        <div class="row justify-content-between">
          <!-- Heading -->
          @isset($breadcrumbs)
            <h2 class="m-3">
            @foreach ($breadcrumbs as $breadcrumb)
              @if($loop -> last)
                {{$breadcrumb->name}}
              @endif
            @endforeach

            @isset($keyword)
              : {{ $keyword }}
            @endisset
          </h2>
          @endisset

          <!-- Sort -->
          <div class="my-auto mr-4">
            <select name="" id="">
              <option value="">Relevance</option>
              <option value="">Price</option>
            </select>
          </div>
        </div>

        <!-- ******************** -->
        <!-- ***** Grid/Cards: Products *****  -->
        <!-- ******************** -->

        <div class="row">
        @foreach($products as $product)
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <img src="{{ $product->image_path }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $product -> product_name}}</h5>
                <p class="card-text"></p>
                @if($keyword == null)
                <a href="/product/{{ $product->id }}" class="stretched-link"></a>
                @else
                <a href="/product/{{ $product->id }}?keyword={{$keyword}}" class="stretched-link"></a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
        </div>

        <!-- ******************** -->
        <!-- ***** Pagination *****  -->
        <!-- ******************** -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center my-3">
           {{ $products->links() }}
          </ul>
        </nav>
      </section>

      <hr>



    @endsection