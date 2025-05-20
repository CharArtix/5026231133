<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="pp.jpg" type="image/png" sizes="16x16" />
    <title>FRONTEND | CHARARTIX</title>
    <!-- Bootstrap 4 CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        background-color: #dff6fe;
        .space-mono-regular {
          font-family: "Space Mono", monospace;
          font-weight: 400;
          font-style: normal;
        }
      }
      .profile-img {
        width: 96px;
        height: 96px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      }
      .icon-tab {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
      }

      .icon-tab a img {
        width: 35px;
        height: 35px;
        transition: transform 0.3s ease;
      }

      .icon-tab a img:hover {
        transform: scale(1.2);
      }
      .nav-pills .nav-link {
        display: flex;
        align-items: center;
        border-radius: 50px;
        height: 50px;
        font-weight: 600;
        margin-bottom: 15px;
        padding: 0 20px;
        transition: 0.3s;
        border: #9c9c9c 1px solid;
      }

      .nav-pills .nav-link-jumbo {
        display: flex;
        align-items: center;
        border-radius: 50px;
        height: 324.25px;
        font-weight: 600;
        margin-bottom: 15px;
        padding: 0 20px;
        transition: 0.3s;
        border: #9c9c9c 1px solid;
      }

      .nav-pills .nav-link:hover {
        transform: scale(1.03);
      }

      .nav-pills .nav-link-jumbo:hover {
        transform: scale(1.03);
      }

      .nav-link .icon-container {
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }
      .nav-link .link-text {
        flex: 1;
        text-align: center;
        color: #000000;
      }

      .nav-link-jumbo .link-text {
        flex: 1;
        text-align: left;
        color: #000000;
        margin-top: 250px;
        margin-left: 20px;
      }
    </style>
  </head>
  <body>
    <div
      class="container d-flex flex-column align-items-center justify-content-center"
      style="min-height: 100vh; margin-top: 100px;"
    >
      <img src="pp.jpg" alt="NFBS Logo" class="profile-img mb-3" />

      <h4 class="font-weight-bold text-center mb-1">CharArtix</h4>

      <div
        class="nav flex-column nav-pills w-578"
        style="max-width: 578px"
        role="tablist"
        aria-orientation="vertical"
      >
        <p class="text-muted text-center mb-4 mx-3 px-5">
          List file dari tugas yang sudah dikerjakan dari pertemuan 1 sampai
          UTS
        </p>
        {{-- <div class="icon-tab">
          <a href="https://www.instagram.com/nfbs_serang/" target="_blank">
            <img src="IGL.svg" alt="Instagram" />
          </a>
          <a
            href="https://www.youtube.com/@NurulFikriBoardingSchoolSerang"
            target="_blank"
          >
            <img src="YTL.svg" alt="YouTube" />
          </a>
          <a href="https://www.tiktok.com/@nfbs_serang" target="_blank">
            <img src="TTL.svg" alt="TikTok" />
          </a>
        </div> --}}
        <a
          class="nav-link text-white"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/Pertemuan1"
          target="_blank"
        >
          <div class="link-text">Pertemuan 1</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/Pertemuan2"
          target="_blank"
        >
          <div class="link-text">Pertemuan 2</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/Pertemuan3"
          target="_blank"
        >
          <div class="link-text">Pertemuan 3</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/Pertemuan4"
          target="_blank"
        >
          <div class="link-text">Pertemuan 4</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/TugasLinktree"
          target="_blank"
        >
          <div class="link-text">Tugas Linktree</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/Pertemuan7"
          target="_blank"
        >
          <div class="link-text">Pertemuan 7 (js1)</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/Pertemuan7_2"
          target="_blank"
        >
          <div class="link-text">Pertemuan 7 (js2)</div>
        </a>

        <a
          class="nav-link text-white mb-4"
          style="background-color: #dff6fe"
          href="http://127.0.0.1:8000/UTS"
          target="_blank"
        >
          <div class="link-text">UTS</div>
        </a>
      </div>
    </div>
  </body>
</html>
