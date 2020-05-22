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
                <img class="img-fluid" id="bigPic" src="/{{$product_images[0]}}" alt="">
                @endif
              </div>

              @if($images_count > 1)
              <!-- Small Pictures Container -->
              <div class="mt-2" id="smallPicsContainer">
                <!-- Small Pictures -->
                @for($i = 0; $i < $images_count; $i++)
                  <img class="smallPic" src="/{{$product_images[$i]}}" alt="">
                @endfor
              </div>
              @endif
            </div>
          </div>

          <!-- COL 2: PRODUCT DETAILS -->
          <div class="col-md-7" id="productDetails">

            <!-- Heading -->
            <h2 class="text-center">{{ $product -> name}}</h2>
            <hr>

            <!-- Details -->
            <ul>
              <li><span>Color: </span>{{ $product -> color}}</li>
              <li><span>Material: </span>{{ $product -> material}}</li>
              <li><span>Finish: </span>{{ $product -> finish}}</li>
              <li><span>Includes: </span>
                <ul>
                </ul>
              </li>
              <li><span>Functionalities: </span>
                <ul>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <!-- Table -->
        <div class="my-3" id="table1">
          <table>
            <tr>
              <th>Series no.</th>
              <th>Product ID</th>
              <th>Size</th>
              <th>Box / Carton</th>
              <th>Note</th>
            </tr>
            <!-- Loop here product items -->
            @foreach($product_items as $item)
            <tr>
              <td>{{$item->series_number}}</td>
              <td>{{$item->product_code}}</td>
              <td>{{$item->size}}</td>
              <td>{{$item->box_carton}}</td>
              <td>{{$item->note}}</td>
            </tr>
            @endforeach
          </table>
        </div>

        <!-- Cards -->
        <div id="cardGrp">

          <h2 class="m-3">Item List</h2>

        <!-- Loop here product items -->
        @foreach($product_items as $item)
            <div class="card m-2">
                <div class="card-body">
                    <h4 class="card-title">{{$item->product_code}}</h4>
                    <hr>
                    <h6 class="card-subtitle my-2 text-muted text-center">{{$item->series_number}}</h6>
                    <ul>
                    <li>Size: <span>{{$item->size}}</span></li>
                    <li>Box/Carton: <span>{{$item->box_carton}}</span></li>
                    <li>Note: <span>{{$item->note}}</span></li>
                    </ul>
                </div>
            </div>
        @endforeach
        </div>

      </section>

      <hr>
      @isset($relevant_products)
      <!-- ******************** -->
      <!-- ***** Related Items *****  -->
      <!-- ******************** -->
      <section class="shadow p-3 bg-white rounded" id="relatedItems">
        <div class="m-3"><h2>Related Items</h2></div>

        <!-- Cards -->
        <div class="row">
        @foreach($relevant_products as $relevant_product)
          <div class="col-md-3">
            <div class="card">
              <img src="{{ $relevant_product->image_path }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $relevant_product -> name}}</h5>
                <p class="card-text"></p>
                @if($keyword == null)
                <a href="/product/{{ $relevant_product->series_code }}" class="stretched-link"></a>
                @else
                <a href="/product/{{ $relevant_product->series_code }}?keyword={{$keyword}}" class="stretched-link"></a>
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

