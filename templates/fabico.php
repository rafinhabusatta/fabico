<!-- Template name: fabico -->
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row bg-header">
    <div class="col-12 top-header">
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0">
            <!-- <h1 class="text-center mb-4 text-uppercase"><?php echo get_theme_mod('header_page_title', 'a fabico'); ?></h1> -->
            <h1 class="text-center mb-4 text-uppercase">A Fabico</h1>
        </div>
      </div>
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0 m-xl-auto">
          <!-- <p class="text-justify">
            <?php echo get_theme_mod('header_page_text', 'A Faculdade de Biblioteconomia e Comunicação foi criada pela Portaria nº 714, assinada pelo Reitor Eduardo Zaccaro Faraco, em 1º de setembro de 1970, em sequência à Reforma Universitária implantada pela Lei nº 5540 de 1968.'); ?>
          </p> -->
          <p class="class-justify">
            A Faculdade de Biblioteconomia e Comunicação foi criada pela Portaria nº 714, assinada pelo Reitor Eduardo Zaccaro Faraco, em 1º de setembro de 1970, em sequência à Reforma Universitária implantada pela Lei nº 5540 de 1968.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mx-0 mt-3">
    <div class="col-lg-3 d-none d-lg-block mt-5">
      <nav class="side-menu">
        <ul class="side-menu-ul">
          <li class="menu-item">
            <a href="#historico">Histórico</a>
            <ul class="menu-subsection">
              <li><a href="#memorias">Memórias da Fabico</a></li>
              <li><a href="#galeria">Galeria de Ex-Diretores</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="#conselho">Conselho da Unidade</a></li>
          <li class="menu-item"><a href="#administracao">Administração</a></li>
          <li class="menu-item"><a href="#gerencia">Gerência Administrativa</a></li>
          <li class="menu-item"><a href="#departamentos">Departamentos</a></li>
          <li class="menu-item"><a href="#in-fabico">InFabico</a></li>
          <li class="menu-item"><a href="#infraestrutura">Infraestrutura</a></li>
          <li class="menu-item"><a href="#setores">Setores e Ramais</a></li>
          <li class="menu-item"><a href="#servidores">Servidores</a></li>
          <li class="menu-item"><a href="#nau">NAU - Núcleo de Avaliação da Unidade</a></li>
          <li class="menu-item"><a href="#ngd">NGD - Núcleo de Gestão de Desempenho</a></li>
          <li class="menu-item"><a href="#cosat">COSAT - Comissão de Saúde e Ambiente de Trabalho</a></li>
          <li class="menu-item"><a href="#biblioteca">Biblioteca Fabico</a></li>
        </ul>
        <?php
					/*if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
					wp_nav_menu( array(
						'menu'              => 'secondary',
						'theme_location'    => 'secondary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-2',
						'menu_class'        => 'nav navbar-nav ml-auto',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);*/
				?>
      </nav>
    </div>
    <div class="col-12 col-lg-9">
      <div id="conselho">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Conselho da Unidade</h2>
            <p class="text-justify">O Conselho da Unidade é o órgão de deliberação superior no âmbito da Faculdade de Biblioteconomia e Comunicação, tendo sua composição, competências e funcionamento definidos e regulados no Estatuto e no Regimento Geral da Universidade e no Regimento Interno, aprovado pelo CONSELHO UNIVERSITÁRIO, em sessão de 15 de janeiro de 2016, tendo em vista o constante no processo nº 23078.029632/2015-41, de acordo com o Parecer nº 392/2015 da Comissão de Legislação e Regimentos e as emendas aprovadas em plenário.</p>
          </div>
        </div>
        <div class="row  bloco-container">
          <div class="col-12 col-lg-10">
            <h3>Composição atual do Conselho da Faculdade de Biblioteconomia e Comunicação</h3>
            <div class="card-equipe">
              <h4>Direção</h4>
              <h5>Ana Maria Mielniczuk de Moura - Diretora</h5>
              <h5>Vera Regina Schmitz - Vice-diretora</h5>
            </div>
            <div class="card-equipe">
              <h4>Chefia do Departamento de Ciências da Informação</h4>
              <h5>Rita do Carmo Ferreira Laipelt - Chefe</h5>
              <h5>Samile Andréa de Souza Vanz - Chefe Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Chefia do Departamento de Comunicação</h4>
              <h5>Enoí Dagô Liedke  – Chefe</h5>
              <h5>Marcelo Ruschel Träsel – Chefe Substituto</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/AQL</h4>
              <h5>Jorge Eduardo Enriquez Vivar – Coordenador</h5>
              <h5>Rita de Cássia Portela da Silva – Coordenadora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/BIB</h4>
              <h5>Maria Lucia Dias – Chefe</h5>
              <h5>Helen Rose Flores de Flores – Chefe Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/BIBEaD</h4>
              <h5>Rene Faustino Gabriel Junior - Titular</h5>
              <h5>Rita do Carmo Ferreira Laipelt - Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/JOR</h4>
              <h5>Felipe Moura de Oliveira  -Coordenador</h5>
              <h5>Flavio Antonio Camargo Porcello - Coordenador Substituto</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/MSL</h4>
              <h5>Jeniffer Alves Cuty – Coordenadora</h5>
              <h5>Eráclito Pereira  – Coordenador Substituto</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/PP</h4>
              <h5>Adriana Coelho Borges Kowarick  - Coordenadora</h5>
              <h5>Eduardo Ziles Borba - Coordenador Substituto</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação Comgrad/RP</h4>
              <h5>Ana Karin Nunes - Coordenadora</h5>
              <h5>Helenice Carvalho -  Coordenadora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação COMEX</h4>
              <h5>Eliane Lourdes da Silva Moro – Coordenadora</h5>
              <h5>Adriana Coelho Borges Kowarick – Coordenadora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação COMPESQ</h4>
              <h5>Sonia Elsa Caregnato – Coordenadora</h5>
              <h5>Elisangela Lasta  - Coordenadora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Presidência COSAT</h4>
              <h5>Bruna Argenta Model – Presidente</h5>
              <h5>Miriam Moema Loss – Vice-Presidente</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação PPGCIN</h4>
              <h5>Thiago Henrique Bragato Barros - Coordenador</h5>
              <h5>Moisés Rockembach - Coordenador Substituto</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação PPGCOM</h4>
              <h5>Elisa Reinhardt Piedras – Coordenadora</h5>
              <h5>Samile Andréa de Souza Vanz – Coordenadora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Coordenação PPGMUSPA</h4>
              <h5>Luisa Durán Rocca - Coordenadora</h5>
              <h5>Fernanda Albuquerque - Coordenadora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Direção CEDAP</h4>
              <h5>Rafael Port da Rocha – Diretor</h5>
              <h5>Sônia Elisa Caregnato – Diretora Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Chefia da Biblioteca</h4>
              <h5>Miriam Moema Loss – Chefe</h5>
              <h5>Josiane Gonçalves da Costa – Chefe Substituta</h5>
            </div>
            <div class="card-equipe">
              <h4>Representantes Docentes</h4>
              <h5>Aline do Amaral Garcia Strelow – Titular</h5>
              <h5>Elisangela Lasta  – Suplente</h5>
              <h5>Marcia Regina Bertotto – Titular</h5>
              <h5>Ana Celina Figueira da Silva – Suplente</h5>
              <h5>Jussara Borges de Lima – Titular</h5>
              <h5>Fabiano Couto Correa da Silva – Suplente</h5>
              <h5>Sandra Maria Lucia Pereira Gonçalves – Titular</h5>
              <h5>Marcia Benetti Machado – Suplente</h5>
            </div>
            <div class="card-equipe">
              <h4>Representantes dos Técnico-administrativos</h4>
              <h5>Elias Palminor Machado – Titular</h5>
              <h5>Helenice Maria de Morais Christaldo – Suplente</h5>
              <h5>Rafael Argenta Tams – Titular</h5>
              <h5>Cristiane Lipp Heidrich – Suplente</h5>
              <h5>Rafael Berbigier de Bortoli – Titular</h5>
              <h5>Joseane Maria Goes Lima – Suplente</h5>
            </div>
            <div class="card-equipe">
              <h4>Representantes Discentes PPGCOM</h4>
              <h5>Josiel Rodrigues - Titular</h5>
              <h5>Mathias Lengert - Suplente</h5>
            </div>
            <div class="card-equipe">
              <h4>Representantes Discentes CABAM</h4>
              <h5>Rafael dos Santos Werhli – Titular</h5>
              <h5>Ares Dall'Agnol Barbosa – Suplente</h5>
            </div>
            <div class="card-equipe">
              <h4>Representantes Discentes - DACOM</h4>
              <h5>Everaldo Santos de Oliveira Junior - Titular</h5>
              <h5>Isabela Balconi - Suplente</h5>
            </div>
          </div>
        </div>
      </div>
      <div id="administracao">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Administração</h2>
            <p class="text-justify">
              A Direção e a Gerência Administrativa têm por objetivo viabilizar e promover o ensino, a pesquisa e a extensão nas áreas das Ciências da Informação (Arquivologia, Biblioteconomia e Museologia) e Comunicação (Jornalismo, Relações Públicas e Publicidade Propaganda), contribuindo para o pleno desenvolvimento da sociedade nos planos político, social, econômico e cultural.
            </p>
            <p class="text-justify">
              A administração da FABICO é composta pelos seguintes professores e técnico-administrativos:
            </p>
          </div>
        </div>
        <div class="row equipe justify-content-around bloco-container">
          <?php 
            $args = array(
            'post_type' => 'team_adm',
            );
            $adm = new WP_Query ( $args );
          ?>
          <?php if ($adm -> have_posts()) : while ($adm -> have_posts()) : $adm -> the_post(); ?>
              <div class="col-12">
                <h4 class="mb-3">
                    <?php echo get_field("departamento")?>
                </h4>
              </div>
              <div class="col-12 col-md-5 col-lg-4 mb-4">
                <div class="b-left box-equipe">
                    <p class="mb-3">
                        <?php echo get_field("cargo")?>
                    </p>
                    <h3 class="font-weight-bold">
                        <?php the_title() ?>
                    </h3>
                    <p class="mb-3">
                        Telefone: <?php echo get_field("telefone")?>
                    </p>
                    <p class="mb-3">
                        E-mail: <?php echo get_field("email")?>
                    </p>
                </div>
              </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div id="gerencia">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
          <h2 class="title">Gerência Administrativa</h2>
          <p class="text-justify">
            Abrange atividades administrativas e acadêmicas ligadas aos Departamentos, às Comissões de Graduação, Extensão e Pesquisa, agrupadas em setores.
          </p>
          <p class="text-justify">Tem por atribuição:</p>
          <p class="text-justify">      
            Coordenar, planejar, acompanhar, avaliar, organizar e normatizar as atividades relacionadas à administração de bens materiais, bens móveis e imóveis, zeladoria, transporte, comunicação, reparos e manutenções de imóveis e equipamentos, bem como gerenciamento dos recursos de informática;
            Organizar a infraestrutura necessária à execução da programação estabelecida pela Unidade Acadêmica;
            Planejar, juntamente com a Direção, o planejamento anual;
            Participar da elaboração da Programação Orçamentária Plurianual;
            Coordenar, planejar, acompanhar, avaliar e organizar as atividades relacionadas à administração de recursos humanos;
            Assegurar o cumprimento das metas estabelecidas pelo Programa de Avaliação de Desempenho;
            Desenvolver estudos, elaborar propostas e implantar modificações necessárias à organização administrativa;
            Articular-se com a Direção da Unidade;
            Gerenciar os recursos de caráter institucional da Unidade, provenientes de convênios e outras fontes em conformidade com programação previamente definida;
            Representar formalmente a Unidade Acadêmica junto aos órgãos competentes em questões pertinentes à sua área, quando solicitado.
          </p>
          <p>Contato</p>
          <ul>
            <li>Telefone: (51) 3308.5067</li>
            <li>E-mail: fabico@ufrgs.br</li>
            <li>Sala 212 - Anexo 1 - Saúde</li>
            <li>Horário: 8h às 18h</li>
          </ul> 
          </div>
        </div>
      </div>
      <div id="departamentos">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
          <h2 class="title">Departamentos</h2>
          </div>
        </div>
      </div>
      <div id="in-fabico">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
          <h2 class="title">InFabico</h2>
          </div>
        </div>
      </div>
      <div id="infraestrutura">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
          <h2 class="title">Infraestrutura</h2>
          </div>
        </div>
      </div>
      <div id="setores">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
          <h2 class="title">Setores e Ramais</h2>
          </div>
        </div>
      </div>
      <div id="servidores">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
          <h2 class="title">Servidores</h2>
          </div>
        </div>
      </div>
      <div id="nau">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title"><a href="https://www.ufrgs.br/naufabico/">NAU - Núcleo de Avaliação da Unidade</a></h2>
            <p class="text-justify">O Núcleo de Avaliação da Unidade (NAU) é organismo com atuação autônoma segundo o Regimento Interno da Faculdade de Biblioteconomia e Comunicação aprovado pelo Conselho Universitário da UFRGS (CONSUN – Decisão 025/2016) e vincula-se diretamente à Secretaria de Avaliação Institucional (SAI) na condição de executor de trabalhos destinados à Comissão Própria de Avaliação (CPA) da Universidade.</p>
            <p class="text-justify">O NAU tem por objetivo realizar ações de avaliação interna nas dimensões determinadas pela legislação federal (Lei 10.861, de 14/04/204) que implantou o Sistema Nacional de Avaliação da Educação Superior (SINAES) e de acordo com disposições do CONSUN (Decisão 184/2009).</p>
            <p class="text-justify">O NAU FABICO é composto por representação paritária dos seguintes segmentos: Docentes (Departamento de Comunicação - DECOM e Departamento de Ciências da Informação - DCI); Técnico-Administrativos;  Discentes (Graduação e Pós-Graduação). Os docentes e técnicos são designados pela Direção da Unidade com mandato de três anos que expira em 07/05/2020. Os representantes dos Discentes têm mandato de um ano, sendo indicados pelo Centro Acadêmico de Biblioteconomia, Arquivologia e Museologia – CABAM (uma vaga), Diretório Acadêmico da Comunicação - DACOM (uma vaga) e pelo conjunto dos alunos matriculados nos cursos de Mestrado e Doutorado do PPGCOM (uma vaga).</p>
            <p class="text-justify">O NAU da Fabico realiza reuniões às 11h, nos dias listados a seguir, sala 502 da Fabico (Rua Ramiro Barcelos, 2705 - Santana, Porto Alegre - RS). Caso tenha interesse em participar, recomendamos confirmar o horário e data pelo email <a href="mailto:nau_fabico@ufrgs.br" class="font-weight-bold">nau_fabico@ufrgs.br</a>.</p>
            <p class="text-justify"><a href="https://www.ufrgs.br/naufabico/">Clique aqui</a> para visitar o site do NAU.</p>
          </div>
        </div>
        <!-- <div class="row equipe justify-content-around bloco-container">
          <?//php 
            // $args = array(
            // 'post_type' => 'team_nau',
            // );
            // $nau = new WP_Query ( $args );
          ?>
          <?//php if ($nau -> have_posts()) : while ($nau -> have_posts()) : $nau -> the_post(); ?>
            <div class="col-12 col-md-5 col-lg-4 mb-4">
              <div class="b-left box-equipe">
                  <h3 class="font-weight-bold">
                      <?//php the_title() ?>
                  </h3>
                  <p class="mb-3">
                      <?//php echo get_field("cargo")?>
                  </p>
              </div>
            </div>
          <?//php endwhile; endif; ?>
        </div> -->
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <div class="row equipe justify-content-around">
              <?php 
                $args = array(
                'post_type' => 'team_nau',
                );
                $nau = new WP_Query ( $args );
              ?>
              <?php if ($nau -> have_posts()) : while ($nau -> have_posts()) : $nau -> the_post(); ?>
                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class="b-left box-equipe">
                      <h3 class="font-weight-bold">
                          <?php the_title() ?>
                      </h3>
                      <p class="mb-3">
                          <?php echo get_field("cargo")?>
                      </p>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
        <div class="row bloco-container">
          <div class="col-12">
            <h4>Contato</h4>
            <ul>
              <li>Email: <a href="mailto:nau_fabico@ufrgs.br">nau_fabico@ufrgs.br</a></li>
              <li>Sala: 502 - FABICO</li>
              <li>Horário: mediante agendamento por e-mail</li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/regimento-interno-NAUFABICO.doc" target="_blank">Regimento Interno do NAU da FABICO</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="ngd">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">NGD - Núcleo de Gestão de Desempenho</h2>
            <p class="text-justify">O Núcleo de Gestão de Desempenho da FABICO tem por objetivo:</p>
            <ul>
              <li>Coordenar e acompanhar o plano de metas definidas pelos Departamentos;</li>
              <li>Assessorar a aplicação da avaliação de desempenho de Técnico-Administrativos na FABICO;</li>
              <li>Acompanhar os prazos de aplicação da avaliação;</li>
              <li>Analisar e dar parecer sobre os pedidos de reconsideração encaminhados na FABICO;</li>
              <li>Organizar os procedimentos para avaliação pelos usuários, de acordo com as políticas a serem definidas.</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="cosat">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title"><a href="https://www.ufrgs.br/cosatfabico/">COSAT - Comissão de Saúde e Ambiente de Trabalho</a></h2>
            <p class="text-justify">A COSAT - Comissão de Saúde e Ambiente de Trabalho - é um órgão de natureza deliberativa sobre questões pertinentes à saúde, à segurança e ao ambiente de trabalho. A COSAT tem como finalidade a melhoria das condições de trabalho e do meio ambiente, buscando soluções que promovam um estado de bem-estar físico, psíquico e social do trabalhador e a qualificação do meio ambiente, tendo principalmente, uma função preventiva.</p>
            <p class="text-justify">As COSAT, no âmbito da UFRGS, foram criadas pela Portaria 1992, de 19 de maio de 1997, assinada pela Reitora Profa.
            Wrana Maria Panizzi.</p>
            <p class="text-justify">Os membros de cada COSAT, titulares e suplentes, são eleitos pelos servidores, através de eleições, com mandato de 2 (dois) anos. A atual COSAT da Fabico foi eleita em maio de 2018 e tem mandato até maio de 2020.</p>
            <p class="text-justify">IMPORTANTE: Mandato 2018/2020 prorrogado para dezembro de 2021 em razão da pandemia de COVID-19</p>
            <p class="text-justify"><a href="https://www.ufrgs.br/cosatfabico/">Clique aqui</a> para acessar o site da COSAT Fabico.</p>
            <a href="<?php bloginfo("template_directory"); ?>/docs/regulamento-cosat.doc">Regulamento da COSAT aprovado em 19 de maio de 1997</a>
          </div>
        </div>
        <div class="row bloco-container">
          <div class="col-12">
            <p class="text-justify">Medidas para retorno das funções na UFRGS, quando possível: pandemia COVID-19</p>
            <ul>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs.pdf">Atividades Acadêmicas, Relações de Trabalho, Saúde e Segurança nos Ambientes</a></li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs-laboratorios.pdf">Trabalho em Laboratórios</a></li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs-laboratorios-Prestadores-de-Servicos.pdf">Prestadores de Serviços</a></li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs-laboratorios-srestadores-de-servicos-saida-de-campo-e-atividades-externas.pdf">Saídas de Campo e Atividades Externas</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            Equipe
          </div>
        </div>
      </div>
      <div id="biblioteca">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Biblioteca Fabico</h2>
            <p class="text-justify"><a href="https://www.ufrgs.br/bibfbc/">Clique aqui</a> para acessar o site da biblioteca da FABICO.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

<?php
    function create_nau($nome, $cargo){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<h3 class="font-weight-bold">$nome</h3>';
        $html .= '<p class="mb-3">$cargo</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>

<?php
    function create_adm($nome, $cargo, $telefone, $email, $departamento){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<p class="mb-3">$departamento</p>';
        $html .= '<p class="mb-3">$cargo</p>';
        $html .= '<h3 class="font-weight-bold">$nome</h3>';
        $html .= '<p class="mb-3">Telefone: $telefone</p>';
        $html .= '<p class="mb-3">E-mail: $email</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>