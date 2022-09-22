
@extends('layouts.app')

@section('head')

<meta name="viewport" content="width-device-width, initial-scale=1">

<title>Te Pūkenga - Powered by Wavie</title>

@endsection

@section('content')


<div class=" pt-md-11 parent fd34" style="min-height:80vh;">

<div class="container ">


  <div class=" row text-center">

    <div class="col-md-12 dsf">

    <img class="w-100  jello-horizontal" id="dsf" src="{{asset('img/copartner.png')}}">
  
      </h4>
    </div>

  </div>
  
</div>

</div>

<div class=" pt-md-11 parent fgf ">

<div class="container ">
   

  <div class=" row text-light text-center ">

    <div class="col-md-12 ">
  <p >The Story</p>
    <h1 class="font-weight-bold  display-4">S.I.T Space Invaders</h1>
<a href="{{url('story')}}"><button class="btn btn-outline-light">Read More</button></a>
      </h4>
    </div>

  </div>
  
</div>
</div>



@endsection
