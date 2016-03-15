@extends('layouts.main')

@section('title', 'Overview')

@section('content')

    @if($plants->isEmpty())
        <section id="s0">
            <p class="error"><i class="fa fa-exclamation-triangle"></i> Deze QR code is ongeldig <i class="fa fa-exclamation-triangle"></i></p>
        </section>
    @else
        @foreach($plants as $plant)
            <section id="s0">
                {{ $plant->naam }}
                {{ $plant->latijnsenaam }}
                {{ $plant->beschrijving }}
                {{ $plant->familie }}
                {{ $plant->geslacht }}
            </section>
            <section id="s1">
                {{ $plant->habitat }}
            </section>
            <section id="s2">
                {{ $plant->cultivar }}
            </section>
            <section id="s3">
                {{ $plant->geschiedenisfolklore }}
            </section>
            <section id="s4">
                {{ $plant->onderhoud }}
            </section>
            <section id="s5">
                {{ $plant->teeltoogst }}
            </section>
            <section id="s6">
                {{ $plant->medicinaal }}
            </section>
            <section id="s7">
                {{ $plant->recepten }}
            </section>
            <section id="s8">
                {{ $plant->bloemschikken }}
            </section>
        @endforeach
    @endif
@endsection