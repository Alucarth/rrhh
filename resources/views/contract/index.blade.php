@extends('layouts.app') 
@section('title','Listado de contratos') 
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        ruta
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">            
            <a class="btn btn-primary" type="button" href="{{ asset('contract/create' ) }}"><i class="fa fa-check-circle"></i>&nbsp;Crear contrato</a>
            <table id="contract-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>CI</th>
                        <th>Apellido</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Segundo Nombre</th>                        
                        <th>Cargo</th>
                        <th>Puesto</th>                        
                        <th>Acci&oacute;n</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contracts as $contract)
                        <tr>
                            <td> {{ $contract->id }} </td>
                            <td> {{ $contract->employee->identity_card }} </td>
                            <td> {{ $contract->employee->last_name }} </td>
                            <td> {{ $contract->employee->mothers_last_name }} </td>
                            <td> {{ $contract->employee->first_name }} </td>
                            <td> {{ $contract->employee->second_name }} </td>                            
                            
                            <td> {{ $contract->position->name }} </td>
                            <td> {{ $contract->position->position_group->name }} </td>
                            <td> 
                                <a class="btn btn-primary" type="button" href="{{ asset('contract/'.$contract->id ) }}"><i class="fa fa-check-circle"></i>&nbsp;Ver</a>
                                <a class="btn btn-primary" type="button" href="{{ asset('contract/'.$contract->id.'/edit' ) }}"><i class="fa fa-check-circle"></i>&nbsp;Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection