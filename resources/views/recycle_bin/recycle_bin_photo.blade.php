@extends('layouts.admin')
@section('title_page')
    Recycle Bin
@endsection
@section('body_content')
    @extends('layouts.admin')
    @section('title_page')
        List Picture
    @endsection
    @section('body_content')
        <style>
            .btn-danger {
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
                margin-left: 3vh;
            }
            .col-md-2 {
                margin-left: 5vh;
            }
        </style>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manager feedback
                        </div>
                        <div class="row w3-res-tb">
                            <div class="col-sm-5 m-b-xs">


                            </div>
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-3">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="input-sm form-control" name="key" placeholder="Search">
                                        <span class="input-group-btn">
            <input class="btn btn-sm btn-default" type="submit">Go!</input>
          </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php

                        ?>
                        <div class="panel-body">
                            @if(Session::has('success'))
                                <script>
                                    toastr.success("{{session('success')}}")
                                </script>

                            @endif

                            <div class="table-responsive">
                                <div class="row py-2" style="    margin-right: 1vh;">
                                    <div style="float: right;">

                                    </div>
                                    <div class="row">
                                        <form  method="get" action="/filter_date">
                                            @csrf
                                            <div class="col-md-2">
                                                <p>Since: <input type="text" id="datepicker" class="form-control" name="start_date"></p>
                                                <input type="submit" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="filter">
                                            </div>
                                            <div class="col-md-2">
                                                <p>To date: <input type="text" id="datepicker2" class="form control" name="End_date"></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Image</th>
                                        <td>status</td>
                                        <td>Product</td>
                                        <th style="width: 30px;"></th>


                                    </tr>
                                    </thead>
                                   

                                </table>

                            </div>
                        </div>
                        <footer class="panel-footer">

                        </footer>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <div class="footer" style="width: 100%;position: absolute ;bottom: 0; text-align: center">
                <div class="wthree-copyright">
                    <p>© 2023. All rights reserved | Design by <a href="/about">Favorable Team</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"
             id="mi-modal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Are you Delete</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="deleteAllSelectedRecord">Yes</button>
                        <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!--main content end-->
        </section>
        <script>
            $(function (e) {
                $("#select_all_ids").click(function () {
                    $('.checkbox_ids').prop('checked', $(this).prop('checked'));
                });
                $('#deleteAllSelectedRecord').click(function (e) {
                    e.preventDefault();
                    var all_ids = [];
                    $('input:checkbox[name=ids]:checked').each(function () {
                        all_ids.push($(this).val());
                    })
                    $.ajax({
                        url: "{{route('photo.delete')}}",
                        type: 'DELETE',
                        data: {
                            ids: all_ids,
                            _token: '{{csrf_token()}}'
                        },
                        success: function (response) {
                            $.each(all_ids, function (key, val) {
                                $('#photo_ids' + val).remove();
                            })
                        }
                    });
                });
            });
        </script>
        <script>
            var modalConfirm = function (callback) {

                $("#btn-confirm").on("click", function () {
                    $("#mi-modal").modal('show');
                });

                $("#modal-btn-si").on("click", function () {
                    callback(true);
                    $("#mi-modal").modal('hide');
                });

                $("#modal-btn-no").on("click", function () {
                    callback(false);
                    $("#mi-modal").modal('hide');
                });
            };

            modalConfirm(function (confirm) {
                if (confirm) {
                    //Acciones si el usuario confirma
                    $("#result").html("CONFIRMADO");
                } else {
                    //Acciones si el usuario no confirma
                    $("#result").html("NO CONFIRMADO");
                }
            });
        </script>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    prevText:'Last month',
                    nextText:'Next month',
                    dateFormat:'yy-mm-dd',
                    dayNamMin:['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                    duration:'slow'
                });

                $( "#datepicker2" ).datepicker({
                    prevText:'Last month',
                    nextText:'Next month',
                    dateFormat:'yy-mm-dd',
                    dayNamMin:['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                    duration:'slow'
                });
            } );
        </script>
    @endsection


                                    <div class="position-center">

                                    </div>
                                </div>
                            </section>
        <!-- footer -->
            <div class="footer" style="width: 100%; position: absolute;bottom: 0; text-align: center">
                <div class="wthree-copyright">
                    <p>© 2023. All rights reserved | Design by <a href="/about">Favorable Team</a></p>
                </div>
            </div>
        <!-- / footer -->

    <!--main content end-->
    </section>
@endsection