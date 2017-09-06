<div class="modal fade" id="choose-academic" role="dialog">
  <div class="modal-dialog modal-xs">
    <section class="panel panel-default">
      <header class="panel-heading">
        Choose Academic
      </header>
      <form action="#" class="form-horizontal" id="frm-view-class" method="post">
        <div class="panel panel-body" style="border-bottom: 1px solid #ccc;">
          <div class="form-group">

            <div class="col-sm-6">
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

            <div class="col-sm-6">
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

            <div class="col-sm-6">
              <label for="level">Level</label>
              <div class="input-group">
                <select class="form-control" name="level_id" id="level_id">

                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-level"></span>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
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

            <div class="col-sm-6">
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

            <div class="col-sm-3">
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

          </div>
        </div >


      </form>
      <div class="panel panel-default">
        <div class="panel-heading">Class Information</div>
        <div class="panel-body" id="add-class-info">

        </div>
      </div>
    </section>
  </div>
</div>