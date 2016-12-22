   <style>
    ul.count2 li span {
      font-weight: 300;
      font-size: 12px;
    }
    ul.count2 li {
      width: 33%;
    }

    .fixed_height_390 {
      height:100%;
    }

  </style>
<?php
use Carbon\Carbon;
?>
@foreach($works as $work)
        <div class="col-md-9 col-xs-12" >
          <div class="x_panel fixed_height_390" style=" padding-left:0px; padding-right:0px; padding-top:0px; padding-bottom:0px">
            <div class="x_content" style="margin-top:0px; padding-left:0px; padding-right:0px; padding-bottom:0px;">

              <div class="flex">
                <ul class="list-inline widget_profile_box" style="margin-top:0px; padding-right:30px;">
                  <li style="margin-top:5px;">
                    
                    <span class="label label-success">ریال {{$work->wage}}</span>
                   
                  </li>
                  <li style="width:33%;">
                    <img src="{{{ asset('/Mohsen/image/ppp.jpg') }}}" style="margin-left:50%;" alt="..." class="img-circle profile_img">
                  </li>
                  <li>
                    <a  style="border:hidden;" href="#">
                      {{$work->fields()->first()->name}}
                    </a>
                  </li>
                </ul>
              </div>

              <h3 class="name" style="text-align:right;  margin-right:10px">{{$work->subject}}</h3>


              <p style="text-align:right; margin-right:20px" >
                {!!  \Illuminate\Support\Str::words($work->details, 10,'...') !!}
              </p>

              <div class="flex">
                <ul class="list-inline count2" style="margin-bottom:0px;"  >
                  <li>
                  <?php $deadtime = new Carbon($work->deadtime);
$current=$current = Carbon::now();
                   ?>
                    <span class="label label-warning">   {{$current->diffInDays($deadtime) }}  روز تا پایان مهلت</span>
                  </li>
                  <li>
                    <button type="button" class="btn btn-info">توضیحات بیشتر</button>
                  </li>
                  <li>
                    <span class="label label-default">{{$work->applicants_users()->count()}} تعداد درخواست</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endforeach
<div style="clear: both;">
  {{ $works->links() }}

</div>



