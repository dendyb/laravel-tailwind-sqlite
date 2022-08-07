@extends('header')

@section('title')
  App: Customer
  @endsection


@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto flex flex-col">
          <div class="lg:w-4/6 mx-auto">
         
            <div class="flex flex-col sm:flex-row mt-10">
              <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex flex-col items-center text-center justify-center">
                  <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Phoebe Caulfield</h2>
                  <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                  <p class="text-base">Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland.</p>
                </div>
              </div>
              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
               
                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Customer</h2>
                <br />

                <form action="customers" method=POST>
                  <div class=" bg-white flex flex-col ">
                  
                    <div class="relative mb-4">
                      <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                      <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('name') }}">

                      {{ $errors->first('name') }}

                    </div>


                    <div class="relative mb-4">
                      <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                      <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}">
                    </div>
              
                    <!-- notif feedback dari error validasi -->
                    {{ $errors->first('email') }}

                    <button type=submit class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    
                  </div>

                  @csrf
                </form>

              
                <div class="h-1 bg-indigo-500 rounded mt-5 mb-4"></div>

                <p class="leading-relaxed text-lg mb-4">
                    @foreach ($customers as $customer)
                        <li>{{ $customer->name }} - {{ $customer->email }}</li>
                    @endforeach
                </p>
                   
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
    