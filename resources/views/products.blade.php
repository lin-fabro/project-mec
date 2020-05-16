@extends('layouts.layout', ['search_action' => $search_action])
    @section('content')

      <!-- ******************** -->
      <!-- ***** Breadcrumb *****  -->
      <!-- ******************** -->
      <div class="m-3 px-1" id="#breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb px-2 py-1 my-2">

            @foreach ($breadcrumbs as $breadcrumb)
              @if($loop -> first)
                <li class="breadcrumb-item"><a href="/products">{{$breadcrumb->name}}</a></li>
              @else
                <li class="breadcrumb-item"><a href="/products/{{$breadcrumb->code}}">{{$breadcrumb->name}}</a></li>
              @endif
            @endforeach
            <!-- Product Name -->
            <li class="breadcrumb-item active" aria-current="page">{{ $product -> product_name}}</li>
          </ol>
        </nav>
      </div>


      <!-- ******************** -->
      <!-- ***** Product Picture & Details *****  -->
      <!-- ******************** -->
      <section>

        <div class="row">

          <!-- COL 1: PRODUCT PICTURE -->
          <div class="col-md-5 mb-3" id="productPic">

            <!-- Picture Container -->
            <div id="picContainer">

              <!-- Big Picture -->
              <div>
                @if($images_count < 1)
                <img class="img-fluid" id="bigPic" src="/images/no_image.jpg" alt="">
                @else
                <img class="img-fluid" id="bigPic" src="{{$product_images[0]}}" alt="">
                @endif
              </div>

              @if($images_count > 1)
              <!-- Small Pictures Container -->
              <div class="mt-2" id="smallPicsContainer">
                <!-- Small Pictures -->
                @for($i = 0; $i < $images_count; $i++)
                  <img class="smallPic" src="{{$product_images[$i]}}" alt="">
                @endfor
              </div>
              @endif
            </div>
          </div>

          <!-- COL 2: PRODUCT DETAILS -->
          <div class="col-md-7" id="productDetails">

            <!-- Heading -->
            <h2 class="text-center">{{ $product -> product_name}}</h2>
            <hr>

            <!-- Details -->
            <ul>
              <li>Model Number: <span>{{ $product -> model_number}}</span></li>
              <li>Product ID: {{ $product -> product_code}}</li>
              <li>Product Size: {{ $product -> size}}</li>
              <li>Item Dimensions:
                @if($product->item_length != null && $product->item_length != null && $product->item_length != null)
                  {{ $product -> item_length}} L x {{ $product -> item_width}} W x {{ $product -> item_height}} H mm
                @endif
              </li>
              <li>Package Dimensions:
                @if($product->package_length != null && $product->package_width != null && $product->package_height != null)
                  {{ $product -> package_length}} L x {{ $product -> package_width}} W x {{ $product -> package_height}} H mm
                @endif
              </li>
              <li>Net Weight:
                @if($product -> net_weight != null)
                  {{ $product -> net_weight}} g
                @endif
              </li>
              <li>Gross Weight:
                @if($product -> gross_weight != null)
                  {{ $product -> gross_weight}} g
                @endif
              </li>
              <li>Color: {{ $product -> color}}</li>
              <li>Material: {{ $product -> material}}</li>
              <li>Product Description: <p></p></li>
              <li>Note:<p>{{ $product -> note}}</p></li>
            </ul>
          </div>
        </div>
      </section>

      <hr>
      @isset($relevant_products)
      <!-- ******************** -->
      <!-- ***** Related Items *****  -->
      <!-- ******************** -->
      <section class="shadow p-3 bg-white rounded">
        <div class="m-3 mb-5"><h2>Related Items</h2></div>

        <!-- Cards -->
        <div class="row">
        @foreach($relevant_products as $relevant_product)
          <div class="col-md-3">
            <div class="card">
              <img src="{{ $relevant_product->image_path }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $relevant_product -> product_name}}</h5>
                <p class="card-text"></p>
                @if($keyword == null)
                <a href="/product/{{ $relevant_product->id }}" class="stretched-link"></a>
                @else
                <a href="/product/{{ $relevant_product->id }}?keyword={{$keyword}}" class="stretched-link"></a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </section>

      <hr>
      @endisset
    @endsection

