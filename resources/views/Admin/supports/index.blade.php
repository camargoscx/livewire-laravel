@extends('Admin.templates.app')

@section('tittle', 'Fórum')

@section('header')
    <h1>Listagem dos Suportes</h1>
@endsection

@section('content')

<a href="{{ route('supports.create') }}">Criar dúvida</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
         @foreach($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href=" {{ route('supports.show', $support->id) }} ">Ir</a>
                    <a href=" {{ route('supports.edit', $support->id) }} ">Editar</a>
                </td>
            </tr>
         @endforeach  
    </tbody>
</table>

<x-pagination
    :paginator="$supports"
    :appends="$filters" />  

@endsection