<!DOCTYPE html>
<html>
    <head>
        <meta charaset='utf-8'>
        <title>Employees</title>
    </head>
    <body>
        <h1>Employees</h1>
        <form action="/employees/search" method="get">
            <input type="text" name="employee_name_like">
            <input type="submit" value="検索">
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>部署</th>
                <th>基本給</th>
                <th></th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->section }}</td>
                <td>{{ $employee->salary }}</td>
                <td><a href="/employee/detail{{ $employee->id }}">詳細</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
