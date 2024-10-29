<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

  <link rel="stylesheet" href="./styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <title>Landing Page BP</title>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bluedark: '#00259b',
            blueclean: '#2176fb',
          },
          fontFamily: {
            sans: ['fira-sans', 'sans-serif'],
          }
        }
      }
    }
  </script>

</head>

<body>
  <header>
    <nav class="navbar top-0 left-0 w-full bg-white shadow-md">
      <div class="container mx-auto flex items-center justify-between p-4">
        <a class="navbar-brand" href="./index.html">
          <img src="./img/logo-bp-consorcio.png" alt="logo Luciana Mameri" class="h-12 md:h-16" />
        </a>
        <button class="navbar-toggler md:hidden text-black focus:outline-none" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <div class="hidden md:flex md:flex-grow md:justify-end" id="navbarNav">
          <ul class="navbar-nav flex flex-col md:flex-row items-center">
            <li class="nav-item">
              <a class="nav-link text-black hover:text-bluedark transition-colors duration-200" href="#">BP
                Consórcio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black hover:text-bluedark transition-colors duration-200" href="#">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black hover:text-bluedark transition-colors duration-200" href="#">Seja um
                representante</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gblack hover:text-bluedark transition-colors duration-200" href="#">Explore o
                consórcio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="flex fle-col items-center justify-end h-screen font-sans text-white bg-cover gap-32 bg-center p-12"
      style="background-image: url('./img/Pag-GUT-(2).png')">
      <div class="text-center max-w-lg p-4 rounded-md h-screen">
        <h2 class="text-3xl font-bold mb-4 mt-20 text-left">
          Planeje a conquista dos seus objetivos com a Bp Consórcio.
        </h2>
        <p class="mb-6 text-left">
          Sem entrada,sem juros e com parcelas que combinam com sua
          realidade,BB!
        </p>
      </div>

      <div class="bg-white rounded-lg p-8 shadow-lg w-1/3 mt-8 max-w-sm">
        <form action="save.php" method="POST" class="text-gray-700 flex flex-col gap-y-3">
          <div class="flex flex-col gap-y-3">
            <h2 class="text-xl font-semibold text-gray-800">
              Conquiste seus sonhos agora mesmo!
            </h2>
            <p class="text-base text-gray-800">
              Várias possibilidades com valores que cabem no seu bolso.
            </p>
          </div>
          <div>
            <label for="nome" class="block text-gray-700 text-sm">Nome:</label>
            <input type="text" id="nome" name="nome" class="w-full rounded-lg text-sm" required
              placeholder="Gustavo Lima" />
          </div>
          <div>
            <label for="email" class="block text-gray-700 text-sm">E-mail:</label>
            <input type="email" id="email" name="email" class="w-full rounded-lg text-sm" required
              placeholder="gustavolima@email.com.br" />
          </div>
          <div>
            <label for="telefone" class="block text-gray-700 text-sm">Telefone:</label>
            <input type="number" id="telefone" name="telefone" class="w-full rounded-lg text-sm" required
              placeholder="(XX) XXXXX-XXXX" />
          </div>
          <p class=" text-gray-800 text-xs">
            *Ao preencher os dados acima e clicar em "solicitar contato" você
            concorda com os nossos <a href="#">termos de uso.</a>
          </p>
          <button type="submit" class="bg-bluedark hover:bg-blueclean text-white text-xs py-2 px-4 rounded w-48">
            CONTRATE AGORA
          </button>
        </form>
      </div>
    </section>

    <section class="flex justify-center h-screen text-white bg-black p-8">
      <div class="flex w-full flex-wrap gap-2 justify-around">
        <div class="w-full flex flex-col justify-center items-center">
          <div class="w96">
            <h1 class="font-sans text-4xl font-bold">Por Que Optar</h1>
          </div>

          <div class="w96 contents">
            <h2 class="font-sans text-4xl font-bold">pelo BP Consórcio?</h2>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-8 justify-items-center">
          <div class="flex gap-4 w-10/12 items-start max-w-sm">
            <div class="bg-[url('./img/percent-icon.svg')] bg-no-repeat bg-center bg-contain h-20 w-64"></div>
            <div>
              <h5 class="text-xl font-semibold">Sem Juros</h5>
              <p>Ao contratar o consórcio da BP, você não encontrará surpresas porque o valor do crédito contratado não
                muda ao longo do caminho.</p>
            </div>
          </div>

          <div class="flex gap-4 w-10/12 items-start max-w-sm">
            <div class="bg-[url('./img/car-2-icon.svg')] bg-no-repeat bg-center bg-contain h-20 w-44"></div>
            <div>
              <h5 class="text-xl font-semibold">Comece sem obstáculos</h5>
              <p>Comece seu consórcio sem entrada e já esteja no caminho para conquistar seus objetivos.</p>
            </div>
          </div>

          <div class="flex gap-4 w-10/12 items-start max-w-sm">
            <div class="bg-[url('./img/velocity-icon.svg')] bg-no-repeat bg-center bg-contain h-20 w-64"></div>
            <div>
              <h5 class="text-xl font-semibold">Acelere sua contemplação</h5>
              <p>Aqui você pode antecipar sua conquista e isso te coloca mais perto do seu objetivo, de acordo com sua
                estratégia financeira.</p>
            </div>
          </div>

          <div class="flex gap-4 w-10/12 items-start max-w-sm">
            <div class="bg-[url('./img/economy-icon.svg')] bg-no-repeat bg-center bg-contain h-20 w-64"></div>
            <div>
              <h5 class="text-xl font-semibold">Cabe no seu orçamento</h5>
              <p>As parcelas são planejadas para se adequar ao seu bolso, garantindo um caminho financeiro seguro e
                tranquilo em todo tempo.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="flex items-center justify-center h-screen text-white bg-bluedark p-8">
      <div class="flex flex-col items-center justify-center">
        <h1 class="font-sans text-4xl font-bold">Como Funciona o Bp Consórcio?</h1>
        <h1 class="font-sans text-4xl font-bold">Encontre o seu consórcio</h1>
        <p class="font-sans text-2xl font-semi-bold">Contrate o plano que melhor se encaixa no seu planejamento financeiro.</p>
        <p class="font-sans text-2xl font-extralight">Passo 01</p>
      </div>
      
      <div class="flex items-center justify-center bg-white ball-item">
        <div class="flex items-center justify-center bg-white ball-item-border">
          <div class="flex items-center justify-center bg-bluedark ball-item-content">
            <div class="flex ball-item-number-1 text-center items-center justify-center">
              1
            </div>
            <div class="flex ball-item-number-2 text-center items-center justify-center">
              2
            </div> 
            <div class="flex ball-item-number-3 text-center items-center justify-center">
              3
            </div> 
            <div class="flex ball-item-number-4 text-center items-center justify-center">
              4
            </div>
          </div>
        </div>  
      </div>
    </section>

    
    <section class="flex flex-col h-screen text-white bg-blueclean p-8">
  <div class="flex justify-center mb-6">
    <h1 class="font-sans text-4xl font-bold">Feedback de Clientes</h1>
  </div>

  <div class="relative w-full flex justify-center items-center">
   

    <!-- Carrossel de feedbacks -->
    <div class="carousel overflow-hidden w-96">
      <div class="carousel-inner transition-transform duration-500 ease-in-out flex">
        <!-- Card 1 -->
        <div class="carousel-item w-96 bg-white rounded-lg shadow-lg p-4 flex-shrink-0">
          <div class="flex">
            <img src="./img/feedback.jpg" alt="Cliente" class="w-32 rounded-2xl mr-4">
            <div class="flex flex-col gap-2 justify-between">
              <h2 class="text-xl font-bold text-gray-800">Gustavo Lima</h2>
              <p class="text-gray-600">O melhor serviço que você vai encontrar é na Bem Protege!</p>
              <div class="flex items-center mt-2">
                
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 2 7.19 7.63 0 8.24l5.46 3.73L3.82 19z" /></svg>
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 2 7.19 7.63 0 8.24l5.46 3.73L3.82 19z" /></svg>
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 2 7.19 7.63 0 8.24l5.46 3.73L3.82 19z" /></svg>
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 2 7.19 7.63 0 8.24l5.46 3.73L3.82 19z" /></svg>
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15.27L16.18 19l-1.64-7.03L20 8.24l-7.19-.61L10 2 7.19 7.63 0 8.24l5.46 3.73L3.82 19z" /></svg>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="carousel-item w-96 bg-white rounded-lg shadow-lg p-4 flex-shrink-0">
          <div class="flex">
            <img src="./img/feedback.jpg" alt="Cliente" class="w-32 rounded-2xl mr-4">
            <div class="flex flex-col gap-2 justify-between">
              <h2 class="text-xl font-bold text-gray-800">Ana Souza</h2>
              <p class="text-gray-600">Atendimento excelente e serviço impecável!</p>
              
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="carousel-item w-96 bg-white rounded-lg shadow-lg p-4 flex-shrink-0">
          <div class="flex">
            <img src="./img/feedback.jpg" alt="Cliente" class="w-32 rounded-2xl mr-4">
            <div class="flex flex-col gap-2 justify-between">
              <h2 class="text-xl font-bold text-gray-800">Lucas Ferreira</h2>
              <p class="text-gray-600">Serviço confiável, voltarei sempre que precisar!</p>
            </div>
          </div>
        </div>
      </div>
    </div>

   
  </div>
</section>




  </main>


  <script>
    function submitForm(event) {
      event.preventDefault(); // Impede o envio padrão do formulário

      const formData = new FormData(event.target);

      fetch('save.php', {
        method: 'POST',
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            showToast(data.error, true);
          } else if (data.success) {
            showToast(data.success);
            setTimeout(() => {
              window.location.href = 'form_enviado.html';
            }, 2000); // Pequeno delay para exibir o toast antes do redirecionamento
          }
        })
        .catch(error => {
          showToast("Erro inesperado. Tente novamente.", true);
        });
    }
  </script>
</body>

</html>