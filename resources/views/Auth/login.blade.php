<Title>Login</Title>
@extends ('header')


@section('content')
<div class="bg-grey-lighter  flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Login</h1>
                    @if (session('status'))
                <div class=" p-4 rounded-lg mb-6 text-black text-center">
                    {{ session('status') }}
                </div>
            @endif
                    <form action="{{ route('login') }}" method="post">                
                     @csrf
                     
                     <div class="mb4">
                     
                      
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email"
                        value="{{old('email')}}" />

                        @error('email') 
                        <div class= "text-red-500 mt-56 text-sm">
                            {{$message}}
                        </div>
                        @enderror

                       
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        id="password"
                        placeholder="Password" 
                        />

                        @error('password') 
                        <div class= "text-red-500 mt-56 text-sm">
                            {{$message}}
                        </div>
                        @enderror

                    <div class="justify-center">
                    <button class="bg-blue-500 
                          hover:bg-blue-700 
                          text-white 
                          font-bold 
                          py-2 
                          px-4 
                          rounded 
                          focus:outline-none 
                          focus:shadow-outline" type="submit">Login!</button>
                          
                          </div>
                    </form>

                </div>
            </div>
        </div>
@endsection
