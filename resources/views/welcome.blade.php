@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Libros</div>
                <div class="panel-body">
		        	<form   action="{{ route('findbook') }}"  method="post"  >
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
						<div class="input-group input-group-sm">
							<input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
							<span class="input-group-btn">
							<input type="submit" class="btn btn-primary" value="buscar" >
							</span>
						</div>	
	        		</form>
	        		<br>
                    <div>
                    	<table class="table table-hover table-striped" cellspacing="0" width="100%">
                    		<thead>
                    			<tr>
    	                			<th>Nombre</th>
    	                			<th>Autor</th>
    	                			<th>Categoria</th>
    	                			<th>Publicación</th>
    	                			<th>usuario</th>
    	                			<th>Accion</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                                @foreach($books as $book)
                    				<tr>
                    					<td>{{$book->name}}</td>
                    					<td>{{$book->author}}</td>
                    					<td>{{$book->category}}</td>
                    					<td>{{$book->publication}}</td>
                                        @if($book->user === null)
                                            <td>Disponible</td>
                                        @else
                                            <td>No Disponible</td>
                                        @endif
                    					<td>
                    						<button type="button" class="btn  btn-default btn-xs" onclick="{{route('editbook')}}" ><i class="fa fa-fw fa-edit"></i></button>
        									<button type="button"  class="btn  btn-danger btn-xs"  onclick=""  ><i class="fa fa-fw fa-remove"></i></button>
        								</td>
                    				</tr>
                                @endforeach
                    		</tbody>
                    	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
