<html><h1>Listagem dos supports</h1></html>

<a href="{{ route('supports.create')}}">Criar dúvida</a>
 
<table>
    <thead>
        <th>Id</th>
        <th>Assunto</th>
        <th>status</th> 
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)    
            <tr>
            <td>{{ $support -> id }}</td>
            <td>{{ $support -> subject }}</td>
            <td>{{ $support -> status }}</td>
            <td>
                <a href="{{ route('supports.show', $support-> id) }}"> VISUALIZAR </a>
                <a href="{{ route('supports.edit', $support-> id) }}"> EDITAR </a>      
            </td>
            </tr>
        @endforeach
    </tbody>
     
</table>