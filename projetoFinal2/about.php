<?php include 'header.php';
$pHeader = new header();
?>
<?php include 'footer.php';
$pFooter = new footer();
?>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <title>Explorando esse mundo!</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="dota2iconTitle.png">
    </head>
    
    <body>
        <?php $pHeader->printHeader()?>
        
        <!-- LOGO E TITULO -->
        <div class="banner about_banner">
            <h1 class="title about_title">Um<br>pouco<br>mais<br>sobre<br>dota!</h1>
        </div>
        
            <!-- ARTIGOS -->
        <main class="about_main">
            
            <article>
                <div>
                    <h1 class="title">StarCraft: o início de tudo</h1>
                    <p>O gênero MOBA não nasceu com Defense of the Ancients. O lançamento de StarCraft, em março de 1998, trouxe um recurso inédito chamado de “StarEdit”, permitindo a customização de mapas e outros elementos do jogo para libertar a criatividade dos fãs. Criar games dentro do próprio game: este era o primeiro conceito importante que possibilitaria a criação de DotA.</p> 
                    <p>Mas as primeiras ideias que apareceram nos moldes atuais do MOBA não carregavam o nome tão conhecido entre os fãs. Aeon of Strife, criado pelo modder “Gunner_4_ever”, foi o primeiro mapa a trazer combates entre equipes que precisavam destruir a estrutura principal do time adversário.</p>
                    <p>O formato é, no entanto, conhecido pelos doteiros: selecione um dos oito heróis, controle-o entre quatro rotas (“lanes”) e mate as unidades guiadas pelo computador para empurrar suas tropas até a base inimiga.</p>
                    <img src="img/about/starcraft.jpg">
                    <p>Uma das grandes novidades dentro do game era o sistema de “last hit” (em português, “o último golpe”). Lançar o último ataque em uma tropa adversária garantia cristais, que eram convertidos em melhorias para o herói.</p>
                    <p>Aeon of Strife ganhou popularidade com o tempo, mas logo o lançamento de outro jogo da Blizzard iria rivalizar a atenção dos jogadores de estratégias e trazer muitas outras novidades na produção de mods. Estamos falando de Warcraft 3: Reign of Chaos.</p>
                </div>
            </article>

            <article>
                <div>
                    <h1 class="title">A migração para o Warcraft 3</h1>
                    <img src="img/about/starcraft2.jpg">
                    <p>A chegada de Warcraft 3: Reign of Chaos (em 2002) e sua expansão Warcraft 3: Frozen Throne (em 2003) ampliou ainda mais as possibilidades para quem criava cenários e mapas em StarCraft: Broodwar. Além de mais ferramentas, o próprio jogo ofereceu suporte a elementos de RPG com habilidades customizadas, atributos, níveis e itens para unidades e heróis.</p>
                    <p>A adaptação de Aeon of Strife para o novo game aconteceu inevitavelmente, mas outros mapas com a mesma ideia ganharam muito mais sucesso pela Battle.net. O modder conhecido como "Eul" criou, em pouco o tempo, o cenário original de Defence of the Ancients, que foi logo transportado para a expansão de Warcraft 3.</p>
                    <p>Eul sumiu pouco tempo depois de criar a segunda versão do seu jogo, mas deixou o código do mapa aberto para todos os que quisessem pôr suas ideias no mod. Versões diversas apareceram em poucas semanas, como “DotA DX Series” ,”DotA Unforgiven” e “DotA Outland”, todas criadas por diversos usuários na internet.</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fpxOD6k__7Y" frameborder="0" allowfullscreen></iframe>
                    <p>Com a diversidade, os modders "Meian" e "Ragn0r" resolveram compilar uma versão geral chamada DotA Allstars, reunindo os heróis mais divertidos e criativos que surgiram até o momento. De fevereiro a abril de 2004, as versões oficiais subiram de “DotA Allstars Beta v.095” a “DotA Allstars v.4.0.a”, esta lançada por um dos modders mais conhecidos da comunidade, Guinsoo.</p>
                    <p>Guinsoo deu continuidade ao trabalho nas versões seguintes, recrutando membros dos melhores clãs do game para ajudar no desenvolvimento. Entre eles estaria o lendário IceFrog, que até hoje é a mente por trás das grandes mudanças de DotA 2.</p>
                    <p>As competições apareceram a partir de “DotA Allstars 5.84c v2”, a versão classificada como a “mais estável” pelos jogadores. Nesse ponto, o número de jogadores de DotA já dominava a Battle.net e começava a rivalizar com a comunidade que preferia a versão "clássica" de Warcraft 3.</p>
                    <p><em>Curiosidade: apesar de Guinsoo e Eul deixarem o desenvolvimento de DotA com os anos, ambos foram homenageados por dois itens dentro do game — Eul’s Scepter of Divinity e Guinsoo’s Scythe of Vyse.</em></p>
                    <img src="img/about/starcraft3.jpg">
                </div>
            </article>
            
            <article>
                <div>
                    <h1 class="title">O sucesso e os campeonatos</h1>
                    <p>De 2004 a 2005, os jogadores se organizaram em fóruns pela internet e começaram a fundar os primeiros times de DotA. Nessa época, o mais relevante foi o TDA (Team DotA Allstars), que ajudava no próprio desenvolvimento do jogo. No entanto, em pouco tempo, os fóruns e sites cresceram a ponto de servidores não aguentarem o tráfego de usuários.</p>
                    <p>Equipes de destaque e que futuramente representariam as organizações profissionais de eSport apareciam nessa época. Jukes on You (a base da Meet Your Makers), PluG (que depois representaria a compLexity) e The Elder Gods eram as que se destacavam nas ligas da TDA e da DotA-League. O cenário se desenvolveu na China com muito mais força, trazendo campeonatos presenciais com mais de 20 times.</p>
                    <p>Aos poucos, ligas e equipes profissionais se interessavam no crescimento da comunidade de DotA. Em 2006, a Cyberathlete Professional League (CPL) fazia sua primeira competição do MOBA no território asiático, enquanto a Electronic Sports League (ESL) organizava os campeonatos online pela Europa e pela América do Norte.</p>
                    <img src="img/about/starcraft4.jpg">
                    <p>Também foi nesse período que algumas lendas apareceram com destaque nas competições. Jacob "Maelk" Toft-Andersen, Jonathan "Loda" Berg, Ben "Merlini" Wu e Clinton "Fear" Loomis são alguns dos mais conhecidos nomes do cenário até hoje.</p>
                    <p>Torneios cada vez mais ambiciosos apareciam para a satisfação dos competidores. Farm4Fame, MYM Pride, DreamHack e outros eventos online e presenciais eram os grandes destaques da época. Em pouco tempo, a rivalidade entre as três principais regiões — Europa, América do Norte e China — ficou mais acirrada, cada uma com diferentes estratégias e modos de jogo.</p>
                    <p>Os primeiros encontros internacionais aconteceram a partir da Electronic Sports World Cup 2008 (ESWC), trazendo a vitória esmagadora da Zenith, da Singapura. A partir desse ponto, organizações como a SMM faziam campeonatos na Ásia com times internacionais para competir com as organizações do continente. A primeira delas abriu em 2008 com uma premiação “recorde” de US$ 21 mil (aproximadamente R$ 67 mil).</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/htFQJw64NSQ" frameborder="0" allowfullscreen></iframe>
                    <p>Mais e mais eventos apareciam durante o ano, chamando a atenção dos desenvolvedores de games para essa nova febre dos MOBAs. Guinsoo seguiu para a Riot Games para ajudar no desenvolvimento de League of Legends. Pouco tempo depois, Heroes of Newerth também era apresentado aos jogadores, seguido por um game que faleceu em pouco tempo chamado Demigod.</p>
                    <p>A comunidade, com isso, esperava que a Blizzard mostrasse finalmente o interesse pelo mapa de sucesso que estava dentro do próprio jogo. Porém, ao contrário do que muitos esperavam, foi outra empresa que se ofereceu para acionar as válvulas dessa ideia e anunciar uma adaptação nos anos seguintes.</p>
                    <p><em>Curiosidade: apesar da pouca representatividade do Brasil nessa época, a equipe brasileira Fearz venceu a Zenith na ESWC 2008 durante a fase de grupos. Foi o único time a ganhar dos campeões nesse evento, e o replay desse feito você confere em vídeo logo acima.</em></p>
                </div>
            </article>
            
            <article>
                <div>
                    <h1 class="title">A entrada da Valve e a explosão competitiva</h1>
                    <p>Foi em 2010 que a Valve registrou a marca “DotA 2” e alavancou a discussão mais caótica que eu já vi na comunidade do game. Teorias das mais diversas explodiam em blogs e postagens no Orkut. Os jogadores mal podiam esperar para se libertar das várias limitações que antes eram impostas pela plataforma de Warcraft 3 — principalmente pela opção de se reconectar em uma partida.</p>
                    <img src="img/about/starcraft5.jpg">
                    <p>Durante um ano, pouquíssimas pessoas viram de perto o desenvolvimento de DotA 2. Enquanto os ânimos dos jogadores ainda eram controlados por partidas no Garena, a empresa anunciou que uma fase Beta fechadíssima estava em desenvolvimento para a primeira apresentação oficial do game. Ela aconteceu no que a empresa chamou de The International, o mais ambicioso campeonato de eSport até o momento, com uma premiação de US$ 1,5 milhão. O título na época ficou para a Natus Vincere.</p>
                    <p>Aos poucos, mais convites foram sendo distribuídos aos jogadores até que DotA 2 entrou em Open Beta e a Valve anunciou que ele seria gratuito para todos. O segundo The International aconteceu ainda com o game em testes com a mesma premiação do ano anterior, mas dessa vez a vitória foi dos chineses da Invictus Gaming.</p>
                    <p>O lançamento oficial veio em 2013, seguido por cada vez mais novidades. Itens que customizavam os heróis estreavam no game, além da possibilidade de comprar tickets para acompanhar e apoiar torneios locais. Aos poucos, a Valve introduzia todos os heróis presentes em DotA Allstars e seguia com ajustes simultâneos na versão original para o Warcraft 3.</p>
                    <img src="img/about/dotati.jpg">
                    <p>Mais versões do The International foram realizadas nos anos seguintes. A terceira edição, em especial, marcou a estreia do Compêndio no campeonato mundial, permitindo que os jogadores comprassem itens dentro do jogo e aumentassem o prêmio do torneio. Isso contribuiu para quebrar outro recorde insano nos eSports e trazer uma premiação total de US$ 2,87 milhões, o equivalente a R$ 9 milhões.</p>
                    <p>As edições seguintes continuaram quebrando recordes, chegando a US$ 20,7 milhões em 2016 — o equivalente a R$ 66,47 milhões. O time campeão, Wings Gaming, levou sozinho US$ 9,1 milhões.</p>
                    <p>Com o tempo, Icefrog parou de atualizar o mapa original de Warcraft 3. A última atualização simultânea aconteceu na versão 6.83d. Apesar do sucesso de DotA 2 por todo o planeta, o mod para Warcraft 3 continua sendo jogado por uma comunidade restrita de fãs, principalmente na China.</p>
                    <img src="img/about/dotati2.jpg">
                </div>
            </article>
            
            <article>
                <div>
                    <h1 class="title">Como DotA 2 está hoje?</h1>
                    <p>O DotA 2 hoje vai bem, obrigado. Depois de trilhar um longo caminho e passar por mais de três plataformas, o game continua chamando a atenção de entusiastas e também dos jogadores competitivos — principalmente com torneios cada vez mais ambiciosos.</p>
                    <p>Segundo os gráficos do Steam, DotA 2 ganhou uma média de 12 vezes mais jogadores desde o lançamento oficial, em julho de 2012. Hoje, o game lidera o número de sessões ativas e horas jogadas na plataforma da Valve, ficando na frente de Counter-Strike: Global Offensive.</p>
                    <p>“O que mais me chamou a atenção no DotA foi a quantidade de combinações que você poderia fazer para ganhar um jogo”, explica Bruno “morta” Santos, narrador do game desde o mod para o Warcraft 3. “Toda partida é diferente, pois no DotA as builds podem funcionar em todos os heróis se forem bem executadas”, complementa.</p>
                    <img src="img/about/dota.jpg">
                    <p>O fator social foi mais importante para André "esA" Pavezi, atual jogador profissional de League of Legends pela Keyd Stars. “Quando cheguei no Brasil, eu não tinha muitos amigos na escola, então eles me apresentaram a lan house. Aí fiz mais amigos lá mesmo e o pessoal que me indicou a jogar DotA”, relembra. “Foi mais por diversão mesmo”, explicou.</p>
                </div>
            </article>
            
            <article>
                <div>
                    <h1 class="title">Um futuro promissor</h1>
                    <p>O futuro do jogo, no entanto, se desenvolve cada vez menos enlaçado pelo passado. Com o lançamento de Underlord — o famoso Pit Lord das quebradas doteiras —, o jogo completa toda a adaptação do mod original. O próximo herói, Monkey King, é inédito no game e inaugura um novo ciclo que não depende mais do que os jogadores conheciam no Warcraft 3.</p>
                    <p>“A maior diferença mesmo do DotA atual para o de antigamente é a facilidade de informação”, explica “morta”. “Antigamente era impossível saber como os europeus ou chineses jogavam. Hoje em dia você pode ver como ele movimenta a câmera, onde ele clica, quando ele clica e quais ações ele toma. Isso deixa tudo muito fácil para aprender a jogar com um herói”, finalizou.</p>
                    <img src="img/about/lina.jpg">
                    <p>Elementos semelhantes também foram apontados por Fernando “Ploc”, jogador de longa data que já teve passagem por várias equipes conhecidas do cenário, como CNB e Insight. "Acho que a maior diferença é como o jogo foi facilitado", refletiu. "Havia muitas coisas que você provavelmente não ia aprender nunca se alguém não te contasse, pois o jogo não explicava, tais como usar ward pra bloquear respawn, quais eram os pontos certos, as sugestões de builds e diversas outras coisas".</p>
                    <p>"O que eu mais gostava no DotA era a questão mecânica do jogo", explicou esA. Antes de atuar no MOBA da Riot Games, o competidor representou a equipe CNB pelo DotA e ficou conhecido por suas habilidades com a heroína Windrunner. "Um jogador muito bom mecanicamente poderia fazer muitas plays e outplays e carregar jogos facilmente", lembrou.</p>
                    <p>DotA 2 passou por seis anos de cuidadosa adaptação e mostrou que aquele simples mapa criado em StarCraft tinha potencial para revolucionar os video games. E, com a ajuda de um suporte de peso da comunidade e uma equipe cuidadosa, a Valve se fortalece cada vez mais em um jogo que ainda não tem previsões para atingir o “late game”. </p>
                </div>
            </article>
        </main>
        <?php $pFooter->printFooter()?>
        <script type="text/javascript" src="script.js"></script>
        
    </body>
        

</html>    