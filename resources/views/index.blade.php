@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl text-gray-700 mb-2 uppercase">Ultimos Cursos</h1>
        <h2 class="text-xl ">Formate como profecional en tecnologia</h2>
        <h3 class="text-lg">70% nc que cosa etc etc xd</h3>
    </div>

    @livewire('course-list')
@endsection