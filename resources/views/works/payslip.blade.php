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
            <table class="table bg-white">
                @if(count($payslip) > 0)
                    <tr>
                        <th>月日</th>
                        <th>出勤時間</th>
                        <th>交通費</th>
                        <th>出勤形態</th>
                        <th>&nbsp;</th>
                    </tr>
                    @foreach($payslip as $row)
                        <tr>
                            <td>{{ $row->date }}</td>
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
                @else
                    <p>該当するデータが見つかりませんでした。</p>
                @endif
            </table>
            <h2>合計</h2>
            <table class="table bg-white">
                <tr>
                    <th>合計出勤日数</th>
                    <th>合計出勤時間</th>
                    <th>合計交通費</th>
                    <th>合計金額</th>
                </tr>
                <tr>
                    {{--TODO: 見直す必要あり--}}
                    <td>20日</td>
                    <td>{{ $sumHour }}時間{{ $sumMinute }}分</td>
                    <td>{{ $sumFee }}円</td>
                    <td>{{ $sumHour + $sumMinute * 1000 }}円</td>
                </tr>
            </table>
            <div class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection