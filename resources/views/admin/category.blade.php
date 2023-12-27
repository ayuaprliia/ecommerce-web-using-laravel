<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style type="text/css">
        .action-column {
            width: 300px;
        }

        table {
            width: 100%;
            text-align: center;
        }

        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    @include('admin.navbar')
    @include('admin.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD CATEGORY</h4>
                        <p class="card-description"> Add new category </p>
                        <form class="forms-sample" action="{{ url('/add_category') }}" method="POST">
                            <div class="form-group">
                                @csrf
                                <input class="form-control" type="text" name="category" placeholder="Write category name">
                            </div>
                            <input type="submit" class="btn btn-gradient-primary me-2" name="submit" value="Submit" style="background: linear-gradient(45deg, #b66dff, #8146ff);">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">All Categories</h4>
                        <div style="margin: auto; padding-bottom: 50px; padding-top: 30px;">
                            <form id="searchForm" action="{{ url('search_category') }}" method="get" class="mb-3">
                                @csrf
                                <div class="input-group">
                                    <input type="text" id="search_category" name="search_category" class="form-control" placeholder="Search category" value="{{ old('search_category') }}">
                                    <button type="submit" class="btn btn-outline-primary">Search</button>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-striped" id="categoryTable">
                                    <thead>
                                        <tr>
                                            <th>CATEGORY NAME</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $category)
                                        <tr>
                                            <td>{{ $category->category_name }}</td>
                                            <td class="action-column">
                                                <a class="btn btn-gradient-danger btn-fw" onclick="return confirm('Are you sure to delete this?')" href="{{ url('delete_category', $category->id) }}"> <i class="fa fa-trash"></i> Delete</a>
                                                <a class="btn btn-gradient-dark btn-icon-text" href="{{ url('update_category', $category->id) }}"> <i class="mdi mdi-file-check btn-icon-append"></i> Edit</a>
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

            @include('admin.script')
            <script>
                $(document).ready(function () {
                    // Tangani pengajuan formulir pencarian dengan Ajax
                    $('#searchForm').submit(function (e) {
                        e.preventDefault();

                        $.ajax({
                            type: 'GET',
                            url: $('#searchForm').attr('action'),
                            data: $('#searchForm').serialize(),
                            success: function (response) {
                                // Mengganti konten tabel dengan hasil pencarian
                                $('#categoryTable tbody').html($(response).find('#categoryTable tbody').html());
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
</body>
</html>
