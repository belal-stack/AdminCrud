@extends('admin.layouts.app')

@section('css')
    
@endsection

@section('content')

<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Users</h3>
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
                <a href="/admin/user/create" type="button" class="btn btn-primary">Create User</a>
            </div>

            {{-- <h4 class="content-heading">All Users</h4> --}}
            
    
            <!-- Full Table -->
            <div class="table-responsive">
                
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Gender</th>
                    <th>phone</th>
                    <th>address</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->name}}</td>
                            <td>{{$user->gender->type}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td class="text-center">
                            <div class="btn-group">
                                <a href="{{'/admin/user/'.$user->id.'/edit'}}" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip"  title="Edit">
                                <i class="fa fa-pencil"></i>
                                </a>
                                
                                <button onclick="deleteUser({{$user->id}})" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip"  title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>       <!-- END Full Table -->
    </div>
</div>



@endsection

@section('scripts')
<script type="text/javascript">
    function deleteUser(id)
    {
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                method:'Delete',
                url:'/admin/user/'+id,
                data: {
                    _token: '{{ csrf_token() }}', 
                },
            }).done(function(resp){
                if(resp.successed)
                {
                    alert(resp.message)
                    window.location.reload()
                }
                return;
            }).fail(function(resp){
                alert(resp+'went wrong')
                return;
            })
        }
    }

</script>

@endsection