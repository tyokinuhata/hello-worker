@extends('layouts.app')

@section('content')
    <div class="mt-100">
        <div>
            <form action="">
                <input type="date" name="from">
                <input type="date" name="to">
                <select name="name">
                    <option value="">たかし</option>
                </select>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
        <div>
            <h2>[給与明細]</h2>
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
                        <td>
                            <input type="number" value="5" name="time" id="time">
                            <label for="time">時間</label>
                            <input type="number" value="00" name="minute" id="minute">
                            <label for="minute">分</label>
                        </td>
                        <td>
                            <input type="number" value="250" id="fee">
                            <label for="fee">円</label>
                        </td>
                        <td>
                            <select>
                                <option>出勤</option>
                                <option>在宅</option>
                            </select>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">編集</button>
                        </td>
                    </tr>
                </table>
            </form>
            {{--ページネーション--}}
        </div>
        <div>
            <h2>[追加]</h2>
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
                        <td>
                            <input type="date">
                        </td>
                        <td>
                            <input type="number" name="time" id="time">
                            <label for="time">時間</label>
                            <input type="number" name="minute" id="minute">
                            <label for="minute">分</label>
                        </td>
                        <td>
                            <input type="number" name="fee" id="fee">
                            <label for="fee">円</label>
                        </td>
                        <td>
                            <select>
                                <option>出勤</option>
                                <option>在宅</option>
                            </select>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">追加</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection