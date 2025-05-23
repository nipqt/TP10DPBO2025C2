<!DOCTYPE html>
<html>
<head>
    <title>TomorrowFest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            min-height: 100vh; /* tinggi minimal layar penuh */
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1; /* isi halaman mengisi ruang fleksibel */
        }

        footer {
            /* footer tetap di bawah */
        }
    </style>
</head>
<body style="background-color: #ADCBD6;"> <!-- Latar biru muda -->

    <nav class="p-5 shadow-lg" style="background-color: #006B8F;">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <i class="ph-music-notes-duotone text-white text-3xl"></i>
                <h1 class="text-3xl font-bold text-white tracking-wide">TomorrowFest</h1>
            </div>
            <ul class="flex space-x-6">
                <li><a href="index.php?entity=schedule" style="color: #E2B83B" onmouseover="this.style.color='#FFFFFF'" onmouseout="this.style.color='#E2B83B'">Schedule</a></li>
                <li><a href="index.php?entity=artist" style="color: #E2B83B" onmouseover="this.style.color='#FFFFFF'" onmouseout="this.style.color='#E2B83B'">Artists</a></li>
                <li><a href="index.php?entity=stage" style="color: #E2B83B" onmouseover="this.style.color='#FFFFFF'" onmouseout="this.style.color='#E2B83B'">Stages</a></li>
                <li><a href="index.php?entity=show" style="color: #E2B83B" onmouseover="this.style.color='#FFFFFF'" onmouseout="this.style.color='#E2B83B'">Shows</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto p-6 bg-white rounded shadow mt-6 content">