<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ asset('src/img/portfolio.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&amp;display=swap"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        type="text/css" />

    @vite(['resources/css/Background.css', 'resources/css/styles.css', 'resources/css/Fonts.css'])
    @Vite(['resources/js/app.js'])

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('img/portfolio.png') }}" type="image/x-icon" />
    <meta name="Viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Portafolio</title>
</head>

<body>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Mensaje enviado',
                text: '{{ Session::get('success') }}',
            });
        </script>
    @else
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Mensaje no enviado',
                text: '{{ Session::get('success') }}',
            });
        </script>
    @endif
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="main-container">
            <header>
                <div class="nav container">
                    <a href="#" class="logo">Kevin</a>
                    <ul class="navbar">
                        <li><a href="#home" class="nav-link">Home</a></li>
                        <li><a href="#about" class="nav-link">About</a></li>
                        <li><a href="#briefcase" class="nav-link">Portafolio</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </header>
            <section class="home container" id="home">
                <div class="home-content">
                    <div class="home-img">
                        <img src="{{ asset('src/img/perfil.jpg') }}" alt="Kevin" width="140" height="140"
                            style="transform: scale(1.27)" />
                    </div>
                    <div class="home-text">
                        <h3>Hello</h3>
                        <h2>I'm <span class="color">Kevin</span></h2>
                        <p>
                            I am a Systems Engineering Student, I specialize in the
                            <span class="color">
                                development of applications and web pages</span>. I work with php <span
                                class="color">(web)</span>, C#, Java
                            <span class="color">(desktop applications)</span> T-sql ,
                            ASP.NET and .NET.
                        </p>
                        <div class="social">
                            <a href="https://www.facebook.com/Kevinor17" target="_blank"><i
                                    class="bx bxl-facebook-circle"></i></a>
                            <a href="https://www.linkedin.com/in/kevin-ortiz-20397117b" target="_blank"><i
                                    class="bx bxl-linkedin-square"></i></a>
                            <a href="https://www.instagram.com/nor.sheiks/" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <header class="header">
                <div class="bodyContainer">
                    <section class="about container" id="about">
                        <h2 class="heading">About</h2>
                        <!-- about conten -->
                        <div class="about-content">
                            <div class="about-text">
                                <h2>
                                    Web Developer (Backend) <br />
                                    &amp; Desktop Application Developer
                                </h2>

                                <a href="./style/files/cvDavid.pdf" class="btn" download="CV Kevin Ortiz">Download CV
                                    <i class="bx bxs-cloud-download"></i>
                                </a>
                            </div>
                            <div class="about-text">
                                <p>
                                    Hello! I'm Kevin Ortiz. Web Developer (Backend) &amp;
                                    Desktop application developer. I am currently an Engineering
                                    student in my third year of degree studies in Systems
                                    Engineering. Throughout my journey, I have gained valuable
                                    experience developing desktop and web applications, that has
                                    allowed me to understand the needs and requirements of
                                    customers and end users in order to work for their
                                    satisfaction. Am proud to say that my skills are constantly
                                    evolving, since I get involved in various personal projects
                                    aimed at addressing and solving everyday problems.<br />
                                    <br />
                                </p>
                            </div>
                            <video width="90%" controls autoplay loop muted controlsList="nodownload"
                                style="border-radius: 8px; margin: auto">
                                <source src="{{ asset('src/media/VistaCsharp.mp4') }}" type="video/mp4" />
                                Tu navegador no soporta el elemento de video.
                            </video>
                            <video width="90%" controls autoplay loop muted controlsList="nodownload"
                                style="border-radius: 8px; margin: auto">
                                <source src="{{ asset('src/media/Vistaphp.mp4') }}" type="video/mp4" />
                                Tu navegador no soporta el elemento de video.
                            </video>
                        </div>
                    </section>
                    <section class="about container" id="briefcase">
                        <h2 class="heading">Briefcase</h2>

                        <!-- about conten -->
                        <div class="container">
                            <div class="card" onclick="Redirect('https://github.com/KevinorJG/Financiera.git')">
                                <img src="{{ asset('src/img/GitHub.png') }}" />
                                <h1 class="fonts">Proyecto 1</h1>
                            </div>
                            <div class="card" onclick="Redirect('https://github.com/KevinorJG/Inventario.git')">
                                <img src="{{ asset('src/img/GitHub.png') }}" />
                                <h1 class="fonts">Proyecto 2</h1>
                            </div>
                            <div class="card" onclick="Redirect()">
                                <img src="{{ asset('src/img/GitHub.png') }}" />
                                <h1 class="fonts">Cuenta Linkedin</h1>
                            </div>
                            <div class="card" onclick="Redirect()">
                                <img src="{{ asset('src/img/GitHub.png') }}" />
                                <h1 class="fonts">Cuenta Linkedin</h1>
                            </div>
                        </div>
                        <script>
                            function Redirect(url) {
                                window.open(url);
                            }
                        </script>
                    </section>
                    <section class="contact container" id="contact">
                        <form class="contact-form" id="contact-form" method="post">
                            @csrf
                            <h2 class="heading">Contact</h2>
                            <input type="text" placeholder="Your name" class="" id="name"
                                name="name" />
                            <input type="email" placeholder="Email address" class="" id="email"
                                name="email" />
                            <input type="text" placeholder="Write message here" class="textarea" id="msg"
                                name="message" />
                            <input type="submit" value="Send" class="send-btn" id="send-btn" name="send-btn" />
                        </form>
                    </section>
                </div>
            </header>
        </div>

        <footer class="footer container">
            <p
                style="
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
          ">
                © 2023 <b>Kevin Ortiz</b> - All rights reserved
            </p>
        </footer>

    </div>
</body>

</html>
