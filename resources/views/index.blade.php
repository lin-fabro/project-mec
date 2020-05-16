@extends('layouts.layout', ['search_action' => $search_action])
      @section('main_content')

      <!-- ******************** -->
      <!-- ***** Carousel: Featured Products *****  -->
      <!-- ******************** -->

      @if($images_count > 0)
      <section class="shadow p-3 bg-white rounded">

        <div>
          <div>
            <h2 class="m-2">FEATURED PRODUCTS</h2>
          </div>

          <div id="carouselExampleIndicators" class="carousel slide mx-auto" style="width: 75%;" data-ride="carousel">
            <ol class="carousel-indicators">
              @if($images_count > 1)
                @for($i = 0; $i < $images_count; $i++)
                  @if($i==0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                  @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                  @endif
                @endfor
              @endif
            </ol>
            <div class="carousel-inner">
            @foreach ($featured_images as $feature)
              @if($loop -> first)
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{$feature}}" alt="">
                <div class="carousel-caption d-block">
                </div>
              </div>
              @else
              <div class="carousel-item">
                <img class="d-block w-100" src="{{$feature}}" alt="">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              @endif
            @endforeach
            </div>

            @if($images_count > 1)
            <a class="carousel-control-prev" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            @endif
          </div>
        </div>
      </section>
      @endif




      <!-- ******************** -->
      <!-- ***** Grid: About Meiko *****  -->
      <!-- ******************** -->
      <section class="shadow p-3 bg-white rounded" id="aboutMeikoSec">

        <div><h2 class="m-3 mb-5">ABOUT MEIKO</h2></div>

        <div class="mx-4">
          <!-- Excellent Quality -->
          <div class="row align-items-center my-lg-0 my-5" id="excellentQuality">
            <div class="col-lg-6 text-center">
              <h3>
                <i class="fas fa-check"></i> Excellent Quality
              </h3>
            </div>

            <!-- Desc. Q -->
            <div class="col-lg-6 bg-light text-center">
              <p><i class="fas fa-quote-left" style="font-size: 1.5rem;"></i> Meiko handtools are manufactured and imported straight from Taiwan and are assured of only the best of quality to ensure customer satisfaction. The people behind Meiko Tools not only sell tools but also actively engage in market research to further develop and improve the product line-up and overall quality. <i class="fas fa-quote-right" style="font-size: 1.5rem;"></i></p>
            </div>
          </div>

          <!-- Customer Satisfaction is Guaranteed -->
          <div class="row align-items-center my-lg-0 my-5">
            <div class="col-lg-6 order-2 order-lg-1 bg-light text-center">
              <p><i class="fas fa-quote-left" style="font-size: 1.5rem;"></i> Catering mostly to Filipino, Filipino-Chinese, and Taiwanese businessmen alike, Meiko Tool’s ever expanding variety of products are sure to please every customer both new and old.  <i class="fas fa-quote-right" style="font-size: 1.5rem;"></i></p>
            </div>

            <!-- Desc. CS -->
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <h3>
                <i class="fas fa-check"></i> Customer Satisfaction is Guaranteed
              </h3>
            </div>
          </div>


          <!-- Honest Prices -->
          <div class="row align-items-center my-lg-0 my-5">
            <div class="col-lg-6 text-center">
              <h3>
                <i class="fas fa-check"></i> Honest Prices
              </h3>
            </div>

            <!-- Desc. P -->
            <div class="col-lg-6 text-center bg-light">
              <p><i class="fas fa-quote-left" style="font-size: 1.5rem;"></i> Meiko Tools offers highly competitive prices in parallel to its top-notch products.  <i class="fas fa-quote-right" style="font-size: 1.5rem;"></i></p>
            </div>
          </div>
        </div>

      </section>


      <!-- ******************** -->
      <!-- ***** Form: Contact Us *****  -->
      <!-- ******************** -->

      <section class="shadow p-3 bg-white rounded" id="contactUsSec">

        <div><h2 class="m-3 mb-4">CONTACT US</h2></div>


        <form class="border rounded p-3" method="post" enctype="multipart/form-data" action="{{ url('/inquiry') }}">
        {{ csrf_field() }}

          <!-- Last Name -->
          <div class="form-group row">

            <label for="last_name" class="col-md-2 col-form-label">Last Name</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="last_name" placeholder="Dela Cruz" required>
              @error('inputLastName')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>

          <!-- First Name -->
          <div class="form-group row">

            <label for="first_name" class="col-md-2 col-form-label">First Name</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="first_name" placeholder="Juan" required>
              @error('inputFirstName')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>


          <!-- Company Name -->
          <div class="form-group row">

            <label for="company_name" class="col-md-2 col-form-label">Company Name</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="company_name" placeholder="ABC Corporation" required>
              @error('inputCompName')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>


          <!-- Email -->
          <div class="form-group row">

            <label for="email" class="col-md-2 col-form-label">Email</label>

            <div class="col-md-10">
              <input type="email" class="form-control" name="email" placeholder="abcd@example.com" required>
              @error('inputEmail')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>


          <!-- Contact No. -->
          <div class="form-group row">

            <label for="contact_no" class="col-md-2 col-form-label">Contact Number</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="contact_no" placeholder="Mobile No./Landline No." required>
              @error('inputContactNo')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>

          <!-- Inquiry/Order -->
          <div class="form-group row">

            <label for="inquiry_order" class="col-md-2 col-form-label">Inquiry/Order</label>

            <div class="col-md-10">
              <input type="textarea" class="form-control" name="inquiry_order" placeholder="Inquiry/Order" style="height: 300px; width: 100%;" required>
              @error('inputInquiryOrder')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>

          <!-- Captcha -->
          <div class="form-group row">

            <label for="captcha" class="col-md-2 col-form-label">@captcha</label>

            <div class="col-md-10">

              <input type="text" class="form-control" name="captcha" autocomplete="off" required  placeholder="Input captcha">
              @error('captcha')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

          </div>

          <!-- Submit Button-->
          <div class="d-flex justify-content-center" id="submitBtn">
            <button type="submit" class="btn border btn-primary">Submit</button>
          </div>

        </form>

      </section>

      <hr>
      @endsection