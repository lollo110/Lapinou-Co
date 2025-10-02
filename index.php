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
        background-color: white; height: 100vh;
        width: 100%;
    }

    .logo {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40%;
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
        padding-top: 2%;
        font-size: 3em;

    }

    @media (max-width: 1024px) {

        h1 img {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .logo {
            width: 60%;
        }

        h1 img {
            width: 100%;
        }
    }

    @media (max-width: 425px) {
        .logo {
            width: 90%;
        }
    }
</style>

<body>

    <div class="ecran">
        <img src="./assets/img/logo-final-nobackground.gif" alt="logo" class="logo">
        <h1 class="text-center"><img src="./assets/img/welcome.png" alt=""></h1>
    </div>

    <script src="./assets/js/structure.js"></script>
</body>

</html>