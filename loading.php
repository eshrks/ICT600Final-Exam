<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loading...</title>
  <!-- Loading Animation Effects -->
  <style>
    .whole {
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #010812;

    }

    .spinner {
      width: 44px;
      height: 44px;
      animation: spinner-y0fdc1 2s infinite ease;
      transform-style: preserve-3d;
    }

    /* Rest of your existing styles remain unchanged */

    .spinner>div {
      background-color: rgba(0, 77, 255, 0.2);
      height: 100%;
      position: absolute;
      width: 100%;
      border: 2px solid #004dff;
    }

    .spinner div:nth-of-type(1) {
      transform: translateZ(-22px) rotateY(180deg);
    }

    .spinner div:nth-of-type(2) {
      transform: rotateY(-270deg) translateX(50%);
      transform-origin: top right;
    }

    .spinner div:nth-of-type(3) {
      transform: rotateY(270deg) translateX(-50%);
      transform-origin: center left;
    }

    .spinner div:nth-of-type(4) {
      transform: rotateX(90deg) translateY(-50%);
      transform-origin: top center;
    }

    .spinner div:nth-of-type(5) {
      transform: rotateX(-90deg) translateY(50%);
      transform-origin: bottom center;
    }

    .spinner div:nth-of-type(6) {
      transform: translateZ(22px);
    }

    @keyframes spinner-y0fdc1 {
      0% {
        transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
      }

      50% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
      }

      100% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
      }
    }
  </style>

  <!-- For loading -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Display loading animation
      document.querySelector('.loading').style.display = 'block';
    });
  </script>
</head>

<body>
  <!-- Loading Animation Content -->
  <div class="whole">
    <div class="spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- Redirect to another page -->
  <?php
  header("refresh:0;url=user/index.php");
  exit();
  ?>
</body>

</html>