-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2017, 19:30
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `twojaksiazka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(11) NOT NULL,
  `tytul` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `opis` text NOT NULL,
  `rokWydania` varchar(4) NOT NULL,
  `liczbaStron` int(11) NOT NULL,
  `obrazek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `autor`, `opis`, `rokWydania`, `liczbaStron`, `obrazek`) VALUES
(1, 'Zwiadowcy. Ruiny Gorlanu', 'John Flanagan', 'Przyszłość piętnastoletniego Willa zależy od decyzji możnego barona. Sam Will najchętniej zostałby rycerzem, ale drobny i zwinny nie odznacza się tężyzną fizyczną, niezbędną do władania mieczem. Tajemniczy Halt proponuje chłopakowi przystanie do zwiadowców ludzi owianych legendą, którzy, jak wieść niesie, parają się mroczną magią, potrafią stawać się niewidzialni... Początek nauki u mistrza Halta to jednocześnie początek wielkiej przygody i prawdziwej męskiej przyjaźni.\r\n', '2009', 320, 'img/zwiadowcy.jpg'),
(2, 'Na psa urok', 'Kevin Hearne', 'Pierwsza księga serii o Atticusie O Sullivanie, ostatnim druidzie i najśmieszniejszym bohaterze urban fantasy od czasów Harryego Dresdena Jima Butchera!\r\n\r\nAtticus O Sullivan to gwiazda rockowa wśród magików - ten przystojny Irlandczyk to tak naprawdę ostatni z druidów. Polegając na swych nadprzyrodzonych mocach, wrodzonym sprycie i uroku osobistym, już od dwóch tysięcy lat ucieka przed pewnym celtyckim bogiem. Kiedy jednak w sennym miasteczku Tempe w Arizonie, gdzie się ostatnio zaszył, pojawia się ponętna bogini śmierci Morrigan, jako forpoczta celtyckiego panteonu, Atticus nie ma złudzeń - zanosi się na poważne kłopoty...\r\n\r\nNa psa urok to pierwszy tom cyklu urban fantasy. Hearne wypełnia ten świat barwnymi postaciami. Jest tu gadający wilczarz irlandzki i wataha wilkołaków-wikingów, i piękna barmanka opętana przez hinduską boginię, wampir-prawnik i... polskie wiedźmy, którym udało się umknąć nazistom. Szalona mieszanka mitów i współczesności, bohater obdadrzony ciętym dowcipem, niespodziewane zwroty akcji - to dość, by rozchichotany czytelnik przeczytał powieść jednym tchem.\r\n', '2011', 296, 'img/naPsaUrok.jpg'),
(3, 'Baśniobór', 'Brandon Mull', 'Kendra i Seth zostają wysłani na dwa tygodnie do dziadka. I wcale nie są zadowoleni. Na przywitanie dostają mnóstwo przestróg. Dzieci nie mają pojęcia, że ten dziwny staruszek jest strażnikiem tajemniczego Baśnioboru. W pilnowanym przez niego lesie żyją ze sobą w zgodzie zachłanne trolle, figlarne satyry, zgryźliwe czarownice, psotne chochliki i zazdrosne wróżki. Rodzeństwo, zlekceważywszy zakazy dziadka, uwalnia groźne siły zła, którym teraz trzeba stawić czoło. By uratować rodzinę, Baśniobór, a może nawet cały świat, Kendra będzie musiała zdobyć się na to, czego obawia się najbardziej...\r\n', '2011', 344, 'img/basniobor.jpg'),
(4, 'Król Demon', 'Cinda Williams Chima', 'W Fellsmarchu nastały ciężkie czasy. Han Alister, do niedawna złodziej, zrobi niemal wszystko, by utrzymać siebie, matkę i siostrę Mari. Jak na ironię, jedyna wartościowa rzecz, jaką posiada, nie nadaje się do sprzedaży. Odkąd Han pamięta, zawsze miał na rękach grube srebrne bransolety z wygrawerowanymi runami. Wszystko wskazuje na to, że są magiczne - rosną wraz z nim i nie da się ich zdjąć. Życie Hana komplikuje się jeszcze bardziej po tym, jak chłopak zabiera potężny amulet Micahowi Bayarowi, synowi Wielkiego Maga. Amulet ten niegdyś należał do Króla Demona - czarownika, który przed tysiącem lat omal nie zniszczył świata. Bayarowie nie powstrzymają się przed niczym, by odzyskać tak potężny przedmiot. Tymczasem Raisa ana Marianna, następczyni tronu Fells, toczy własną walkę. Właśnie wróciła na królewski dwór po trzech latach swobody u rodziny ojca, w kolonii Demonai, gdzie jeździła konno, polowała i uczestniczyła w słynnych targach klanowych. Po swoim święcie imienia szesnastoletnia Raisa będzie mogła wyjść za mąż, lecz nie jest zachwycona perspektywą poślubienia księcia z dużym zamkiem i małym móżdżkiem. Raisa pragnie być jak Hanalea - legendarna waleczna królowa, która pokonała Króla Demona i uratowała świat. Wygląda jednak na to, że jej matka ma inne plany - niebagatelną rolę odgrywa w nich zalotnik, łamiący wszelkie prawa, na których opiera się królestwo. Siedem Królestw zadrży w posadach, gdy losy Hana i Raisy zetkną się na kartach tej trzymającej w napięciu powieści.', '2011', 560, 'img/krolDemon.jpg'),
(5, 'Zaginione wrota', 'Orson Scott Card', 'Dan North wychowuje się w wielkim starym domu zamieszkałym przez tuziny kuzynów, ciotek i wujków, nad którymi władzę sprawuje jego ojciec. Gniazdo rodzinne Northów znajduje się na odludziu w górach zachodniej Wirginii, daleko od miasta, daleko od szkół, daleko od innych ludzi. Mieści się w nim sekretna biblioteka, a w niej książki napisane w tajemniczym języku – od chłopca i jego kuzynów oczekuje się, by biegle go opanowali. Danny od małego dostrzega, że nie jest taki jak reszta jego rodziny. W czasie gdy kuzyni uczą się powoływać do życia leśne duszki, golemy, trolle, wilkołaki, i inne podobne cuda, Danny martwi się, że sam nigdy nie odkryje w sobie żadnego talentu… Rodzina Northów to klan magów przebywający na wygnaniu w naszym świecie. Żyją oni w stanie kruchego rozejmu z innymi klanami, do czasu gdy narodziny Dana rozniecają na nowo płomień wojny. Danny jest bowiem pierwszym od tysiąca lat magiem wrót, które bronią rodzinie Northów i jej wrogom dostępu do wspólnej ojczyzny, świata Westil. Niestety chłopiec nie zdaje sobie sprawy z wielu spraw. A to może doprowadzić Northów do katastrofy…\r\n', '2012', 448, 'img/zaginioneWrota.jpg'),
(6, 'Lewa ręka Boga', 'Paul Hoffman', 'W Sanktuarium nie ma miejsca na litość i miłosierdzie. Ci, którzy trafiają do kamiennego labiryntu sal, mają tylko jedno zadanie: walczyć aż do śmierci o Jedynie Słuszną Wiarę. Tomas Cale ma piętnaście albo szesnaście lat – nie pamięta. Nie pamięta również tego, jak nazywał się, nim trafił w ręce okrutnych braci. Niezwykle utalentowany, zarówno czarujący, jak i zdolny do niebywałego okrucieństwa, w chwili słabości pozwala sobie na nieodpowiedzialny czyn. W odruchu litości zabija pastwiącego się nad młodą kobietą odkupiciela, podpisując na siebie wyrok śmierci. Tomas musi uciekać przed karzącą ręką Powieszonego Odkupiciela i jego fanatycznych wyznawców. Wraz z ocaloną dziewczyną i przyjaciółmi, Henrim i Kleistem, opuszcza Sanktuarium, by stawić czoła rzeczywistości poza jego murami. Niełatwy charakter, porywczość i budzące niepokój zdolności nie ułatwią mu ukrycia się pomiędzy normalnymi ludźmi…', '2011', 448, 'img/lewaRekaBoga.jpg'),
(7, 'Tunele', 'Roderick Gordon, Brian William', 'Głównym bohaterem książki jest czternastoletni chłopiec - Will Burrows, który wraz ze swoją rodziną mieszka w małym miasteczku Highfield pod Londynem. Gdy jego tata, z którym łączy go pasja do archeologii i wykopalisk, znika w gęstej sieci tuneli, Will wyrusza w niebezpieczną i ekscytującą podróż do podziemnego świata, aby mu pomóc.\r\n', '2008', 496, 'img/tunele.jpg'),
(8, 'Gildia magów', 'Trudi Canavan', 'Co roku magowie z Imardinu gromadzą się, by oczyścić ulice z włóczęgów, uliczników i żebraków. Mistrzowie magicznych dyscyplin są przekonani, że nikt nie zdoła im się przeciwstawić, ich tarcza ochronna nie jest jednak tak nieprzenikniona jak im się wydaje. Kiedy bowiem tłum bezdomnych opuszcza miasto, młoda dziewczyna, wściekła na traktowanie jej rodziny i przyjaciół, ciska w tarczę kamieniem - wkładając w cios całą swoją złość. Ku zaskoczeniu wszystkich świadków kamień przenika przez barierę i ogłusza jednego z magów. Coś takiego jest nie do pomyślenia. Oto spełnił się najgorszy sen Gildii: w mieście przebywa nieszkolona magiczka. Trzeba ją znaleźć - i to szybko, zanim jej moc wyrwie się spod kontroli, niszcząc zarówno ją, jak i miasto.', '2007', 520, 'img/gildiaMagow.jpg'),
(9, 'Uczeń skrytobójcy', 'Robin Hobb', '\"Uczeń skrytobójcy\" to pierwszy tom legendarnej serii fantasy. Jest w niej magia i zły urok, jest bohaterstwo i podłość, pasja i przygoda.\r\n\r\nMłody Bastard to nieprawy syn księcia Rycerskiego. Dorasta na dworze w Królestwie Sześciu Księstw, wychowywany przez szorstkiego koniuszego swego ojca. Ignoruje go cała rodzina królewska oprócz chwiejnego w swoich sądach króla Roztropnego, który każe uczyć chłopca sekretnej sztuki skrytobójstwa. W żyłach Bastarda płynie błękitna krew, ma więc zdolność do korzystania z Mocy.', '2014', 448, 'img/uczenSkrytobojcy.jpg'),
(10, 'Stalowe serce', 'Brandon Sanderson', 'W zdewastowanym świecie przyszłości superbohaterowie są dla ludzkości przekleństwem.\r\n\r\nDziesięć lat temu pojawiła się na niebie Calamity. Był to impuls, który sprawił, że niektórzy ze zwykłych dotąd ludzi zaczęli się zmieniać i przejawiać niezwykłe umiejętności. Zdumione społeczeństwo nazwało ich Epikami. Epicy nie są przyjaciółmi gatunku ludzkiego. Niezwykłe zdolności sprawiły, że odczuwają wielkie pragnienie sprawowania władzy. Ale żeby rządzić ludźmi, trzeba skruszyć ich wolę. Teraz, w mieście znanym niegdyś jako Chicago, niewiarygodnie potężny Epik zwany Stalowym Sercem sprawuje rządy Imperatora. Posiada siłę kilku ludzi i potrafi kontrolować żywioły. Oznacza to, że nie można go pokonać. Nikt nie podejmuje więc z nim walki… Nikt prócz Mścicieli.\r\n\r\nNazywam się David Charleston. Nie jestem Mścicielem, ale zamierzam się do nich przyłączyć. Mam coś, czego potrzebują. Znam jego sekret. Widziałem jak Stalowe Serce krwawi.', '2015', 444, 'img/staloweSerce.jpg'),
(11, 'Harry Potter i kamień filozofi', 'J. K. Rowling', 'Harry Potter, sierota i podrzutek, od niemowlęcia wychowywany był przez ciotkę i wuja, którzy traktowali go jak piąte koło u wozu. Pochodzenie chłopca owiane jest tajemnicą; jedyną pamiątką Harry`ego z przeszłości jest zagadkowa blizna na czole. Skąd jednak biorą się niesamowite zjawiska, które towarzyszą nieświadomemu niczego Potterowi? Wszystko zmienia się w dniu jedenastych urodzin chłopca, kiedy dowiaduje się o istnieniu świata, o którym nie miał dotąd pojęcia.\r\nNowe wydanie książki o najsłynniejszym czarodzieju świata różni się od poprzednich nie tylko okładką, ale i wnętrzem – po raz pierwszy na początku każdego tomu pojawi się mapka Hogwartu i okolic, początki rozdziałów ozdobione będą specjalnymi gwiazdkami, a na końcu pierwszego tomu na Czytelników czeka coś zupełnie wyjątkowego – akt personalny J.K. Rowling, z którego można dowiedzieć się, jakie jest ulubione zwierzę czy bohater literacki autorki.\r\n', '1998', 309, 'img/harryPotter.jpg'),
(12, 'Malowany człowiek: Księga I', 'Peter V. Brett', 'Zaszczuta i zdziesiątkowana ludzkość przeklina noc. Z każdym zmierzchem, w oparach mgły, nadchodzą opętane żądzą mordu bestie. Przerażeni ludzie chronią się za magicznymi runami. Usiłują wymodlić dla siebie i najbliższych kolejny dzień życia. Rzeź ustaje bladym świtem, gdy światło zapędza demony z powrotem w Otchłań.\r\n\r\nRosną odległości między pustoszejącymi osadami. Wydaje się, że nikt ani nic nie zdoła powstrzymać otchłańców, kładąc tym samym kres zagładzie. W tym dogorywającym świecie dorasta troje młodych ludzi. Bohaterski Arlen, przekonany, że większym od nocnego zła przekleństwem jest strach przepełniający ludzkie serca. Leesha - jej życie zrujnowało jedno proste kłamstwo - nowicjuszka u starej zielarki, bardziej chyba przerażającej od krwiożerczych potworów. I Rojer, którego los na zawsze odmienił wędrowny minstrel, wygrywając mu na skrzypkach skoczną melodię.\r\n\r\nTych troje ma coś wspólnego - są uparci i przeczuwają, że prawda o świecie nie kończy się na tym, co im powiedziano. Czy odważą się jej poszukać, opuszczając chroniony runami azyl?', '2008', 504, 'img/malowanyCzlowiek.jpg'),
(13, 'Złodziej pioruna', 'Rick Riordan', 'Wiecie co, wcale nie chciałem być herosem półkrwi. Nie prosiłem się o to, żeby być synem greckiego boga. Byłem zwyczajnym dzieckiem: chodzącym do szkoły, grającym w koszykówkę i jeżdżącym na rowerze. Nic szczególnego. Dopóki przez przypadek nie wyparowałem nauczycielki matmy. Wtedy się zaczęło. Teraz zajmuję sie walką na miecze, pokonywaniem potworów, w czym pomagają mi przyjaciele, a poza tym staram się po prostu przeżyć. Przedstawiam wam opowieść o tym, jak Zeus, bóg niebios, uznał, że ukradłem mu piorun - a rozgniewany Zeus to naprawdę spory problem.\r\n\r\nCzy Percy zdoła znaleźć piorun zanim rozpęta się wielka wojna bogów?\r\n\r\nCo by było, gdyby Bogowie Olimpijscy wciąż żyli w XXI wieku? Co by było, gdyby nadal zakochiwali sie w śmiertelnikach i śmiertelniczkach i mieli z nimi dzieci, z których mogą wyrosnąć wielcy herosi - jak Tezeusz, Jazon czy Herakles?\r\n\r\nJak to jest być takim dzieckiem?\r\n\r\nTo właśnie się przydarzyło dwunastoletniemu Percyemu Jacksonowi, który zaraz po tym, jak dowiedział się prawdy, wyrusza na niezwykle niebezpieczną misję. Z pomocą satyra i córki Ateny Percy odbędzie podróż przez całe Stany Zjednoczone, żeby schwytać złodzieja, który ukradł przedwieczną broń masowego rażenia - należący do Zeusa piorun piorunów. Po drodze zmierzy się z zastępami mitologicznych potworów, których zadaniem jest go powstrzymać. A przede wszystkim będzie musiał stawić czoła ojcu, którego nigdy nie spotkał, oraz przepowiedni, która ostrzegła go przed zdradą przyjaciela.', '2009', 360, 'img/zlodziejPioruna.jpg'),
(14, 'Kłamca', 'Jakub Ćwiek', 'Odkąd nie ma Boga, anioły nie grają fair. I to tłumaczyłoby obecność Kłamcy...\r\n\r\nOcalony po szturmie na Valhallę Loki – adoptowany syn Odyna, patron oszustów i zdrajców – postanawia przystać do zwycięzców i staje się anielskim chłopcem na posyłki.\r\n\r\nSzybko jednak okazuje się, że w świecie, gdzie zabłąkane, mitologiczne bóstwa bratają się z piekielnymi demonami, niezwykłe zdolności boga kłamstwa służyć mogą znacznie ważniejszym celom. Wyćwiczone sztuczki doskonale dezorientują wroga, a bezwzględność i pogarda wobec regulaminów i zasad czynią go naprawdę groźnym przeciwnikiem zła i występku. Tak przynajmniej sądzą archaniołowie, coraz bardziej zależni od pomocy nowego sojusznika. I może mają rację…\r\n\r\nAle Loki ma własne plany.', '2005', 272, 'img/klamca.jpg'),
(15, 'Przeznaczenie bohaterów', 'Morgan Rice', '\"Przeznaczenie bohaterów\" to historia chłopca dorastającego na peryferiach Królestwa Kręgu. Najmłodszy z czterech braci, znienawidzony przez nich i przez ojca Thorgrin czuje, że różni się od innych mieszkańców wioski. Marzy o tym, by zostać wielkim wojownikiem i dołączyć do Srebrnej Gwardii, elitarnego oddziału, chroniącego Królestwo przed tym, co kryje się po drugiej stronie kanionu. Pewnego dnia w lesie nieopodal swojej wioski spotyka najpotężniejszego druida w królestwie. Rozmowa z nim, pełna zagadek i niedopowiedzeń, powoduje, że wyrusza w podróż, zdecydowany walczyć o swoje przeznaczenie. A to zmieni jego życie na zawsze…\r\n\r\nPierwszy tom bestsellerowej sagi fantasy \"Krąg czarnoksiężnika\", w którym odzywają się echa twórczości najlepszych autorów gatunku: J. K. Rowling, George’a RR Martina, Ricka Riordana, Christophera Paoliniego i J. R R. Tolkiena. Zanurzcie się w historię pełną magii i intryg politycznych, rycerzy i smoków, przyjaźni i miłości. Poznajcie opowieść o dorastaniu, honorze i odwadze, losie i przeznaczeniu, ale także o złamanych sercach, zawodach, ambicji i zdradzie. Niezapomniana saga dla czytelników w każdym wieku.', '2015', 352, 'img/przeznaczenieBohaterow.jpg'),
(16, 'Zemsta czarownicy', 'Joseph Delaney', 'Thomas Ward, siódmy syn siódmego syna, zostaje oddany do terminu u miejscowego stracharza. Praca jest ciężka, mistrz surowy, tak więc wielu wcześniejszych uczniów nie podołało trudom nauki.\r\n\r\nThomas musi się nauczyć przepędzać duchy, poskramiać czarownice i więzić boginy. Kiedy jednak niechcący uwalnia Mateczkę Malkin, najgorszą wiedźmę w Hrabstwie, zaczyna się koszmar..', '2007', 304, 'img/zemstaCzarownicy.jpg'),
(17, 'Młody Samuraj. Droga Wojownika', 'Chris Bradford', 'Pasjonująca przygoda, która od pierwszej strony rzuca czytelnika na ziemię i trzyma go tam do końca... Eoin Colfer, autor serii o Artemisie FowluJest sierpień 1611 roku. Statek Jacka Fletchera rozbija się u wybrzeży Japonii a ukochany ojciec chłopca i załoga giną zamordowani przez piratów ninja. Jacka otacza opieką Masamoto Takeshi, legendarny mistrz miecza. Gdy chłopiec trafia do szkoły samurajów, okazuje się, że w oczach wielu uczniów jest barbarzyńcą i wyrzutkiem. Czy zdoła dowieść, że zasłużył na miano wojownikaa Książka Młody samuraj. Droga wojownika to nie tylko wspaniała opowieść przygodowa, lecz także skarbnica wiedzy o Japonii a panujących tam obyczajach, etykiecie, o wschodnich sztukach walki i zen. Już wkrótce www.mlodysamuraj.plChris Bradford lubi latać w powietrzu. Skakał na bungee nad Wodospadami Wiktorii, ze spadochronem w Nowej zelandii i z góry we Francji na paralotni, ale zawsze lądował bezpiecznie a tego się nauczył, trenując sztuki walkiaKiedy miał siedem lat, wstąpił do klubu judo i tak zaczęła się jego miłość do przerzucania innych przez ramię, boksowania się z cieniem i kłaniania na potęgę. Od tamtych lat trenował karate, kickboxing oraz samurajską sztukę walki mieczem i zdobył czarny pas w Kyo Shin Taijutsu, tajemnej sztuce walki wojowników ninja. zanim napisał serię Młody samuraj, był zawodowym muzykiem i autorem tekstów piosenek. Grał nawet dla jej wysokości królowej Elżbiety II (choć podejrzewa, że występ jego kapeli wydał się królowej zbyt hałaśliwy).Mieszka na wsi w South Downs z żoną i dwoma kotami, Tiggerem i Rhubarbem.By dowiedzieć się więcej o Chrisie, odwiedź stronę internetową youngsamurai.com.', '2009', 320, 'img/drogaWojownika.jpg'),
(18, 'Płomień i krzyż', 'Jacek Piekara', 'Płomień i Krzyż - pod względem chronologii wydarzeń - rozpoczyna \"cykl inkwizytorski\" Jacka Piekary. Odsłania tajemnice świata tym różniącego się od naszego, że w roku 33 Jezus Chrystus nie umarł i nie zmartwychwstał, lecz zstąpił z krzyża i ukarał śmiercią swych prześladowców.\r\nW 1. tomie poznasz losy Mordimera Madderdina widziane oczami Pięknej Katarzyny - matki inkwizytora oraz Arnolda Lowefella, jego mentora i nauczyciela, członka Wewnętrznego Kręgu Inkwizytorium. A wszystko w krwawej scenerii chłopskiego buntu pustoszącego Cesarstwo, w bogatym domu pięknej kurtyzany parającej się mroczną sztuką, w mistycznej siedzibie perskiego czarnoksiężnika, w Akademii Inkwizytorium oraz siedzibie Świętego Officjum - tajemniczym klasztorze Amszilas.', '2008', 424, 'img/plomienIKrzyz.jpg'),
(19, 'Rój', 'B. V. Larson', 'Owdowiały wykładowca akademicki Kyle Riggs mieszka z dwójką dzieci na kalifornijskiej farmie. Pewnej nocy jego spokojne życie przerywa przybycie okrętu obcych, który porywa i morduje jego dzieci, a następnie zabiera na pokład samego Kyle’a. Okazuje się, że bohater przechodzi serię testów, po których statek, najwyraźniej obdarzony inteligencją, czyni go swoim dowódcą. Jest też zła wiadomość – obcy, którzy wysłali jednostkę, walczą z kimś o wiele groźniejszym, kimś, kto wkrótce znajdzie się w pobliżu Ziemi.\r\nRasa ludzka, zamieszkująca galaktyczny zaścianek i dysponująca prymitywną technologią, trafia w sam środek wojny między dwoma potężnymi gatunkami obcych.\r\n„Rój” to pierwszy tom bestsellerowej serii Star Force.', '2017', 402, 'img/roj.jpg'),
(20, 'Krew elfów', 'Andrzej Sapkowski', 'Andrzej Sapkowski, arcymistrz światowej fantasy, zaprasza do swojego Neverlandu i przedstawia uwielbianą przez czytelników i wychwalaną przez krytykę wiedźmińską sagę!\r\n\r\n\"Tako rzecze Ithlinne, elfia wieszczka i uzdrowicielka:\r\nDrżyjcie, albowiem nadchodzi Niszczyciel Narodów.\r\nStratują waszą ziemię i sznurem ją podzielą.\r\nMiasta wasze zostaną zburzone i pozbawione mieszkańców.\r\nNietoperz i kruk w domach waszych zamieszkają,\r\ndrzewo straci liść, zgnije owoc i zgorzknieje ziarno.\r\nZaprawdę powiadam wam, oto nadchodzi czas miecza i topora,\r\nwiek wilczej zamieci.\r\nMiasto płonie, wąskie uliczki zieją ogniem i żarem.\r\nNarasta wrzask, odgłosy zajadłej walki, murem wstrząsają głuche uderzenia taranu.\r\nKrzyk, strach.\r\nObezwładniający, paraliżujący, duszący strach\".\r\n', '2001', 296, 'img/krewElfow.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ulubione`
--

CREATE TABLE `ulubione` (
  `id_uzytkownika` int(11) NOT NULL,
  `id_ksiazki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ulubione`
--

INSERT INTO `ulubione` (`id_uzytkownika`, `id_ksiazki`) VALUES
(2, 3),
(3, 1),
(4, 2),
(5, 3),
(6, 6),
(7, 8),
(9, 11),
(10, 15),
(2, 16),
(3, 17),
(4, 3),
(5, 6),
(6, 5),
(7, 12),
(8, 20),
(9, 4),
(10, 1),
(1, 7),
(1, 2),
(2, 4),
(3, 5),
(4, 6),
(5, 7),
(6, 8),
(7, 9),
(8, 10),
(9, 11),
(10, 12),
(1, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `login` varchar(17) NOT NULL,
  `haslo` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `typ` varchar(5) NOT NULL,
  `ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `haslo`, `email`, `typ`, `ban`) VALUES
(1, 'janusz', 'haslo', 'abcde@wp.pl', 'user', 0),
(2, 'zzz', 'abc', 'abcde@wp.pl', 'user', 0),
(3, 'jan', 'bimber', 'abcde@wp.pl', 'user', 0),
(4, 'andrzej', 'duda', 'abcde@wp.pl', 'user', 0),
(5, 'zsk', 'xaxaxa', 'abcde@wp.pl', 'user', 0),
(6, 'abcd', 'dcba', 'abcde@wp.pl', 'user', 0),
(7, 'filipek', '1234', 'abcde@wp.pl', 'user', 0),
(8, 'playerLol', 'lolowiec', 'abcde@wp.pl', 'user', 0),
(9, 'mateuszek', 'tokar', 'asdas@wp.pl', 'user', 0),
(10, 'śmieszek', 'śmieszny', 'abcde@wp.pl', 'user', 1),
(11, 'admin', 'admin', 'administrator@wp.pl', 'admin', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id_ksiazki`);

--
-- Indexes for table `ulubione`
--
ALTER TABLE `ulubione`
  ADD KEY `ulubione_fk0` (`id_uzytkownika`),
  ADD KEY `ulubione_fk1` (`id_ksiazki`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id_ksiazki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ulubione`
--
ALTER TABLE `ulubione`
  ADD CONSTRAINT `ulubione_fk0` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`),
  ADD CONSTRAINT `ulubione_fk1` FOREIGN KEY (`id_ksiazki`) REFERENCES `ksiazki` (`id_ksiazki`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
