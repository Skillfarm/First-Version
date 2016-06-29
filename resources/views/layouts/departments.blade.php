@extends('layouts.app')
@inject('Works','App\Work')
<?php
    $temp = count($works);
    $tmp = 0;
?>

@section('content')
    <!--
    <button  type="button" class="btn btn-info btn-circle btn-xl" onclick="location.href='/addArtwork';"><a href="/addArtwork" />
            <i class="fa fa-plus" aria-hidden="true"></i>
    </button>
    -->

@if(count($departments) > 0)
    <div class="container col-md-3" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="">
                @foreach($departments as $department)
                <ul class="nav nav-pills nav-stacked">
                   <li><a href="#" class="amir"  data-amir="{{$department->id}}"><span class="glyphicon glyphicon-chevron-right"></span> {{$department->name}}</a>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>

    <?php $i = 0 ?>
    <div class="container col-sm-offset-4">
        @if (count($works) > 0)
            @foreach($works as $work)
            <div id="myid" class="col-sm-offset-1 col-sm-7 ">

            <div class="panel panel-default testimonial" data-index="{{$i}}">
                <div class="panel-heading">
                    Current Works:Department {{$i}}
                </div>
                <?php $i+=1 ?>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                        @foreach ($work as $var)
                            <tr>
                                <td class="table-text"><div>{{ $var->subject }}</div></td>
                                <!-- Task Delete Button -->
                                <td>
                                    <form action="/task/{{ $var }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-task-{{ $work }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>
                @endforeach
        @endif
    </div>



@else
    <a href="">There is no department yet.click here to redirect to main page ! </a>
@endif

<script>

    var article = document.querySelector('.testimonial'),
            data = article.dataset;

    $(document).ready(function(){
        $('div[class="panel panel-default testimonial"]').each(function(index,item){
            if(parseInt($(item).data('index'))>= 0){
                $(item).hide();
            }
        });
    });

    $('a[class="amir"]').each(function(index1,item1){
        $(item1).click(function(){
            $('div[class="panel panel-default testimonial"]').each(function(index,item){
                if(parseInt($(item).data('index'))== parseInt($(item1).data('amir')) - 1){
                    $(item).show();
                }
                else {
                    $(item).hide();
                }
            });


            $(item).hide();
        })
    });


</script>
@endsection
