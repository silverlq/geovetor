<?php 
$mailMessageClass = "";
$mailMessageText = "";
if(isset($_POST['submit'])){
    //Nome
    $Name = $_POST["InputName"];
    //Assunto
    $Subject = "[GeoVetor] - ".$Name;
    //Email do remetente
    $Mail = $_POST["InputEmail"];
    //Cabecalho
    $Header = $Name." <$Mail>";
    //Corpo do texto
    $Message = $_POST["InputMessage"];
    //Destinatario
    $To = "gustavo@geovetor.com";
    
    //Mensagem de confirmação
    $ConfirmSubject = "[GeoVetor] Confirmação de recebimento de mensagem";
    $ConfirmMessage = "A GeoVetor recebeu a sua mensagem, obrigado por entrar em contato. Responderemos em breve.\n\nAtenciosamente,\nGustavo Lopes Queiroz\n\nP.S.: Não responda a este e-mail. Foi enviado automaticamente pelo servidor.";
    
    $send_confirm = mail($Mail,$ConfirmSubject,$ConfirmMessage,$Header);
    
    if($send_confirm){
        $send_contact = mail($To,$Subject,$Message,$Header);
    }

    //Checagem se a mensagem foi enviada
    if($send_contact){
        $mailMessageClass = "alert alert-success";
        $mailMessageText = $Name.", obrigado por entrar em contato. Você receberá um e-mail confirmando o envio de sua mensagem.";
    }
    else{
        $mailMessageClass = "alert alert-danger";
        $mailMessageText = $Name.", ocorreu um erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GeoVetor - Geociências & Desenvolvimento de Ferramentas Digitais</title>
    <link rel="icon" href="images/IconGlobeLittle.png">
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
  
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Geo<b>Vetor</b></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Início</a></li>
                <li><a href="#intro">Apresentação</a></li>
                <li><a href="#code">Programação</a></li>
                <li><a href="#apps">Aplicativos</a></li>
                <li><a href="#contact">Contato</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    
    <div class="jumbotron fixed-bkg">
    <div class="container">
      <br/><br/><br/><br/><br/><br/>
      <h1 class="text-center" style="color:white;text-shadow:2px 2px 4px #000000;">Geo<b>Vetor</b></h1>
      <h4 class="white-shadow text-center"><i>Geociências & Desenvolvimento de Ferramentas Digitais</i></h2>
      <br/><br/><br/><br/>
      
      <div class="row">
          <div class="col-sm-3 col-xs-6"><a style="text-decoration: none;" href="#intro"><button type="button" class="btn green-light circleButton"><img src="images/IconCompass.png"/></button><h4 class="labelButton">Apresentação</h4></a><br></div>
          <div class="col-sm-3 col-xs-6"><a style="text-decoration: none;" href="#code"><button type="button" class="btn green-light circleButton"><img src="images/IconVariable.png"/></button><h4 class="labelButton">Programação</h4></a><br></div>
          <div class="col-sm-3 col-xs-6"><a style="text-decoration: none;" href="#apps"><button type="button" class="btn green-light circleButton"><img src="images/IconApp.png"/></button><h4 class="labelButton">Aplicativos</h4></a><br></div>
          <div class="col-sm-3 col-xs-6"><a style="text-decoration: none;" href="#contact"><button type="button" class="btn green-light circleButton"><img src="images/IconLetter.png"/></button><h4 class="labelButton">Contato</h4></a><br></div>
      </div>

    </div>
    </div>
        
    <img class="img-responsive center-block" src="images/earthOnion.gif">
    
    <p id="intro"/> <br> <br>
    <div class="green fixed-bkg">
    <div class ="container">
            <div class="row">
                
                <div class="col-md-7">
                  <div class="centerText">
                      <h2 class= "green-highlight">Apresentação<span class="green-muted"> & perfil de trabalho</span></h2>
                      <br/>
                      <p class="lead white-shadow text-justify">A empresa presta serviços nas áreas de geoprocessamento, tratamento de bancos de dados, e de desenvolvimento e otimização de ferramentas digitais aplicadas em geociências. O enfoque é em geologia e pesquisa mineral.</p>
                      <p class="lead white-shadow text-justify"><i>Softwares</i> de <b>geoprocessamento</b> e de <b>avaliação de minério</b> são ferramentas comuns no mercado de trabalho, porém raramente são adaptadas de forma a otimizar o <b>rendimento da equipe</b>.</p>
                      <p class="lead white-shadow text-justify">Trabalhos em geociências costumam acumular grandes quantidades de informações em <b>bancos de dados</b>, que podem ser melhor utilizados com a devida organização e tratamento.</p>
                      <p class="lead white-shadow text-justify">Com a crescente quantidade de dados e a grande complexidade das avaliações, se torna imprescindível a utilização de ferramentas digitais inteligentes para o processameno das informações. O objetivo da Geo<b>Vetor</b> é fornecer e melhorar essas ferramentas.</p>
                  </div>
                </div>
                
                <div class="col-md-5">
                  <br>
                  <img class="img-responsive center-block green-img" src="images/feat1.jpg">
                </div>
            
            </div>
        <br>
    </div>
    </div>
    
    <p id="code"/> <br> <br>
    
    <div class="container">
      <div class="centerText">
      <h2 class= "black-highlight">Programação<span class="black-muted"> de aplicativos em geociências</span></h2>
      <br/>
      <p class="lead text-justify">Em geoprocessamento é comum a manipulação de <b>vetores</b> (pontos, linhas e polígonos) e <b>imagens matriciais</b>, utilizando-se de ferramentas comuns de edição, georreferenciamento e análise. Porém, muitas vezes não existe uma ferramenta que realiza uma tarefa específica, ou então se faz necessário o uso de múltiplas ferramentas para completar uma operação. Para esses casos o desenvolvimento de um aplicativo específico pode <b>economizar muitas horas de trabalho</b>.</p>
      
      <div class="row">
        <div class="col-xs-4"><img class="smallImg" src="images/IconLine.png"/></div>
        <div class="col-xs-4"><img class="smallImg" src="images/IconPoly.png"/></div>
        <div class="col-xs-4"><img class="smallImg" src="images/IconLayers.png"/></div>
      </div>
      <br>
      
      <p class="lead text-justify">O tratamento de <b>bancos de dados</b> pode ser um processo muito trabalhoso, que pode ser reduzido com o uso de um aplicativo inteligente personalizado para um tipo de banco específico. Usos comuns para aplicativos desta natureza são: <b>organização, manutenção, análise, e geração de relatórios</b>.</p>

      <div class="row">
        <div class="col-xs-4"><img class="smallImg" src="images/IconGlobe.png"/></div>
        <div class="col-xs-4"><img class="smallImg" src="images/IconDatabase.png"/></div>
        <div class="col-xs-4"><img class="smallImg" src="images/IconExcel.png"/></div>
      </div>
      <br>
      
      <p class="lead text-justify">Diferentes <b>linguagens de programação</b> podem ser utilizadas para construir aplicativos e <i>scripts</i> em geociências, enquanto certos <i>softwares</i> trabalham com linguagens específicas (ArcGIS & Python; DataMine & JavaScript). Não existe uma regra quanto à escolha da linguagem, o importante é a confecção de <b>algoritmos inteligentes</b> para otimizar a solução de problemas.</p>
      
      <div class="row">
        <div class="col-xs-2"><img class="smallImg" src="images/IconCs.png"/></div>
        <div class="col-xs-2"><img class="smallImg" src="images/IconPY.png"/></div>
        <div class="col-xs-2"><img class="smallImg" src="images/IconVB.png"/></div>
        <div class="col-xs-2"><img class="smallImg" src="images/IconHTML.png"/></div>
        <div class="col-xs-2"><img class="smallImg" src="images/IconCSS.png"/></div>
        <div class="col-xs-2"><img class="smallImg" src="images/IconJS.png"/></div>
      </div>
      <br/>
      
      </div>
    </div>

    <p id="apps"/> <br> <br>
    <div class="green fixed-bkg">
        <div class ="container">
            <div class="centerText">
            <h2 class="green-muted">Exemplos de <span class= "green-highlight">aplicativos</span> desenvolvidos pela empresa</h2>
            <br/>
            <p class="lead white-shadow text-justify">Os aplicativos abaixo<b>*</b> são <b>exemplos</b> de ferramentas desenvolvidas pela empresa para solução de problemas específicos. Os <i>softwares</i> são desenvolvidos de forma personalizada a partir da demanda de cada empresa.</p>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail center-block">
                  <img src="images/appAz.png" alt="...">
                  <div class="caption">
                    <h3>AzimuthFinder</h3>
                    <p text-justify>Auxilia na medição do azimute de lineamentos.</p>
                    <p class="text-center"><a href="files/azimuth.rar" class="btn btn-primary" role="button"><img class="xs-image" src="images/IconDownload.png"/>Download</a> <a href="http://turmalina.igc.usp.br/scielo.php?script=sci_arttext&pid=S1519-874X2014000100005&lng=en&nrm=iso" class="btn btn-warning" role="button"><img class="xs-image" src="images/IconBook.png"/>Publicação</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail center-block">
                  <img src="images/appKnick.png" alt="...">
                  <div class="caption">
                    <h3>KnickpointFinder</h3>
                    <p text-justify>Detecta quebras de relevo anômalas em perfis de drenagem.</p>
                    <p class="text-center"><a href="files/knickpoints.rar" class="btn btn-primary" role="button"><img class="xs-image" src="images/IconDownload.png"/>Download</a> <a href="http://www.sciencedirect.com/science/article/pii/S0098300414002544" class="btn btn-warning" role="button"><img class="xs-image" src="images/IconBook.png"/>Publicação</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail center-block">
                  <img src="images/appICR.png" alt="...">
                  <div class="caption">
                    <h3>ICR - Unidades geomorfológicas</h3>
                    <p text-justify>Mede o índice de rugosidade do relevo e separa o terreno em unidades.</p>
                    <p class="text-center"><a href="files/ICR.rar" class="btn btn-primary" role="button"><img class="xs-image" src="images/IconDownload.png"/>Download</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail center-block">
                  <img src="images/appWater.png" alt="...">
                  <div class="caption">
                    <h3>Watershed Asymmetry</h3>
                    <p text-justify>Mede a assimetria de uma bacia dividindo-a pela sua maior drenagem.</p>
                    <p class="text-center"><a href="files/watershed.rar" class="btn btn-primary" role="button"><img class="xs-image" src="images/IconDownload.png"/>Download</a></p>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="white-shadow"><b>*</b><i>Aplicativos gratuitos para uso na plataforma ArcGIS.</i></h4>
        <br>
        </div>
    </div>
    
    <p id="contact"/> <br> <br>

    <div class="container">

        <div class="centerText">
            <h2 class= "black-highlight">Contato<span class="black-muted"> profissional</span></h2>
            <br/>
            <p class="lead"></p>
                <div class="row">
                    <div class="col-md-3 col-sm-4"><img class="profilePic img-circle center-block" src="images/profilePic.jpg"/></div>
                    <div class="col-md-5 col-sm-8">
                        <h3><b>Gustavo Lopes Queiroz</b></h3>
                        <h4><i>Geólogo & Programador</i></h4>
                        <br>

                        <div class="media">
                          <div class="media-left media-middle">
                            <img class="media-object xs-image" src="images/IconMail.png">
                          </div>
                          <div class="media-body">
                            <a href="mailto:gustavo@geovetor.com" style="text-decoration: none;"><h4 class="media-heading" style="color:black;">gustavo@geovetor.com</h4></a>
                          </div>
                        </div>

                        <div class="media">
                          <div class="media-left media-middle">
                            <img class="media-object xs-image" src="images/IconPhone.png">
                          </div>
                          <div class="media-body">
                            <a href="tel:+554191924321" style="text-decoration: none;"><h4 class="media-heading" style="color:black;">+55 (41) 9192-4321</h4></a>
                          </div>
                        </div>

                        <div class="media">
                          <div class="media-left media-middle">
                            <img class="media-object xs-image" src="images/IconProfile.png">
                          </div>
                          <div class="media-body">
                            <a class="btn btn-primary" role="button" href="https://www.linkedin.com/in/gustavo-lopes-queiroz-77b44884?trk=hp-identity-name">LinkedIn</a>
                          </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-4 col-sm-12">
                        <h4><b>Enviar mensagem</b></h4>
                        <form action="#contact" method="post">
                            <div class="form-group">
                                <label for="InputName">Nome</label>
                                <input type="text" class="form-control" name="InputName" placeholder="Seu Nome">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">E-mail</label>
                                <input type="email" class="form-control" name="InputEmail" placeholder="seu-email@exemplo.com">
                            </div>
                            <div class="form-group">
                                <label for="InputMessage">Mensagem</label>
                                <textarea name="InputMessage" class="form-control" style="resize:vertical" rows="5" placeholder="Mensagem..."></textarea>
                            </div>
                            <div class="form-group">
                            <p class="text-right"><input class="btn btn-success" name="submit" type="submit" value="Enviar" onclick="sendingMsg()"/></p>
                            </div>
                        </form>
                        <div class="<?php echo $mailMessageClass." text-justify"; ?>"  role ="alert" id="mailMessage"><?=$mailMessageText?></div>
                    </div>

                </div>
        </div>

    </div>

    <p id="footer"/> <br> <br>
    <div class="green fixed-bkg">
        <div class ="container">
            <br>
            <footer>
            <i class="text-muted">
            <p class="white-shadow" style="text-align:center">Geo<b>Vetor</b> - Curitiba, Brasil - 2016</p>
            <p class="white-shadow" style="text-align:center">Website construído por Gustavo Lopes Queiroz utilizando a framework <a style="text-decoration: none;" href="http://getbootstrap.com/"><span style="color:white">Bootstrap</span></a>.</p>
            <p class="white-shadow" style="text-align:center">Imagem do satélite LANDSAT 8 por USGS obtida em <a style="text-decoration: none;" href="http://earthexplorer.usgs.gov/"><span style="color:white">earthexplorer.usgs.gov</span></a>.</p>
            </i>
            </footer>
            <br>
        </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        function sendingMsg()
        {
            document.getElementById("mailMessage").className = "alert alert-info";
            document.getElementById("mailMessage").innerHTML = "Enviando mensagem...";
        }
    </script>
    
    </body>

  </body>
</html>
