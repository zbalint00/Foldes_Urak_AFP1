# Követelmény Specifikáció

## 1.) Jelenlegi helyzet leírása

## 2.) Vágyálom rendszer leírása

## 3.) A rendszerre vonatkozó pályázat, törvények, rendeletek, szabványok és ajánlások felsorolása
#### A személyes adatok kezelésére vonatkozó elvek

(1)   A személyes adatok:

a)

kezelését jogszerűen és tisztességesen, valamint az érintett számára átlátható módon kell végezni („jogszerűség, tisztességes eljárás és átláthatóság”);

b)

gyűjtése csak meghatározott, egyértelmű és jogszerű célból történjen, és azokat ne kezeljék ezekkel a célokkal össze nem egyeztethető módon; a 89. cikk (1) bekezdésének megfelelően nem minősül az eredeti céllal össze nem egyeztethetőnek a közérdekű archiválás céljából, tudományos és történelmi kutatási célból vagy statisztikai célból történő további adatkezelés („célhoz kötöttség”);

c)

az adatkezelés céljai szempontjából megfelelőek és relevánsak kell, hogy legyenek, és a szükségesre kell korlátozódniuk („adattakarékosság”);

d)

pontosnak és szükség esetén naprakésznek kell lenniük; minden észszerű intézkedést meg kell tenni annak érdekében, hogy az adatkezelés céljai szempontjából pontatlan személyes adatokat haladéktalanul töröljék vagy helyesbítsék („pontosság”);

e)

tárolásának olyan formában kell történnie, amely az érintettek azonosítását csak a személyes adatok kezelése céljainak eléréséhez szükséges ideig teszi lehetővé; a személyes adatok ennél hosszabb ideig történő tárolására csak akkor kerülhet sor, amennyiben a személyes adatok kezelésére a 89. cikk (1) bekezdésének megfelelően közérdekű archiválás céljából, tudományos és történelmi kutatási célból vagy statisztikai célból kerül majd sor, az e rendeletben az érintettek jogainak és szabadságainak védelme érdekében előírt megfelelő technikai és szervezési intézkedések végrehajtására is figyelemmel („korlátozott tárolhatóság”);

f)

kezelését oly módon kell végezni, hogy megfelelő technikai vagy szervezési intézkedések alkalmazásával biztosítva legyen a személyes adatok megfelelő biztonsága, az adatok jogosulatlan vagy jogellenes kezelésével, véletlen elvesztésével, megsemmisítésével vagy károsodásával szembeni védelmet is ideértve („integritás és bizalmas jelleg”).

(2)   Az adatkezelő felelős az (1) bekezdésnek való megfelelésért, továbbá képesnek kell lennie e megfelelés igazolására („elszámoltathatóság”).

#### Az adatkezelés biztonsága

(1)   Az adatkezelő és az adatfeldolgozó a tudomány és technológia állása és a megvalósítás költségei, továbbá az adatkezelés jellege, hatóköre, körülményei és céljai, valamint a természetes személyek jogaira és szabadságaira jelentett, változó valószínűségű és súlyosságú kockázat figyelembevételével megfelelő technikai és szervezési intézkedéseket hajt végre annak érdekében, hogy a kockázat mértékének megfelelő szintű adatbiztonságot garantálja, ideértve, többek között, adott esetben:

a)

a személyes adatok álnevesítését és titkosítását;

b)

a személyes adatok kezelésére használt rendszerek és szolgáltatások folyamatos bizalmas jellegének biztosítását, integritását, rendelkezésre állását és ellenálló képességét;

c)

fizikai vagy műszaki incidens esetén az arra való képességet, hogy a személyes adatokhoz való hozzáférést és az adatok rendelkezésre állását kellő időben vissza lehet állítani;

d)

az adatkezelés biztonságának garantálására hozott technikai és szervezési intézkedések hatékonyságának rendszeres tesztelésére, felmérésére és értékelésére szolgáló eljárást.

(2)   A biztonság megfelelő szintjének meghatározásakor kifejezetten figyelembe kell venni az adatkezelésből eredő olyan kockázatokat, amelyek különösen a továbbított, tárolt vagy más módon kezelt személyes adatok véletlen vagy jogellenes megsemmisítéséből, elvesztéséből, megváltoztatásából, jogosulatlan nyilvánosságra hozatalából vagy az azokhoz való jogosulatlan hozzáférésből erednek.

(3)   Az adatkezelő, illetve az adatfeldolgozó 40. cikk szerinti jóváhagyott magatartási kódexekhez vagy a 42. cikk szerinti jóváhagyott tanúsítási mechanizmushoz való csatlakozását felhasználhatja annak bizonyítása részeként, hogy az e cikk (1) bekezdésében meghatározott követelményeket teljesíti.

(4)   Az adatkezelő és az adatfeldolgozó intézkedéseket hoz annak biztosítására, hogy az adatkezelő vagy az adatfeldolgozó irányítása alatt eljáró, a személyes adatokhoz hozzáféréssel rendelkező természetes személyek kizárólag az adatkezelő utasításának megfelelően kezelhessék az említett adatokat, kivéve, ha az ettől való eltérésre uniós vagy tagállami jog kötelezi őket.

## 4.) Jelenlegi üzleti folyamatok modellje
Üzleti szereplők: 	
-	kölcsönző

Üzleti munkatárs: 	
-	eladó

Üzleti entitások: 		
-	személyes iratok
-	autó
-	kaució
-	kartoték

Üzleti folyamatok: 	
-	Új gépjármű felvétele a rendszerbe: eladó aaz autó adatait felviszi a rendszerbe (kategória, márka, típus, felszereltség, évjárat, szín, meghajtás, férőhely, klíma, üzemanyag, váltó, abs, szervó) => a felvitt adatokat kinyomtatja => a kinyomtatott iratot egy fiókba helyezi kategória és név szerint szortírózva.
-	Új kölcsönző regisztrálása: eladó az új kölcsönző adatait feltölti a rendszerbe => az adatokat egy regisztrációs lapra kinomtatja és kartoték rendezőbe helyezi név szerinti ábécé sorrendben.
-	Gépjármű keresése: kölcsönző szépirodalmi katalógus fiókhoz megy => szerző és cím szerint cédulát megkeresi => a megtalált cédulán szereplő helyről a könyvet leveszi => elviszi a könyvet a könyvtáros pulthoz.
-	Kölcsönzés – könyv kivétele: könyvtáros a könyvből kiveszi a cédulát => cédula hátulján lévő táblázatban rögzíti a kölcsönző személy olvasójegyének azonosítóját => cetlit a kölcsönzőhöz tartozó kartotékba helyezi kölcsönzésének lejárati határideje szerint rendezve => a könyvtáros rögzíti a kölcsönzött könyvek számát és a kölcsönzési határidőt a kölcsönző személy olvasójegyében.
-	Kölcsönzés - könyv visszavétele: kölcsönző átadja a könyvet és az olvasójegyet a könyvtárosnak => könyvtáros az olvasójegyen regisztrálja a visszavétel tényét és a jegyet visszaadja a kölcsönzőnek => a kölcsönző kartotékjából a könyvhöz tartozó cetlit (kiveszi és rögzíti rajta a visszavételt) = > cetlit visszahelyezi a könyv hátuljába => könyvet elhelyezi a "polcra visszahelyezendő" feliratú gyűjtőkosárba.

## 5.) Igényelt üzleti folyamatok modellje:
Online folyamatok intézők számára:

- Kölcsönző regisztrálása: intéző jogosultsággal belépés => adminisztráció menü => kölcsönző regisztrálása menüpont => adatok megadása => véglegesítés
- Kölcsönző törlése: intéző jogosultsággal belépés => adminisztráció menü => kölcsönző törlése menüpont => adatok megadása => véglegesítés
- Új autó regisztrálása: intéző jogosultsággal belépés => adminisztráció menü => új autó regisztrálása menüpont => adatok megadása => véglegesítés
- Autó törlése: intéző jogosultsággal belépés => adminisztráció menü => autó törlése menüpont => adatok megadása => véglegesítés => selejtezési jegyzőkönyv nyomtatása
- Lekérdezés (listák, kimutatások): intéző jogosultsággal belépés => lekérdezés menü => kívánt lekérdezés kiválasztása => adatok megadása => lekérdezés megjelenítése

Online folyamatok adminisztrátorok számára: Az adminisztrátorok minden az intézőnél felsorolt funkciót elérnek, továbbá a következőket:

- Intéző regisztrálása: admin jogosultsággal belépés => adminisztráció menü => intéző regisztrálása menüpont => adatok megadása => véglegesítés
- Intéző törlése: admin jogosultsággal belépés => adminisztráció menü => intéző törlése menüpont => adatok megadása => véglegesítés

Online folyamatok felhasználók számára:

- Keresés: felhasználó a keresés mezőbe beírja a keresett kulcsszavakat => keresés gomb => kulcsszavak szerinti találat(ok) megjelenítése
- Részletes keresés: felhasználó a részletes keresés linkre kattint => keresési adatok megadása => megadott adatok szerinti autó(k) megjelenítése
- Bejelentkezés: bejelentkezés menü => felhasználó név és jelszó megadása => bejelentkezési oldal megjelenése
- Személyes adatok módosítása: regisztrált kölcsönző jogosultsággal belépés => profil menü => adatok módosítása menüpont => adat módosítása => megerősítés
- Kölcsönzött autók listázása: regisztrált kölcsönző jogosultsággal belépés => profil menü => kölcsönzött autó(k) menü => lista megjelenítése
- Lekérdezés (listák, kimutatások): regisztrált kölcsönző jogosultsággal belépés => lekérdezés menü => kívánt lekérdezés kiválasztása => adatok megadása => lekérdezés megjelenítése
## 6.) Követelménylista
ID|Verzió|Név|Kifejtés
--|------|---|--------
K01|V1.0|Kölcsönzők adminisztrációja|Kölcsönzők regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.  
K02|V1.0|Autók adminisztrációja|Autók regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.
K03|V1.0|Kölcsönzés adminisztrációja|Kölcsönzések folyamatának kezelése az igényelt üzleti folyamatokban leírtak szerint.
K04|V1.0|Felhasználói fiókok kezelése|Bejelentkezés, felhasználói adatok módosítása, intézők, kölcsönzők rögzítése az adatbázisban, listák és kimutatások készítése az igényelt üzleti folyamatokban leírtak szerint.  
K05|V1.0|Egyszerűen használható kezelőfelület|A legelterjedtebb internet böngészőkből használható felhasználói felület megvalósítása, oly módon, hogy az intézők számára az új rendszerre való átállás a lehető legegyszerűbb legyen.
K06|V1.0|Online elérhető nyilvános katalógus|Bárki számára elérhető online felület készítése, amin keresztül elérhető, böngészhető és kereshető a kölcsönözhető autók katalógusának tartalma.
K07|V1.0|Platformfüggetlen, robusztus működés|Szabványos, az iparágban régóta bevált, operációs rendszertől független technológiák használata: Php, Apache HTTP szerver, MySQL.   
K08|V1.0|Költséghatékony üzemeltetés|A szabványos és elterjedt technológiák használata biztosítja. 
K09|V1.0|Bővíthetőség|A kezelt adatok mennyiségének, valamint a felhasználók számának bővíthetősége és utólag újabb funkciók hozzáadásának lehetőségének biztosítása.

## 7.) Irányított és szabad szöveges riportok
 - A cégünk weboldala biztosítja az ügyfeleink számára az autó jármű kölcsönzést, amit az ügyfél által megadott időszakban tudja használni a különböző típusú, márkájú gépjárművet.
 -  

## 8.) Fogalomszótár
 - Akkumulátorról hajtott jármű(BEV) - Olyan elektromos hajtású gépjármű amelynek egyedüli energiaforrásául – szemben a hibridmodellekkel és a „Range Extender” technológiával működő elektromos járművekkel – kizárólag akkumulátora szolgál (Battery Electric Vehicle; BEV). Az Audi e-tron például jellegzetes BEV-jármű.
 
 - ETA - Jelentése: VÁRHATÓ ÉRKEZÉSI IDŐ (ETA) az az idő, amikor egy hajó, jármű, repülőgép, rakomány, sürgősségi szolgálat vagy személy várhatóan egy bizonyos helyre érkezik.
 
 - Felhő - Internet kapcsolattal igénybe vehető adattároló szolgáltatás. A szolgáltatás nem egy dedikált hardvereszközön üzemel hanem a szolgáltató eszközein az üzemeltetés részleteit a felhasználótól elrejtve
 
 - Hibrid jármű - A Hibrid jármű (rövidítése HEV vagyis Hybrid Electric Vehicle) olyan hibridüzemű elektromos jármű jelölése amelynek hajtásáról belsőégésű és elektromos motor kombinációja gondoskodik.
