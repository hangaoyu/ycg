@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>{{$project->name}}</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right text-center">
                                <div id="validation-errors"></div>
                                <img alt="image" class="img-responsive project-image" id="project-logo"
                                     src="{{$project->logo}}">
                                <div class="ibox-content logo-content">
                                    {!! Form::open(['url'=>'/admin/project/logo','files'=>true,'id'=>'logo']) !!}
                                    {!! Form::hidden('id',$project->id)!!}
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success avatar-button" id="upload-logo">
                                          上传新的头像
                                        </button>
                                    </div>
                                    {!! Form::file('logo',['class'=>'logo','id'=>'image']) !!}
                                    {!! Form::close() !!}
                                    <div class="span5">
                                        <div id="output" style="display:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content profile-content" style="margin-top: 50px">
                              <projectbase project_id="{{$project->id}}"></projectbase>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <projectholder  project_id="{{$project->id}}"></projectholder>


                </div>
                <div class="col-md-8">
                    <projectdynamic project_id="{{$project->id}}"></projectdynamic>
                    </div>

                </div>
                <div class="col-md-12 ">
                    <projectprocess project_id="{{$project->id}}"></projectprocess>

                </div>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function () {
            var options = {
                beforeSubmit: showRequest,
                success: showResponse,
                dataType: 'json'
            };
            $('#image').on('change', function () {
                $('#upload-logo').html('正在上传...');
                $('#logo').ajaxForm(options).submit();
            });
        });
        function showRequest() {
            $("#validation-errors").hide().empty();
            $("#output").css('display', 'none');
            return true;
        }

        function showResponse(response) {
            if (response.success == false) {
                var responseErrors = response.errors;
                $.each(responseErrors, function (index, value) {
                    if (value.length != 0) {
                        $("#validation-errors").append('<div class="alert alert-error"><strong>' + value + '</strong><div>');
                    }
                });
                $("#validation-errors").show();
            } else {
                $('#project-logo').attr('src', response.logo);
                $('#upload-logo').html('更换新的头像');
            }
        }
    </script>


@stop