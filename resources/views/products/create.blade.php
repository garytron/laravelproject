@extends("layout.layout")
@section('body')
	<h1>Create new product</h1>

	{!! Form::open(['route' => 'product.store']) !!}

	{!! Form::label('name','Product Name') !!}
	{!! Form::text('name',null, [ 'class' => 'form-control', 'placeholder' => 'Give a name']) !!}
	<br/>
	{!! Form::label('price','Price') !!}
	{!! Form::text('price','0', [ 'class' => 'form-control', 'placeholder' => 'Give a name']) !!}
	<br/>
	{!! Form::submit('Create') !!}
	{!! Form::close() !!}
@endsection