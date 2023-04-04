// lista de imagens
const imagens = [
    'pedra.png',
    'papel.png',
    'tessoura.png',
    'lagarto.png',
    'spoke.png'
  ];
  
  // função para sortear um número aleatório entre 1 e 5
  function sortearNumero() {
    return Math.floor(Math.random() * 5) + 1;
  }
  
  // função para exibir a imagem correspondente ao número sorteado
  function exibirImagem() {
    // seleciona o elemento HTML que exibirá a imagem
    const imagemElement = document.getElementById('imagem');
  
    // sorteia um número aleatório entre 1 e 5
    const numeroSorteado = sortearNumero();
  
    // seleciona a imagem correspondente ao número sorteado
    const imagemSelecionada = imagens[numeroSorteado - 1];
  
    // define a imagem selecionada como a imagem exibida no elemento HTML
    imagemElement.src = imagemSelecionada;
  }
  
  // chama a função para exibir a imagem correspondente ao número sorteado
  exibirImagem();
  
