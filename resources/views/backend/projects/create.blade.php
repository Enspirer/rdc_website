@extends('backend.layouts.app')

@section('title', __('Create'))

@section('content')
    <form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location" required>
                        </div>
                        <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" required>
                                    @foreach($category as $cat)
                                        <option value=" {{$cat->name}} "> {{$cat->name}} </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" id="editor" class="form-control" name="description" rows="8" required> <br><br> </textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Publish in Homepage</label>
                            <select class="form-control" name="home_status" required>
                                    <option value="Enabled">Enable</option>   
                                    <option value="Disabled">Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" required>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Create New Project</button><br>
            </div><br>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                            <div class="form-group">
                                <label>Feature Image</label>
                                <input type="file" class="form-control-file" name="feature_image" required>
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <label>Multiple Images</label>
                                <div class="table-responsive">                                
                                    <table class="table table-bordered table-striped" id="user_table">
                                        
                                        <tbody>
                                        </tbody>
                                        
                                    </table>                                
                                </div>
                            </div>
                            
                            

                        </div>
                    </div>
                </div>
                

            </div><br>

        </div>

    </form>



<script>
$(document).ready(function(){

    var count = 1;

    dynamic_field(count);

    function dynamic_field(number)
    {
    html = '<tr>';
            html += '<td width="90%"><input type="file" name="image[]" class="mb-2" required/></td>';
        
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-warning remove"><i class="fas fa-minus"></i></button></td></tr>';
                $('tbody').append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
                $('tbody').html(html);
            }
    }

    $(document).on('click', '#add', function(){
    count++;
    dynamic_field(count);
    });

    $(document).on('click', '.remove', function(){
    count--;
    $(this).closest("tr").remove();
    });


});
</script>


<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>


<br><br>
@endsection
