<div class="row">
    <div class="col-12">
        <h3 class="text-primary mb-3">Gegevens nieuwe voetballer/voetbalster</h3>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4 col-md-4 col-lg-2">
        <div class="form-group">
            <label for="gender">Geslacht *</label>
            [select* gender id:gender class:form-control include_blank "Man" "Vrouw" "Jongen" "Meisje"]
        </div>
    </div>
    <div class="col-12 col-sm-8 col-md-8 col-lg-4">
        <div class="form-group">
            <label for="date_of_birth">Geboortedatum *</label>
            [text* date_of_birth id:date_of_birth class:form-control]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4 col-md-4 col-lg-2">
        <div class="form-group">
            <label for="initials">Voorletters *</label>
            [text* initials id:initials class:form-control]
        </div>
    </div>
    <div class="col-12 col-sm-8 col-md-8 col-lg-4">
        <div class="form-group">
            <label for="firstname">Voornaam *</label>
            [text* firstname id:firstname class:form-control placeholder "Vul hier je voornaam in"]
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-2">
        <div class="form-group">
            <label for="middlename">Tussenv.</label>
            [text middlename id:middlename class:form-control]
        </div>
    </div>
    <div class="col-12 col-sm-8 col-md-8 col-lg-4">
        <div class="form-group">
            <label for="lastname">Achternaam *</label>
            [text* lastname id:lastname class:form-control placeholder "Vul hier je achternaam in"]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-lg-6">
        <div class="form-group">
            <label for="previous_club">Vorige vereniging</label>
            [text* previous_club id:previous_club class:form-control placeholder "Vul hier je eventuele vorige vereniging in"]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h4 class="text-primary mt-4 mt-md-5">Legitimatie</h4>
        <p class="font-size-p14">In verband met de wet op de legitimatie zijn wij verplicht voor alle leden vanaf 14 jaar de volgende gegevens te registreren:</p>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="identification">Soort legitimatie *</label>
            [select* identification id:identification class:form-control include_blank "Paspoort" "Rijbewijs" "Identiteitskaart"]
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="cardnumber">Kaartnummer *</label>
            [text* cardnumber id:cardnumber class:form-control]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <hr class="mt-4 mb-4 mt-md-5 mb-md-5">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="text-primary mb-3">Overige belangrijke gegevens</h3>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-5 col-lg-5">
        <div class="form-group">
            <label for="address">Adres *</label>
            [text* address id:address class:form-control placeholder "Vul hier je adres in"]
        </div>
    </div>
    <div class="col-12 col-md-3 col-lg-2">
        <div class="form-group">
            <label for="zip">Postcode *</label>
            [text* zip id:zip class:form-control]
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-5">
        <div class="form-group">
            <label for="place">Plaats *</label>
            [text* place id:place class:form-control placeholder "Vul hier je plaatsnaam in"]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-4">
        <div class="form-group">
            <label for="email">E-mailadres *</label>
            [email* email id:email class:form-control placeholder "Vul hier je e-mailadres in"]
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-group">
            <label for="phone">Telefoonnummer *</label>
            [text* phone id:phone class:form-control placeholder "Vul hier je telefoonnummer in"]
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-group">
            <label for="mobile">Mobiel</label>
            [text mobile id:mobile class:form-control placeholder "Optioneel"]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h4 class="mt-4 mt-md-5 text-primary">Bankgegevens</h4>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="iban">IBAN nummer *</label>
            [text* iban id:iban class:form-control placeholder "Vul hier je volledige IBAN nummer in"]
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="iban_name">Op naam van *</label>
            [text* iban_name id:iban_name class:form-control placeholder "Op welke naam staat je IBAN rekening?"]
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <p>Bij gescheiden ouders van jeugdleden graag ook de volgende gegevens van de andere ouder opgeven:</p>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="email_second">E-mailadres</label>
            [email email_second id:email_second class:form-control]
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="phone_second">Telefoonnummer</label>
            [text phone_second id:phone_second class:form-control]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <hr class="mt-4 mb-4 mt-md-5 mb-md-5">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="text-primary mb-3">Lidmaatschap</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p><a href="/de-club/contributie/" class="btn btn-sm btn-outline-primary" target="_blank">Bekijk hier de bedragen en leeftijdscategorieën <i class="fa fa-angle-right"></i></a></p>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="membership">Soort lidmaatschap *</label>
            [select* membership id:membership class:form-control include_blank "Wachtkamer" "Spelend lid t/m 12 jaar" "Spelend lid 13 t/m 17 jaar" "Spelend lid 18 jaar en ouder" "Niet spelend lid, wel lid van de KNVB" "Niet spelend lid, geen lid van de KNVB" "Donateur"]
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <hr class="mt-4 mb-4 mt-md-5 mb-md-5">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="text-primary mb-3">Inzet vrijwilligers</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p>Als vereniging zijn wij afhankelijk van de inzet van vrijwilligers. Wij verwachten daarom van alle leden (of hun ouders) een bijdrage. Wij vragen je daarom de volgende gegevens in te vullen.</p>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="profession">Beroep *</label>
            [text* profession id:profession class:form-control]
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="profession_partner">Beroep partner</label>
            [text profession_partner id:profession_partner class:form-control]
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <p>Ik ben in het bezit van de volgende relevante diploma's:</p>
    </div>
    <div class="col-12">
        [checkbox* diploma id:diploma class:form-check use_label_element "Voetbaltrainer" "Jeugdscheidsrechter" "Scheidsrechter" "Horeca" "EHBO / BHV / AED" "Geen"]
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <p>Geef aan op welk gebied je een vrijwillige bijdrage wil leveren. Meerdere opties mogelijk:</p>
    </div>
    <div class="col-12 col-sm-6">
        <div class="checkbox">
            <label for="contribution_trainer_youth">
                <input type="checkbox" name="contribution_trainer_youth" id="contribution_trainer_youth" value="1">
                Trainer jeugd / senioren / keepers
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_leader_youth_seniors">
                <input type="checkbox" name="contribution_leader_youth_seniors" id="contribution_leader_youth_seniors" value="1">
                Teamleider jeugd / senioren
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_youth_seniors_referee">
                <input type="checkbox" name="contribution_youth_seniors_referee" id="contribution_youth_seniors_referee" value="1">
                Scheidsrechter jeugd / senioren
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_communication">
                <input type="checkbox" name="contribution_communication" id="contribution_communication" value="1">
                Communicatie werkzaamheden
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_website">
                <input type="checkbox" name="contribution_website" id="contribution_website" value="1">
                Website webmaster
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_editors">
                <input type="checkbox" name="contribution_editors" id="contribution_editors" value="1">
                Redactie
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_board_member">
                <input type="checkbox" name="contribution_board_member" id="contribution_board_member" value="1">
                Bestuurslid
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_bar">
                <input type="checkbox" name="contribution_bar" id="contribution_bar" value="1">
                Bardienst
            </label>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="checkbox">
            <label for="contribution_organisation">
                <input type="checkbox" name="contribution_organisation" id="contribution_organisation" value="1">
                Organisatie activiteiten
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_activities">
                <input type="checkbox" name="contribution_activities" id="contribution_activities" value="1">
                Begeleiding activiteiten
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_ehbo_bhv_aed">
                <input type="checkbox" name="contribution_ehbo_bhv_aed" id="contribution_ehbo_bhv_aed" value="1">
                EHBO / BHV / AED
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_cleaning">
                <input type="checkbox" name="contribution_cleaning" id="contribution_cleaning" value="1">
                Schoonmaak
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_clutches">
                <input type="checkbox" name="contribution_clutches" id="contribution_clutches" value="1">
                Kluswerkzaamheden
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_sponsor_activities">
                <input type="checkbox" name="contribution_sponsor_activities" id="contribution_sponsor_activities" value="1">
                Sponsoractiviteiten
            </label>
        </div>
        <div class="checkbox">
            <label for="contribution_administration">
                <input type="checkbox" name="contribution_administration" id="contribution_administration" value="1">
                Secretariele / administratieve werkzaamheden
            </label>
        </div>
    </div>
</div>