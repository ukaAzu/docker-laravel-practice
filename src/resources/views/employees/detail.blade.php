<!DOCTYPE html>
<html>
    <head>
        <meta charaset='utf-8'>
        <title>Employees</title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>部署</th>
                <th>基本給</th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->section }}</td>
                <td>{{ $employee->salary }}</td>
            </tr>
            @endforeach
        </table>
        <table>
            <tr>
                <th>作業日付</th>
                <th>作業時間</th>
                <th>概要</th>
            </tr>
            @foreach ($work_reports as $work_report)
            <tr>
                <td>{{ $work_report->work_date }}</td>
                <td>{{ $work_report->work_time }}時間</td>
                <td>{{ $work_report->summary }}</td>
            </tr>
            @endforeach
        </table>
        <a href="/employees">戻る</a>
    </body>
</html>
