<h1>Editar duvida: {{ $support -> id }}</h1>

<x-alert/> 

<hr>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form', ['support' => $support,])
</form>