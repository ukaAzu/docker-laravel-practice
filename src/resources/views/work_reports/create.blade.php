<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>work_report</title>
    </head>
    <body>
        <form action="/work_reports/store" method="post">
            @csrf
            <table>
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                <tr>
                    <th>作業員ID</th>
                    <td><input type="text" name="employee_id"></td>
                </tr>
                <tr>
                    <th>作業日付</th>
                    <td><input type="date" name="work_date"></td>
                </tr>
                <tr>
                    <th>作業時間</th>
                    <td><input type="text" name="work_time"></td>
                </tr>
                <tr>
                    <th>概要</th>
                    <td><input type="text" name="summary"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="登録"></td>
                </tr>
            </table>
        </form>
