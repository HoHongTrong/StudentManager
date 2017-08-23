@extends('layouts.master')
@section('content')
@include('courses.popup.academic')
@include('courses.popup.program')
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Courses</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Home</a>
          </li>
          <li><i class="icon_document_alt"></i>Courses
          </li>
          <li><i class="fa fa-file-text-o"></i>Manager Courses
          </li>
        </ol>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <section class="panel panel-default">
        <header class="panel-heading">
          Manage Courses
        </header>
        <form class="form-horizontal">
          <div class="panel panel-body" style="border-bottom: 1px solid #ccc;">
            <div class="form-group">

              <div class="col-sm-3">
                <label for="academic-year">Academic Year</label>
                <div class="input-group">
                  <select class="form-control" name="academic_id" id="academic_id">
                    <option value="">---None---</option>
                    @foreach($academic as $ac)
                      <option value="{{$ac->program_id}}">{{$ac->academic}}</option>
                      @endforeach
                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus" id="add-more-acacdemic"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <label for="program">Courses</label>
                <div class="input-group">
                  <select class="form-control" name="program_id" id="program_id">
                    <option value="">---None---</option>
                    @foreach($program as $pr)
                      <option value="{{$pr->academic_id}}">{{$pr->program}}</option>
                    @endforeach
                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus" id="add-more-program"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-5">
                <label for="level">Level</label>
                <div class="input-group">
                  <select class="form-control" name="level_id" id="level_id">

                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <label for="shift">Shift</label>
                <div class="input-group">
                  <select class="form-control" name="shift_id" id="shift_id">

                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <label for="time">Time</label>
                <div class="input-group">
                  <select class="form-control" name="time_id" id="time_id">

                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <label for="batch">Batch</label>
                <div class="input-group">
                  <select class="form-control" name="batch_id" id="batch_id">

                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <label for="group">Group</label>
                <div class="input-group">
                  <select class="form-control" name="group_id" id="group_id">

                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <label for="startDate">Start Date</label>
                <div class="input-group">
                  <input type="text" name="start_date" id="start_date" class="form-control" />

                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <label for="endDate">End Date</label>
                <div class="input-group">
                  <input type="text" name="end_date" id="start_date" class="form-control" />

                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

            </div>
          </div >

          <div class="panel-footer">
            <button type="submit" class="btn btn-default btn-sm">Create Courses</button>
          </div>
        </form>
      </section>
    </div>
  </div>
  @endsection

@section('script')
  <script type="text/javascript">
      $('#start_date').datepicker({
        changeMonth:true,
        changeYear:true,
      });

      //=============================================
    $('#add-more-acacdemic').on('click',function () {
      $('#academic-year-show').modal();
    });

     //=====
    $('.btn-save-academic').on('click',function () {
      var academic = $('#new_academic').val();
      $.post("{{route('postInsertAcademic')}}",{ academic:academic},function (data) {
        console.log(data);

        $('#academic_id').append($("<option/>",{
          value : data.academic_id,
          text : data.academic
        }))
        $('#new_academic').val("");
      });
    });
    //==============================================
    $('#add-more-program').on('click',function () {
      $('#program-show').modal();
    });
    //=====
    $('.btn-save-program').on('click',function () {
      var program = $('#program').val();
      var description = $('#description').val();
      $.post("{{route('postInsertProgram')}}",{ program:program,description:description },function (data) {
        console.log(data);

        $('#program_id').append($("<option/>",{
          value : data.program_id,
          text : data.program
        }))
        $('#program').val("");
        $('#description').val("");
      });
    });
  </script>
  @endsection