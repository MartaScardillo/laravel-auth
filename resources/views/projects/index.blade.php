@extends('layouts.app')
@section('content')

<div class="content">
    <div class="container">
        <h1>Progetti</h1>
        @if ( $projects->count() > 0 )
            <ul>
                @foreach ( $projects as $project )
                    <li>
                        {{ $project->name }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>
                Spiacente, nessun progetto trovato.
            </p>
        @endif
    </div>
</div>
@endsection