@extends('layout.admin')

@section('content')
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
                        <a href="#" class="main-filled-button">Agendar Cita</a>
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
                        <a href="#" class="main-stroked-button">Leer Mas</a>
                        <a href="#" class="main-filled-button">AGENDAR CITAS</a>
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
                        <a href="" class="main-stroked-button">Leer Mas</a>
                        <a href="/" class="main-filled-button">Inicio</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <form action="{{route('citas.store')}}" method="post" >
        <fieldset>
            @csrf
            <div class="form-group"  style="margin: 20px">
                <label for="mascota">Nombre de la mascota</label>
                <input type="text" name="mascota" id="mascota" class="form-control">
            </div>
            <div class="form-group" style="margin: 20px">
                <label for="dia">Dia</label>
                <input type="date" name="dia" id="dia"  required>
            </div>
            <div class="form-control" style="margin: 20px">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora">
            </div>
            <div style="margin: 20px">
                <input type = "radio" name = "tipo" id="tipo" value = "Veterinaria" /> Veterinaria
                <input type = "radio" name = "tipo" id="tipo" value = "Estetica" /> Estetica
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 20px">Crear Cita</button>

        </fieldset>
    </form>
@endsection


