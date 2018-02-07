@extends('layouts.app')

@section('content')
    <div class="mt-100">
        {{--TODO: 管理画面に移動--}}
        {{--<div>--}}
            {{--<form enctype="multipart/form-data" method="POST" action="{{ url('/works/payslip') }}">--}}
                {{--{{ csrf_field() }}--}}
                {{--<input type="date" name="from">--}}
                {{--<input type="date" name="to">--}}
                {{--<select name="name">--}}
                    {{--@foreach($names as $name)--}}
                        {{--<option value="">{{ $name->name }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                {{--<button type="submit" class="btn btn-primary">検索</button>--}}
            {{--</form>--}}
        {{--</div>--}}
        <div>
            <form enctype="multipart/form-data" method="POST" action="{{ url('/works/payslip') }}">
                {{ csrf_field() }}
                <input type="date" name="from" required>
                <input type="date" name="to" required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
        <div>
            <h2>給与明細</h2>
            @if(count($payslip) > 0)
                <table class="table bg-white">
                    <tr>
                        <th>月日</th>
                        <th>出勤時間</th>
                        <th>交通費</th>
                        <th>出勤形態</th>
                        <th>&nbsp;</th>
                    </tr>
                    @foreach($payslip as $row)
                        <tr>
                            <td>{{ date('Y/m/d', $row->date) }}</td>
                            <td>{{ $row->hour }}時間{{ $row->minute }}分</td>
                            <td>{{ $row->fee }}円</td>
                            <td>{{ $row->form }}</td>
                            <td>
                                <form enctype="multipart/form-data" action="{{ url('/works/payslip/' . $row->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">削除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $payslip->links() }}
            @else
                <p>該当するデータが見つかりませんでした。</p>
            @endif
            <h2>合計</h2>
            @if($cntDate > 0)
                <table class="table bg-white">
                    <tr>
                        <th>合計出勤回数</th>
                        <th>合計出勤時間</th>
                        <th>合計交通費</th>
                        <th>合計金額</th>
                    </tr>
                    <tr>
                        {{--TODO: 見直す必要あり--}}
                        <td>{{ $cntDate }}回</td>
                        <td>{{ $sumHour }}時間{{ $sumMinute }}分</td>
                        <td>{{ $sumFee }}円</td>
                        <td>{{ $sumHour + $sumMinute * 1000 }}円</td>
                    </tr>
                </table>
            @else
                <p>該当するデータが見つかりませんでした</p>
            @endif
        </div>
    </div>
@endsection