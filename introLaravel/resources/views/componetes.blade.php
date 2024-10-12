
  @extends('layouts.plantilla1')
  
    @section('titulo','Componentes Blade')  

    @section('contenido')

      <x-Card encabezado="hola s195" titulo="titulo1" textoBoton="Guardar"> Prueba 1 Slot para contenido </x-Card>

      <x-Card encabezado="DUDAS?? s195" titulo="titulo2" textoBoton="No guardar"> otro gaaaaato  !!!  </x-Card>
     

      <x-Alert tipo="success"> alert verde </x-Alert>

      <x-Alert tipo="danger"> alert rojo </x-Alert>  



     @endsection
