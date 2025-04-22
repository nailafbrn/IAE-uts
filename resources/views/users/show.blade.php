<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f9f9f9;
        }
        .card {
            max-width: 500px;
            margin: auto;
            padding: 1.5rem;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card h2 {
            margin-bottom: 1rem;
            font-size: 24px;
            color: #333;
        }
        .info p {
            font-size: 16px;
            color: #555;
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Detail Pengguna</h2>
        <div class="info">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Dibuat pada:</strong> {{ $user->created_at->format('d M Y H:i') }}</p>
        </div>
    </div>
</body>
</html>
