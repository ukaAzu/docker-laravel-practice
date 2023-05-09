<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>work_report</title>
    </head>
    <body>
        <a href="/work_reports/create">登録</a>
        <table>
            <tr>
                <th>ID</th>
                <th>従業員ID</th>
                <th>作業日付</th>
                <th>作業時間</th>
                <th>概要</th>
            </tr>
            @foreach ($work_reports as $work_report)
            <tr>
                <td>{{ $work_report->id }}</td>
                <td>{{ $work_report->employee_id }}</td>
                <td>{{ $work_report->work_date }}</td>
                <td>{{ $work_report->work_time }}</td>
                <td>{{ $work_report->summary }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
