@extends('layouts.master')  
   

    @section('content')  
    <h1>Contact Page </h1>   
    @stop  

    @section('footer')  

    @for ($i = 0; $i < 10; $i++)
   <input type='text' value='The current value is {{ $i }}'><p>
    @endfor 

    
    @stop  