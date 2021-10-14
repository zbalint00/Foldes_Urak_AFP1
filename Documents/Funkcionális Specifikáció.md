# Funkcionális Specifikáció
## 1.) Áttekintés
## 2.) Jelenlegi helyzet
## 3.) Követelménylista
 1. Reszponzív dizájn
 2. Új autók megjelenítése főoldalon
 3. Letisztult felhasználói felület
 4. Azonnal frissülő autó-katalógus
 5. Felhasználó-biztonság
 
## 4.) Követelmények
### Funkcionális követelmények:
- **Kölcsönzők adminisztrációja:** Kölcsönzők kezelése (törlése) az igényelt üzleti folyamatokban leírtak szerint.  
- **Autók adminisztrációja:** Autók regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.
- **Kölcsönzés adminisztrációja:** Kölcsönzések folyamatának kezelése az igényelt üzleti folyamatokban leírtak szerint.
- **Felhasználói fiókok kezelése:** Bejelentkezés, felhasználói adatok módosítása, intézők, kölcsönzők rögzítése az adatbázisban, listák és kimutatások készítése az igényelt üzleti folyamatokban leírtak szerint.  
- **Platformfüggetlen, robusztus működés:** Szabványos, az iparágban régóta bevált, operációs rendszertől független technológiák használata: Php, Apache HTTP szerver, MySQL.   
- **Költséghatékony üzemeltetés:** A szabványos és elterjedt technológiák használata biztosítja. 
- **Bővíthetőség:** A kezelt adatok mennyiségének, valamint a felhasználók számának bővíthetősége és utólag újabb funkciók hozzáadásának lehetőségének biztosítása.
### Nem Funkcionális követelmények:
- **Látványos** és egyedülálló dizájn
- **Egyszerű**, gyorsan értelmezhető, letisztult, egyszerűen használható felhasználói felület
- **Online elérhető nyilvános katalógus:** Bárki számára elérhető online felület készítése, amin keresztül elérhető, böngészhető és kereshető a kölcsönözhető autók katalógusának tartalma.
- Részfeladatok megfelelő megjelenítése
## 5.) Jelenlegi üzleti folyamatok modellje
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
-	Gépjármű keresése: kölcsönző a weboldalon kölcsönzés kezdete, kölcsönzés vége dátumokat megadja => kiválasztja a kölcsönözni kívánt autó kategóriáját.
-	Kölcsönzés – autó kivétele: eladó kiveszi az autó adatait tartalmazó lapot => a lap hátulján lévő táblázatban rögzíti a kölcsönző személy személyes iratait => a lapot a kölcsönzőhöz tartozó kartotékba helyezi kölcsönzésének lejárati határideje szerint rendezve => az eladó rögzíti a kölcsönzött autó azonosítóját és a kölcsönzési határidőt és a kölcsönző a kaucitót leteszi.
-	Kölcsönzés - autó visszavétele: kölcsönző átadja az autót és a kölcsönzésről szóló iratot az eladónak => eladó az iraton regisztrálja a visszavétel tényét és a kauciót visszaadja a kölcsönzőnek => a kölcsönző kartotékjából az autóhoz tartozó lapot kiveszi és rögzíti rajta a visszavételt = > lapot visszahelyezi a többi kölcsönözhető autók közé.

## 6.) Igényelt üzleti folyamatok
1. A felhasználó a főoldalon fog látni autókkal kapcsolatos híreket.
2. A navigációs sáv gombjaival átírányíthatja magát a felhasználó a kölcsönzés vagy a regisztració/bejelentkezés szekcióra.
3. Az átirányítást követően már láthatja is a kívánt oldalt.
4. Ha a felhasználó felregisztrált be kell jelentkeznie, hogy kölcsönözni tudjon.
5. Egy autó kiválasztása során azt könnyedén kikölcsönözheti.

## 7.) Használati esetek
![Üzleti Folyamat](Pics/uzleti_folyamat.jpg)
### Felhasználó
- Beregisztrálhat, bejelentkezhet
- Kölcsönözhető autók között böngészhet
- Személyes adatok módosítása
- Keresés funkció használata
## 8.) Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
- A kliensnek belépve kell legyen (regisztráció szükséges)
- Regisztráció után a beérkező emailt jóvá kell hagynia
- A belépett felhasználó átnavigálja magát a "katalógus" szekcióra, ahol elkezd böngészni
- Egy bizonyos autó kiválasztása után megadja az adatait
- Ha mindez megtörtént az utolsó lépés a kölcsönzés véglegesítése

## 9.) Képernyőtervek
## 10.) Forgatókönyv
Első sorban, ha egy új felhasználó látogat el a weboldalra regisztrálnia kell annak érdekében, hogy bármit is tudjon csinálni a felületen. A sikeres regisztráció után az előjövő bejelntkezési ablakban be bírnak jelentkezni amiután egyből a főoldalon lesznek. A főoldalon található információk közé tartoznak a következők
- legújabb biztosítások
- esetleges időszakos kedvezmények
- a cég és a cégről fontosabb információk
### Menüpontok:
 - A **Járművek** menüpontra kattintva a cég járműveit találhatjuk meg, ahol a felhasználó különböző autók közül tud válogatni, majd kölcsönözni azt.
 - Az **Admin felület** menüpontba nem léphet be akárki csakis az admin felhasználók. Itt tudnak az adminok új járműveket hozzáadni a kollekcióhoz vagy törölni a kollekcióból.
 - A **Profil menüpontra** kattintva a felhasználó a saját profilját tudja megnézni és szerkezteni az adatjait.
 - Van egy **Kijelentkezési** menüpont ahol a felhasználó ki bír jelentkezni a profiljából 
## 11.) Funkció-követelmény megfeleltetés
### Funkciókövetelmények megfeleltetés:
- **Nyomtatás:** Nyomtatásra kész formátumban, PDF kiterjesztésben, a kölcsönző e-mailben kap tájékoztatást arról, hogy mikor, meddig és hogy melyik autót kölcsönözte ki az oldalról, amit a jármű átvételéhez hozznia kell magával.
- **Kölcsönzők adminisztrációja:** Kölcsönzők regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.
- **Autók adminisztrációja:** Autók regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.
- **Felhasználói fiókok kezelése:** Bejelentkezés, felhasználói adatok módosítása, intézők, kölcsönzők rögzítése az adatbázisban, listák és kimutatások készítése az igényelt üzleti folyamatokban leírtak szerint.
- **Platformfüggetlen működés:** Szabványos, az iparágban régóta bevált, operációs rendszertől független technológiák használata: Php, Apache HTTP szerver, MySQL.
- **Bővíthetőség:** A kezelt adatok mennyiségének, valamint a felhasználók számának bővíthetősége és utólag újabb funkciók hozzáadásának lehetőségének biztosítása.

### Nem Funkció-követelmény megfeleltetés:
- Egyszerű, pontosan értelmezhető, letisztult felhasználóbarát felület
- Egyszerűen használható kezelőfelület
- Felhasználók adatainak a biztonága
## 12.) Fogalomszótár
### Fogalmak:
- **Akkumulátorról hajtott jármű(BEV)** - Olyan elektromos hajtású gépjármű amelynek egyedüli energiaforrásául – szemben a hibridmodellekkel és a „Range Extender” technológiával működő elektromos járművekkel – kizárólag akkumulátora szolgál (Battery Electric Vehicle; BEV). Az Audi e-tron például jellegzetes BEV-jármű.
 
 - **ETA** - Jelentése: VÁRHATÓ ÉRKEZÉSI IDŐ (ETA) az az idő, amikor egy hajó, jármű, repülőgép, rakomány, sürgősségi szolgálat vagy személy várhatóan egy bizonyos helyre érkezik.
 
 - **Felhő** - Internet kapcsolattal igénybe vehető adattároló szolgáltatás. A szolgáltatás nem egy dedikált hardvereszközön üzemel hanem a szolgáltató eszközein az üzemeltetés részleteit a felhasználótól elrejtve
 
 - **Hibrid jármű** - A Hibrid jármű (rövidítése HEV vagyis Hybrid Electric Vehicle) olyan hibridüzemű elektromos jármű jelölése amelynek hajtásáról belsőégésű és elektromos motor kombinációja gondoskodik.
