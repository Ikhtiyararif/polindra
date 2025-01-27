@extends('layouts.default')
@section('page-title', 'Contact Us')
@include('includes.nav')


@section('content')
<div class="pt-20 md:pt-16">
  <div class="md:grid md:grid-cols-2 md:gap-24">

  @if(Session::has('success'))
        <template id="default-toast">
          <swal-html>
            {{Session::get('success')}}
          </swal-html>

          <swal-button type="cancel">
            close
          </swal-button>
          
          <swal-param name="allowEscapeKey" value="true" />
          <swal-param name="showConfirmButton" value="false" />
        </template>
      @endif

    <div class="px-8 py-12 md:px-28 md:py-16">
      <form id="send-mail" action="{{ route('contactus.send.mail') }}" method="POST" class="mb-8">
        {{ csrf_field() }}
        <h4 class="text-center text-black">Pertanyaan dan Kebutuhan Anda.</h4>
        <h4 class="text-center text-black">Hubungi Kami!</h4>
        <div class="mb-8">
          <div class="col-md">
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInputGrid" name="email" placeholder="">
              <label for="floatingInputGrid">Email anda</label>
            </div>
          </div>
        </div>

        <div class="mb-8">
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInputGrid" name="name" placeholder="">
              <label for="floatingInputGrid">Nama anda</label>
            </div>
          </div>
        </div>

        <div class="mb-8">
          <div class="col-md">
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInputGrid" name="phone" placeholder="">
              <label for="floatingInputGrid">Telepon anda</label>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="col-md">
            <div class="form-floating">
              <textarea class="form-control" name="message" id="floatingTextarea2" style="height: 100px" placeholder="Deskripsi Masalah"></textarea>
              <label for="floatingTextarea2">Deskripsi Masalah</label>
            </div>
            <p id="error-message" class="text-black font-bold mt-2"></p>
          </div>
        </div>

        <!-- <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexRadioDefault1">
              Bukan Robot
            </label>
          </div>
        </div> -->

        <div>
          <button class="bg-primary focus:outline-0 w-full py-2 text-white uppercase font-bold rounded" type="submit">Kirimkan Pesan</button>
        </div>
      </form>
@foreach($contacts as $contact)
      <div class="flex items-center pt-6">
        <div class="flex w-12 h-12 bg-primary text-white rounded justify-center items-center mr-6">
        <i class="ri-building-2-fill text-2x1"></i>
        </div>

        <div>
          <p class="font-light">
            {{ $contact->address ?? "Bandung"}}
          </p>
        </div>
      </div>

      <div class="flex items-center pt-6">
        <div class="flex w-12 h-12 bg-primary text-white rounded justify-center items-center mr-6">
        <i class="ri-phone-line text-2xl"></i>
      </div>

        <div>
          <p class="font-light">
            {{ $contact->phone_number ?? "089653654635" }}
          </p>
        </div>
      </div>

      <div class="flex items-center pt-6">
        <div class="flex w-12 h-12 bg-primary text-white rounded justify-center items-center mr-6">
          <i class="ri-mail-line text-2xl"></i>
        </div>

        <div>
          <p class="font-light">
            {{ $contact->email ?? "email@gmail.com" }}
          </p>
        </div>
      </div>
    </div>

 

    <div class="px-8 py-12 md:px-28 md:py-16">

      <img src="{{url('/assets/images/rumah.png')}}" class="h-99" />
      <br>
      <h3 class="text-black pn-2">{{ $contact->title ?? "Lorem Ipsum" }}</h3>
      <p class="text-black pb-4">{{ $contact->description ?? "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatibus libero ducimus omnis voluptatum, quam voluptas mollitia ipsa veritatis ea repellat officiis dolorum doloribus ipsam assumenda quae hic? Voluptatibus nemo alias quasi suscipit. Soluta voluptatibus ratione maxime officiis minus reprehenderit deleniti sit ex suscipit, deserunt beatae facilis ea non earum?" }}</p>
      <h3 class="text-black pb-2">Pertanyaan yang Sering Ditanyakan</h3>

      <form class="form-group">
        <fieldset disabled>
          <div class="mb-3">
            <select id="disabledSelect" class="form-select">
              <option>Apa?</option>
            </select>
          </div>
          <div class="mb-3">
            <select id="disabledSelect" class="form-select">
              <option>Mengapa?</option>
            </select>
          </div>
          <div class="mb-3">
            <select id="disabledSelect" class="form-select">
              <option>Bagaimana?</option>
            </select>
          </div>
        </fieldset>
      </form>

    </div>
    @endforeach
  </div>
</div>
</div>



@include('includes.footer')
@endsection