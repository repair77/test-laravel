@extends('layouts.app')
@section('content')
<h2>{{ $h2 }}</h2>
@include('common.errors')
<table class="table">
    <tr>
        <th>ID</th>
        <th>任务名称</th>
        <th>创建时间</th>
        <th>最后修改时间</th>    
    </tr>
    @foreach($tasks as $item)
    <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['created_at'] }}</td>
        <td>{{ $item['updated_at'] }}</td>
    </tr>
    @endforeach
</table>
<div class="panel-body">
	<form action="/task" method="POST" class="form-horizontal">
		{{ csrf_field() }}

		<!-- 任务名称 -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">任务</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" placeholder="请输入任务名称" class="form-control">
            </div>
        </div>

        <!-- 增加任务按钮-->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> 增加任务
                </button>
            </div>
        </div>
	</form>
</div>
@endsection