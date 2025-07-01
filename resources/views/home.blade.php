<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./img/img.png.png">
    <link rel="stylesheet" href="{{ asset('css/styles.home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Conexus</title>

    <header>
    <div class="interface">
      <section class="logo">
        <a href="#" class="logo">Con<span class="string">exus</a>
      </section>

      <section class="menu-desktop">
        <nav>
          <ul class="links">
            <li><a href="">Link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">Link</a></li>
            <li><a href="">Link</a></li>
          </ul>
        </nav>
      </section>

      <section class="btn-contato">
        <a href="">
            <button>Conecte-se</button>
        </a>
      </section>

    </div>
  </header>

    <!-- Slider -->
    <div class="slide-body">
        <div class="slider">

            <div class="slides">
                <!-- Radio Buttons -->
                <input type="radio" nome="radio-btn" id="radio1">
                <input type="radio" nome="radio-btn" id="radio2">
                <input type="radio" nome="radio-btn" id="radio3">
                <input type="radio" nome="radio-btn" id="radio4">
                <!-- Fim radio buttons -->

                <!-- Slide imagens -->
                <div class="slide first">
                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/9169455-ceu-dourado-por-do-sol-na-costa-natureza-paisagem-vetor.jpg"
                        alt="Imagem 1" />
                </div>
                <div class="slide">
                    <img src="{{ asset('src/wallpaperflare.com_wallpaper (1).png') }}" alt="Imagem 2" />
                </div>
                <div class="slide">
                    <img src="{{ asset('src/wallpaperflare.com_wallpaper (1).png') }}" alt="Imagem 3" />
                </div>
                <div class="slide">
                    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/6326651-tropical-praia-sundown-horizonte-paisagem-vetor.jpg"
                        alt="Imagem 4" />
                </div>
                <!-- FIm slide imagens -->

                <!-- Navigation -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

            </div>

            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>

        </div>
    </div>


    <script src="{{ asset('js/script.js')}}"></script>
</head>

<body>

    <main>
        <section class="home">

            <!-- TEXTO -->
            <div class="home-text">
                <h4 class="text-h4"><strong>Seja bem-vindo(a) à Conexus</strong></h4>
                <h1 class="text-h1">Porque todo mundo precisa de um lugar para se <br><strong>"conectar"</strong></h1>
                <p>
                    <br>
                    <strong>Nossa plataforma promove a interação entre pessoas, com um olhar atencioso e
                        acolhedor para quem enfrenta desafios emocionais. Em um ambiente virtual anônimo e seguro,
                        todos podem se sentir à vontade para desabafar, refletir e compartilhar sentimentos,
                        encontrando apoio com respeito, empatia e sem julgamentos.</strong>
                </p>
                <a href="#" class="home-btn">Cadastre-se ou Faça Login</a>
            </div>

            <!-- CARDS -->
            <div class="cards-container">
                <a href="#card1" class="card">
                    <img src="../src/card1.png" alt="Cérebro com coração" />
                    <p><strong>Aqui, você se conecta com pessoas que sabem ouvir, que compartilham histórias, que
                            acolhem sem perguntas estranhas ou olhares tortos.
                            É um lugar pra conversar de verdade, sem máscaras, sem julgamentos.</strong></p>
                </a>
                <a href="#card2" class="card">
                    <img src="../src/card2.png" alt="Mãos com cérebro" />
                    <p><strong>Nós não queremos parecer uma plataforma “séria demais”. O que nós queremos ser aquele é
                            lugar que você busca
                            quando precisa de verdade — pra ser ouvido, pra pensar alto, pra lembrar que você não tá
                            sozinho.</strong></p>
                </a>
                <a href="#card3" class="card">
                    <img src="../src/card3.png" alt="Pessoa com letra C - Conexus" />
                    <p><strong>Porque no fim das contas, todo mundo precisa se conectar... com outras pessoas, consigo
                            mesmo,
                            com a vida... E é por isso que estamos aqui...
                            É por isso que somos a CONEXUS.</strong></p>
                </a>
            </div>
        </section>

        <div class="home-video">
            <video id="narracao" play muted playsinline>
                <source src="../src/narracao.mp4" type="video/mp4">
                Seu navegador não suporta vídeo.
            </video>
            <button id="audio-btn">🔊 Ativar som</button>
        </div>

    </main>

    <script>
    const video = document.getElementById('narracao');
    const audioBtn = document.getElementById('audio-btn');
    let isMuted = true;

    video.addEventListener('click', () => {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    });

    audioBtn.addEventListener('click', () => {
        isMuted = !isMuted;
        video.muted = isMuted;
        audioBtn.textContent = isMuted ? "🔇 Ativar som" : "🔊 Desativar som";
        video.play();
    });
    </script>


</body>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <div class="footer-logo">
                <a href="#">C<span>o</span>nexus</a>
            </div>
            <br>
            <p>Conectando você ao futuro. Sinta-se bem e acolhido.</p>
        </div>

        <div class="footer-section">
            <h4>Links Rápidos</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Contato</h4>
            <p>Email: contato@conexus.com</p>
            <p>Telefone: (11) 1234-5678</p>
            <p>Endereço: Rua Exemplo, 123, São Paulo - SP</p>
        </div>

        <div class="footer-section">
            <h4>Redes Sociais</h4>
            <div class="social-icons">
                <a href="https://www.facebook.com/?locale=pt_BR" target="_blank" arial-label="Facebook"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/?locale=pt_BR" target="_blank" arial-label="Linkedin"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/?locale=pt_BR" target="_blank" arial-label="Instgram"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Conexus. Todos os direitos reservados.</p>
    </div>
</footer>

</html>