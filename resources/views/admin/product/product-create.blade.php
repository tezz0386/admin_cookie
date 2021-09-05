@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-product', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="container">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <center><strong>Product Addon Form</strong></center>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="parent_id">Parent Title:</label>
                    <select id="parent_id" class="form-control" name="parent_id">
                        <option value="">Chhose a category</option>
                        @if(isset($categories) && count($categories)>0)
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" data-check='0' @if($category->has_child == true) disabled="disabled" @endif>{{$category->title}}
                            @foreach($category->subCategories as $subcategory)
                            <option value="{{$subcategory->id}}" data-check="1">{{$subcategory->title}}</option>
                            @endforeach
                        </option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <input type="hidden" name="check" id="check">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Price: </label>
                            <input type="number" name="price" class="form-control" value="{{old('price')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <label>
                        <img src="{{asset('thumbnail.png')}}" id="imgthumbnail" class="img-fluid" alt="Image not found" height="307" width="425">
                        <input type="file" name="image" id="thumbnail" hidden="hidden" value="{{old('image')}}">
                    </label>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" style="height: 250px;" class="form-control">{{old('description')}}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-lg btn-primary bg-primary float-right" style="color: white;">Submit</button>
                <a href="#" class="btn btn-info btn-lg float-right mr-2">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
$('#parent_id').change(function(){
var select = $(this).children('option:selected').data('check');
if(select)
{
$('#check').val(select);
}else{
$('#check').val(select);
}
});
});
$('#thumbnail').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#imgthumbnail").attr('src', image);
});
});
</script>
@endsection