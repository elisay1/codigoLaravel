@extends('layouts.master')
<title>@yield('title', 'Servicios')</title>
@section('contenido')
<main id="main">

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>@yield('title', 'Servicios')</h2>

            </div>



            <div class="row">
                <!-- TODO: verificar si hay servicios -->
                @if($servicios)
                <!-- TODO: recorremos la lista de servicios -->
                @foreach($servicios as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item['titulo']}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title bg-warning">No existe ningun servicio para mostrar</h5>
                        </div>
                    </div>
                </div>
                @endif
            </div>



        </div>
    </section>



</main>
@endsection