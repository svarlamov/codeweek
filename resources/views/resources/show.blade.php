@extends('layout.base')

@section('content')
    <section>

        <p class="container resources-container">

        <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
            <h1>Resources and guides</h1>
            <span>EU Code Week 2018</span>
        </div>

        <hr>

        <p>

        <ul>
            @foreach($resource->targets as $target)
                <li>
                    {{$target->name}}
                </li>
            @endforeach
        </ul>

        <ul>
            @foreach($resource->resource_types as $type)
                <li>
                    {{$type->name}}
                </li>
            @endforeach
        </ul>

        </p>
        </p>


    </section>


@endsection