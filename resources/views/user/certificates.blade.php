@extends('layouts.main')

@section('content')
<div class="flex justify-center container mt-20">

      @include('layouts.subviews.user-sidebar')
      <div class="h-full w-3/5">

            <h1 class="text-3xl font-semibold pb-6">เกียรติบัตร</h1>

            <div class="grid grid-cols-2 gap-5">
                
                <x-certificate-item camp-name="abc" img-path="https://images.unsplash.com/photo-1493476523860-a6de6ce1b0c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"/>
                
            </div>

</div>

      
      

      
</div>


@endsection