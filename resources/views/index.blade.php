@extends('layouts.global-layouts')
@section('contenu')  
{{-- @role("Administrateur")
<livewire:liste-consommation-component/>
@endrole --}}
@role("Officier")
<livewire:consommation>
@endrole
@endsection