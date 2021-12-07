@extends('admin.layouts.app')

@section('css')
    
@endsection

@section('content')

<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Gender</h3>
            <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                <i class="si si-close"></i>
            </button>
            </div>
        </div>
        
        <div class="block-content">
          
            @if (Session()->has('message'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ Session()->get('message') }}</strong>
                </div>
            @endif

            <div class="text-right mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create Gender</button>
            </div>
    
            <!-- Full Table -->
            <div class="table-responsive">
                
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Created_At</th>
                    {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genders as $gender)
                        <tr>
                            <td>{{$gender->id}}</td>
                            <td>{{$gender->type}}</td>
                            <td>{{$gender->created_at}}</td>
                            {{-- <td class="text-center">
                            <div class="btn-group">
                                <a href="{{'/admin/gender/'.$gender->id.'/edit'}}" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip"  title="Edit">
                                <i class="fa fa-pencil"></i>
                                </a>
                                <button onclick="deletegender({{$gender->id}})" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip"  title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>       <!-- END Full Table -->
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Role</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="POST" action="/admin/gender">
              <div class="modal-body">
                      @csrf
                  <div class="form-group">
                      <label for="name" class="col-form-label">Type:</label>
                      <input type="text" required class="form-control" id="type" name="type">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script type="text/javascript">
    // function deleteUser(id)
    // {
    //     if(confirm("Are you sure want to remove?")) {
    //         $.ajax({
    //             method:'Delete',
    //             url:'/admin/user/'+id,
    //             data: {
    //                 _token: '{{ csrf_token() }}', 
    //             },
    //         }).done(function(resp){
    //             if(resp.successed)
    //             {
    //                 alert(resp.message)
    //                 window.location.reload()
    //             }
    //             return;
    //         }).fail(function(resp){
    //             alert(resp+'went wrong')
    //             return;
    //         })
    //     }
    // }

</script>

@endsection