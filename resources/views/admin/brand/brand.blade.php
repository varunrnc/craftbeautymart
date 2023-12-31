@extends('admin.layouts.master')
@section('title', 'Brand')
@section('nav-title', 'Brand')

@section('main-content')

    @if (\Session::has('success'))
        <div class="col-12">
            <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-1">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">{!! \Session::get('success') !!}</h6>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif


    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add New Brand</h5>
            <hr />
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <form action="{{ route('brand.add') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputBrandTitle" class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" id="inputBrandTitle" name="brand"
                                        placeholder="Enter brand name" required>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">+ Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h6 class="mb-0 text-uppercase">Brands List</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brand as $key => $item)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$item->title}}</td>
                            <td>
                                @if ($item->status == 1)
                                    <div class="form-check form-switch form-check-danger">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            onclick="status(this.id)" id="{{ $item->id }}" checked>
                                    </div>
                                @else
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            onclick="status(this.id)" id="{{ $item->id }}">
                                    </div>
                                @endif

                            </td>
                            <td>
                                <a href="#" id="{{ $item->id }}" onclick="brandDelete(this.id)">
                                    <i class='bx bxs-trash text-danger font-20'></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('admin-js')
<script>
    let api = new ApiService();

function status(id) {
    var data = {
        "_token": "{{ csrf_token() }}",
        "id": id
    };
    let req = api.setData("brand/status", data);
    req.then((res) => {
        if (res.status == true) {
            location.reload();
        } else {
            alert(res.message);
            location.reload();
        }
    });
}

function brandDelete(id) {
    var data = {
        "_token": "{{ csrf_token() }}",
        "id": id
    };
    let req = api.setData("brand/delete", data);
    req.then((res) => {
        if (res.status == true) {
            location.reload();
        } else {
            alert(res.message);
            location.reload();
        }
    });
}

</script>
@endsection
