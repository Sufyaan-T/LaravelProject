<Title>Sign Up</Title>
@extends ('header')


@section('content')
<div class="bg-grey-lighter  flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <form action="/register" method="POST">
                     @csrf
                     <div class="mb4">
                     <input
                        type="text" class="block border border-grey-light w-full p-3 rounded mb-4" 
                        name="name" id="name" placeholder="Full Name" value="{{old('name')}}">
                        
                        @error('name') 
                        <div class= "text-red-500 mt-56 text-sm">
                            {{$message}}
                        </div>
                        @enderror
                          
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
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="keyprogramming"
                        placeholder="Key programming languages"
                        value="{{old('keyprogramming')}}" />

                        @error('keyprogramming') 
                        <div class= "text-red-500 mt-56 text-sm">
                            {{$message}}
                        </div>
                        @enderror 

                         <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="education"
                        placeholder="education"
                        value="{{old('education')}}" />

                        @error('education') 
                        <div class= "text-red-500 mt-56 text-sm">
                            {{$message}}
                        </div>
                        @enderror 

                        <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="URLlinks"
                        placeholder="URL Link"
                        value="{{old('URLlinks')}}" /> 

                         @error('URLlinks') 
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

                        
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Confirm Password!"/>

                        @error('password_confirmation') 
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
                          focus:shadow-outline" type="submit">Sign Up!</button>
                          
                          </div>
                    </form>

                </div>
            </div>
        </div>
@endsection