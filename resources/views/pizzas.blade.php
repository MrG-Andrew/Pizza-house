@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <!-- @for($i = 0;$i < 5;$i++)
            <p>the value of i is {{$i}}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{  $pizzas[$i]['type'] }}</p>
        @endfor -->

        <p>{{ $name }}</p>
        <p>{{ $age }}</p>


        @foreach($pizzas as $pizza)

            <div>
                {{$loop->index}}  {{$pizza['type']}} - {{$pizza['base']}} - {{$pizza['price']}} $

                @if($loop->first)
                    <span> - first in the loop</span>
                @elseif($loop->last)
                    <span> - last in the loop</span>
                @endif
            </div>

        @endforeach

    
    </div>
</div>
@endsection