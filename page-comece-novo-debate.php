<?php get_header(); ?>
<div class="container">
  <div class="row">
    <h3 class="font-roboto red"><strong>Qual a sua proposta?</strong></h3>
    <p>Esta será sua pauta de debate:</p>
  </div>
  <div class="row" id="form-proposal">
    <div class="col-md-9">
      <form class="form-horizontal">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Título:</label>
          <div class="col-sm-9">
            <input class="form-control" placeholder="45/45">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Categoria:</label>
          <div class="col-sm-5">
            <select class="form-control">
              <option>Selecione</option>
              <option>Direito do Consumidor</option>
              <option>Direito de Trânsito</option>
              <option>Política Penitenciária</option>
              <option>Segurança Pública</option>
              <option>Sociedade da Informação</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile" class="col-sm-3 control-label">Imagem para sua proposta:
            <small>Uma imagem bonita que represente sua ideia!</small>
          </label>
          <div class="col-sm-9">
            <input type="file" id="exampleInputFile">
            <p class="help-block">JPG, PNG ou GIF. Tamanho máximo: 300kb.</p>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Descreva sua proposta:</label>
          <div class="col-sm-9">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#video-tab" data-toggle="tab"><i class="fa fa-video-camera"></i> Em vídeo</a>
              </li>
              <li>
                <a href="#text-tab" data-toggle="tab"><i class="fa fa-file-text"></i> Em texto</a>
              </li>
            </ul>
            <div id="tab-content" class="tab-content">
              <div class="tab-pane active" id="video-tab">
                <div class="well well-sm">
                  <h5> <i class="fa fa-lightbulb-o"></i> Dicas para fazer seu vídeo:</h5>
                  <ul class="small">
                    <li>Seu vídeo deve estar hospedado no YouTube e deve ser do tipo público;</li>
                    <li>Grave em um local silencioso;</li>
                    <li>Observe o que vai aparecer no fundo da sua filmagem. Na dúvida, uma parede branca é sempre uma boa opção;</li>
                    <li>Seja crítico! Assista seu vídeo antes de publicá-lo e pense se as outras pessoas gostariam de vê-lo.</li>
                  </ul>
                  <div class="input-group">
                    <div class="input-group-addon red">Url do vídeo no YouTube:</div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Cole a url do seu vídeo aqui">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="text-tab">
                <textarea class="form-control" rows="16"></textarea>
              </div>
            </div>
          </div>
          
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Crie um resumo para sua proposta:</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="3" placeholder="190/190"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-10">
            <button class="btn btn-danger" type="submit" >Criar proposta de debate!</button>
          </div>
        </div>
      </form>
      
      </div> <!-- /col-md-9  -->
      <div class="col-md-3">
        <div class="well well-sm">
          <h5 class="font-roboto red">Lembre-se</h5>
          <p class="fontsize-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is ed it to make a type specimen book.</p>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>