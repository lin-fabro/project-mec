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
                <li class="breadcrumb-item"><a href="/categories">{{$breadcrumb->name}}</a></li>
              @elseif($loop -> last)
               <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->name }}</li>
              @else
                <li class="breadcrumb-item"><a href="/categories/{{$breadcrumb->code}}">{{$breadcrumb->name}}</a></li>
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

        <div class="row justify-content-center">
          <!-- Heading -->
          @isset($breadcrumbs)
            <h2 class="m-3 p-0 gridHeading"><i class="fas fa-wrench wrench1"></i> 
            @foreach ($breadcrumbs as $breadcrumb)
              @if($loop -> last)
                {{$breadcrumb->name}}
              @endif
            @endforeach

            @isset($keyword)
              : {{ $keyword }}
            @endisset
           <i class="fas fa-wrench wrench2"></i></h2>
          @endisset
        </div>

        <!-- ******************** -->
        <!-- ***** Grid/Cards: Categories *****  -->
        <!-- ******************** -->

        <div class="row">
        @foreach($sub_categories as $sub_category)
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
              <img src="{{ $sub_category->image_path }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $sub_category -> name}}</h5>
                <p class="card-text"></p>
                @if($sub_category->level == 0)
                <a href="/product/{{ $sub_category->series_code }}" class="stretched-link"></a>
                @elseif($sub_category->level != 3)
                <a href="/categories/{{ $sub_category->code }}" class="stretched-link"></a>
                @else
                <a href="/products/{{ $sub_category->code }}" class="stretched-link"></a>
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
          <ul class="pagination d-flex justify-content-center my-3">
           {{ $sub_categories->links() }}
          </ul>
        </nav>
      </section>

      <hr>



    @endsection