@extends('layouts.app')

@section('content')
    <section class="landingpage impressum">
        <h2 class="sub-headline">IMPRESSUM Good Hood Music</h2>
        <span class="headline">Good Hood Music – Leipzig</span>
        <br/>
        <br/>
        <span class="headline">Verantwortlicher für Inhalt:</span>
        <br/>
        <br/>
        <span>Raik Pischel</span>
        <br/>
        <span>Arndtstraße 29</span>
        <br/>
        <span>D-04275Leipzig</span>
        <br/>
        <br/>
        <span>Web: <a href="http://www.goodhoodmusic.com">http://www.goodhoodmusic.com</a></span>
        <br/>
        <br/>
        <br/>

        <span class="headline">Haftungshinweis:</span>
        <br/>
        <br/>
        <span>
            Hiermit distanziere ich, der Betreiber/Webmaster, mich ausdrücklich von allen Inhalten der von mir verlinkten Seiten auf dieser Homepage und mache mir diese Inhalte nicht zu eigen. Diese Erklärung gilt für alle Links, die auf Seiten dieses Webspaces. Desweiteren weise ich drauf hin, dass es für mich unmöglich ist zu beeinflussen, wer einen Link zu Seiten oder Inhalten dieses Webspaces setzt, und dass ein solcher Link keinesfalls eine Verbindung zu dieser Seite indizieren kann.
        </span>
        <br/>
        <br/>

        <span class="headline">Inhalt des Onlineangebotes</span>
        <br/>
        <br/>
        <span>
            Der Autor übernimmt keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen den Autor, die sich auf Schäden materieller oder ideeller Art beziehen, welche durch die Nutzung oder Nichtnutzung der dargebotenen Informationen, bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.
        </span>
        <br/>
        <br/>

        <span class="headline">Verweise und Links</span>
        <br/>
        <br/>
        <span>
            Für Inhalte und insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter dieser Seiten, nicht derjenige, der über Links auf die jeweilige Veröffentlichung lediglich verweist. Diese Einschränkung gilt gleichermaßen auch für Fremdeinträge in vom Autor eingerichteten Gästebüchern, Diskussionsforen, Link- und Mailinglisten.
        </span>
        <br/>
        <br/>

        <span class="headline">Warenzeichen</span>
        <br/>
        <br/>
        <span>
            Alle Warenzeichen, Gebrauchsnamen, Handelsbezeichnungen, Warenbezeichnungen usw. sind Eigentum der entsprechenden Firmen/Personen und berechtigen auch ohne Kennzeichnung nicht zu der Annahme, dass solche Namen im Sinne der Warenzeichen- und Markenschutzrecht-Gesetzgebung als frei zu betrachten wären und daher von jedermann benutzt werden dürften.
        </span>
        <br/>
        <br/>

        <span class="headline">Rechtswirksamkeit</span>
        <br/>
        <br/>
        <span>
            Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollständig entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und ihrer Gültigkeit davon unberührt.
        </span>
        <br/>
        <br/>
        <br/>
        <br/>

        <span class="headline">Gestaltung & technische Umsetzung:</span>
        <br/>
        <br/>
        <span>Kevin Schwab</span><br/>
        <span>Email:
            <a href="mailto:{{config('goodHoodMusicConfig.technicalImplementationEmail')}}">
                {{config('goodHoodMusicConfig.technicalImplementationEmail')}}</a>
        </span><br/>
        <br/>
        <br/>

    </section>
@endsection
