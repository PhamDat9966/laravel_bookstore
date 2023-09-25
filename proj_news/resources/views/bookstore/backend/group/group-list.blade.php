<?php
// echo "<pre>View";
// print_r($param[0]);
// echo "</pre>";

$xhtml  = '';
foreach ($param as $value) {
    //echo "<h3 style='color:blue'>".$value."</h3>";
    $id             = $value->id;
    $name           = $value->name;
    $group_acp      = $value->group_acp;
    $created        = $value->created;
    $created_by     = $value->created_by;
    $modified       = $value->modified;
    $modified_by    = $value->modified_by;
    $status         = $value->status;
    $ordering       = $value->ordering;

    $xhtml         .='<tr>
                        <td><input type="checkbox"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>
                            <a href="#" class="btn btn-success rounded-circle btn-sm"><i class="fas fa-check"></i></a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-success rounded-circle btn-sm"><i class="fas fa-check"></i></a>
                        </td>
                        <td>
                            <p class="mb-0"><i class="far fa-user"></i>  '.$created.'</p>
                            <p class="mb-0"><i class="far fa-clock"></i> '.$created_by.'</p>
                        </td>
                        <td>
                            <p class="mb-0"><i class="far fa-user"></i> '.$modified.'</p>
                            <p class="mb-0"><i class="far fa-clock"></i> '.$modified_by.'</p>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm rounded-circle"><i class="fas fa-pen"></i></a>
                            <a href="#" class="btn btn-danger btn-sm rounded-circle"><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>';
}

?>
@extends('bookstore.backend.index')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Group</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Search & Filter -->
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Search & Filter</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row justify-content-between align-items-center">
                                    <div class="area-filter-status mb-2">
                                        <a href="#" class="btn btn-info">All <span class="badge badge-pill badge-light">8</span></a>
                                        <a href="#" class="btn btn-secondary">Active <span class="badge badge-pill badge-light">3</span></a>
                                        <a href="#" class="btn btn-secondary">Inactive <span class="badge badge-pill badge-light">5</span></a>
                                    </div>
                                    <div class="area-search mb-2">
                                        <form action="" method="GET">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-append">
                                                    <button type="submit" class="btn btn-info">Search</button>
                                                    <a href="#" class="btn btn-danger">Clear</a>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- List -->
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">List</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" data-card-widget="refresh">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row align-items-center justify-content-between mb-2">
                                    <div>
                                        <div class="input-group">
                                            <select class="form-control custom-select">
                                                <option>Bulk Action</option>
                                                <option>Delete</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-info">Apply</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="group-form.php" class="btn btn-info"><i class="fas fa-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle text-center table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Group ACP</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th>Modified</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            echo $xhtml;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination m-0 float-right">
                                <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection
