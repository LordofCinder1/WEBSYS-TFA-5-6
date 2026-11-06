<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts - POS</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8fafc;
        color: #334155;
        margin: 0;
        padding: 2rem;
    }
    nav {
        background-color: #1e293b;
        padding: 1rem 2rem;
        border-radius: 8px;
        margin-bottom: 2rem;
    }
    nav a {
        color: #e2e8f0;
        text-decoration: none;
        margin-right: 1.5rem;
        font-weight: 600;
    }
    nav a:hover {
        color: #38bdf8;
    }
    h1 {
        color: #0f172a;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 0.5rem;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        margin-top: 1rem;
    }
    th, td {
        padding: 12px 16px;
        text-align: left;
    }
    th {
        background-color: #f1f5f9;
        color: #475569;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
    }
    tr:not(:last-child) td {
        border-bottom: 1px solid #f1f5f9;
    }
</style></head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customers</a>
        <a href="/users">Users</a>
    </nav>

    <h1>User Accounts</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>