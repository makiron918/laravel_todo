@extends('layouts.app')

@section('content')
    <!-- 新タスクフォーム -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                  {{ csrf_field() }}
      <!-- タスク追加ボタン -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Add Task
            </button>
        </div>
      </div>
    </form>
    <!-- 現在のタスク -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- タスク名 -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: 削除ボタン -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection