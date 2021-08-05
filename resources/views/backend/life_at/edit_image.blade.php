@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.lifeat.updateimage')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                            
                            <div class="form-group">
                                <label>Add Image and Order</label>
                                <div class="table-responsive">                                
                                    <table class="table table-bordered table-striped" id="user_table">
                                        
                                        <tbody>

                                        </tbody>
                                        
                                        <tfoot>
                                            @foreach($multiple as $key => $single_image)
                                                <tr>
                                                    <td><img class="p-1" src="{{url('files/life_at',$single_image->image)}}" style="width: 50%;" alt="" ></td>
                                                    <td><button type="button" name="delete" id="{{ $single_image->id }}" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                            @endforeach   
                                        </tfoot>
                                        
                                    </table>                                
                                </div>
                            </div>
                           
                            

                        </div>
                    </div>
                </div>

                <input type="hidden" name="hidden_id" value="{{ $lifeat->id }}"/>
                <a href="{{route('admin.lifeat.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Add Images</button><br>
            </div><br>
            

        </div>

    </form>


    <!-- Modal delete -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="importform" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalDeleteLabel">Delete</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Are you sure you want to remove this Image?</h5>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">Delete</button>
                       
                    </div>
                </form>

            </div>
        </div>
    </div>



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

    // $(document).on('click', '.delete', function(){
    // count--;
    // $(this).closest("tr").remove();
    // });


    var user_id;

    $(document).on('click', '.delete', function(){
    // count--;
    // $(this).closest("tr").remove();
    
    user_id = $(this).attr('id');    
    $('#confirmModal').modal('show');
    });

    $('#ok_button').click(function(){    

    $.ajax({
    url:"lifeatimages/delete/"+user_id,
            
    success:function(data)
    {
        setTimeout(function(){
        $('#confirmModal').modal('hide');
        location.reload();
        // $('#villadatatable').DataTable().ajax.reload();
        });
    }
    })   


    });




});
</script>


<br><br>
@endsection
