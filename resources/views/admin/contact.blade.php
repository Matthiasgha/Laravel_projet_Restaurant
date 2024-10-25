@extends('base')
@section('title', 'Admin')
@section('content')
   <h1>admin panel</h1> 
   
   @foreach ($contacts as $contact)
   <ul>
      <li>
         {{$contact->id}}
         {{$contact->mail}}
      </li>
   </ul>   
      
   @endforeach
@endsection