<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
</div>
<main class="content">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card" style="height: 220px;">
                                <div class="card-body">

                                    <h5 class="card-title  text-center">Karyawan Training</h5>

                                    <hr>

                                    <h1 class="my-5 text-center" style="font-size: 48px;"><strong>4</strong></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 220px;">
                                <div class="card-body">

                                    <h5 class="card-title text-center">Lamaran Masuk</h5>

                                    <hr>

                                    <h1 class="my-5 text-center" style="font-size: 48px;"><strong>54</strong></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 220px;">
                                <div class="card-body">

                                    <h5 class="card-title text-center " >Karyawan</h5>

                                    <hr>

                                    <h1 class="mt-5 mb-2 text-center" style="font-size: 48px;"><strong>114</strong></h1>
                                    <div class="row">
                                        <div class="col-auto">
                                            <button class="btn btn-primary" style="font-size: 7px;">aktif 100</button>
                                        </div>
                                        <div class="col-auto ml-auto">
                                            <button class="btn btn-danger" style="font-size: 7px;">Tidak aktif 100</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-12 col-xl-4">
                <div class="card flex-fill w-100">
                    <div class="card-header" style="background: #fff;">

                        <h5 class="card-title mb-0">Tugas</h5>
                    </div>
                    <div class="card-body">
                        <form action="javascript:void(0);">
                            <input type="text" class="form-control add-task" placeholder="New Task...">
                        </form>
                        <ul class="nav nav-pills todo-nav">
                            <li role="presentation" class="nav-item all-task active"><a href="#" class="nav-link">All</a></li>
                            <li role="presentation" class="nav-item active-task"><a href="#" class="nav-link">Active</a></li>
                            <li role="presentation" class="nav-item completed-task"><a href="#" class="nav-link">Completed</a></li>
                        </ul>
                        <div class="todo-list">
                            <div class="todo-item">
                                <div class="checker"><span class=""><input type="checkbox"></span></div>
                                <span>Create theme</span>
                                <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                            </div>
                            <div class="todo-item">
                                <div class="checker"><span class=""><input type="checkbox"></span></div>
                                <span>Work on wordpress</span>
                                <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                            </div>

                            <div class="todo-item">
                                <div class="checker"><span class=""><input type="checkbox"></span></div>
                                <span>Organize office main department</span>
                                <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                            </div>
                            <div class="todo-item">
                                <div class="checker"><span><input type="checkbox"></span></div>
                                <span>Error solve in HTML template</span>
                                <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex-fill w-100">
                    <div class="card-header" style="background: #fff;">

                        <h5 class="card-title mb-0">Task</h5>
                    </div>
                    <div class="card-body py-3">
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
            nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
        });
    });
</script>