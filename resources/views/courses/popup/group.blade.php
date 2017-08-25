<div class="modal fade" id="group-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">New Group</h4>
      </div>
      <form action="#" method="post" id="frm-group-cerate">
        {!! csrf_field() !!}
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12">
              <input type="text" name="groups" id="groups" class="form-control" placeholder="group">
            </div>
          </div>
          <br>

        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-success" type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>