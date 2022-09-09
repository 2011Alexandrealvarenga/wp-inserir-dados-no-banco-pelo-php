<?php 
/**
 * Template Name: db
 * Template Post Type: post, page
 */
global $wpdb;

$table_name = $wpdb->prefix . 'PAT';

$sql = $wpdb->prepare( "INSERT INTO ".$table_name." 

(local, endereco, municipio, telefone, cep ) VALUES 
('Alumínio' , 'Rua Enio Fabiane, ,  49 – Vila Santa Luzia' , 'Alumínio' , '' , '' ),
('Aparecida' , 'Av. Papa João Paulo Ii, 287' , 'Aparecida' , '' , '' ),
('Assis' , 'Av. Armando Sales De Oliveira, 1170' , 'Assis' , '(18) 3322-5988 / 5521 / 3120 / 5741' , '08420-000' ),
('Avaré' , 'Rua Bahia, 1580' , 'Avaré' , '(14) 3732-1414' , '' ),
('Barra Funda' , 'Rua Mário De Andrade,  S/Nº' , 'Barra Funda' , '(11) 3392-2313' , '' ),
('Barretos' , 'Rua Trinta, 564' , 'Barretos' , '(17) 3322-5801 / 98116-9070' , '' ),
('Itapevi' , 'Avenida Presidente Vargas,  376 – Vila Nova Itapevi ' , 'Itapevi' , '(11) 4143-8888 ramal 210 / 995090-924 - Marcela' , '' ),
('Votuporanga' , 'Rua Barão Do Rio Branco, 4497' , 'Votuporanga' , '(17) 3421-4488' , '' ),
('Batatais' , 'Praça Cônego Joaquim Alves, 167' , 'Batatais' , '(16) 3761-6171 / 0500 / 0501' , '' ),
('Viradouro' , 'Praça Francisco Braga,  54 -Centro ' , 'Viradouro' , '(17) 3392-8844 - RAMAL 8841' , '' ),
('Bebedouro' , 'Av. Hércules Pereira Hortal, 1367' , 'Bebedouro' , '(17) 3342-3422' , '' ),
('Birigui' , 'Travessa Princesa Isabel, 72' , 'Birigui' , '(18) 3642-3778 / 3990' , '' ),
('Botucatu' , 'Rua Dr. Cardoso De Almeida, 1001' , 'Botucatu' , '(14) 3815-8804 / 8805' , '' ),
('Vinhedo' , 'Rua Monteiro De Barros,  101 - Centro ' , 'Vinhedo' , '(19) 3886-1077 / 1656/ 1661' , '' ),
('Brás' , 'Pça Agente Cícero,  S/Nº' , 'Brás' , '(11) 3207-4286 / 3207-4184' , '' ),
('Vargem Grande Paulista' , 'Rua Benedita Maciel De  Almeida ,  85 - Centro' , 'Vargem Grande Paulista ' , '(11) 4158-5694 / 4158-4657' , '' ),
('Brotas' , 'Av. Angelo Piva, 390' , 'Brotas' , '(14) 3653- 2390' , '' ),
('Vargem Grande Do Sul' , 'Pça. Washington Luís,  643 - Centro' , 'Vargem Grande Do Sul' , '(19) 3641-9039 / 3641-9000 /3641-6017' , '' ),
('Cabreúva' , 'Rua Marajó,  S/N' , 'Cabreúva' , '(11) 4529-4037 / 4529-4827' , '' ),
('Caraguatatuba' , 'Rua Taubaté, 520' , 'Caraguatatuba' , '(12) 3882-5211 / 3704 / 3571' , '' ),
('Catanduva' , 'Av. Comendador Antônio Stocco, 537' , 'Catanduva' , '(17) 3522-1194 / 2880 / 3521-1850' , '' ),
('Valinhos' , 'Av. Dos Esportes,  303 - Centro' , 'Valinhos' , '(19) 3849-7187/3849-7188 / 3869-9483  ' , '' ),
('Tupã' , 'Av. Tapuias,  907 - Centro' , 'Tupã' , '(14) 3496-4038' , '' ),
('Teodoro Sampaio' , 'Rua José Miguel De Castro Andrade,  1087 - Centro' , 'Teodoro Sampaio' , '(18) 3282-1986/1985' , '' ),
('Tatuí' , 'Rua Professor Adauto Pereira,  352 - Vila Minghini ' , 'Tatuí' , '(15) 3251–4766' , '' ),
('Tarumã' , 'Rua Dos Lambaris,  405 - Vila Dourados - Tarumã ' , 'Tarumã' , '(18) 3373-4513 ' , '' ),
('Taquarituba' , 'Rua 13 De Maio,  560 - Centro- Taquarituba' , 'Taquarituba' , '(14) 3762-2271' , '' ),
('Taquaritinga' , 'Rua Campos Salles,  408 - Centro' , 'Taquaritinga' , '(16) 3252-2859 / 3253-1907' , '' ),
('Taboão Da Serra' , 'Rua Cesário Dau,  535 - Jd. Maria Rosa - Taboão Da Serra ' , 'Taboão Da Serra' , '(11) 4788-7888' , '' ),
('Sorocaba' , 'Pat Central - Rua Coronel Cavalheiros,  353- Centro - ' , 'Sorocaba' , '(15) 3229-2880' , '' ),
('Sertãozinho' , 'Rua Voluntário Otto Gomes Martins,  1380 - Sertãozinho -' , 'Sertãozinho' , '(16) 3945-6015' , '' ),
('Serra Negra' , 'Rua José Bonifácio – 283 – Centro , Serra Negra ' , '(19) 3842- 2514' , '(19) 3842- 2514' , '' ),
('São Vicente' , 'Rua Frei  Gaspar,  2.577 - Centro ' , 'São Vicente' , '(13) 3467-7372 / 3469-2371' , '' ),
('São Sebastião' , 'Av. Guarda Mor Lobo Viana,  435 - Centro - ( Shopping Pierotti) ' , 'São Sebastião' , '(12) 3893-2254/ 2477' , '' ),
('São Roque' , 'Rua Rui Barbosa,  693 - Centro - ' , 'São Roque' , '(11) 4712-9561 / 4784-2998' , '' ),
('São Pedro' , 'Rua Malaquias Guerra,  ' , 'São Pedro ' , '(19) 3481-3763 / 3481-9392' , '' ),
('São Miguel Arcanjo' , 'Rua Dr. Comendador Dante Carraro,  811 - Centro ' , 'São Miguel Arcanjo' , '(15) 3279-1901' , '' ),
('São João Da Boa Vista' , 'Av. Brasília,  1885 - Sobreloja - Cep: 13870-590 (Dentro Do Poupatempo) -' , 'São João Da Boa Vista' , '(19) 3631-8777 / 3633-8541 ' , '' ),
('Santana De Parnaíba (Posto Avançado)' , 'Rua Xv De Novembro,  625 - Centro' , 'Santana De Parnaíba ' , '(11) 4622.7150' , '' ),
('Santana De Parnaíba' , 'Av. Tenente Marquês,  5.720 - Bairro Fazendinha ' , 'Santana De Parnaíba' , '(11) 4156-3600 / 4622.8256' , '' ),
('Santa Rosa De Viterbo' , 'Av. São Paulo, 100' , 'Santa Rosa De Viterbo' , '(16)  3954-7061 / 7019' , '' ),
('Santa Rita Do Passa Quatro' , 'Rua Duque De Caxias,  614 - Centro ' , 'Santa Rita Do Passa Quatro' , '(19) 3582-5588/ 6611' , '' ),
('Santa Isabel' , 'Praça Da Bandeira,  56 - Centro ' , 'Santa Isabel' , '(11) 4656-2662' , '' ),
('Santa Cruz Do Rio Pardo' , 'Av. Tiradentes,  438 - Centro' , 'Santa Cruz Do Rio Pardo' , '(14) 3372-2445/1385' , '' ),
('Salto De Pirapora' , 'Rua Pedro Aleixo Dos Santos,  75 - Centro ' , 'Salto De Pirapora' , '(15) 3292–3779/3868' , '' ),
('Salto' , 'Rua José Revel, 270 - Centro - ' , 'Salto' , '(11) 4602-3490 / 3496' , '' ),
('Rosana' , 'Av. José Laurindo,  1540 - Centro ' , 'Rosana' , '(18) 3288-1759 / 3288-8229' , '' ),
('Rio Grande Da Serra' , 'Rua Do Progresso,  700 Bloco D ' , 'Rio Grande Da Serra' , '(11) 4820-1833 / 4821.4610' , '' ),
('Rincão' , 'Av. Barão Do Rio Branco,  963 - Centro' , 'Rincão' , '(16) 3395-3595/ 1521' , '' ),
('Ribeirão Pires' , 'Rua Capitão José Gallo,  55 - Centro ' , 'Ribeirão Pires' , '(11) 4828-9155' , '' ),
('Presidente  Epitácio' , 'Rua São Paulo,  5.45 - Centro ' , 'Presidente  Epitácio' , '(18) 3281-5014 ' , '' ),
('Praia Grande' , 'Av. Airton Senna Da Silva,  1.511 - Sitio Do Campo ' , 'Praia Grande' , '(13) 3496-5402 / 5403 / 5394' , '' ),
('Potirendaba' , 'Rua Conego Theodoro Béa,  Nº 1.455 - Centro ' , 'Potirendaba' , '(17) 3827-9200' , '' ),
('Potim' , 'Rua Pedro Andrine,  71 - Centro ' , 'Potim' , '(12) 3112-3200 / 3156 / 3170 / 3133' , '' ),
('Porto Ferreira' , 'R.Cel.Procópio De Carvalho, 329 - Centro' , 'Porto Ferreira' , '(19) 3581-1285/ 3288' , '' ),
('Pontal' , 'Rua Áurea Dos Reis Felício,  197 - Centro - ' , 'Pontal' , '(16) 3953-4101' , '' ),
('Piratininga' , 'Rua Manoel Pedro Carneiro,  110 - Centro ' , 'Piratininga' , '(14) 3265-2909 / 2011' , '' ),
('Pirassununga' , 'R Galicio Del Nero,  51 - Centro -' , 'Pirassununga' , '(19) 3562-3797' , '' ),
('Pirangi' , 'Av. Da Saudade,  988 - Centro ' , 'Pirangi' , '(17) 3386-1710' , '' ),
('Piquete' , 'Rua Comendador Custódio,  77 - Centro ' , 'Piquete' , '(12) 3156-3620/ 3622' , '' ),
('Pilar Do Sul' , 'Av. Antônio Lacerda,  308 – B. Santa  Cecilia' , 'Pilar Do Sul' , '(15) 3278-2084/2031' , '' ),
('Piedade' , 'Rua Tenente Procópio Tenório,  26 - Centro' , 'Piedade' , '(15) 3340-1991' , '' ),
('Peruíbe' , 'Rua Jaçanã,  31 - Centro - (Próximo A Sabesp)' , 'Peruíbe' , '(13) 3453-4555 / (13) 3453-4131' , '' ),
('Pereira Barreto' , 'Rua Ciro Maia, 1465' , 'Pereira Barreto' , '(18) 3704-2128' , '' ),
('Pederneiras' , 'Travessa Anchieta, -82' , 'Pederneiras' , '(14) 3283-9570 RAMAL 9605' , '' ),
('Olímpia' , 'Rua Durval Brito,   67 - Jd. Glória' , 'Olímpia' , '(17) 3280-4944' , '' ),
('Novo Horizonte' , 'Rua Sete De Setembro,  711 -Centro - Novo Horizonte' , 'Novo Horizonte' , '(17) 3542-1336' , '' ),
('Nova Granada' , 'Praça São Benedito,  417 -  Centro ' , 'Nova Granada' , '(17) 3262-2583 / 2715' , '' ),
('Moreira César' , 'Rua José Augusto Mesquita,  170 – Centro ' , 'Moreira César ' , '(12) 3641-2060/ 2090 / 1116' , '' ),
('Monte Mor' , 'Rua Siqueira Campos,  65 – Centro ' , 'Monte Mor ' , '(19) 3879-6263/ 3879-9886' , '' ),
('Monte Alto' , 'Rua Dr. Raul Da Rocha Medeiros,  1565 - Centro - ' , 'Monte Alto' , '(16) 3242-1717' , '' ),
('Monte Aprazível' , 'Rua Osvaldo Aranha,  S/Nº( Estação Rodoviária)' , 'Monte Aprazível' , '(17) 3275-1884/  99170-3124' , '' ),
('Mogi-Guacu' , 'Rua São José,  49 - Vila Julia - Mogi Guaçu                                                                                                                                                                                                                                                      ' , 'Mogi-Guacu' , '(19) 3841-7323/7326' , '' ),
('Mogi Das Cruzes' , 'Av. Candido Xavier De Almeida E Souza,  117 - Centro Civíco' , 'Mogi Das Cruzes' , '(11) 4699-1900' , '' ),
('Mococa' , 'Rua Dr. Muniz Barreto, 82 - Centro -' , 'Mococa' , '(19) 3665-8566 / 3666-5064' , '' ),
('Mirassol' , 'Pe. Ernesto, 2147' , 'Mirassol' , '(17) 3253-4070' , '' ),
('Matão' , 'Mairiporã - Sp, Matão' , '(16) 3382- 3890' , '0' , '' ),
('Mairinque' , 'Av. 27 De Outubro,  371 - Vila Sorocabana' , 'Mairinque' , '(11) 4708-3967/3897' , '' ),
('Lorena' , 'Avenida Capitão Messias Ribeiro, 211' , 'Lorena' , '(12) 3152-9026/ 9027 / 1553 / 4133 / 3153-2399-' , '' ),
('Limeira' , 'Rua Tiradentes,  1.366 - Centro -  ' , 'Limeira' , '(19)3404-6519/3404-6511' , '' ),
('Lençóis Paulista' , 'Rua Coronel Joaquim Gabriel,  11  - Centro -Lençóis Paulista' , 'Lençóis Paulista' , '(14) 3263-2300 ' , '' ),
('Leme' , 'Rua Dr. Armando De Sales Oliveira,  673 - Centro -' , 'Leme' , '(19) 3573-1434' , '' ),
('Laranjal Paulista' , 'Rua Delfino De Melo, 63' , 'Laranjal Paulista ' , '(15) 3383-9120/ 9124 / 3283 - 5968' , '' ),
('Juquitiba' , 'Av. Juscelino Kubitschek De Oliveira, 130' , 'Juquitiba' , '(11) 4682-2098 ' , '' ),
('José Bonifácio' , 'Rua 21 De Abril,  675 - Centro - ' , 'José Bonifácio' , '(17) 3265-2291 / 3228' , '' ),
('Jardinópolis' , 'Praça Dr. Mario Lins, 150-(Prédio Da Prefeitura Municipal)-Centro ' , 'Jardinópolis' , '(16) 3663-4769/4853' , '' ),
('Jales' , 'Rua Seis ,  2163 -  Centro -' , 'Jales' , '(17) 99624-0903' , '' ),
('Jaguariúna' , 'Rua: Cel. Amâncio Bueno 810- Centro  , Jaguariúna' , '(19) 3837-3377 / 1422 / 4530' , '0' , '' ),
('Jaboticabal' , 'Esplanada Do Lago,  160 - Vila Serra ' , 'Jaboticabal' , '(16) 3202-2499  ' , '' ),
('Jaborandi' , 'Rua Colina,  900 - Centro ' , 'Jaborandi' , '(17) 3347-1254 / 17 99119-2086 (17-991411025)' , '' ),
('Ituverava' , 'Rua Cel. Irlândino Barbosa Sandoval,  10 - Centro' , 'Ituverava' , '(16) 3729-2955 / 2698' , '' ),
('Itupeva' , 'Rua Professora Deolinda Silveira De Camargo, 100' , 'Itupeva' , '(11) 4591-1098' , '' ),
('Itu' , 'Avenida Itu 400 Anos,  111 - Bairro Itu Novo Centro' , 'Itu' , '(11) 4813-9343 / 4886-9070' , '' ),
('Itápolis' , 'Av. Valentim Gentil,  735  - Centro' , 'Itápolis' , '(16) 3262-8150 / 7494 ' , '' ),
('Itapetininga' , 'Rua Monsenhor Soares, 251' , 'Itapetininga' , '(15) 3271-8006 / 8517' , '' ),
('Itapecerica Da Serra (Posto Avançado Unidade Jd. Jacira)' , 'Rua Cesário Verde,  02 - Jd. Jacira' , 'Itapecerica Da Serra ' , '(11) 4669-4382' , '' ),
('Itapecerica Da Serra' , 'Rua 13 De Maio,  100 - Centro ' , 'Itapecerica Da Serra ' , '(11) 4165-1979 / 2025' , '' ),
('Itapira' , 'Rua Vitório Coppos,  122 – Bairro Jd. São Benedito' , 'Itapira ' , '(19) 3843-4564' , '' ),
('Itanhaém' , 'Avenida Harry Forssell 1.505 - Jd. Sabauna - , Itanhaém' , '(13) 3427-6192/ 6234 / 6216' , '0' , '' ),
('Itaí' , 'Av. Antonio Justino Vieira, 255' , 'Itaí' , '(14) 3761-3703/ 1471' , '' ),
('Iracemápolis' , 'Rua Pedro Chinelato,  254 - Centro' , 'Iracemápolis' , '(19) 3456-5511' , '' ),
('Indaiatuba' , 'Rua Jacob Lyra,  344 - Pq. Das Nações- Indaiatuba ' , 'Indaiatuba' , '(19) 3894-3369/ 3363 /3935-2789/3825-2830/98100-5842' , '' ),
('Ilha Solteira' , 'Alameda Goiás,  116 - Centro ' , 'Ilha Solteira' , '(18) 3743-6076' , '' ),
('Ilhabela' , 'Rua Prefeito Mariano Procópio De Araújo Carvalho, 128' , 'Ilhabela' , '(12) 3896-9200  / 9226' , '' ),
('Ibiúna' , 'Rua Raimundo Santiago, 30' , 'Ibiúna' , '(15) 3248-2008 / 9530' , '' ),
('Ibitinga' , 'Rua Julio Fernandes Vasques,  348 -' , 'Ibitinga' , '(16) 3342-7282' , '' ),
('Hortolândia' , 'Rua Argolino De Moraes, 405' , 'Hortolândia' , '(19) 3809-2598 / 3965-1400 - r. 8912/8913 ' , '' ),
('Guapiaçu' , 'Rua Rui Barbosa,  714 - Centro ' , 'Guapiaçu' , '(17) 3267-1241' , '' ),
('Guarujá' , 'Avenida Castelo Branco, 357' , 'Guarujá' , '(13) 3347-1020' , '' ),
('Guariba' , 'Rua Rui Barbosa,  245 – Centro ' , 'Guariba' , '(16) 3251-4679  ' , '' ),
('Guaíra' , 'Rua Oito,  500 - Centro' , 'Guaíra' , '(17) 3331-6095' , '' ),
('General Salgado' , 'Rua Plínio Ribeiro Do Val,  1.054 - Centro  ' , 'General Salgado' , '(17) 3832-2011' , '' ),
('Gavião Peixoto' , 'Alameda  Estevo,  386 – Centro - Cep: 14813-970' , 'Gavião Peixoto' , '(16) 3308-1148' , '' ),
('Garça' , 'Rua Xv De Novembro,  110 - Centro ' , 'Garça' , '(14) 3471-2267' , '' ),
('Franco Da Rocha' , 'Avenida Liberdade,  171 Centro - Franco Da Rocha -' , 'Franco Da Rocha' , '(11) 4800-5105 / 48005106' , '' ),
('Franca' , 'Rua Campos Salles,  1.495 - Centro ' , 'Franca' , '(16) 3723-5317' , '' ),
('Ferraz De Vasconcelos - Cic' , 'Av. Américo Trufeli,  60 – Cj.Res. Escrivão José C. Moriel  -                          ' , 'Ferraz De Vasconcelos' , '(11)  4676-7773 ' , '' ),
('Fernandópolis' , 'Rua São Paulo,  2570 - Coester - Fernandópolis' , 'Fernandópolis' , '(17) 3442-3068 ' , '' ),
('Fartura' , 'Rua Luis Ribeiro Salgado,  20 - Sala 05 - Centro - Fartura ' , 'Fartura' , '(14) 3382-2035  ' , '' ),
('Espírito Santo Do Pinhal' , 'Avenida Oliveira Mota, 1' , 'Espírito Santo Do Pinhal' , '(19) 3661-2114  / 3661-3077' , '' ),
('Embu-Guaçu' , 'Praça Ivan Braga De Oliveira,  S/N -Embu Guaçu' , 'Embu-Guaçu' , '(11) 4661-4466' , '' ),
('Embu Das Artes' , 'Rua Andrônico Dos Prazeres Gonçalves,  114 - Centro' , 'Embu Das Artes' , '(11) 4704-4949' , '' ),
('Descalvado' , 'Rua Madre Cecília , 397 - Jd. Belém ' , 'Descalvado' , '(19) 3583-1000  ' , '' ),
('Cubatão' , 'Rua Padre Nivaldo Vicente Dos Santos,  41 - Centro' , 'Cubatão' , '(13) 3361-5504' , '' ),
('Cravinhos' , 'Rua Dr. José Eduardo Vieira Palma,  52 - Centro' , 'Cravinhos' , '(16) 3951-8581 / 2211' , '' ),
('Cotia' , 'Rua Monsenhor Ladeira,  38 - Vila São Francisco' , 'Cotia' , '(11) 4703-0497 / 7522' , '' ),
('Cordeirópolis' , 'Rua Dr. Antônio José Levi,  25 - Vila Pinheiros' , 'Cordeirópolis' , '(19)3546-4762 ' , '' ),
('Conchal' , 'Rua Álvaro Ribeiro,  300 - Centro -' , 'Conchal' , '(19) 3866-4109 ' , '' ),
('Colina' , 'Rua 13 De Maio,  891 - Centro ' , 'Colina' , '(17) 3341-8274  / 3341-3568' , '' ),
('Casa Branca' , 'Rua Capitão Horta,  758 - Centro - Casa Branca' , 'Casa Branca' , '(19) 3674-0935' , '' ),
('Carapicuíba' , 'Av. Presidente Vargas,  280-Vila Caldas' , 'Carapicuíba' , '(11) 4167-6222' , '' ),
('Capivari' , 'Av. Piratininga,  797 - Santa Terezinha' , 'Capivari' , '(19) 3491-9050 / 34915730' , '' ),
('Capão Bonito' , 'Rua Sete De Setembro,  840 - Centro' , 'Capão Bonito' , '(15) 3542-4713 / 4884' , '' ),
('Cândido Mota' , 'Rua Antônio Da Silva Vieira,  601 - Sala 01 - Centro ' , 'Cândido Mota' , '(18) 3341-3508/3509' , '' ),
('Campos Do Jordão' , 'Av. Brigadeiro Jordão,  1330 - Vila Abernéssia' , 'Campos Do Jordão' , '(12) 3664-3770' , '' ),
('Campo Limpo Paulista' , 'Av. Dos Emancipadores,  150 - Campo Limpo Paulista- Sp' , 'Campo Limpo Paulista' , '(11) 4812-2941' , '' ),
('Cajamar' , 'Av. Tenente Marques,  55 –  Polvilho' , 'Cajamar' , '(11)4448-5488 / 5770' , '' ),
('Caieiras' , 'Av. Prof. Carvalho Pinto,  207 - 1º Andar - Centro' , 'Caieiras' , '(11) 4445-9176 / 9177' , '' ),
('Cachoeira Paulista' , 'Rua José Silveira Mendes,  S/N - Jd.  Primavera - Prédio  Da  Rodoviaria  Nova ' , 'Cachoeira Paulista' , '(12) 3103-1835/ 3636  ' , '' ),
('Caçapava' , 'Ladeira São José,  90 - Centro                          ' , 'Caçapava' , '(12) 3652-9495/3653-6874 / 1929/ 3652-6502' , '' ),
('Bragança Paulista' , 'Rua Cel. Teófilo Leme,  1.240 - Piso Superior Do Mercado Municipal -Centro - ' , 'Bragança Paulista' , '(11) 4033-1863 / 4032-8736 ' , '' ),
('Borborema' , 'Rua Stélio Loureiro Machado,  21 - Centro ' , 'Borborema' , '(16) 3266-2977 / 1823' , '' ),
('Boituva' , 'Rua Tancredo Neves, 1' , 'Boituva' , '(15) 3363-8811 / 3363-8800 R. 243' , '' ),
('Bertioga' , 'Av. Anchieta,  392 - Sala 07 - Centro ' , 'Bertioga' , '(13) 3319-9700' , '' ),
('Bastos' , 'Av. 18 De Junho,  162 - Centro ' , 'Bastos' , '(14) 3478-3156 / 3307' , '' ),
('Barueri' , 'R. Henriqueta Mendes Guerra,  550 – Jd. São Pedro ' , 'Barueri' , '(11) 4199-1333 - ramal: 170/180' , '' ),
('Barra Bonita' , 'Av. Dr. Dionízio Dutra E Silva,  105 - Bairro Cohab ' , 'Barra Bonita' , '(14) 3641-7424' , '' ),
('Bariri' , 'Rua Camilo Resegue,  68-Box-2' , 'Bariri' , '(14) 3662-3888 / 8305' , '' ),
('Atibaia' , 'Pat Central: Rua Castro Fafe, 295' , 'Atibaia' , '(11) 4418-7800  / (11) 4412-7011' , '' ),
('Arujá' , 'Rua Professor João Feliciano, 75' , 'Arujá' , '(11) 4653-4057/ 1230' , '' ),
('Artur Nogueira' , 'Rua Treze De Maio,  19 - Centro' , 'Artur Nogueira' , '(19) 3827-5429/5430' , '' ),
('Ariranha' , 'Rua João Colombo, 615' , 'Ariranha' , '(17) 3576-1699' , '' ),
('Araras' , 'Av. Zurita,  681 – Belvedere' , 'Araras' , '(19) 3544-8544/8538' , '' ),
('Araraquara' , 'Rua Ivo Antonio Magnani, 200' , 'Araraquara' , '(16) 3322-9530' , '' ),
('Araçatuba' , 'Rua Almirante Barroso,  47 - Centro ' , 'Araçatuba' , '(18) 3624-5966 / 5220 / 3338' , '' ),
('Apiaí' , 'Rua Leopoldo Leme Verneck, 268' , 'Apiaí' , '(15) 3552-2765 / 1628' , '' ),
('Andradina' , 'Av. Bandeirantes,  655 - Centro' , 'Andradina' , '(18) 3722-1379' , '' ),
('Amparo' , 'Av. Bernardino De Campos ,  705 - Cep: 13900-400 - Amparo' , 'Amparo' , '(19) 3808-1204 / 3817-9300 (ramal 9332)' , '' ),
('Américo Brasiliense' , 'R. Benedito Storani,  661 - Cep- 14820-000 ' , 'Américo Brasiliense' , '(16) 3392-3414 - 33925499' , '' ),
('Americana' , 'Rua Anhanguera,  16 - Centro - Americana' , 'Americana' , '(19) 3461-0289/ 3462-5459' , '' ),
('Aguaí' , 'Av. Olinda Silveira Cruz Braga,  215 - Pq. Interlagos ' , 'Aguaí' , '(19) 3652-3967/3989' , '' ),
('Adamantina' , 'Rua Osvaldo Cruz,  255- Centro -Cep: 17800-000' , 'Adamantina' , '(18) 3522-5164' , '' ),
('Taubaté' , 'Praça Doutor Barbosa De Oliveira,  S/N Piso Superior Da Rodoviária Velha' , 'Taubaté' , '(12) 3632-3984/ 3621-3334' , '' ),
('Suzano' , 'Rua Washington Luís,  185 - Centro' , 'Suzano' , '(11) 4742-7107' , '' ),
('Sumaré' , 'Praça Das Bandeiras,  650 - Centro ' , 'Sumaré ' , '(19) 3399-5620/3399-5625/3399-5626/3399-5637 / (19) 99538-3307' , '' ),
('Sta Gertrudes' , 'Av. Seis,  97 - Jardim Santana - Santa Gertrudes' , 'Sta Gertrudes' , '(19) 3545-3332 ' , '' ),
('São Manuel' , 'Rua Epitácio Pessoa,  689 - Centro' , 'São Manuel' , '(14) 3841-7269' , '' ),
('São José Dos Campos' , 'Praça Afonso Pena,  175 - Centro' , 'São José Dos Campos' , '(12) 3941-3215 / 2043 / 2897' , '' ),
('São José Do Rio Preto' , 'Rua Boa Vista,  666 - Boa Vista' , 'São José Do Rio Preto' , '(17)3235-1222/ 4687 / 1567/ 3963 / 1673 / 4757 - 3233-5699' , '' ),
('São José Do Rio Pardo' , 'Rua José Andreoli,  132 - Centro' , 'São José Do Rio Pardo' , '(19) 3681-6144 / 2848' , '' ),
('São Caetano Do Sul' , 'Rua Major Carlo Del Prete, 651' , 'São Caetano Do Sul' , '(11) 4227-7613 ' , '' ),
('Santa Fé Do Sul' , 'Rua Onze,  1220 - Centro - Santa Fé Do Sul' , 'Santa Fé Do Sul' , '(17) 3631-1782  / 1910' , '' ),
('Rio Claro' , 'Rua Seis,  676 - Centro ' , 'Rio Claro' , '(19) 3534-0422' , '' ),
('Ribeirão Preto' , 'Via São Bento, S/N - (Prédio Administração Da Prefeitura)- Ao Lado Das Sete Capelas - Ribeirão Preto ' , 'Ribeirão Preto' , '(16)3977-8833 RAMAL 8818' , '' ),
('Registro' , 'Av. Clara Gianotti De Souza , 1.127 - Centro ' , 'Registro' , '(13) 3821-4445/4052' , '' ),
('Presidente Prudente' , 'Rua Rio Grande Do Sul,  37 - Vila Marcondes' , 'Presidente Prudente' , '(18) 3221-9270' , '' ),
('Poupatempo São José Do Rio Preto' , 'Rua Antônio De Godoi,  3.033 - Centro' , 'Poupatempo São José Do Rio Preto' , '(17) 3214-4205 / 4213' , '' ),
('Poupatempo Piracicaba' , 'Praça José Bonifácio,  700 - Centro' , 'Piracicaba' , '(19) 3437-5331 ' , '' ),
('Poupatempo Marília' , 'Av. Das Indústrias,  430 - Centro' , 'Marília' , '(14) 3592-1700' , '' ),
('Poupatempo Jundiaí' , 'Av. União Dos Ferroviários,  1.760 - Centro' , 'Jundiaí' , '(11) 4523-5204 / 4523-5200' , '' ),
('Poupatempo Cidade Ademar' , 'Av. Cupecê,  5497 - Jd. Miriam - Cep: 04366-001' , 'Cidade Ademar' , '(11) 5624-2230 RAMAL 2257' , '' ),
('Poupatempo Araçatuba' , 'Rua Tenente Alcides Theodoro Santos,  70 - Bairro Aviação' , 'Araçatuba' , '(18) 3624-5966' , '' ),
('Poá' , 'Rua 26 De Março,  72 - Centro ' , 'Poá ' , '(11) 4639-7854' , '' ),
('Piraju' , 'Rua Esteves Kristensen,  175 - Jardim Jurumirim ' , 'Piraju' , '(14) 3351-1886' , '' ),
('Pindamonhangaba' , 'Av. Albuquerque Lins, 138' , 'Pindamonhangaba' , '(12) 3642 2530 / 3643 1518' , '' ),
('Penápolis' , 'Rua Irmãos Chrisostomo De Oliveira,  330 - Centro' , 'Penápolis' , '(18) 3652-0603/0419' , '' ),
('Pedreira' , 'Rua Miguel Sarkis,  303 - Pq. Industrial' , 'Pedreira' , '(19) 3893-4666/6158 ' , '' ),
('Pat Cic Do Imigrante' , 'Rua Barra Funda,  1020 - Barra Funda' , '' , '(11) 3115-2048' , '' ),
('Paraguaçu Paulista' , 'Rua Xv De Novembro, 500 - Centro ' , 'Paraguaçu Paulista' , '(18) 3361-1350' , '' ),
('Ourinhos' , 'Rua Monsenhor Córdova,   218 - Centro' , 'Ourinhos' , '(14) 3302-1450 / 5000' , '' ),
('Orlândia' , 'Av. Do Café, 1040' , 'Orlândia' , '(16) 3826-0724' , '' ),
('Mongaguá' , 'Avenida São Paulo, 1580' , 'Mongaguá' , '(13) 3507-4006' , '' ),
('Mogi-Mirim' , 'Av. Professor Adibe Chaib, 2050' , 'Mogi-Mirim' , '(19) 3862-3540/ 3862-4540/ 3862-3652' , '' ),
('Marília' , 'Av. Carlos Gomes,  137 -Marília' , 'Marília' , '(14) 3433-3469/3212' , '' ),
('Mairiporã' , 'Avenida Tabelião Passarella, 348' , 'Mairiporã' , '(11) 4419-4414 / 4419-4384 / 4419-4375' , '' ),
('Lins' , 'Rua Floriano Peixoto, 1' , 'Lins' , '(14) 3522-3973' , '' ),
('Jundiaí' , 'Rua Zacarias De Goes,  Nº 530 - Centro' , 'Jundiaí' , '(11) 4521-1247 / 4586-2731 / 4521-1249 ' , '' ),
('Jaú' , 'Rua Treze De Maio,  347 - Centro ' , 'Jaú' , '(14) 3622-6432 / 6375 / 6997 / 3922 3626- 8429' , '' ),
('Jacareí' , 'Rua Barão De Jacareí ,  839 - Centro' , 'Jacareí' , '(12)  3952-1065 / 1076' , '' ),
('Itatiba' , 'Avenida Nair Soares De Macedo Fattore, 200' , 'Itatiba' , '(11) 4534-0503/ 3334 r. 228' , '' ),
('Itararé' , 'Rua Prudente De Morais,  1131 -  Travessa Nagib Abraão - Box 55  –  Centro ' , 'Itararé' , '(15) 3532-4331/4544' , '' ),
('Itaquaquecetuba' , 'Rua Dom Thomaz Frey,  89 - Centro - Itaquaquecetuba' , 'Itaquaquecetuba' , '(11) 4754-1424' , '' ),
('Itapeva' , 'Rua Lucas De Camargo,  290 - Centro ' , 'Itapeva' , '(15) 35222568 / 3521-6507 / 3522-8909' , '' ),
('Iperó' , 'Rua Costa E Silva, 195' , 'Iperó' , '(15) 3576-1899' , '' ),
('Guaratinguetá' , 'Rua Prudente De Morais ,  10 - Centro' , 'Guaratinguetá' , '(12) 3132-3744 / 3122-2864' , '' ),
('Francisco Morato - Cic' , 'Rua Tabatingüera,  45 – Centro ' , 'Francisco Morato' , '(11) 4488.5589 / 97121-7111' , '' ),
('Dracena' , 'Rua Visconde Do Rio Branco,  887 - Centro' , 'Dracena' , '(18) 3821-3642' , '' ),
('Dois Córregos' , 'Praça Prefeito Oswaldo Casonato,  305 - Centro' , 'Dois Córregos' , '(14) 3652-4858' , '' ),
('Cruzeiro' , 'Rua Doutor Celestino, 1620' , 'Cruzeiro' , '(12) 3144-3521 / 3145-3455' , '' )


", 

);
$wpdb->query($sql);

?>