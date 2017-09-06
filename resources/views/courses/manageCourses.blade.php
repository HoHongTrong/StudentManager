@extends('layouts.master')
@section('content')
@include('courses.popup.academic')
@include('courses.popup.program')
@include('courses.popup.level')
@include('courses.popup.shift')
@include('courses.popup.time')
@include('courses.popup.batch')
@include('courses.popup.group')
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
        <form action="{{route('createClass')}}" class="form-horizontal" id="frm-create-class" method="post">
          <input type="hidden" name="active" id="active" value="1"/>
          <input type="hidden" name="class_id" id="class_id"/>
          <div class="panel panel-body" style="border-bottom: 1px solid #ccc;">
            <div class="form-group">

              <div class="col-sm-3">
                <label for="academic-year">Academic Year</label>
                <div class="input-group">
                  <select class="form-control" name="academic_id" id="academic_id">
                    @foreach($academic as $ac)
                      <option value="{{$ac->academic_id}}">{{$ac->academic}}</option>
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
                    <option value="">-----None-----</option>
                    @foreach($program as $pr)
                      <option value="{{$pr->program_id}}">{{$pr->program}}</option>
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
                    <span class="fa fa-plus" id="add-more-level"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <label for="shift">Shift</label>
                <div class="input-group">
                  <select class="form-control" name="shift_id" id="shift_id">
                    <option value="">-----None-----</option>
                    @foreach($shift as $sh)
                      <option value="{{$sh->shift_id}}">{{$sh->shift}}</option>
                    @endforeach
                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus" id="add-more-shift"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <label for="time">Time</label>
                <div class="input-group">
                  <select class="form-control" name="time_id" id="time_id">
                    <option value="">-----None-----</option>
                    @foreach($time as $ti)
                      <option value="{{$ti->time_id}}">{{$ti->time}}</option>
                    @endforeach
                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus" id="add-more-time"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <label for="batch">Batch</label>
                <div class="input-group">
                  <select class="form-control" name="batch_id" id="batch_id">
                    @foreach($batch as $ba)
                      <option value="{{$ba->batch_id}}">{{$ba->batch}}</option>
                    @endforeach
                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus" id="add-more-batch"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <label for="group">Group</label>
                <div class="input-group">
                  <select class="form-control" name="group_id" id="group_id">
                    @foreach($group as $gr)
                      <option value="{{$gr->group_id}}">{{$gr->groups}}</option>
                    @endforeach
                  </select>
                  <div class="input-group-addon">
                    <span class="fa fa-plus" id="add-more-group"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <label for="startDate">Start Date</label>
                <div class="input-group">
                  <input type="text" name="start_date" id="start_date" class="form-control" required/>

                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <label for="endDate">End Date</label>
                <div class="input-group">
                  <input type="text" name="end_date" id="end_date" class="form-control" required/>

                  <div class="input-group-addon">
                    <span class="fa fa-plus"></span>
                  </div>
                </div>
              </div>

            </div>
          </div >

          <div class="panel-footer">
            <button type="submit" class="btn btn-default btn-sm">Create Courses</button>
            <button type="button" class="btn btn-success btn-sm btn-update-class">Update Class</button>
          </div>
        </form>
        <div class="panel panel-default">
          <div class="panel-heading">Class Information</div>
          <div class="panel-body" id="add-class-info">

          </div>
        </div>
      </section>
    </div>
  </div>
  @endsection

@section('script')
  <script type="text/javascript">

    showClassInfo();

      $('#start_date').datepicker({
        changeMonth:true,
        changeYear:true,
        dateFormat : 'yy-mm-dd'
      });
      //======================================
    $('#academic_id').on('change',function (e) {
      showClassInfo();
    });
    //=========================================
    $('#level_id').on('change',function (e) {
      showClassInfo();
    });
    //=========================================
    $('#shift_id').on('change',function (e) {
      showClassInfo();
    });
    //=========================================
    $('#time_id').on('change',function (e) {
      showClassInfo();
    });
    //=========================================
    $('#batch_id').on('change',function (e) {
      showClassInfo();
    });
    //=========================================
    $('#group_id').on('change',function (e) {
      showClassInfo();
    });
    //=========================================


      $('#end_date').datepicker({
        changeMonth:true,
        changeYear:true,
        dateFormat : 'yy-mm-dd'
      });
//==================== Academic Year =================================================================
    $('#add-more-acacdemic').on('click',function () {
      $('#academic-year-show').modal();
    });
    $('.btn-save-academic').on('click',function () {
      var academic = $('#new_academic').val();
      $.post("{{route('postInsertAcademic')}}",{ academic:academic},function (data) {
        $('#academic_id').append($("<option/>",{
          value : data.academic_id,
          text : data.academic
        }))
        $('#new_academic').val("");
      });
    });
//======================== Courses ============================================================
    $('#add-more-program').on('click',function () {
      $('#program-show').modal();
    });
    $('.btn-save-program').on('click',function () {
      var program = $('#program').val();
      var description = $('#description').val();
      $.post("{{route('postInsertProgram')}}",{ program:program,description:description },function (data) {
        $('#program_id').append($("<option/>",{
          value : data.program_id,
          text : data.program
        }))
        $('#program').val("");
        $('#description').val("");
      })
      $(this).trigger('reset');
    });
//========================= Level =============================================================
      $("#frm-create-class #program_id").on('change',function (e) {
        var program_id = $(this).val();
        var level = $('#level_id')
        $(level).empty();
        $.get("{{route('showLevel')}}",{program_id:program_id},function (data) {
            
          $.each(data,function (i,l) {
            $(level).append($("<option/>",{
              value :l.level_id,
              text : l.level
            }))
          });
          showClassInfo();
        })
      });
    //======
      $('#add-more-level').on('click',function () {

      var programs = $('#program_id option'); // program_id from courses
      var program  = $('#frm-level-cerate').find('#program_id');//form level.blade.php
      $(program).empty();
      $.each(programs,function (i,pro) {
        $(program).append($("<option/>",{
          value : $(pro).val(),
          text : $(pro).text()
        }));
      });
      $('#level-show').modal('show');// div for id first
    });
      $('#frm-level-cerate').on('submit',function (e) {
        e.preventDefault();//ngăn cản trình duyệt thực thi hành động mặc định
        var data = $(this).serialize();
        var url  = $(this).attr('action');
        $.post(url,data,function (data) {
          $('#level_id').append($("<option/>",{
            value : data.level_id,
            text : data.level
          }));
        });
        $(this).trigger('reset');
      });
//========================== Shift ===============================================================
    $('#add-more-shift').on('click',function () {
      $('#shift-show').modal();
    });
    $('#frm-shift-cerate').on('submit',function (e) {
      e.preventDefault();
      var data = $(this).serialize();
      var shift = $('#shift_id');
      $.post("{{route('createShift')}}",data,function (data){
        $(shift).append($("<option/>",{
          value : data.shift_id,
          text : data.shift
        }))
      })
      $(this).trigger('reset');
    });
//========================== Times ===============================================================
    $('#add-more-time').on('click',function () {
      $('#time-show').modal();
    });
    $('#frm-time-cerate').on('submit',function (e) {
      e.preventDefault();
      var data = $(this).serialize();
      $.post("{{route('createTime')}}",data,function () {
        $('#time_id').append($("<option/>",{
          value : data.time_id,
          text : data.time
        }))
      })
      $(this).trigger('reset');
    })
//============================= Batch =============================================================
  $('#add-more-batch').on('click',function () {
    $('#batch-show').modal();
  });
  $('#frm-batch-cerate').on('submit',function (e) {
      e.preventDefault();
      var data = $(this).serialize();
      $.post("{{route('createBatch')}}",data,function (data) {
        $('#batch_id').append($("<option/>",{
          value : data.batch_id,
          text  : data.batch
        }))
      });
      $(this).trigger('reset');
    });
//============================== Group =============================================================
    $('#add-more-group').on('click',function () {
      $('#group-show').modal();
    });
    $('#frm-group-cerate').on('submit',function (e) {
      e.preventDefault();
      var data = $(this).serialize();
      $.post("{{route('createGroup')}}",data,function (data) {
        $('#group_id').append($("<option/>",{
          value : data.group_id,
          text : data.groups
        }))
      })
      $(this).trigger('reset');
    })
//=============================== Class ================================================================
    $('#frm-create-class').on('submit',function (e) {
      e.preventDefault();
      var data = $(this).serialize();
      var url = $(this).attr('action');
      $.post(url,data,function (data) {

        showClassInfo(data.academic_id);

      });
      $(this).trigger('reset');
    });
    //====================================================
    $(document).on('click','.del-class',function (e) {
      class_id = $(this).val();
      $.post("{{route('deleteClass')}}",{class_id:class_id},function (data) {
        showClassInfo($('#academic_id').val());
      })
    });
    //=======
    function showClassInfo() {
      var data = $('#frm-create-class').serialize();
      $.get("{{route('showClassInfomation')}}",data,function (data) {
        $('#add-class-info').empty().append(data);
        MergeCommonRows($('#table-class-info'));

      })
    }
//=============================== Call class ======================================================
    function MergeCommonRows(table) {
      var firstColumnBrakes = [];
      $.each(table.find('th'),function (i) {
        var previous = null,cellToExtend = null, rowspan =1;
        table.find("td:nth-child(" + i + ")").each(function (index, e) {
          var jthis = $(this), content = jthis.text();
          if(previous == content && content !== "" && $.inArray(index, firstColumnBrakes) === -1){
            jthis.addClass('hidden');
            cellToExtend.attr("rowspan",(rowspan = rowspan+1));
          }else {
            if (i === 1) firstColumnBrakes.push(index);
            rowspan = 1;
            previous = content;
            cellToExtend = jthis;
          }
        });
      });
      $('td.hidden').remove();
    }
//==================== Update Class=================================================================
    $('.btn-update-class').on('click',function (e) {
      e.preventDefault();
      var data = $('#frm-create-class').serialize();
      $.post("{{route('updateClassInfo')}}",data,function (data) {
        showClassInfo(data.academic_id);
      })
    });


//===================== Class edit ====================================================================
    $(document).on('click','#class-edit',function (data) {
      var class_id = $(this).data('id');
      $.get("{{route('editClass')}}",{class_id:class_id},function (data) {
        $('#academic_id').val(data.academic_id);
        $('#level_id').val(data.level_id);
        $('#shift_id').val(data.shift_id);
        $('#time_id').val(data.time_id);
        $('#group_id').val(data.group_id);
        $('#batch_id').val(data.batch_id);
        $('#start_date').val(data.start_date);
        $('#end_date').val(data.end_date);
        $('#class_id').val(data.class_id);
      })
    })

  </script>
  @endsection