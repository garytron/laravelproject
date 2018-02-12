@extends("layout.layout")
@section('body')
	<h1>Edit product: {{$product->name}} </h1>

	{!! Form::model($product,[
		'method' => 'patch',
		'route' => ['product.update', $product->idProduct]
		]) !!}

	{!! Form::label('name','Product Name') !!}
	{!! Form::text('name',$product->name, [ 'class' => 'form-control', 'placeholder' => 'Give a name']) !!}
	<br/>
	{!! Form::label('price','Price') !!}
	{!! Form::text('price',$product->price, [ 'class' => 'form-control', 'placeholder' => 'Give a name']) !!}
	<br/>
	{!! Form::submit('Edit') !!}
	{!! Form::close() !!}
@endsection