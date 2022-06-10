<!-- Template name: Graduacao -->
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row bg-header">
    <div class="col-12 bloco-container">
      <div class="row mx-md-3">
        <div class="col-12 px-md-0">
          <h1 class="text-center mb-4 text-uppercase"><?php echo get_theme_mod('header_page_title', 'a fabico'); ?></h1>
        </div>
      </div>
      <div class="row mx-md-3">
        <div class="col-12 px-md-0 m-xl-auto">
          <p class="text-justify">
            A Faculdade de Biblioteconomia e Comunicação oferece seis cursos de graduação: Arquivologia, Biblioteconomia e Museologia na área de Ciências da Informação; Jornalismo, Publicidade e Propaganda e Relações Públicas na área de Comunicação.
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
            <a href="#arquivologia">Arquivologia</a>
            <ul class="menu-subsection">
              <li><a href="#historico-arquivologia">Histórico</a></li>
              <li><a href="#comgrads-arquivologia">Comgrad/AQL</a></li>
              <li><a href="#ingresso-arquivologia">Ingresso e Vagas</a></li>
              <li><a href="#curriculo-arquivologia">Organização Curricular</a></li>
              <li><a href="#projeto-pedagogico-arquivologia">Projeto Pedagógico</a></li>
              <li><a href="#nucleo-docente-arquivologia">Núcleo Docente Estruturante</a></li>
              <li><a href="#simposio-arquivologia" class="disabled">Simpósio de Pesquisa em Arquivologia</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="#biblioteconomia">Biblioteconomia</a></li>
          <li class="menu-item"><a href="#jornalismo">Jornalismo</a></li>
          <li class="menu-item"><a href="#museologia">Museologia</a></li>
          <li class="menu-item"><a href="#publicidade">Publicidade e Propaganda</a></li>
          <li class="menu-item"><a href="#relacoes-publicas">Relações Públicas</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-12 col-lg-9">
      <div id="arquivologia" clss="row bloco-container"> 
        <div class="col-12">
          <div class="row bloco-container mb-3">
            <div class="col-12 col-lg-10">
              <h2 class="title">Arquivologia</h2>
            </div>
          </div>
          <div class="row bloco-container mt-3">
            <div class="col-12 col-lg-10">
              <p class="text-justify">
                Acompanha o processo evolutivo tecnológico na área, dedicando-se à organização e gestão da informação arquivística contida em diferentes suportes. Direciona a formação do arquivista para o planejamento e implementação de arquivos, utilizando técnicas de gestão de documentos eletrônicos, tecnologias para a sua preservação e conservação, microfilmagem e digitalização em sistemas híbridos e as convergências de mídias e multimídias.
              </p>
              <p class="text-justify">
                Tem como objetivo formar profissionais capazes de disponibilizar informações arquivísticas em organizações públicas e privadas, contribuindo para o desenvolvimento administrativo, técnico científico e a preservação da memória para uma sociedade de melhor qualidade.
              </p>
              <p class="text-justify">
                A titulação conferida é a de <strong>Bacharel em Arquivologia</strong>.
              </p>
            </div>
          </div>
          <div class="row bloco-container" id="historico-arquivologia">
            <div class="col-12 col-lg-10">
              <div class="row">
                <div class="col-12">
                  <h3>Histórico</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    A profissão de Arquivista foi regulamentada pelo Decreto nº 82.590 de 06 de novembro de 1978. O Curso de Arquivologia foi criado em 30 de julho de 1999 pela Decisão nº 112/99 do Conselho Universitário da UFRGS, com sua primeira turma de alunos ingressando no ano de 2000. O curso acompanha o processo evolutivo tecnológico da área, dedicando-se à organização e gestão de informação arquivística contida em diferentes suportes. Direciona a formação do aluno para o planejamento e a implementação de arquivos, utilizando técnicas de gestão de documentos eletrônicos, tecnologias para a sua preservação e conservação, microfilmagem e digitalização em sistemas híbridos e as convergências de mídias.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row bloco-container" id="comgrads-arquivologia">
            <div class="col-12 col-lg-10">
              <div class="row comgrad-membros">
                <div class="col-12">
                  <h3>Composição ComGrad/AQL</h3>
                </div>
              </div>
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
              <!-- <div class="row comgrad-aql-membros mt-3">
                <div class="col-12">
                  <h4>Jorge Eduardo Enriquez Vivar</h4>
                  <p>Coordenador</p>
                </div>
                <div class="col-12">
                  <h4>Thiago Henrique Bragato Barros</h4>
                  <p>Coordenador Substituto</p>
                </div>
                <div class="col-12">
                  <h5>Mandatos de 07/05/2021 até 06/05/2023</h5>
                </div>
                <div class="col-12">
                  <h4>Jorge Eduardo Enriquez Vivar</h4>
                  <h4>Leolíbia Luana Linden</h4>
                  <h4>Rafael Port da Rocha</h4>
                  <h4>Rita de Cássia Portela da Silva</h4>
                  <h4>Thiago Henrique Bragato Barros</h4>
                </div>
                <div class="col-12">
                  <h5>Mandatos de 07 de abril de 2021 a 06 de abril de 2023</h5>
                </div>
                <div class="col-12">
                  <h4>Bruna Argenta Model</h4>
                  <p>Representante dos Técnicos Administrativos</p>
                  <p>Mandato: 28/01/2021 a 27/01/2023</p>
                </div>
                <div class="col-12">
                  <h4>Rafael dos Santos Werhli</h4>
                  <p>Representante Discente</p>
                </div>
              </div> -->
              <div class="row">
                <div class="col-12">
                  <h3>Contato</h3>
                  <ul>
                    <li>E-mail: <a href="mailto:comgradaql@ufrgs.br">comgradaql@ufrgs.br</a></li>
                    <li>Secretaria: Quando houver necessidade de encaminhar documentos impressos e colher assinaturas;</li>
                    <li>Atendimento presencial: Segundas-feiras, das 17:00 às 19:30.</li>
                    <li>Sala: 217 - Anexo 1</li>
                    <li>Telefone: (51) 3308.5105.</li>
                    <li>OBS: em todas as situações, o retorno é em 2 dias úteis</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row bloco-container" id="ingresso-arquivologia">
            <div class="col-12 col-lg-10">
              <div class="row">
                <div class="col-12">
                  <h3>Ingresso e Vagas</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O curso oferece <b>30 vagas anuais</b> preenchidas pelos candidatos aprovados no <a href="http://www.vestibular.ufrgs.br/" target="_blank">Concurso Vestibular</a> da Universidade.
                  </p>
                  <p class="text-justify">Todos os aprovados ingressam no 1º semestre letivo.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row bloco-container" id="curriculo-arquivologia">
            <div class="col-12 col-lg-10">
              <div class="row">
                <div class="col-12">
                  <h3>Organização Curricular</h3>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O currículo do curso de Arquivologia oferece uma sequência de disciplinas obrigatórias e eletivas, ordenadas por matrículas semestrais, em uma seriação aconselhada. Essas disciplinas compõem um elenco organizado nas áreas de fundamentação geral, habilidades instrumentais e conhecimentos específicos. O curso exige a realização de estágio curricular obrigatório em sua última fase.
                  </p>
                  <p class="text-justify">
                    Seguir a seriação aconselhada é a melhor forma do estudante concluir o curso na duração prevista e evitar problemas em sua matrícula.
                  </p>
                  <ul>
                    <li><b>Créditos Obrigatórios: 113 (1.695 horas)</b></li>
                    <li><b>Créditos Eletivos: 16 (240 horas)</b></li>
                    <li><b>Créditos Complementares: 9 (135 horas)</b></li>
                    <li><b>Estágio em Arquivologia I: 10 créditos convertidos (150 horas)</b></li>
                    <li><b>Estágio em Arquivologia II: 10 créditos convertidos (150 horas)</b></li>
                    <li><b>Introdução ao Trabalho de Conclusão de Curso: 2 créditos convertidos (30 horas)</b></li>
                    <li><b>Trabalho de Conclusão de Curso: 10 créditos (150 horas)</b></li>
                    <li><b>Total de créditos para diplomação: 170</b></li>
                    <li><b>Carga horária total do curso: 2550 horas-aula</b></li>
                    <li><b>Conclusão aconselhada: 8 semestres</b></li>
                  </ul>
                  <p><a href="http://www1.ufrgs.br/graduacao/xInformacoesAcademicas/curriculo.php?CodCurso=301&CodHabilitacao=33&CodCurriculo=77" target="_blank">Currículo e Súmulas das Disciplinas</a></p>
                </div>
              </div>            
            </div>
          </div>
          <div class="row bloco-container" id="projeto-pedagogico-arquivologia">
            <div class="col-12 col-lg-10">
              <div class="row">
                <div class="col-12">
                  <h3>Projeto Pedagógico</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O Projeto Pedagógico do Curso de Arquivologia foi atualizado em 2014 pela comissão formada pelos professores Jorge Eduardo Enríquez Vivar, Moisés Rockembach, Rafael Port da Rocha, Rodrigo Silva Caxias de Sousa,Valéria Raquel Bertotti e pelos técnicos em assuntos educacionais Anamaria Teixeira da Rosa, Cláudia Pereira Antunes, Joseane Lima, Ludmila Oliveira, juntamente ao representante discente do curso Francisco Alcides Cougo Junior.
                  </p>
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/PPCARQUIVOLOGIA-2014.pdf" target="_blank">Projeto Pedagógico do Curso de Arquivologia 2014</a></p>
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/PPCARQUIVOLOGIA-2017.pdf">Projeto Pedagógico do Curso de Arquivologia 2017 - atualização</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row bloco-container" id="nucleo-docente-arquivologia">
            <div class="col-12 col-lg-10">
              <div class="row">
                <div class="col-12">
                  <h3>Núcleo Docente Estruturante</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4>Moisés Rockembach</h4>
                  <h4>Thiago Henrique Bragato Barros</h4>
                  <h4>Leolíbia Luana Linden</h4>
                  <h4>Valéria Raquel Bertotti</h4>
                  <h4>Rita de Cássia Portela da Silva</h4>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/RegimentoNDEArquivologia.doc">Regimento do Núcleo Docente Estruturante do Curso de Arquivologia</a></p>
            </div>
          </div>
        </div>  
      </div>
      <div id="biblioteconomia" class="row bloco-container">
        <div class="col-12 col-lg-10">
          <div class="row">
            <div class="col-12">
              <h2 class="title">Biblioteconomia</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify">
                O bacharel em biblioteconomia pode atuar como autônomo ou assalariado, exercendo funções de administração, gerência, consultoria, assessoria, analista de informação, bem como, de docente e pesquisador. O espaço profissional do bibliotecário está em constante expansão, podendo ser caracterizado como: bibliotecas públicas, escolares, especializadas, universitárias e especiais; centros de documentação e de informação; empresas comerciais, industriais e de serviços; órgãos públicos da administração direta e indireta, tanto na esfera federal, quanto na estadual e municipal; bibliotecas virtuais e sites de internet.
              </p>
              <p class="text-justify">
                Tem como atribuições planejar, implantar e implementar unidades, sistemas e serviços de informação e documentação, bancos e bases de dados; promover o acesso às fontes de informação sob diferentes suportes; difundir a importância da leitura e os benefícios do uso da informação; acolher e orientar o usuário para a leitura, a pesquisa e a produção textual.
              </p>
              <p class="text-justify">
                A titulação conferida é a de <strong>Bacharel em Biblioteconomia</strong>.
              </p>
            </div>
          </div>
          <div class="row historico-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Histórico</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    A criação do curso de Biblioteconomia data de 1947. Originalmente vinculado à Faculdade de Economia e Administração da Universidade de Porto Alegre (UPA), foi o primeiro do gênero na Região Sul do Brasil, e o sétimo no país. Em 1972, o curso vinculou-se à Fabico. A formação dos profissionais baseia-se em quatro eixos: Fundamentos das Ciências da Informação; Organização e Tratamento da Informação; Recursos e Serviços de Informação; Gestão de Sistemas de Informação. Assim, alinha-se às diretrizes assumidas pelas Escolas de Biblioteconomia dos países do Mercosul.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row comgrags-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Composição ComGrad/BIB</h3>
                </div>
              </div>
              <div class="row comgrad-membros mt-3">
                <div class="col-12">
                  <h4>Maria Lucia Dias</h4>
                  <p>Coordenadora</p>
                </div>
                <div class="col-12">
                  <h4>Helen Rose Flores de Flores</h4>
                  <p>Coordenadora Substituta</p>
                </div>
                <div class="col-12">
                  <h5>Mandato: 01/02/2021 a 31/01/2023</h5>
                </div>
                <div class="col-12">
                  <h4>Fabiano Couto Corrêa da Silva</h4>
                  <h4>Jussara Borges de Lima</h4>
                  <h4>Rene Faustino Gabriel Júnior</h4>
                  <h4>Maria Lucia Dias</h4>
                </div>
                <div class="col-12">
                  <h5>Mandato: de 16/01/2021 a 15/01/2023</h5>
                </div>
                <div class="col-12">
                  <h4>Ismael Maynard Bernini</h4>
                  <p>Representante TA</p>
                  <p>Mandato: 22 de março de 2021 a 26 de janeiro de 2023</p>
                </div>
                <div class="col-12">
                  <h4>Ares Dall'Agnol Barbosa</h4>
                  <p>Representante Discente</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3>Contato</h3>
                  <ul>
                    <li>E-mail: <a href="mailto:comgradbib@ufrgs.br">comgradbib@ufrgs.br</a></li>
                    <li>Secretaria: Quando houver necessidade de encaminhar documentos impressos e colher assinaturas;</li>
                    <li>Atendimento presencial: Terça-feira, das 13:30 às 15:30.</li>
                    <li>Sala: 217 - Anexo 1</li>
                    <li>Telefone: (51) 3308.5105.</li>
                    <li>OBS: em todas as situações, o retorno é em 2 dias úteis</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row ingresso-e-vagas">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Ingresso e Vagas</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O curso oferece <b>75 vagas anuais</b> preenchidas pelos candidatos aprovados no <a href="http://www.vestibular.ufrgs.br/" target="_blank">Concurso Vestibular</a> da Universidade.
                  </p>
                  <p class="text-justify">Os aprovados ingressam no 1º e no 2º semestres letivos.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row organizacao-curricular">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Organização Curricular</h3>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O currículo do curso de Biblioteconomia abrange uma sequência de disciplinas e atividades, ordenadas por matrículas semestrais, em uma seriação aconselhada. O currículo do curso, composto de disciplinas de caráter obrigatório e por um conjunto de disciplinas de caráter eletivo, deve ser cumprido integralmente pelo aluno a fim de que ele possa qualificar-se para a obtenção do diploma.
                  </p>
                  <p class="text-justify">
                    Seguir a seriação de matrícula aconselhada é a melhor forma do estudante concluir o curso na duração prevista e evitar problemas em sua matrícula.
                  </p>
                  <ul>
                    <li><b>Número de créditos obrigatórios:  114</b></li>
                    <li><b>Número de créditos eletivos:  30</b></li>
                    <li><b>Número de créditos complementares:  12</b></li>
                    <li><b>Número total de créditos para a diplomação:  156</b></li>
                    <li><b>Carga horária total do curso:  2850 horas-aula</b></li>
                    <li><b>Conclusão aconselhada:  8 semestres</b></li>
                  </ul>
                  <p><a href="https://www1.ufrgs.br/graduacao/xInformacoesAcademicas/curriculo.php?CodCurso=304&CodHabilitacao=51&CodCurriculo=165" target="_blank">Currículo e Súmulas das Disciplinas</a></p>
                </div>
              </div>            
            </div>
          </div>
          <div class="row projeto-pedagogico">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Projeto Pedagógico</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O Projeto Pedagógico do Curso de Biblioteconomia foi atualizado em 2012 pela comissão formada pelos professores Me. Glória Isabel Sattamini Ferreira, Dr. Geraldo Ribas Machado, Dr. Rafael Port da Rocha, Dra. Samile Andréa de Souza Vanz, Dra. Sônia Elisa Caregnato e pela técnica em assuntos educacionais Esp. Anamaria Teixeira da Rosa.
                  </p>
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/PPBiblioteconomia-2012-compactado.pdf" target="_blank">Projeto Pedagógico do Curso de Biblioteconomia</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row nucleo-docente">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Núcleo Docente Estruturante</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4>Jackon da Silva Medeiros</h4>
                  <p>Coordenador</p>
                  <p>Mandato:  09 de junho de 2021 a 08 de junho de 2025.</p>
                  <h4>Helen Rose Flores De Flores</h4>
                  <h4>Jackson Da Silva Medeiros</h4>
                  <h4>Rodrigo Silva Caxias De Sousa</h4>
                  <h4>Samile Andréa De Souza Vanz</h4>
                  <h4>Valdir José Morigi</h4>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/RegimentoNDEBiblioteconomia.doc">Regimento do Núcleo Docente Estruturante do Curso de Biblioteconomia</a></p>
            </div>
          </div>
          <div class="row indicadores-de-avaliacao">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Indicadores de Avaliação</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p>Guia do Estudante Abril Cultural 2014 - Pontuado com 5 estrelas.</p>
                  <p>Guia do Estudante Abril Cultural 2013 - Pontuado com 4 estrelas.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="glossario">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Glossário de Ciência da Informação</h3>
                </div>
              </div>
              <div class="row box-sombra">
                <div class="col-12">
                  <a href="<?php bloginfo("template_directory");?>/docs/Glossario-de-Ciencia-da-Informacao.pdf" target="_blank">Glossário da Área de Organização e Tratamento da Informação</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="tesauro">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Tesauro de Literatura Infantil e Juvenil </h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p><a href="http://www.ufrgs.br/thesinfantojuv/">Abra o Tesauro de Literatura Infantil e Juvenil</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>1. INTRODUÇÃO</h4>
                  <p class="text-justify">
                    Este Tesauro constitui-se uma edição preliminar e foi elaborado em virtude da dificuldade de recuperação das informações contidas no então Centro Referencial de Literatura Infantil e Juvenil do Departamento de Ciências da Informação (CERLIJ) identificada por docentes e discentes. Constatou-se a necessidade de um vocabulário controlado para ser utilizado na indexação dos documentos desse acervo.
                  </p>
                  <p class="text-justify">
                    Este instrumento de indexação tem a finalidade de estruturar um vocabulário sobre literatura Infanto-juvenil. Foi elaborado a partir de uma pesquisa desenvolvida por professoras do Departamento de Ciências da Informação (DCI), da área de Organização e Tratamento da Informação, iniciada em 2001, uma vez que este tema é contemplado por esta subárea do Curso de Biblioteconomia.
                  </p>
                  <p class="text-justify">
                    Na primeira etapa da pesquisa procurou-se levantar as linguagens documentárias existentes nessa área específica, sendo que, em nível internacional, somente um instrumento foi localizado - “Tesauro de Literatura Infantil”, do Banco del Libro da OEA - Programa Regional de Desarrollo Cultural.
                  </p>
                  <p class="text-justify">
                    Em nível nacional, não foi encontrado nenhum tesauro nesta área, mas foi examinada a obra “Base de Dados em Literatura Infanto-Juvenil (BADALI)”, coordenada por Else Benetti Marques Válio.
                  </p>
                  <p class="text-justify">
                    Para fins de elaboração deste tesauro foi utilizado o “Manual de Elaboração de Tesauros Monolíngües”, editado pelo IBICT em 1990.  Além deste padrão utilizado, foi construída uma metodologia de elaboração interrelacionada com a Teoria Comunicativa da Terminologia.
                  </p>
                  <p class="text-justify">
                    As fontes (obras) norteadoras para a coleta, categorização e definição de termos foram o livro da Profª Vera Aguiar: Era Uma Vez ...na Escola (2002) bem como Base de Dados em Literatura Infanto-Juvenil (BADALI) coordenado por Else Benetti Marques Válio e o trabalho de Elizabeth Márcia Martucci   e Glória Caitano Rozeti, apresentado no 19° CBBD, realizado em Porto Alegre, no ano de 2000.
                  </p>
                  <p class="text-justify">
                    Além dessas, foram também analisadas obras de literatura infanto-juvenil, nas quais foram coletados traços semânticos necessários para o aperfeiçoamento da construção das definições e categorizações.
                  </p>
                  <p class="text-justify">
                    A categorização utilizada, assim como as definições do glossário, obedeceu estritamente a uma necessidade prática para a construção de um instrumento para indexar documentos, não sendo nosso propósito que esta obra sirva para consulta na área de literatura infanto-juvenil.
                  </p>
                  <p class="text-justify">
                    Com base neste estudo, foram construídas definições para o glossário, adaptadas às necessidades do local a que se destina.
                  </p>
                  <p class="text-justify">
                    Os critérios que determinaram a escolha do descritor preferido foram, primeiramente, a terminologia utilizada no CERLIJ e, em segundo lugar, a terminologia mais empregada na literatura da área. Os descritores foram testados e validados.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>2.ESTRUTURA</h4>
                  <p class="text-justify">
                    A tecnologia empregada no desenvolvimento do tesauro foi o software de gestão de linguagens documentárias, TemaTres, que possibilita a criação de tesauros hierárquicos.
                  </p>
                  <p class="text-justify">
                    O Tesauro está divido em três partes: glossário, apresentação alfabética dos descritores e representação gráfica. Cumpre salientar que esta versão que está sendo divulgada inclui somente a apresentação alfabética e a sistemática deste instrumento de indexação.
                  </p>
                  <p class="text-justify">
                    Este tesauro foi organizado em cinco grandes categorias, sendo que alguns assuntos foram aglutinados ou inseridos em uma determinada categoria para atender a finalidade prática do uso a que se destina. Essas categorias são:
                  </p>
                  <ul class="">
                    <li>Abordagem;</li>
                    <li>Gêneros;</li>
                    <li>Personagens;</li>
                    <li>Tema;</li>
                    <li>Forma.</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>3.RELAÇÕES ENTRE OS DESCRITORES E AS NOTAS</h4>
                  <p class="text-justify">
                    Para fins de indicação das relações entre os descritores, foram utilizadas as seguintes abreviaturas:
                  </p>
                  <ul>
                    <li>TG – Termo Genérico</li>
                    <li>TE – Termo Específico</li>
                    <li>TR – Termo Relacionado</li>
                  </ul>
                  <p>Exemplos:</p>
                  <p>
                    <b>APÓLOGO</b>
                  </p>
                  <ul>
                    <li>TG NARRATIVA</li>
                    <li>TR ANEDOTA</li>
                    <li>TR CONTO</li>
                    <li>TR CRÔNICA</li>
                    <li>TR DIÁRIO</li>
                    <li>TR FÁBULA</li>
                    <li>TR HQ</li>
                    <li>TR LENDA</li>
                    <li>TR MITO</li>
                    <li>TR NOVELA</li>
                    <li>TR PARÁBOLA</li>
                    <li>TR REMINISCÊNCIA</li>
                    <li>TR ROMANCE</li>
                  </ul>
                  <p class="text-justify">
                    Em função de limitações da versão do software utilizado para a construção do tesauro, as relações partitivas aparecem como termos relacionados e também não aparecem nesta versão a indicação das relações de equivalência.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>4.PUBLICAÇÃO E ATUALIZAÇÃO</h4>
                  <p class="text-justify">
                    A edição preliminar deverá ser enriquecida após a testagem de seu uso com sugestões de bibliotecários que atuam na área uma vez que o tesauro é uma obra que carece de uma atualização constante para dar conta da criação de novos termos na terminologia da área.
                  </p>
                  <p class="text-justify">
                    Com esta finalidade, foi anexado um formulário para envio de sugestões com a indicação das respectivas fontes de informação nas quais foram coletados os novos termos e data da coleta.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>5.EQUIPE</h4>

                  <h5>5.1 - Pesquisadores</h5>
                  <p>Glória Isabel Sattamini Ferreira;</p>
                  <p>Martha Eddy Krummenauer Kling Bonotto;</p>
                  <p>Regina Helena van der Laan.</p>

                  <h5>5.2 - Bolsistas voluntários</h5>
                  <p>Daiani Ribas Semeler;</p>
                  <p>Carlos Alberto Borges Ribeiro.</p>

                  <h5>5.3 - Assessoria para informática</h5>
                  <p>Alexandre Semeler;</p>
                  <p>Rodrigo Klanovicz Ferreira</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="evasao">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Evasão e Retenção no Curso de Biblioteconomia </h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    Resultado da pesquisa conduzida pela Comissão de Graduação em Biblioteconomia, que teve como objetivo investigar os motivos determinantes da evasão e da retenção dos alunos do curso de Biblioteconomia da UFRGS, no <b>período de 2000/1 a 2009/2.</b>
                </p>
                <p class="text-justify">
                  <b>Equipe:</b> Samile Andréa de Souza Vanz (coordenadora); AnamariaTeixeira da Rosa (técnica em assuntos educacionais); Andressa Bones Flores (bolsista de graduação); Geraldo Ribas Machado (professor); Glória Isabel Sattamini Ferreira (professora); Lucas Gonçalves (bolsista de graduação); Patrícia Mallman Souto Pereira (bolsista de doutorado); Sabrina Zanatta Grebin (bolsista de graduação); Suélen Spíndola Bilhar (bolsista de graduação); William Flaiban (bolsista de graduação).
                </p>
                <p>
                  <a href="<?php bloginfo("template_directory"); ?>/docs/000912547.pdf" target="_blank">Link para consulta</a>
                </p>
                </div>
              </div>
            </div>
          </div>            
        </div>
      </div>
      <div id="jornalismo" class="row bloco-container">
        <div class="col-12 col-lg-10">
          <div class="row">
            <div class="col-12">
              <h2 class="title">Jornalismo</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify">
                O jornalista trabalha em jornais, emissoras de rádio e televisão, revistas, internet e assessorias de imprensa. Investiga e divulga fatos e informações de interesse público, redige e edita reportagens, entrevistas e artigos, adaptando o tamanho, a abordagem e a linguagem dos textos ao veículo e ao público a que se destinam.
              </p>
            </div>
          </div>
          <div class="row historico-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Histórico</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    O curso de Jornalismo da UFRGS é um dos mais antigos do Brasil. Foi criado em março de 1952, vinculado à Faculdade de Filosofia. O curso visa a formação de profissionais com competência para atuar de modo crítico e responsável, contribuindo para uma sociedade justa e igualitária. Com a implementação das Diretrizes Curriculares Nacionais de 2013, o curso readquire sua autonomia, deixa de ser uma habilitação da Comunicação Social e, em 2016, transforma-se em um bacharelado em Jornalismo.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row comgrags-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Composição ComGrad/JOR</h3>
                </div>
              </div>
              <div class="row comgrad-membros mt-3">
                <div class="col-12">
                  <h4>Felipe Moura de Oliveira</h4>
                  <p>Coordenador</p>
                  <p>Mandato de 16/09/2020 a 03/06/2022</p>
                </div>
                <div class="col-12">
                  <h4>Basilio Sartor</h4>
                  <p>Representante Docente</p>
                  <p>Mandato de 15/09/2020 a 12/05/2022</p>
                </div>
                <div class="col-12">
                  <h4>Bruno Leites</h4>
                  <p>Representante Docente</p>
                  <p>Mandato de 16/05/2020 a 12/05/2022</p>
                </div>
                <div class="col-12">
                  <h4>Thais Furtado</h4>
                  <p>Representante Docente</p>
                  <p>Mandato de 15/09/2020 a 12/05/2022</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3>Contato</h3>
                  <ul>
                    <li>E-mail: <a href="mailto:comgradjor@ufrgs.br">comgradjor@ufrgs.br</a></li>
                    <li>Secretaria: Quando houver necessidade de encaminhar documentos impressos e colher assinaturas;</li>
                    <li>Atendimento presencial: Terça-feira, das 10h às 12h.</li>
                    <li>Sala: 215 - Anexo 1</li>
                    <li>Telefone: (51) 3308.5067.</li>
                    <li>OBS: em todas as situações, o retorno é em 2 dias úteis</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row ingresso-e-vagas">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Ingresso e Vagas</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O curso oferece <b>50 vagas</b> preenchidas pelos candidatos aprovados no <a href="http://www.vestibular.ufrgs.br/" target="_blank">Concurso Vestibular</a> da Universidade e no Sistema de Seleção Unificada (Sisu).
                  </p>
                  <p class="text-justify">O ingresso acontece no 1º e no 2º semestre do ano, por ordem de classificação.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row organizacao-curricular">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Organização Curricular</h3>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O currículo do curso abrange uma sequência de disciplinas e atividades ordenadas por matrículas semestrais em uma seriação aconselhada. É composto de um conjunto de atividades de ensino (de caráter obrigatório e eletivo) e créditos complementares, que devem ser cumpridos pelo aluno a fim de que ele possa qualificar-se para a obtenção do diploma.
                  </p>
                  <p class="text-justify">
                    Seguir a seriação de matrícula aconselhada é a melhor forma do estudante concluir o curso na duração prevista e evitar problemas em sua matrícula.
                  </p>
                  <p><a href="http://www.ufrgs.br/ufrgs/ensino/graduacao/cursos/exibeCurso?cod_curso=1489" target="_blank">Link para o currículo disponível na Página Inicial da Ufrgs</a></p>
                </div>
              </div>            
            </div>
          </div>
          <div class="row indicadores-de-avaliacao">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Indicadores de Avaliação</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p><b>Curso de Jornalismo</b> - Guia do Estudante Abril Cultural 2016 - Pontuado com 4 estrelas</p>
                  <p><b>Curso de Jornalismo</b> - ENADE <b>2012</b> - Conceito 5</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row projeto-pedagogico">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Projeto Pedagógico</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/PPCJORNALISMO-13-02-2017.pdf" target="_blank">Projeto Pedagógico do Curso de Jornalismo</a></p>
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/Decisao-72-2017-CEPE.pdf" target="_blank">Decisão 72/2017 CEPE</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row nucleo-docente">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Núcleo Docente Estruturante</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4>Sandra de Fátima Batista de Deus</h4>
                  <h4>Ana Tais Martins</h4>
                  <p>Mandato: 06/06/2018 a 05/06/2022</p>
                  <h4>Márcia Benetti Machado</h4>
                  <h4>Sean Aquere Hagen</h4>
                  <h4>Virgínia Pradelina da Silveira Fonseca</h4>
                  <p>Mandato: 24/06/2020 a 23/06/2024</p>
                  <p>O Coordenador da COMGRAD é membro nato do NDE do respectivo curso – art. 3º da Resolução nº 22/2012 do CEPE</p>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/RegimentoNDEJornalismo.doc">Regimento do Núcleo Docente Estruturante do Curso de Jornalismo</a></p>
            </div>
          </div>
        </div>
      </div>
      <div id="museologia" class="row bloco-container">
        <div class="col-12 col-lg-10">
          <div class="row">
            <div class="col-12">
              <h2 class="title">Museologia</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify">
                O curso de Bacharelado em Museologia iniciou em 2008 com a missão de formar profissionais para atuar na preservação e gestão do patrimônio integral nas suas dimensões culturais e ambientais. Em paralelo, visa promover ações de salvaguarda, investigação, comunicação e apropriação dos bens culturais com vistas à transformação social e à construção da cidadania. O egresso do curso deverá atuar no processo de musealização, através da documentação, da pesquisa, da conservação e da socialização, objetivando a produção do conhecimento e a preservação do patrimônio construído pelas sociedades.
              </p>
            </div>
          </div>
          <div class="row historico-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Histórico</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    O primeiro curso de Museologia do Brasil foi criado em 1932, ligado ao Museu Histórico Nacional, passando posteriormente a funcionar na Universidade Federal do Estado do Rio de Janeiro (UNIRIO). Somente no ano de 1970 foi criado o segundo curso de Museologia do Brasil, na Universidade Federal da Bahia (UFBA). Durante quatro décadas, portanto, somente funcionaram esses dois cursos para suprir a demanda de profissionais de Museologia em todo o território nacional.
                  </p>
                  <p class="text-justify">
                    A necessidade de formar profissionais museólogos havia sido apontada pela Secretaria de Cultura do Estado do Rio Grande do Sul, que em 8 de maio de 1991 enviou ao Reitor da Universidade Federal do Rio Grande do Sul o Ofício nº 545/SEDAC/91, apontando para a necessidade social de tal curso no âmbito do estado do Rio Grande do Sul.
                  </p>
                  <p class="text-justify">
                    Em 2006 foi designado pelo Departamento de Ciências da Informação da Faculdade de Biblioteconomia e Comunicação (DCI/FABICO), através da Portaria nº07/06, um Grupo de Trabalho para o estudo da viabilidade da implantação do curso de Museologia, integrado por docentes da Universidade. Até aquele momento o Rio Grande do Sul não possuía nenhum curso de graduação em Museologia. No semestre seguinte foi criado o Curso na Universidade Federal de Pelotas (UFPEL), na cidade de Pelotas.
                  </p>
                  <p class="text-justify">
                    A autorização de funcionamento do Curso de Museologia na UFRGS deu-se pela Decisão nº 223/2007, do Conselho Universitário, em sessão de 20 de julho de 2007, tendo em vista o constante no processo nº 23078.031830/06-11, de acordo com o parecer nº 138/2007 da Comissão de Ensino, Pesquisa, Extensão e Recursos.
                  </p>
                  <p class="text-justify">
                    Em 2008 foi realizado o vestibular e houve o ingresso da primeira turma de 30 alunos.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row comgrags-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Composição ComGrad/MSL</h3>
                </div>
              </div>
              <div class="row comgrad-membros mt-3">
                <div class="col-12">
                  <h4>Eráclito Pereira</h4>
                  <p>Coordenador</p>
                </div>
                <div class="col-12">
                  <h4>Ana Celina Figueira da Silva</h4>
                  <h4>Márcia Regina Bertotto</h4>
                  <h4>Vanessa Barrozo Aquino</h4>
                  <h4>Zita Rosane Possamai</h4>
                  <p>Mandatos: 13 de janeiro de 2022 a 12 de janeiro de 2024</p>
                </div>
                <div class="col-12">
                  <h4>Arthur Bonfim Carmo</h4>
                  <p>Representante discente</p>
                </div>
                <div class="col-12">
                  <h4>Rafael Argenta Tams</h4>
                  <p>Representante TA</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3>Contato</h3>
                  <ul>
                    <li>E-mail: <a href="mailto:museologia@ufrgs.br">museologia@ufrgs.br</a></li>
                    <li>Atendimento presencial: Terças-feiras das 9h30min às 13h30min, na sala 217 do Anexo I Saúde</li>
                    <li>Sala: 217 - Anexo 1</li>
                    <li>Telefone: (51) 3308.5105.</li>
                    <li>Coordenações anteriores da ComGrad/MSL</li>
                    <li>2008-2010: Profa. Ana Maria Dalla Zen (Coordenadora) e Profa. Lizete Dias de Oliveira (Coordenadora Substituta);</li>
                    <li>2010-2012: Profa. Marlise Maria Giovanaz (Coordenadora) e Profa. Jeniffer Alves Cuty (Coordenadora Substituta);</li>
                    <li>2012-2014: Profa. Lizete Dias de Oliveira (Coordenadora) e Profa. Zita Rosane Possamai (Coordenadora Substituta);</li>
                    <li>2014-2016: Profa. Ana Carolina Gelmini de Faria (Coordenadora) e Profa. Jeniffer Alves Cuty (Coordenadora Substituta);</li>
                    <li>2016-2017: Profa. Zita Rosane Possamai (Coordenadora) e Prof. Eráclito Pereira (Coordenador Substituto);</li>
                    <li>2017-2018: Prof. Eráclito Pereira (Coordenador) e Profa. Fernanda Carvalho de Albuquerque (Coordenadora Substituta);</li>
                    <li>2018-2018: Profa. Vanessa Barrozo Teixeira Aquino (Coordenadora) e Profa. Ana Celina Figueira da Silva (Coordenadora Substituta);</li>
                    <li>2018-2020: Profa. Ana Celina Figueira da Silva (Coordenadora) e Profa. Márcia Regina Bertotto (Coordenadora Substituta);</li>
                    <li>2020-2022: Profa. Jeniffer Alves Cuty (Coordenadora) e Prof. Eráclito Pereira (Coordenador Substituto);</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row ingresso-e-vagas">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Ingresso e Vagas</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O curso oferece <b>30 vagas anuais</b> preenchidas pelos candidatos aprovados no <a href="http://www.vestibular.ufrgs.br/" target="_blank">Concurso Vestibular</a> da Universidade.
                  </p>
                  <p class="text-justify">Todos os aprovados ingressam no 1º semestre letivo.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row organizacao-curricular">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Organização Curricular</h3>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O Currículo do curso de Museologia abrange uma sequência de disciplinas e atividades ordenadas por matrículas semestrais em uma seriação aconselhada. O currículo do curso, composto de disciplinas de caráter obrigatório e por um conjunto de disciplinas de caráter eletivo, deve ser cumprido integralmente pelo aluno para que ele possa se qualificar para a obtenção do diploma.
                  </p>
                  <p class="text-justify">
                    O curso de Museologia tem a maior parte das disciplina do seu Currículo no <b>turno da tarde</b>.
                  </p>
                  <p>
                    Seguir a seriação de matrícula aconselhada é a melhor forma do estudante concluir o curso na duração prevista e evitar problemas em sua matrícula.
                  </p>
                  <ul>
                    <li><b>Créditos Obrigatórios: 135</b></li>
                    <li><b>Créditos Eletivos: 20</b></li>
                    <li><b>Créditos Complementares: 8</b></li>
                    <li><b>Total de créditos para diplomação: 163</b></li>
                    <li><b>Carga horária total do curso: 2865</b></li>
                    <li><b>Conclusão aconselhada: 8 semestres</b></li>
                  </ul>
                  <p><a href="https://www1.ufrgs.br/graduacao/xInformacoesAcademicas/curriculo.php?CodCurso=731&CodHabilitacao=145&CodCurriculo=1" target="_blank">Currículo e Súmulas das Disciplinas</a></p>
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/EmentarioCursodeMuseologiaUFRGS.pdf" target="_blank">Ementário do Curso de Bacharelado em Museologia - Gestão 2014/15</a></p>
                </div>
              </div>            
            </div>
          </div>
          <div class="row projeto-pedagogico">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Projeto Pedagógico</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O Projeto Pedagógico do Curso de Museologia foi atualizado em 2019 pela comissão formada pelas professoras Dra. Ana Carolina Gelmini de Faria, Dra. Ana Celina Figueira da Silva, Dra. Márcia Regina Bertotto, Me. Marlise Giovanaz, Dra. Vanessa Barrozo Teixeira Aquino e pela técnica em Assuntos Educacionais Esp. Anamaria Teixeira da Rosa, com acompanhamento do Núcleo Docente Estruturante do Curso.
                  </p>
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/PROJETO-PEDAGOGICO-MUSEOLOGIA-UFRGS-VersaoFinal.pdf" target="_blank">Projeto Pedagógico do Curso de Museologia</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row nucleo-docente">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Núcleo Docente Estruturante</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4>Ana Carolina Gelmini de Faria</h4>
                  <h4>Ana Celina Figueira da Silva</h4>
                  <h4>Cassilda Golin Costa</h4>
                  <h4>Marlise Maria Giovanaz</h4>
                  <h4>Zita Rosane Possamai</h4>
                  <p>Mandatos de 24 de março de 2021 a 23 de março de 2025.</p>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/RegimentoNDEMuseologia.doc">Regimento do Núcleo Docente Estruturante do Curso de Museologia</a></p>
            </div>
          </div>
          <div class="row" id="estudos-de-avaliacao">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Estudos de Avaliação</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    Membros da COMGRAD/MSL e NDE/MSL, com a colaboração do Núcleo de Avaliação da unidade (NAU), organizaram diferentes frentes de pesquisas de avaliação visando obter informações específicas sobre a formação de habilidades e competências do profissional museólogo nessa graduação.
                  </p>
                  <p class="text-justify">
                    Os estudos, realizados no período de 2014 e 2015, tiveram participação da bolsista Vanessa Velozo no levantamento dos dados, e sua análise e interpretação pelos docentes e técnico-administrativos vinculados ao Curso de Museologia, bem como da socióloga Aline de Oliveira Kerber.
                  </p>
                  <p class="text-justify">
                    Além desses, o Núcleo de Avaliação da Unidade (NAU) realizou uma investigação específica, também constante neste relatório. E, para elaboração deste documento, contou-se com a participação de todos os envolvidos em sua redação.
                  </p>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/REstudosdeAvaliacaodoCursodeMuseologia.pdf">Estudos de Avaliação do Curso de Museologia</a></p>
            </div>
          </div>
          <div class="row" id="trajetorias">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Museologia na UFRGS: trajetórias e memórias</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    O projeto de extensão “Museologia na UFRGS: trajetórias e memórias" tem por objetivo geral preservar as evidências materiais e as memórias do ensino em Museologia na UFRGS. Para alcançá-lo, pretende-se recuperar os vestígios vinculados à formação; identificar os diferentes agentes que fizeram e fazem parte dessa trajetória; preservar os diferentes registros que evocam memórias; e sociabilizar a história da formação em Museologia nessa universidade.
                  </p>
                  <p><a href="https://memoriamslufrgs.online/tainacan/">Acesse o site aqui.</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="plano-de-metas">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Plano de Metas</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/METAS-COMGRAD-MUSEOLOGIA2020-2021_final.pdf" target="_blank"></a></p>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div id="publicidade" class="row bloco-container">
        <div class="col-12 col-lg-10">
          <div class="row">
            <div class="col-12">
              <h2 class="title">Publicidade e Propaganda</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify">
                O publicitário atua em agências de publicidade, na área de marketing de empresas e em produtoras especializadas (som, vídeo, etc). Atua na elaboração de estratégias e inovações na área de comunicação, visando a obter melhoramentos na relação de empresas e instituições com a sociedade.
              </p>
            </div>
          </div>
          <div class="row historico-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Histórico</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    A habilitação em Publicidade e Propaganda do curso de Comunicação Social se consolida em 1985 com uma reforma curricular. Seguiram-se outras reformas que oportunizaram a sintonia entre a produção do conhecimento acadêmico e as transformações da comunicação publicitária na sociedade. Com a implementação das Diretrizes Curriculares Nacionais de 2013, o curso adquire sua autonomia, deixa de ser uma habilitação da Comunicação Social e, a partir de 2016, transforma-se em bacharelado em Publicidade e Propaganda.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row comgrags-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Composição ComGrad/PP</h3>
                </div>
              </div>
              <div class="row comgrad-membros mt-3">
                <div class="col-12">
                  <h4>Adriana Coelho Borges Kowaricka</h4>
                  <p>Coordenadora</p>
                  <h4>Eduardo Zilles Borba</h4>
                  <p>Coordenador substituto</p>
                </div>
                <div class="col-12">
                  <h4>André Luís Prytoluk</h4>
                  <h4>Laura Hastenpflug Wottrich Cougo</h4>
                  <h4>André Iribure Rodrigues</h4>
                  <p>Representantes docentes</p>
                  <p>Mandato de 03/06/2020 a 02/06/2022</p>
                </div>
                <div class="col-12">
                  <h4>Joseane Maria Goes Lima</h4>
                  <p>Representante dos Técnicos Administrativos</p>
                  <p>Mandato:  22 de março de 2021 a 26 de janeiro de 2023</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3>Contato</h3>
                  <ul>
                    <li>E-mail: <a href="mailto:comgrad-compp@ufrgs.br">comgrad-compp@ufrgs.br</a></li>
                    <li>Secretaria: Quando houver necessidade de encaminhar documentos impressos e colher assinaturas;</li>
                    <li>Atendimento presencial: Mediante agendamento prévio por e-mail.</li>
                    <li>Sala: 215 - Anexo 1</li>
                    <li>Telefone: (51) 3308.5067.</li>
                    <li>OBS: em todas as situações, o retorno é em 2 dias úteis.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row ingresso-e-vagas">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Ingresso e Vagas</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O curso oferece <b>50 vagas</b> preenchidas pelos candidatos aprovados no <a href="http://www.vestibular.ufrgs.br/" target="_blank">Concurso Vestibular</a> da Universidade e no Sistema de Seleção Unificada (Sisu).
                  </p>
                  <p class="text-justify">O ingresso acontece no 1º e no 2º semestre do ano, por ordem de classificação.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row organizacao-curricular">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Organização Curricular</h3>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O currículo do curso abrange uma sequência de disciplinas e atividades ordenadas por matrículas semestrais em uma seriação aconselhada. É composto de um conjunto de atividades de ensino (de caráter obrigatório e eletivo) e créditos complementares, que devem ser cumpridos pelo aluno a fim de que ele possa qualificar-se para a obtenção do diploma.
                  </p>
                  <p class="text-justify">
                    Seguir a seriação de matrícula aconselhada é a melhor forma do estudante concluir o curso na duração prevista e evitar problemas em sua matrícula.
                  </p>
                  <p><a href="http://www.ufrgs.br/ufrgs/ensino/graduacao/cursos/exibeCurso?cod_curso=313" target="_blank">Link para o currículo disponível na Página Inicial da Ufrgs</a></p>
                </div>
              </div>            
            </div>
          </div>
          <div class="row indicadores-de-avaliacao">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Indicadores de Avaliação</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p>Guia do Estudante Abril Cultural 2016 - Pontuado com 5 estrelas.</p>
                  <p>Guia do Estudante Abril Cultural 2015 - Pontuado com 5 estrelas.</p>
                  <p>Guia do Estudante Abril Cultural 2014 - Pontuado com 4 estrelas.</p>
                  <p>Ranking Universitário Folha 2013 - 9º lugar pela avaliação de ensino e 6º lugar pela avaliação do mercado</p>
                  <p>ENADE 2012 - Conceito 5</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row nucleo-docente">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Núcleo Docente Estruturante</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4>Alex Fernando Teixeira Primo</h4>
                  <h4>Elisa Piedras</h4>
                  <h4>Flavia Ataíde Pithan</h4>
                  <h4>Maria Berenice da Costa Machado</h4>
                  <h4>Mariângela Machado Toaldo</h4>
                  <p>Mandatos de 24 de março de 2021 a 23 de março de 2025.</p>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/Regimento-NDE-Publicidade-e-Propaganda.doc">Regimento do Núcleo Docente Estruturante do Curso de Publicidade e Propaganda</a></p>
            </div>
          </div>

        </div>
      </div>
      <div id="relacoes-publicas" class="row bloco-container">
        <div class="col-12 col-lg-10">
          <div class="row">
            <div class="col-12">
              <h2 class="title">Relações Públicas</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify">
                O profissional de Relações Públicas pode prestar assessoria e consultoria a empresas públicas e privadas, atuar no planejamento e execução de eventos e promoções, em pesquisas de opinião pública e de mercado e no planejamento de projetos de comunicação interna e externa para organizações em geral.
              </p>
            </div>
          </div>
          <div class="row historico-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Histórico</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p class="text-justify">
                    O curso passou por três grandes reestruturações: autonomia da habilitação, nos anos 1980, maior adequação às diferentes exigências do mercado, nos anos 1990 e ampliação da área de ação e número de egressos em 2003. Em seu período de existência, o curso contribuiu para a qualificação dos profissionais egressos que atuam em organizações públicas e privadas. Com a implementação das Diretrizes Curriculares Nacionais de 2013, o curso adquire sua autonomia, deixa de ser uma habilitação da Comunicação Social e, a partir de 2016, transforma-se em bacharelado em Relações Públicas.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row comgrags-cursos">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Composição ComGrad/RP</h3>
                </div>
              </div>
              <div class="row comgrad-membros mt-3">
                <div class="col-12">
                  <h4>Ana Karin Nunes</h4>
                  <p>Coordenadora</p>
                  <h4>Helenice  Carvalho</h4>
                  <p>Coordenadora substituta</p>
                  <p>Mandato: 01/02/2021 a 31/01/2023</p>
                </div>
                <div class="col-12">
                  <p>Membros</p>
                  <h4>Ana Karin Nunes</h4>
                  <h4>Denise Avancini Alves</h4>
                  <h4>José Guibson Delgado Dantas</h4>
                  <p>Nísia Martins do Rosário</p>
                  <p>Mandato: 04/01/2021 a 03/01/2023</p>
                </div>
                <div class="col-12">
                  <h4>Anderson Menezes Pereira</h4>
                  <p>Representante dos Técnicos Administrativos</p>
                  <p>Mandato: 28/01/2021 a 27/01/2023</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3>Contato</h3>
                  <ul>
                    <li>E-mail: <a href="mailto:comgradrp@ufrgs.br">comgradrp@ufrgs.br</a></li>
                    <li>Secretaria: Quando houver necessidade de encaminhar documentos impressos e colher assinaturas;</li>
                    <li>Atendimento presencial: Mediante agendamento prévio por e-mail.</li>
                    <li>Sala: 215 - Anexo 1</li>
                    <li>Telefone: (51) 3308.5067.</li>
                    <li>OBS: em todas as situações, o retorno é em 2 dias úteis.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row ingresso-e-vagas">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Ingresso e Vagas</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O curso oferece <b>50 vagas</b> preenchidas pelos candidatos aprovados no <a href="http://www.vestibular.ufrgs.br/" target="_blank">Concurso Vestibular</a> da Universidade e no Sistema de Seleção Unificada (Sisu).
                  </p>
                  <p class="text-justify">O ingresso acontece no 1º e no 2º semestre do ano, por ordem de classificação.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row organizacao-curricular">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Organização Curricular</h3>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-12">
                  <p class="text-justify">
                    O currículo do curso abrange uma sequência de disciplinas e atividades ordenadas por matrículas semestrais em uma seriação aconselhada. É composto de um conjunto de atividades de ensino, de caráter obrigatório, e de atividades de caráter eletivo, que devem ser cumpridas pelo aluno a fim de que ele possa qualificar-se para a obtenção do diploma.
                  </p>
                  <p class="text-justify">
                    Seguir a seriação de matrícula aconselhada é a melhor forma do estudante concluir o curso na duração prevista e evitar problemas em sua matrícula.
                  </p>
                  <p><a href="http://www.ufrgs.br/ufrgs/ensino/graduacao/cursos/exibeCurso?cod_curso=1490" target="_blank">Link para o currículo disponível na Página Inicial da Ufrgs</a></p>
                </div>
              </div>            
            </div>
          </div>
          <div class="row indicadores-de-avaliacao">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Indicadores de Avaliação</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p>Guia do Estudante Abril Cultural 2016 - Pontuado com 4 estrelas.</p>
                  <p>Guia do Estudante Abril Cultural 2015 - Pontuado com 5 estrelas.</p>
                  <p>Guia do Estudante Abril Cultural 2014 - Pontuado com 4 estrelas.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row projeto-pedagogico">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Projeto Pedagógico</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <p><a href="<?php bloginfo("template_directory"); ?>/docs/PPC_versofinalRP.pdf" target="_blank">Projeto Pedagógico do Curso de Museologia</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row nucleo-docente">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <h3>Núcleo Docente Estruturante</h3>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4>Rudimar Baldissera</h4>
                  <p>Coordenador</p>
                  <p>Mandato: de 08 de maio de 2021 a 07 de maio de 2025.</p>

                  <h4>Aline do Amaral Garcia Strelow</h4>
                  <h4>Ana Cristina Cypriano Pereira</h4>
                  <h4>Helenice Carvalho</h4>
                  <h4>Rudimar Baldissera</h4>
                  <h4>Vera Regina Schmitz</h4>
                  <p>Mandatos de 26 de abril de 2021 a 25 de abril de 2025</p>
                </div>
              </div>
              <p><a href="<?php bloginfo("template_directory"); ?>/docs/RegimentoNDERelacoesPublicas.doc">Regimento do Núcleo Docente Estruturante do Curso de Relações Públicas</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>