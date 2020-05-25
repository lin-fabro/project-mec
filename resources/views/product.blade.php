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
                <li class="breadcrumb-item"><a href="/categories">{{$breadcrumb->name}}</a></li>
              @elseif($loop -> last)
               <li class="breadcrumb-item"><a href="/products/{{$breadcrumb->code}}">{{ $breadcrumb->name }}</a></li>
              @else
                <li class="breadcrumb-item"><a href="/categories/{{$breadcrumb->code}}">{{$breadcrumb->name}}</a></li>
              @endif
            @endforeach
            <!-- Product Name -->
            <li class="breadcrumb-item active" aria-current="page">{{ $product -> name}}</li>
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
              <div class="text-center">
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
              @if (!empty($product->color))
                <li><span>Color: </span>{{ $product -> color}}</li>
              @endif
              @if (!empty($product->material))
              <li><span>Material: </span>{{ $product -> material}}</li>
              @endif
              @if (!empty($product->finish))
              <li><span>Finish: </span>{{ $product -> finish}}</li>
              @endif
              @if (!empty($product->features_benefits))
              <li><span>Features & Benefits: </span>
                <ul>
                  @for ($i = 0; $i < count($product->feature_list); $i++)
                    <li>
                    {{$product->feature_list[$i]}}
                    </li>
                  @endfor
                </ul>
              </li>
              @endif
              @if (!empty($product->functionalities))
              <li>
              <span>Functionalities: </span>
                <ol>
                @for ($i = 0; $i < count($product->functionality_list); $i++)
                  <li>
                  {{$product->functionality_list[$i]}}
                  </li>
                @endfor
                </ol>
              </li>
              @endif
              @if (!empty($product->includes))
              <li><span>Includes: </span>
                <ul>
                  @for ($i = 0; $i < count($product->include_list); $i++)
                    <li>
                    {{$product->include_list[$i]}}
                    </li>
                  @endfor
                </ul>
              </li>
              @endif
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
              @if (!empty($item->series_number))
                <td>{{$item->series_number}}</td>
              @else
                <td>-</td>
              @endif
              @if (!empty($item->product_code))
                <td>{{$item->product_code}}</td>
              @else
                <td>-</td>
              @endif
              @if (!empty($item->size))
                <td>{{$item->size}}</td>
              @else
                <td>-</td>
              @endif
              @if (!empty($item->box_carton))
                <td>{{$item->box_carton}}</td>
              @else
                <td>-</td>
              @endif
              @if (!empty($item->note))
                <td>{{$item->note}}</td>
              @else
                <td>-</td>
              @endif
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
                    <li>Size:
                      @if (!empty($item->size))
                        <span>{{$item->size}}</span>
                      @else
                        <span>-</span>
                      @endif
                    </li>
                    <li>Box/Carton: <span>{{$item->box_carton}}</span></li>
                    <li>Note:
                      @if (!empty($item->note))
                        <span>{{$item->note}}</span>
                      @else
                        <span>-</span>
                      @endif
                    </li>
                    </ul>
                </div>
            </div>
        @endforeach
        </div>

      </section>

      @isset($relevant_products)
      <hr>
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

      @endisset

      <hr>
    @endsection

