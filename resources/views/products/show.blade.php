@extends("layout.layout")
@section('body')
	<h1>Product: {{$product->name}} </h1>

	<br/>
	{!! Form::open([
		'method' => 'delete',
		'route' => ['product.destroy',$product->idProduct]
		]) !!}
	<h2>ID: {{$product->idProduct}}</h2>
	<h3>Price: {{$product->price}} </h3>

	<a href="{{route('product.edit', $product->idProduct)}} ">Edit</a>
	{!! Form::submit('Delete')!!}
	{!! Form::close() !!}
@endsection