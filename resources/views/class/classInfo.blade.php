<table class="table table-hover table-striped table-condensed" id="table-class-info">
  <thead>
  <tr>
    <th>Program</th>
    <th>Level</th>
    <th>Shift</th>
    <th>Time</th>
    <th>Academic Detail</th>
  </tr>
  </thead>
  <tbody>
    @foreach($classes as $c)
      <tr>
        <td>{{$c->program}}</td>
        <td>{{$c->level}}</td>
        <td>{{$c->shift}}</td>
        <td>{{$c->time}}</td>
        <td>
          <a href="#" data-id="{{$c->class_id}}">
            Program : {{$c->program}}/
            Level :{{$c->level}}/
            Shift :{{$c->shift}}/
            Time :{{$c->time}}/
            Batch :{{$c->batch}}/
            Group :{{$c->group}}/
            StartDate : {{date("d-M-y",strtotime($c->srart_date))}}/
            EndDate : {{date("d-M-Y",strtotime($c->end_date))}}/
          </a>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>