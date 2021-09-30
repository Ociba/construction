<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.styling')
   <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables/datatables.css')}}">
</head>

<body>
     @include('layouts.preloader')
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
             @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                 @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumb')

                        <h4 class="font-weight-bold py-3 mb-0"></h4>
                        <div class="row">
                            <!-- Staustic card 8 Start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-mail bg-primary ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-primary">{{$count_projects}} Projects</span></h4>
                                        <p class="mb-3">Current Projects</p>
                                        <a href="/project" button class="btn btn-primary btn-sm btn-round">View</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-twitter bg-success ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-success">{{$count_comments}}  Comments</span></h4>
                                        <p class="mb-3">Customers Comments</p>
                                        <a href="/get-comments" button class="btn btn-success btn-sm btn-round">Check them out</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-briefcase bg-danger ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-danger">{{$get_materials}}  Materials</span></h4>
                                        <p class="mb-3">Number of materials</p>
                                        <a href="/get-material" button class="btn btn-danger btn-sm btn-round">View</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-shopping-cart bg-warning ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-warning">{{$get_messages}} Contacts</span></h4>
                                        <p class="mb-3">Messages Received</p>
                                        <a href="/contact-messages" button class="btn btn-warning btn-sm btn-round text-white">View</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Staustic card 8 end -->
                            <!-- Chart card 11 Start -->
                            <div class="col-xl-12 col-md-12">
                            <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">
                                              <span style="color:green;">Total Amount of Projects: Sh. {{ number_format($get_amount)}}</span>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#projects"><i class="feather icon-plus"></i> Add Project</button>
                                                
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Organization</th>
                                                        <th>Amount</th>
                                                        <th>Deadline</th>
                                                        <th>Location</th>
                                                        <th>Head of Project</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($get_projects as $i => $project)
                                                    <tr>
                                                        <td>{{$i + 1}}</td>
                                                        <td>{{$project->title}}</td>
                                                        <td>{{$project->organization}}</td>
                                                        <td>{{ number_format($project->amount)}}</td>
                                                        <td>{{$project->deadline}}</td>
                                                        <td>{{$project->location}}</td>
                                                        <td>{{$project->head_of_project}}</td>
                                                        <td>
                                                            <a href="/edit-dashboard-project/{{$project->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="/delete-dashboard-project/{{$project->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart card 11 end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                     @include('layouts.footer')
                    <!-- [ Layout footer ] End -->

                </div>
                <!-- [ Layout content ] Start -->

            </div>
            <!-- [ Layout container ] End -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper ] end -->

    <!-- Core scripts -->
    @include('layouts.javascript')
    <script src="{{ asset('admin/assets/libs/datatables/datatables.js')}}"></script>
    
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
    <div class="modal fade" id="projects" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="/save-project">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Title">Title</label>
                                    <input type="text" name="title" class="form-control" id="Title" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="amount">Amount</label>
                                    <input class="form-control" name="amount" id="amount" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="location">Location</label>
                                    <input class="form-control" name="location" id="location" rows="3" required>                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Organization">Organisation</label>
                                    <input class="form-control" name="organization" id="organization" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="deadline">Deadline</label>
                                    <input type="date" class="form-control" name="deadline" id="deadline" placeholder="date" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="head_of_project">Head of Project</label>
                                    <input type="text" class="form-control" name="head_of_project" id="head_of_project" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
