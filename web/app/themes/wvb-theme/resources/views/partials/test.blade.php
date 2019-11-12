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
            [text previous_club id:previous_club class:form-control placeholder "Vul hier je eventuele vorige vereniging in"]
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
        [checkbox* diploma id:diploma use_label_element "Voetbaltrainer" "Jeugdscheidsrechter" "Scheidsrechter" "Horeca" "EHBO / BHV / AED" "Geen"]
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <p>Geef aan op welk gebied je een vrijwillige bijdrage wil leveren. Meerdere opties mogelijk:</p>
    </div>
    <div class="col-12 col-sm-6">
        [checkbox* voluntary_contribution id:voluntary_contribution use_label_element "Trainer jeugd / senioren / keepers" "Teamleider jeugd / senioren" "Scheidsrechter jeugd / senioren" "Communicatie werkzaamheden" "Website webmaster" "Redactie" "Bestuurslid" "Bardienst" "Organisatie activiteiten" "Begeleiding activiteiten" "EHBO / BHV / AED" "Schoonmaak" "Kluswerkzaamheden" "Sponsoractiviteiten" "Secretariele / administratieve werkzaamheden"]
    </div>
</div>
<div class="row">
    <div class="col-12">
        [submit id:submit_new_member class:btn class:btn-lg class:btn-primary class:mt-5 "Aanmelden"]
    </div>
</div>
[response]






<table cellspacing="0" cellpadding="0" border="0" align="center" width="600">
    <tr>
        <td bgcolor="#ffffff" style="padding: 30px; text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
            Beste [initials]. [firstname] [middlename] [lastname],<br><br>Hartelijk dank voor je aanmelding. We nemen je aanmelding z.s.m. in behandeling en zullen contact met je opnemen.<br><br>
            Volgens onze gegevens hebben wij onderstaande ontvangen:<br><br>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" height="20" style="padding: 5px 15px; color:#ffffff;"><strong>Gegevens nieuwe voetballer/voetbalster</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Aanhef</th>
                    <td style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[gender]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Geboortedatum</th>
                    <td style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[date_of_birth]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Naam</th>
                    <td style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[initials]. [firstname] [middlename] [lastname]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Vorige vereniging</th>
                    <td style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[previous_club]</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Legitimatie</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Soort indentiteit</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">
                        [identification]
                    </td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Indentiteit kaartnummer</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[cardnumber]</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Overige belangrijke gegevens</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Adres</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[address]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Postcode en plaats</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[zip] [place]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">E-mailadres</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[email]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Telefoonnummer</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[phone]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Mobiel</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[mobile]</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Bankgegevens</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">IBAN nummer</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[iban]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Op naam van</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[iban_name]</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Extra gegevens bij gescheiden ouders</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">E-mailadres</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[email_second]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Telefoonnummer</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[phone_second]</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Lidmaatschap</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Soort lidmaatschap</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">
                        [membership]
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Inzet vrijwilligers</strong></td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Beroep</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[profession]</td>
                </tr>
                <tr valign="top">
                    <th width="200" style="border-bottom:1px solid #cccccc; padding: 3px 15px;">Beroep partner</th>
                    <td  style="border-left:1px solid #cccccc; border-bottom:1px solid #cccccc; padding: 3px 15px;">[profession_partner]</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Relevante diploma&#39;s</strong></td>
                </tr>
                <tr valign="top">
                    <td colspan="2" style="padding: 3px 0;">
                        [diploma]
                    </td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top" bgcolor="#669d24" style="color:#ffffff;">
                    <td colspan="2" style="padding: 5px 15px; color:#ffffff;"><strong>Vrijwillige bijdrage</strong></td>
                </tr>
                <tr valign="top">
                    <td colspan="2" style="border-bottom:1px solid #cccccc; padding: 3px 0;">
                        [voluntary_contribution]
                    </td>
                </tr>
            </table>
            <br><br>
            Met vriendelijke groet,<br><br>v.v. Warnsveldse Boys
        </td>
    </tr>
</table>