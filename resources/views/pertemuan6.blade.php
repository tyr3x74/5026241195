<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TryHackMe | Linktree</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      background-color: #c9cacc;

    }

    .page-wrapper {
      max-width: 480px;
      background-color: #f5f5f5;
      border-radius: 12px;
    }

    .topbar-btn {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      border: none;
      background: transparent;

    }
    .avatar-circle img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      padding: 12px;
    }

    .link-btn {
      display: flex;
      align-items: center;
      width: 100%;
      padding: 0 14px;
      height: 52px;
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      color: #111827;
      font-size: 0.875rem;
      font-weight: 500;
    }
    .soc-link img {
      width: 22px;
      height: 22px;
    }

    .join-btn {
      border: 1.5px solid #d1d5db;
      border-radius: 999px;
      background: transparent;
      font-size: 0.8rem;
      font-weight: 600;
      color: #111827;
      transition: background 0.15s;
    }

    .footer-link {
      font-size: 0.72rem;
      color: #9ca3af;
      text-decoration: none;
    }

    .profile-name {
      font-size: 20px;
      font-weight: 700;
      color: #111827;
    }

  </style>
</head>
<body class="d-flex justify-content-center">
<div class="page-wrapper w-100 d-flex flex-column align-items-center px-3 pt-5 pb-4 position-relative">

  <div class="position-absolute w-100 d-flex justify-content-between align-items-center px-3" style="top:14px;left:0;right:0;">
    <button class="topbar-btn"><svg fill="none" height="18px" width="18px" viewBox="0 0 28 28" class="animation_rotate__SBERF"><path d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z" fill="currentColor"></path></svg></button>
    <button class="topbar-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z"></path></svg></button>
  </div>


  <div class="avatar-circle mt-2 mb-3">
    <img src="assets/img/tryhackme.webp" alt="TryHackMe Logo" />
  </div>


  <p class="profile-name text-center mb-1" id="intro">TryHackMe</p>
  <p class="profile-bio text-center mb-4">
    Learn cyber security using hands-on<br>exercises, all through your browser!
  </p>

  <a href="https://tryhackme.com/certification/security-analyst-level-2?utm_source=instagram&utm_medium=social&utm_campaign=sal2launch" class="link-btn mb-2" id="tombol">
    <span class="flex-fill text-center">🆕 SAL2 Certification 🚀</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/echo?utm_source=instagram&utm_medium=social&utm_campaign=echolaunch" class="link-btn mb-2">
    <span class="flex-fill text-center">Meet Echo 🚀</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/certification/security-analyst-level-1?utm_source=instagram&utm_medium=social&utm_campaign=sal1" class="link-btn mb-2">
    <span class="flex-fill text-center">🆕 SAL1 Professional Certification</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/hacktivities?utm_source=instagram&utm_medium=social&utm_campaign=startlearning" class="link-btn mb-2">
    <span class="flex-fill text-center">Start Learning 🚀</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/why-subscribe?utm_source=instagram&utm_medium=social&utm_campaign=whysubscribe" class="link-btn mb-2">
    <span class="flex-fill text-center">Subscribe to TryHackMe Premium 🤓</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://business.tryhackme.com/book-a-demo?utm_source=instagram&utm_medium=social&utm_campaign=ctfblog" class="link-btn mb-2">
    <span class="flex-fill text-center">Book a 30-Minute Demo ⏰</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/business?utm_source=instagram&utm_medium=social&utm_campaign=business" class="link-btn mb-2">
    <span class="flex-fill text-center">For Business</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/classrooms?utm_source=instagram&utm_medium=social&utm_campaign=education" class="link-btn mb-2">
    <span class="flex-fill text-center">For Education</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://tryhackme.com/resources/blog?utm_source=instagram&utm_medium=social&utm_campaign=blog" class="link-btn mb-2">
    <span class="flex-fill text-center">Blog / News</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://store.tryhackme.com/?utm_source=instagram&utm_medium=social&utm_campaign=swagstore" class="link-btn mb-2">
    <span class="flex-fill text-center">Get Your Swag!</span>
    <i class="bi bi-three-dots-vertical"></i>
  </a>


  <div class="d-flex justify-content-center align-items-center mt-3" style="gap:18px;">
    <a href="https://www.facebook.com/people/Tryhackme/100069557747714/" class="soc-link" title="Facebook">
      <i class="bi bi-facebook"></i>
    </a>
    <a href="https://x.com/RealTryHackMe" class="soc-link" title="X">
      <i class="bi bi-twitter"></i>
    </a>
    <a href="https://www.linkedin.com/company/tryhackme" class="soc-link" title="LinkedIn">
      <i class="bi bi-linkedin"></i>
    </a>
    <a href="https://www.instagram.com/realtryhackme" class="soc-link" title="Instagram">
      <i class="bi bi-instagram"></i>
    </a>
    <a href="https://www.tiktok.com/@tryhackmeofficial" class="soc-link" title="TikTok">
      <i class="bi bi-tiktok"></i>
    </a>
    <a href="https://discord.com/invite/tryhackme" class="soc-link" title="Discord">
      <i class="bi bi-discord"></i>
    </a>
  </div>


  <a href="#" class="join-btn btn mt-4 px-4 py-2">Join tryhackmeofficial on Linktree</a>
  <div class="d-flex align-items-center mt-3" style="gap:10px;">
    <a href="#" class="footer-link">Cookie Preferences</a>
    <span></span>
    <a href="#" class="footer-link">Report</a>
    <span></span>
    <a href="#" class="footer-link">Privacy</a>
    <span></span>
    <a href="#" class="footer-link">Explore</a>
  </div>

</div>
    <script>
        function showme() {
            //alert("hallo selamat siang");
            Swal.fire({
                title: "Halo!",
                text: "Selamat Siang",
                icon: "success"
            });
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }

    </script>
            <button class="btn btn-primary" onclick="showme();"> Show Me </button>
            <button class="btn btn-primary" onclick="changeText();"> Change Text </button>
            <button class="btn btn-primary" onclick="changeStyle();"> Change Style </button>
</body>
</html>
