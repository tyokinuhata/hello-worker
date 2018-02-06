@extends('layouts.app')

@section('content')
    <div class="mt-100">
        <div>
            <form enctype="multipart/form-data" method="POST" action="{{ url('/works/payslip/search') }}">
                <input type="date" name="from">
                <input type="date" name="to">
                <select name="name">
                    <option value="">たかし</option>
                </select>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
        <div>
            <h2>給与明細</h2>
            <table class="table bg-white">
                <tr>
                    <th>合計出勤日数</th>
                    <th>合計出勤時間</th>
                    <th>合計交通費</th>
                    <th>合計金額</th>
                </tr>
                <tr>
                    <td>20日</td>
                    <td>100時間00分</td>
                    <td>5000円</td>
                    <td>100000円</td>
                </tr>
            </table>
            <form action="">
                <table class="table bg-white">
                    <tr>
                        <th>月日</th>
                        <th>出勤時間</th>
                        <th>交通費</th>
                        <th>出勤形態</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>1/1(金)</td>
                        <td>5時間00分</td>
                        <td>250円</td>
                        <td>出勤</td>
                        <td>
                            <button type="submit" class="btn btn-danger">削除</button>
                        </td>
                    </tr>
                </table>
            </form>
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