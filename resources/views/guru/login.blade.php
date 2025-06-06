<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Guru | Digital Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --primary-blue: #0a2463;
            --secondary-blue: #3e92cc;
            --accent-blue: #1e88e5;
            --light-blue: #d6f1ff;
        }
        
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://i.pinimg.com/736x/d7/27/01/d72701f83b1fb5d7bcd655ea7d75e7ec.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -2;
            background: inherit;
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            pointer-events: none;
        }
        
        .login-container {
            background: rgba(40, 60, 110, 0.22);
            padding: 2.5rem;
            border-radius: 24px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25), 0 1.5px 8px 0 rgba(30,136,229,0.12);
            width: 100%;
            max-width: 440px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            backdrop-filter: blur(16px) saturate(180%);
            border: 1.5px solid rgba(30, 136, 229, 0.18);
            transition: box-shadow 0.4s, border 0.4s;
        }
        
        .login-container:hover {
            box-shadow: 0 12px 40px 0 rgba(30,136,229,0.22), 0 2px 12px 0 rgba(30,136,229,0.18);
            border: 1.5px solid rgba(30, 136, 229, 0.32);
        }
        
        .login-title {
            font-weight: 800;
            color: #f1f1f1;
            text-shadow: 0 2px 16px #1e88e5, 0 2px 8px rgba(0,0,0,0.18);
            margin-bottom: 2rem;
            text-align: center;
            font-size: 2.2rem;
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
            filter: drop-shadow(0 0 8px #1e88e5aa);
            transition: filter 0.3s;
        }
        
        .login-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background: linear-gradient(90deg, #3e92cc 0%, #1e88e5 100%);
            border-radius: 2px;
            box-shadow: 0 0 8px #1e88e5aa;
        }
        
        /* Custom floating input with only underline and icon */
        .form-floating {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-floating > .form-control:focus ~ label::after,
        .form-floating > .form-control:not(:placeholder-shown) ~ label::after,
        .form-floating > .form-control-plaintext ~ label::after {
            background: transparent !important;
            content: "";
        }

        .form-floating > .form-control:-webkit-autofill ~ label::after {
            background: transparent !important;
        }
        .form-floating .form-control {
            background: rgba(255,255,255,0.06);
            border: none;
            border-bottom: 2.5px solid rgba(255,255,255,0.32);
            border-radius: 0;
            color: #fff;
            padding-left: 2.2rem;
            box-shadow: none;
            transition: border-color 0.3s, background 0.3s;
            font-size: 1.08rem;
            font-weight: 500;
        }
        .form-floating .form-control:-webkit-autofill,
        .form-floating .form-control:-webkit-autofill:hover,
        .form-floating .form-control:-webkit-autofill:focus {
            -webkit-text-fill-color: #fff;
            -webkit-box-shadow: 0 0 0px 1000px rgba(30,136,229,0.08) inset;
            transition: background-color 5000s ease-in-out 0s;
        }
        .form-floating .form-control:focus {
            border-bottom: 2.5px solid var(--accent-blue);
            background: rgba(30,136,229,0.08);
            color: #ffffff;
            box-shadow: 0 2px 8px #1e88e555;
        }
        .form-floating label {
            left: 2.2rem;
            color: rgba(200, 220, 255, 0.7);
            background: none !important;
            padding: 1rem 0.75rem 0.5rem 0;
            font-size: 1rem;
            pointer-events: none;
            transition: all 0.2s;
            font-weight: 500;
            letter-spacing: 0.2px;
        }
        
        .form-floating input:not(:placeholder-shown) ~ label,
        .form-floating .form-control:focus ~ label {
            transform: scale(0.85) translateY(-1.2rem) translateX(0.15rem);
            color: #1e88e5;
            background: none !important;
            padding: 0 0.5rem;
            text-shadow: 0 0 6px #1e88e5aa;
        }
        .form-floating .input-icon {
            position: absolute;
            left: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #1e88e5;
            font-size: 1.2rem;
            opacity: 0.85;
            pointer-events: none;
            z-index: 2;
            filter: drop-shadow(0 0 4px #1e88e5aa);
        }
        
        .btn-login {
            background: linear-gradient(90deg, #3e92cc 0%, #1e88e5 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(.4,2,.3,1);
            margin-top: 1rem;
            box-shadow: 0 2px 12px #1e88e555;
            filter: drop-shadow(0 0 8px #1e88e5aa);
        }
        
        .btn-login:hover, .btn-login:focus {
            background: linear-gradient(90deg, #1e88e5 0%, #3e92cc 100%);
            color: #fff;
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 8px 24px #1e88e555;
            filter: drop-shadow(0 0 16px #1e88e5cc);
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }
        
        .shape {
            position: absolute;
            opacity: 0.1;
            border-radius: 50%;
            background: var(--light-blue);
        }
        
        .shape-1 {
            width: 150px;
            height: 150px;
            top: -50px;
            left: -50px;
        }
        
        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: -80px;
            right: -80px;
        }
        
        .brand-logo {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .brand-logo img {
            height: 150px;
            filter: drop-shadow(0 2px 4px rgba(14, 13, 13, 0.589));
        }

        /* Rain effect */
        .rain {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
        }
        .rain-drop {
            position: absolute;
            width: 2px;
            height: 22px;
            background: linear-gradient(to bottom, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0.45) 100%);
            border-radius: 1px;
            opacity: 0.7;
            animation: rain-fall 1.3s cubic-bezier(0.4,0.2,0.2,1) infinite;
        }
        @keyframes rain-fall {
            0% { transform: translateY(-40px); opacity: 0.7; }
            80% { opacity: 0.7; }
            100% { transform: translateY(100vh); opacity: 0; }
        }
        
        /* Custom alert */
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.92);
            color: white;
            border: none;
            backdrop-filter: blur(6px);
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px #dc354555;
            font-size: 1.05rem;
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>

    <div class="rain">
        <!-- Rain drops will be generated here by JavaScript -->
    </div>
    
    <div class="login-container animate__animated animate__fadeIn">
        <div class="brand-logo">
            <img src="{{ asset('images/logo.png' ) }}" alt="School Logo">
        </div>
        
        <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <h2 class="login-title">Guru Login</h2>
        </div>
        
        @if(session('error'))
            <div class="alert alert-danger animate__animated animate__shakeX mb-4">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="{{ route('guru.login') }}" method="POST">
            @csrf
            <!-- Username Field with Floating Label and Icon -->
            <div class="form-floating mb-4">
                <span class="input-icon"><i class="fas fa-user"></i></span>
                <input type="text" name="username" class="form-control" id="username" 
                       placeholder="NIP / Username" required autofocus value="{{ old('username') }}">
                <label for="username"><i class="fas fa-id-card"></i> Username</label>
            </div>
            
            <!-- Password Field with Floating Label and Icon -->
            <div class="form-floating mb-4">
                <span class="input-icon"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" class="form-control" id="password" 
                       placeholder="Kata Sandi" required>
                <label for="password"><i class="fas fa-key"></i> Kata Sandi</label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-login w-100">
                Login
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple animation on load
        document.addEventListener('DOMContentLoaded', function() {
            const shapes = document.querySelectorAll('.shape');
            shapes.forEach((shape, index) => {
                shape.style.animation = `float ${6 + index * 2}s ease-in-out infinite alternate`;
            });
            
            // Add floating animation
            const style = document.createElement('style');
            style.innerHTML = `
                @keyframes float {
                    0% { transform: translateY(0) rotate(0deg); }
                    100% { transform: translateY(-20px) rotate(5deg); }
                }
            `;
            document.head.appendChild(style);

            // Rain effect
            function createRain() {
                const rain = document.querySelector('.rain');
                if (!rain) return;
                // Bersihkan rain sebelum menambah drops baru
                rain.innerHTML = '';
                const drops = 90;
                // Pastikan tinggi viewport sudah siap
                const viewportHeight = window.innerHeight;
                for (let i = 0; i < drops; i++) {
                    const drop = document.createElement('div');
                    drop.className = 'rain-drop';
                    drop.style.left = Math.random() * 100 + 'vw';
                    drop.style.top = (-Math.random() * viewportHeight * 0.2) + 'px'; // Mulai sedikit di atas viewport
                    drop.style.animationDelay = (Math.random() * 1.2) + 's';
                    drop.style.animationDuration = (1 + Math.random() * 0.7) + 's';
                    rain.appendChild(drop);
                }
            }
            createRain();
            window.addEventListener('resize', createRain);
        });
    </script>
</body>
</html>