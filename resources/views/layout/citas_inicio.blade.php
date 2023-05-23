@extends('layout.admin')

@section('content')

    <div>
        <div class="main-banner header-text" id="top">
            <div class="Modern-Slider">
                <!-- Item -->
                <div class="item">
                    <div class="img-fill">
                        <img src="{{asset('images/1.jpg')}}" alt="" width="100" heigth="100">
                        <div class="text-content">
                            <h3>Veterinaria</h3>
                            <h5>EL CACHORRO</h5>
                            <a href="#" class="main-stroked-button">Leer mas</a>
                            <a href="/admin/index" class="main-filled-button">Inicio</a>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item">
                    <div class="img-fill">
                        <img src="{{asset('images/2.jpg')}}" alt="" width="100" heigth="100">
                        <div class="text-content">
                            <h3>Veterinaria</h3>
                            <h5>EL CACHORRO</h5>
                            <a href="acerca" class="main-stroked-button">Leer Mas</a>
                            <a href="/admin/index" class="main-filled-button">Inicio</a>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item">
                    <div class="img-fill">
                        <img src="{{asset('images/3.jpg')}}" alt="" width="100" heigth="100">
                        <div class="text-content">
                            <h3>Veterinaria</h3>
                            <h5>EL CACHORRO</h5>
                            <a href="acerca" class="main-stroked-button">Leer Mas</a>
                            <a href="/admin/index" class="main-filled-button">Inicio</a>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
            </div>
        </div>
        <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>

            <div class="col-12">
                <a href="{{route("citas.create")}}" class="btn btn-success mb-2" style="margin: 20px">Agregar</a>
                <table class="table table-bordered" style="margin: 20px">
                    <thead>
                    <tr>
                        <th>Dia/Mascota</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($citas as $cita)
                        <tr>
                            <td>{{$cita->dia}} Hora:{{$cita->hora}} Mascota: {{$cita->mascota}} tipo: {{$cita->tipo}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('citas.edit',[$cita])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("citas.destroy", [$cita])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
