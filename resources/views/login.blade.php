@session('message')
    <script>
        window.alert("{{ session('message') }}")
    </script>
@endsession

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset("storage/images/header-background.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(8px);
        }
        .login-container {
            background: rgba(0, 0, 0, 0.75); /* 提高背景的透明度，增加对比 */
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            color: white;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.75rem;
            color: white;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2); /* 降低透明度，确保文本可读 */
            color: white;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.6); /* 增强边框对比 */
            border-radius: 0;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.8); /* 占位符颜色更亮 */
        }
        .form-control:focus {
            box-shadow: none;
            background: rgba(255, 255, 255, 0.3); /* 聚焦时背景更明显 */
            color: white;
        }
        .btn-custom {
            background: linear-gradient(45deg, #007bff, #00d2ff);
            color: white;
            border-radius: 50px;
            padding: 0.75rem;
            width: 100%;
            font-size: 1rem;
            transition: background 0.3s ease;
        }
        .btn-custom:hover {
            background: linear-gradient(45deg, #0056b3, #00a3cc);
        }
        label {
            color: white; /* 确保标签颜色足够亮 */
        }
        .error-message {
            color: #dc3545; /* Bootstrap 的危险色 (red) */
            font-size: 0.875rem; /* 更小的字体大小 */
            margin-top: 0.25rem; /* 上边距 */
            margin-bottom: 0; /* 无下边距 */
        }
    </style>
</head>

<body>
    <form action="{{ route('login') }}" method="post" style="width: 90%;display:flex;justify-content:center;">
        @csrf
        <div class="login-container">
            <h2>Login</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your name" required>
                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-custom">Login</button>
        </div>
    </form>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
