<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistant Management</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 28px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .btn:hover {
            background: #2980b9;
        }

        .table-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #f8f9fa;
            color: #495057;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .action-link {
            color: #3498db;
            text-decoration: none;
            margin-right: 15px;
        }

        .action-link:hover {
            text-decoration: underline;
            color: #2980b9;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Assistant List</h1>

    <a href="{{ url('/create') }}" class="btn">Create New Assistant</a>

    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assistants as $assistant)
                <tr>
                    <td>{{ $assistant->id }}</td>
                    <td>{{ $assistant->name }}</td>
                    <td>
                        <a href="{{ url('/edit/' . $assistant->id) }}" class="action-link">Edit</a>
                        <!-- Add delete button here if needed -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
