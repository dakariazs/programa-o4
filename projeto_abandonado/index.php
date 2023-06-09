<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="none">
    <title>👊, ✋, ✌, 🤏 ou 🖖</title>
</head>
<body>
  <div class="header">
    <header class="body-head">
      <div class="title-div">
        <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">Pronto para jogar</h2>
          <span class="text-indigo-600">Pedra, Papel, Tesoura, Lagarto ou Spock?</span>
          <p class="">por Allana, Cauê, Luana e Nícolas - 4º ano TI - 2023 - IFRS Campus Feliz</p>
      </div>
      <div class="botao-camera1">
        <div class="botao-camera2">
          <button type="button" onclick="init()">Permitir camera</button>
        </div>
      </div>
    </header>
</div>








  <div class="container">
    <div class="player-side">
      <h4 class="">👤 Pontuação jogador: ? pts </h4>
      <h1 class="vazio"></h1>
      <div class="camera">
        <script src="script.js">

        <figure>
          <img src="exibirImagem();" alt=""></img>
        </figure>
      </script>

      
<div id="webcam-container"></div>
<div id="label-container"></div>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
<script type="text/javascript">
    // More API functions here:
    // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

    // the link to your model provided by Teachable Machine export panel
    const URL = "https://teachablemachine.withgoogle.com/models/eRwqoP0Ja/";

    let model, webcam, labelContainer, maxPredictions;

    // Load the image model and setup the webcam
    async function init() {
        const modelURL = URL + "model.json";
        const metadataURL = URL + "metadata.json";

        // load the model and metadata
        // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
        // or files from your local hard drive
        // Note: the pose library adds "tmImage" object to your window (window.tmImage)
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();

        // Convenience function to setup a webcam
        const flip = true; // whether to flip the webcam
        webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
        await webcam.setup(); // request access to the webcam
        await webcam.play();
        window.requestAnimationFrame(loop);

        // append elements to the DOM
        document.getElementById("webcam-container").appendChild(webcam.canvas);
        labelContainer = document.getElementById("label-container");
        for (let i = 0; i < maxPredictions; i++) { // and class labels
            labelContainer.appendChild(document.createElement("div"));
        }
    }

    async function loop() {
        webcam.update(); // update the webcam frame
        await predict();
        window.requestAnimationFrame(loop);
    }

    // run the webcam image through the image model
    async function predict() {
        // predict can take in an image, video or canvas html element
        const prediction = await model.predict(webcam.canvas);
        for (let i = 0; i < maxPredictions; i++) {
            const classPrediction =
                prediction[i].className + ": " + prediction[i].probability.toFixed(2);
            labelContainer.childNodes[i].innerHTML = classPrediction;
        }
    }
</script>
    </div>
          <div class="">

              <!-- start control game -->
              <div class="">
                  <!-- start play button -->

                  

                  <div class="">
                    <a href="#" v-on:click="playButton"  id="playButton" class="">
                      Jogar
                    </a>
                  </div>
                  <!-- end play button -->

                  <!-- start reset button -->
                  <div class="">
                    <a href="#" v-on:click="resetButton" id="resetButton"  class="">
                      Reiniciar
                    </a>
                  </div>
                  <!-- end reset button -->
              </div>
              <!-- end control game -->

          </div>
        </div>


        <div class="bot-side">
          <h4 class="">🤖 Pontuação robô: ? pts </h4>
          <h1 class="vazio"></h1>

          <div>

          </div>

        </div>








        
    </div>
</body>
</html>
