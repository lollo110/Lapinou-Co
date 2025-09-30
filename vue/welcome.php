<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Welcome</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        overflow: hidden;
    }

    .ecran {
        background-image: url(../assets/img/background.png);
        background-size: contain;
        height: 100vh;
        width: 100%;
    }

    .logo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30%;
        transition: transform 4s ease;
    }

    .zoom {
        transform: translate(-50%, -50%) scale(2);
    }

    .carrot {
        position: absolute;
        top: -60px;
        width: 50px;
        animation: fall linear forwards;
        pointer-events: none;
        z-index: 9999;
    }

    @keyframes fall {
        from {
            transform: translateY(-60px) rotate(0deg);
            opacity: 1;
        }

        to {
            transform: translateY(102vh) rotate(360deg);
            opacity: 0.8;
        }
    }

    h1 {
        /* text-align: center; */
        padding-top: 2%;
        font-size: 3em;
    }
</style>

<body>

    <div class="ecran">
        <h1 class="text-center">WELCOME</h1>
        <img src="../assets/img/logo-final.gif" alt="logo" class="logo">
    </div>

    <script src="../assets/js/structure.js"></script>
</body>

</html>