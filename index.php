<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INFOTEC XV Edição</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav>
      <div class="logo animate__animated animate__fadeInLeft">Infotec</div>
      <ul class="nav-links animate__animated animate__fadeInDown">
        <li><a href="#inicio">Início</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#evento">Evento</a></li>
        <li><a href="#servicos">Atividades</a></li>
        <li><a href="#contacto">Contacto</a></li>
         <li><a href="Login.php">Login</a></li>
      </ul>
      <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
  <section id="inicio" class="hero">
    <div class="hero-overlay"></div>
    <div class="stars">
      <!-- Add as many stars as you want here -->
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
      <div class="star"></div>
    </div>
    <div class="hero-content animate__animated animate__fadeIn">
      <h1>Bem-vindo à Infotec</h1>
      <p>Soluções inovadoras para transformar o seu negócio.</p>
      <a href="#servicos" class="cta">Explorar Serviços</a>
    </div>
  </section>
  <!-- About Section -->
  <section id="sobre" class="sobre">
    <div class="container animate__animated animate__fadeInUp">
      <h2>Sobre Nós</h2>
      <p>Na Infotec, acreditamos no poder da tecnologia para transformar ideias em realidade. A nossa missão é fornecer soluções personalizadas que impulsionem o crescimento dos nossos clientes.</p>
      <div class="sobre-grid">
        <div class="sobre-item animate__animated animate__fadeInLeft">
          <i class="fas fa-users"></i>
          <h3>Equipa Qualificada</h3>
          <p>Profissionais experientes e dedicados a alcançar a excelência.</p>
        </div>
        <div class="sobre-item animate__animated animate__fadeInUp">
          <i class="fas fa-lightbulb"></i>
          <h3>Inovação</h3>
          <p>Tecnologias de ponta para soluções modernas e eficazes.</p>
        </div>
        <div class="sobre-item animate__animated animate__fadeInRight">
          <i class="fas fa-handshake"></i>
          <h3>Parcerias</h3>
          <p>Colaboração próxima para compreender e atender às suas necessidades.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Event Section -->
  <section id="evento" class="evento">
    <div class="container animate__animated animate__fadeInUp">
      <h2>INFOTEC na EST</h2>
      <p>O INFOTEC está de volta à Escola Superior de Tecnologia (EST) do Instituto Politécnico de Castelo Branco. E adivinha só? Esta é a nossa 15ª edição, e tu não vais querer perder!</p>
      <h3>O que podes esperar deste evento incrível?</h3>
      <ul>
        <li>Oportunidade de entrar em contacto com várias empresas através de palestras temáticas e workshops técnicos, sendo uma oportunidade única para expandir a tua rede de contactos e conhecer mais sobre o mundo profissional.</li>
        <li>Partilhar toda a oferta formativa e o trabalho que fazemos aqui na EST. Uma oportunidade para os alunos do ensino secundário e profissional perceberem melhor como é o dia a dia no ensino superior.</li>
      </ul>
      <p>Durante o evento, vais ter acesso a:</p>
      <ul>
        <li>Palestras com temáticas incríveis realizadas por oradores de entidades parceiras.</li>
        <li>Workshops instruídos por especialistas de diversas áreas para os nossos alunos da EST.</li>
        <li>INFOTEC Labs para alunos do ensino secundário ou profissional, que mostram como é estudar na EST!</li>
      </ul>
    </div>
  </section>
  <!-- Schedule Section -->
  <section id="schedule" class="schedule">
  <div class="container animate__animated animate__fadeInUp">
    <!-- Dia 14 -->
    <h2 class="schedule-day">Dia 14</h2>
    <div class="schedule-grid">
      <div class="schedule-item">
        <div class="schedule-time">09:30 - 11:15</div>
        <h3 class="schedule-title">Início das palestras</h3>
        <p class="schedule-speaker">Vice Trags (OutSystem) & Across Metals (BMC)</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">11:15 - 11:45</div>
        <h3 class="schedule-title">Pausa para café</h3>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">11:45 - 12:30</div>
        <h3 class="schedule-title">Inteligência Artificial em Operações de Cibersegurança</h3>
        <p class="schedule-speaker">Francisco Geopárdos (Áustria)</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">12:30 - 13:15</div>
        <h3 class="schedule-title">Da Paixão à Profissionalidade: Percurso de Carreira em IA e Deepfakes</h3>
        <p class="schedule-speaker">Professor Hugo Santos</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">13:15 - 14:30</div>
        <h3 class="schedule-title">Almoço</h3>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">14:30 - 16:00</div>
        <h3 class="schedule-title">Desbloquear o Amanhã: Explorar o Futuro do Desenvolvimento de Software com Low-Code e IA</h3>
        <p class="schedule-speaker">OutSystems & Trags Power (Dock)</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">16:00 - 17:30</div>
        <h3 class="schedule-title">Detecção de Deepfakes usando CMNs</h3>
        <p class="schedule-speaker">Professor Hugo Santos</p>
      </div>
    </div>
    <!-- Dia 15 -->
    <h2 class="schedule-day">Dia 15</h2>
    <div class="schedule-grid">
      <div class="schedule-item">
        <div class="schedule-time">10:00 - 19:45</div>
        <h3 class="schedule-title">A Jornada dos Dados à Sabedoria</h3>
        <p class="schedule-speaker">Fernando Jesus Christ (Data Solutions)</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">19:45 - 20:15</div>
        <h3 class="schedule-title">Pausa para café</h3>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">20:15 - 21:00</div>
        <h3 class="schedule-title">Mesa-redonda com ex-alunos</h3>
        <p class="schedule-speaker">Aurélio, João e Mónica (ex-alunos da EST)</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">21:00 - 21:45</div>
        <h3 class="schedule-title">Entrega dos prémios dos posters</h3>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">21:45 - 23:00</div>
        <h3 class="schedule-title">Almoço</h3>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">14:30 - 16:00</div>
        <h3 class="schedule-title">Retalhos da vida de um consultor de dados</h3>
        <p class="schedule-speaker">Fernando Jesus Christ (Data Solutions)</p>
      </div>
      <div class="schedule-item">
        <div class="schedule-time">10:00 - 17:30</div>
        <h3 class="schedule-title">Segurança informática nos dias de hoje</h3>
        <p class="schedule-speaker">Francisco Lourenço (FORMCH) & Mónica Bianco (FORMCH)</p>
      </div>
    </div>
  </div>
</section>
  <!-- Location Section -->
  <section id="localizacao" class="localizacao">
    <div class="container">
      <h2>Onde nos encontrar</h2>
      <div class="localizacao-content">
        <div class="localizacao-info">
          <h3>Escola Superior de Tecnologia de Castelo Branco</h3>
          <p><strong>Campus da Talagueira</strong></p>
          <p>Av. do Empresário</p>
          <p>6000-767 Castelo Branco</p>
          <p>Contamos contigo nos dias 14 e 15 de Março!</p>
        </div>
        <div class="localizacao-mapa">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d396911.502611027!2d-9.1411938!3d38.9954378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3d5ea6bb2280e1%3A0x1c460157bc4b46c8!2sEscola%20Superior%20de%20Tecnologia%20-%20Instituto%20Polit%C3%A9cnico%20de%20Castelo%20Branco!5e0!3m2!1spt-PT!2spt!4v1736718032516!5m2!1spt-PT!2spt"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section -->
  <section id="servicos" class="servicos">
    <div class="container animate__animated animate__fadeInUp">
      <h2>Atividades</h2>
      <div class="card-grid">
        <div class="card animate__animated animate__fadeInLeft">
          <img src="/Img/InfotecLabs_Card.jpg" alt="Desenvolvimento Web" class="card-image">
          <h3>Palestras</h3>
          <p class="Palestras">Descobre palestras inspiradoras com especialistas de topo! Aprende, cresce e desenvolve-te pessoal e profissionalmente. Participa, questiona e transforma o teu futuro. Evento dedicado a todos os alunos.</p>
        </div>
        <div class="card animate__animated animate__fadeInUp">
          <img src="/Img/Palestras_Card.jpg" alt="Aplicações Móveis" class="card-image">
          <h3>Workshops</h3>
          <p class="Aplicações">Os workshops da INFOTEC XIV Edição são eventos exclusivos para alunos da EST (Escola Superior de Tecnologia), oferecendo experiências práticas e dinâmicas em laboratório. Conduzidos por especialistas de diferentes áreas, estes workshops proporcionam ferramentas e estratégias essenciais para o desenvolvimento pessoal e profissional dos participantes.</p>
        </div>
        <div class="card animate__animated animate__fadeInRight">
          <img src="/Img/Workshops_Card.jpg" alt="Soluções Cloud" class="card-image">
          <h3>INFOTEC Labs</h3>
          <p class="Infotec">Descobre o mundo da engenharia informática nos INFOTEC Labs da EST! Sessões práticas exclusivas para alunos do ensino secundário e profissional, onde poderás participar em projetos fascinantes do nosso plano de estudos, explorar temas atuais em informática e novas tecnologias, e experimentar o ambiente de aprendizagem dinâmico da EST. Não percas esta oportunidade única de vivenciar o futuro da tecnologia e descobrir o teu potencial!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <section id="contacto" class="contacto">
    <div class="container animate__animated animate__fadeInUp">
      <h2>Contacto</h2>
      <form id="contacto-form" action="/contacto" method="POST">
        <input type="text" id="nome" name="nome" placeholder="O seu nome" required>
        <input type="email" id="email" name="email" placeholder="O seu email" required>
        <textarea id="mensagem" name="mensagem" placeholder="A sua mensagem" required></textarea>
        <button type="submit" class="btn-enviar">Enviar Mensagem</button>
      </form>
    </div>
  </section>
  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Infotec. Todos os direitos reservados.</p>
      <ul class="social-icons">
        <li><a href="https://www.facebook.com/est.ipcb.pt/?locale=pt_PT"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.linkedin.com/company/estcb/"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="https://www.instagram.com/ipcb.pt/"><i class="fab fa-instagram"></i></a></li>
      </ul>
      <p>Feito por: Guilherme Sales DWM</p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>
