@extends('backend.layout')

@section('content')


    

    <!-- Page Content -->

    

        <h1>Show Sesi: {{ $sesi->name }}</h1> </br>

       @include('common.alert')
      


      
  
        
        <p>Name : <strong>{{$sesi->name}}</strong></p>
        <p>Status : <strong>{{$sesi->status? 'Open' : 'Close'}}</strong></p>
        <p>Pingat : <strong>{{$sesi->pingat}}</strong></p></br>

        <p><a href="{{ url()->previous() }}">Back To Senarai</a></p>
      

   @endsection

   @push('css')
   <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
   @endpush

   @push('js')
   <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   @endpush