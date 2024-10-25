@extends('base')

@section('content')
   <h1>admin panel</h1> 
   
   @foreach ($contacts as $contact)
   <ul>
      <li>
         {{$contacts -> id}}
         {{$contacts -> mail}}
      </li>
   </ul>      
   @endforeach
@endsection