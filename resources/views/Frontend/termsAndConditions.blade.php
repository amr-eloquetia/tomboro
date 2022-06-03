@extends('Frontend.layouts.master')
@section('content')
<div class="inner-hero-section">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape.png') }}" alt="image">
    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="#0">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
    </div> --}}
</div>
<section class="pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-area">
                    {{!! trans('translation.Terms and conditions Page') !!}}

                    {{-- <div class="row" style="display: flex; flex-direction:column">
                        <h2>Terms And Conditions</h2>
                        <p>Secțiunile următoare explică regulile care guvernează toate tranzacțiile efectuate prin
                            intermediul site-urilor web de acest tip. Vă rugăm să citiți cu atenție termenii și
                            condițiile și să vă asigurați că le înțelegeți pe deplin, înainte de a vă da acordul în
                            sensul de a le respecta. De asemenea, ne rezervervăm dreptul de a modifica Termenii și
                            Condițiile fără notificare. </p><br>
                        <p>Pentru a juca pe site-ul nostru, trebuie să vă înregistrați și să depuneți o sumă - depozit.
                            Odată înregistrat și ca urmare a unei verificări, puteți începe să jucați pe site. </p><br>
                        <p>Acești Termeni și Condiții constituie consimțământul dumneavoastră și se aplică cu excluderea
                            oricăror altor termeni pe care doriți să îi impuneți sau adăugați, ori care se regăsesc în
                            comerț, cutume, practici sau cazuri de tranzacționare.</p><br>
                        <p>Prin înregistrare și/sau utilizarea serviciilor de pe site, vă dați acordul și sunteți
                            obligat să:</p><br>
                        <ul>
                            <li>• respectați prezenții Termenii și Condiții;</li>
                            <li>• regulile jocului individual care pot fi găsite în link-ul cu regulile jocului din
                                cadrul fiecăruia;
                            </li>
                            <li>• oricare alți Termeni și Condiții, reguli și politici de pe site-ul nostru, după cum se
                                referă la oricare serviciu, promoții, bonusuri, oferte speciale ori oricare alt aspect.
                            </li>
                        </ul>
                        <p>și se consideră că sunt acceptate și înțelese în totalitate. </p><br>
                        <p>Jocurile de pe site sunt operate de AMADEUS PROVIDES LTD, o companie înregistrată în Marea
                            Britanie, având numărul de înregistrare 12672423, UK.</p><br>
                        <p>Acești Termeni și Condiții reprezintă întregul acord între dumneavoastră și noi, dar și
                            consimțământul privind faptul că sunteți ținut să îi respectați întru totul</p><br>
                        <p>Orice încălcare din partea noastră a dispozițiilor prevăzute în acești termeni și condiții nu
                            va reprezenta o eventuală excludere a dispozițiilor încălcate și nici nu va afecta în vreun
                            fel drepturile vreunei părți cu privire la acestea.</p><br>
                        <p>Acești Termeni și Condiții sunt priviți în individualitatea lor, drept urmare dacă orice
                            termen sau condiție este declarată invalidă, ilegală sau inaplicabilă în orice măsură, acel
                            termen sau acea condiție va fi eliminată, iar celelalte dispoziții vor continua să fie
                            valabile în limitele legii. </p><br>
                        <p>Acordul este făcut exclusiv între noi și dvs. Nu veți avea voie să cesionați sau să
                            transferați acest acord în niciun fel. Avem dreptul să cesionăm, să transferăm, să taxăm sau
                            să negociem în alt mod drepturile noastre, după cum considerăm de cuviință.</p><br>
                        <h3>Termeni și condiții – generalități</h3>
                        <h4>1. Definiții</h4>
                        <h5>1.1. Cont</h5>
                        <p>Un cont se referă la adresa înregistrată și care este operată de către noi.
                            Este permis un singur cont de persoană.
                        </p><br>
                        <h5>1.2. Jocul/jocurile</h5>
                        <p>Plătiți pentru a juca prin îndeplinirea cerințelor din reglementările jocurilor de noroc din
                            Marea Britanie. </p><br>
                        <h5>1.3. Jucător</h5>
                        <p>Persoana care plătește pentru a beneficia de serviciile site-ului (jocuri).</p><br>
                        <h5>1.4. Premii</h5>
                        <p>Bani sau bunuri câștigate de Jucător. Mai multe detalii se găsesc în cazul regulilor fiecărui
                            joc. </p><br>
                        <h5>1.5. Câștigător</h5>
                        <p>Persoana care câștigă un Premiu.</p><br>
                        <h4>2. Deschiderea contului și menținerea acestuia </h4>
                        <h5>2.1. Identitate și verificarea vârstei</h5>
                        <p>2.1.1. Trebuie să aveți cel puțin 18 ani pentru a vă putea înregistra pentru oricare dintre
                            Jocurile noastre. Ne rezervăm dreptul de a cere să faceți dovada vârstei și de a vă verifica
                            identitatea. Ne rezervăm dreptul de a efectua verificări împotriva oricăror detalii pe care
                            le furnizați prin orice canale sau metode disponibile. În situațiile în care bănuim că ați
                            putea avea sub 18 ani sau că nu am putut să vă verificăm identitatea sau vârsta, contul
                            dumneavoastră va fi suspendat.</p><br>
                        <p>2.1.2. Ne puteți trimite documentele de verificare prin e-mail sau le puteți încărca pe site.
                            Documente acceptate pentru verificarea identității:
                            • Pașaport valid;
                            • Permis de conducere valabil;
                            • Carte de identitate națională.
                            Documente acceptate pentru verificarea adresei:
                            • Antetul unui extras de cont bancar/carte de credit*
                            • Antetul unei facturi de utilitate (gaz, electricitate, apă, telefon, taxă de consiliu)*
                            *Documentele trebuie să fie datate în ultimele trei luni.
                        </p><br>
                        <p>2.1.3 Parola de identificare personală</p><br>
                        <p>La înregistrare, vi se atribuie un nume unic de utilizator împreună cu propria dvs. alegere
                            de parolă. Este responsabilitatea dumneavoastră să vă asigurați că nu vă dezvăluiți nimănui
                            parola. Sunteți responsabil pentru orice miză plasată în cazul în care datele dvs. de
                            conectare au fost introduse corect.</p><br>
                        <p>2.1.4 Uitarea parolei</p><br>
                        <p>Dacă v-ați uitat parola, vă rugăm să mergeți la secțiunea conectare și să o resetați. </p>
                        <br>
                        <p>2.1.5 Introducerea detaliilor cardului</p><br>
                        <p>Pentru a începe jocul, vi se cere să înregistrați un card de debit în nume propriu și pentru
                            uz individual în contul dvs. Cardul de debit pe care îl utilizați pentru prima depunere va
                            deveni cardul de debit înregistrat pentru contul dvs. și va fi folosit pentru depuneri și
                            retrageri viitoare. Depunerile ulterioare vă vor cere să introduceți doar suma pe care
                            doriți să o depuneți și același card care a fost înregistrat în contul dvs. va fi folosit
                            pentru a efectua plata. Puteți schimba metoda de plată în viitor..</p><br>
                        <h4>3. Premii</h4><br>
                        <p>Toate premiile, cu excepția cazului în care se specifică altfel, vor fi premii în bani.</p>
                        <br>
                        <h4>4. Fair-play</h4><br>
                        <p>Dacă decidem să renunțăm la o regulă în interesul fair-play-ului pentru tine, aceasta nu va
                            crea niciun precedent pentru viitor.</p><br>
                        <h5>4.1. Pierderea conexiunii la sistemul de jocuri</h5><br>
                        <p>4.1.1 Dacă, din orice motiv, un jucător individual își pierde conexiunea la serverul de joc,
                            atunci
                            sistemul va include achiziția acestuia în joc în mod normal și orice premii datorate vor fi
                            plătite în contul său. Acest lucru nu va avea niciun efect asupra rezultatului jocului.</p>
                        <br>
                        <p>4.1.2. Dacă, din orice motiv, un jucător individual își pierde conexiunea la serverul de joc,
                            atunci nu veți putea continua jocul pe acel dispozitiv până când vă reconectați la internet.
                            Când vă reconectați, jocul va relua acolo unde l-ați lăsat.<br>
                            All prizes unless stated otherwise will be cash prizes.</p><br>
                        <h5>4.2 Defecțiune</h5><br>
                        <p>Vom încerca întotdeauna să ne asigurăm că site-ul web și jocurile funcționează conform
                            așteptărilor și nu prezintă erori sau defecțiuni. Cu toate acestea, nu putem garanta că
                            acest lucru nu se va întâmpla. Fiind de acord cu acești termeni, recunoașteți că rezultatul
                            care este confirmat de serverul nostru este cel corect și acceptați acest rezultat. În cazul
                            în care apare dezacord sau neînțelegere între rezultatul real al jocului și înțelegerea de
                            către dvs. a rezultatului jocului (din cauza unei defecțiuni vizuale sau a dispozitivului,
                            de exemplu), rezultatul publicat de serverul nostru de joc va fi cel corect și va avea
                            autoritate în determinarea rezultatului jocului. </p><br>
                        <h4>5. Închiderea contului</h4><br>
                        <p>Aveți dreptul să vă închideți contul în orice moment. Pentru a închide un cont, vă rugăm să
                            contactați echipa Serviciului Clienți. La primirea cererii dvs., vom răspunde într-un timp
                            rezonabil confirmând închiderea contului dvs., dar veți continua să fiți responsabil pentru
                            toată activitatea din contul dvs. până când închiderea contului dvs. va fi confirmată de
                            către noi. Restul soldului contului dvs. restant la momentul închiderii va fi returnat. </p>
                        <br>
                        <h4>6. Activitate suspectă</h4><br>
                        <p>Dacă luăm act de faptul că o tranzacție este suspectă și implică sau poate implica
                            infracțiuni financiare sau activitate similară, atunci ne rezervăm dreptul de a reține suma
                            respectivei tranzacții și orice altă tranzacție efectuată de dvs. În plus, ne rezervăm
                            dreptul de a reține orice fonduri legate de acea activitate și soldul din conturile în
                            cauză. Nu vom fi obligați să vă oferim niciun motiv pentru aceste acțiuni. Dacă activitatea
                            și tranzacțiile sunt eliminate de orice suspiciune, toate fondurile reținute vă vor fi puse
                            la dispoziție.</p><br>
                        <h4>7. Rezilierea</h4><br>
                        <p>7.1. Utilizarea oricărui cont altfel decât în conformitate cu acești Termeni și Condiții sau
                            orice alt abuz al oricărui cont este strict interzisă. Ne rezervăm dreptul de a vă refuza
                            înregistrarea, de a vă suspenda sau de a închide contul și de a vă rambursa orice sold al
                            contului. În acest caz, orice sold restant legitim vă va fi returnat.
                        </p><br>
                        <p>7.2. Ne rezervăm dreptul de a vă rambursa sau de a reține orice plată de bani din sau în
                            contul dvs. în cazul în care există manipulare a sistemului nostru financiar sau suspiciuni
                            sau dovezi cu privire la aceasta sau o încălcare sau suspiciune de încălcare a oricărei legi
                            aplicabile, regulament sau oricare dintre acești Termeni și Condiții.</p><br>
                        <h4>8. Reclamații</h4><br>
                        <p>Ne străduim să vă oferim cele mai bune servicii posibile, însă, în cazul în care considerați
                            că nu am reușit să ducem la bun sfârșit îndeplinirea obligațiilor noastre, ne puteți
                            contacta la support@tomboro.ro. </p>
                        <br>
                    </div> --}}
                </div>
            </div>
        </div>
</section>
@endsection
<style>
    h2 {
        text-align: center;
    }

    ul {
        margin-left: 12px !important;
    }
</style>
