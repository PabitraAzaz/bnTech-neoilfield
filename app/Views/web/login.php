<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Neoilfield</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f7fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        .login-container h2 {
            margin-bottom: 25px;
            color: #0b3d91;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 12px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: #0b3d91;
        }

        .login-btn {
            width: 100%;
            background-color: #0b3d91;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
        }

        .login-btn:hover {
            background-color: #062d6f;
        }





        .alert-message {
            position: relative;
            padding: 5px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            text-align: left;
        }

        .alert-message.danger {
            background-color: #fdecea;
            color: #b00020;
            border: 1px solid #f5c6cb;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 12px;
            font-size: 18px;
            font-weight: bold;
            color: #b00020;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <?php if ($flash = session()->getFlashdata('error_msg')): ?>
            <div class="alert-message <?= esc($flash['type']) ?>" id="alertBox1">
                <span class="close-btn" onclick="document.getElementById('alertBox1').style.display='none'">&times;</span>
                <p><?= esc($flash['msg']) ?></p>
            </div>
        <?php endif; ?>

        <?php if ($flash = session()->getFlashdata('invalid_creds')): ?>
            <?php if (is_array($flash) && isset($flash['errors'])): ?>
                <div class="alert-message <?= esc($flash['type']) ?>" id="alertBox2">
                    <span class="close-btn" onclick="document.getElementById('alertBox2').style.display='none'">&times;</span>
                    <?php foreach ($flash['errors'] as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>



        <h2>Login to Your Admin Panel</h2>

        <form action="<?= base_url('admin') ?>" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your password" />
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

</body>

</html>