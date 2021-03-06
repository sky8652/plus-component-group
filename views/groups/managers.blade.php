@extends('group::layouts.app')
@section('content')
    <div class="panel-heading">
        圈子管理员
    </div>
    <div class="panel-body">
        <!-- 列表数据 -->
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>名字</th>
            </tr>
            </thead>
            <tbody>
                @if ($managers->count())
                    @foreach($managers as $manager)
                        <tr>
                            <td>
                                {{ $manager->user->name }}
                                @if($manager->founder)
                                    <span class="label label-success">创建者</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="2" style="text-align: center;">无相关记录</td></tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
@section('javascript')

@endsection