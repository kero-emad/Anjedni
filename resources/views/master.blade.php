
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    

<!DOCTYPE html>
<html lang="en">
<head>
<title>Anjedni Service Platform</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/navreq.css') }}">
<style>
    /* تنسيقات عامة */
    body, html {
        height: 100%;
        margin: 0;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),
                    url('{{ asset("uploads/images/bg.jpeg") }}') no-repeat center center fixed;
        background-size: cover;
        padding-top: 80px; /* مساحة للـ navbar */
    }

    /* تنسيقات الـ navbar */
    .navbar {
        height: 80px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        background: linear-gradient(45deg, #54cbab, #174135);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    /* تنسيقات الـ sidebar */
    .sidebar {
        position: fixed;
        top: 80px; 
        left: 0;
        height: calc(100vh - 80px);
        width: 250px;
        background: linear-gradient(45deg, #54cbab, #174135, #54cbab);
        padding: 20px 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 999;
        overflow-y: auto;
    }

    
    main {
        margin-left: 250px; 
        margin-top: 80px; 
        padding: 30px;
        min-height: calc(100vh - 80px);
        transition: all 0.3s;
    }

    .user-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 3px solid white;
    }

    .nav-link {
        color: white !important;
        font-size: 18px;
        padding: 12px 20px !important;
        border-radius: 8px;
        transition: all 0.3s;
        margin: 5px 0;
    }

    .nav-link:hover {
        background: rgba(255,255,255,0.15);
        transform: translateX(5px);
    }

    .logout-btn {
        margin-top: auto;
        background: #1a5043;
        color: white;
        border: none;
        padding: 12px;
        width: 100%;
        border-radius: 8px;
        transition: all 0.3s;
    }

    .logout-btn:hover {
        background: #174135;
        transform: scale(0.98);
    }
    /* تنسيقات للجوال */
    @media (max-width: 768px) {
        .sidebar {
            position: relative;
            top: 0;
            width: 100%;
            height: auto;
        }

        main {
            margin-left: 0;
            margin-top: 20px;
            padding: 15px;
        }

        .navbar {
            height: 60px;
        }

        body {
            padding-top: 60px;
        }
        .welcome-card {
            animation: fadeInUp 0.8s ease;
        }
        
        .welcome-avatar {
            width: 150px;
            height: 150px;
            border: 3px solid #11e0a6;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .welcome-avatar:hover {
            transform: scale(1.05);
        }
        
        .quick-actions .btn {
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .quick-actions .btn-success {
            background: #28a745;
            border-color: #28a745;
        }
        
        .quick-actions .btn-success:hover {
            background: #218838;
            transform: translateY(-2px);
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
    
    }
    .container.my-1 {
        margin-top: 0 !important;
        padding-top: 20px;
    }

}
</style>
</head>
<body>
@include('user.navreq')
<div class="container my-0 pt-0">
    @yield('content')
</div>
<footer class="bg-dark text-white text-center py-3 mt-4">
    © 2025 Anjedni. All rights reserved.
</footer>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>