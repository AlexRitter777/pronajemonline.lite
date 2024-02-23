<svg style="display:none;">
    <!--Иконка Help-->
    <symbol id="help" viewBox="0 0 24 24">
        <g>
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z" />
        </g>
    </symbol>
</svg>

<div class="container">
    <h1 class="title">Univerzalní vyúčtování</h1>
    <form method="POST" class="form" action="/applications/universal-calc" name="universal">

        <h2 class="subtitle">I. Pronajímatel </h2>

        <label for="landlordName" class="label_text">Jméno a přímení / Název firmy *</label><br />
        <input type="text" name="landlordName" id="landlordName" class="field-1" maxlength="75" autocomplete="on" value="<?= $data['landlordName'];?>"><br />

        <label for="landlordAddress" class="label_text">Adresa *</label><br />
        <input type="text" name="landlordAddress" id="landlordAddress" class="field-1" maxlength="75" value="<?= $data['landlordAddress'];?>"><br />

        <label for="accountNumber" class="label_text">Číslo účtu </label><br />
        <input type="text" name="accountNumber" id="accountNumber" class="field-1" maxlength="75" value="<?= $data['accountNumber'];?>"><br />

        <h2 class="subtitle">II. Nemovitost </h2>

        <label for="propertyAddress" class="label_text">Adresa nemovitosti *</label><br />
        <input type="text" name="propertyAddress" id="propertyAddress" class="field-1" maxlength="75" value="<?= $data['propertyAddress'];?>"><br />

        <div class="text-help">
            <label for="propertyType" class="label_text">Popis nemovitosti *</label><br />
            <svg class="icon_help help-right-text" data-hint="#real-hint-1">
                <use xlink: href="#help"></use>
            </svg>
        </div>
        <input type="text" name="propertyType" id="propertyType" class="field-1" maxlength="75" value="<?= $data['propertyType'];?>">

        <h2 class="subtitle">III. Nájemník </h2>

        <label for="tenantName" class="label_text">Jméno a přímení / Název firmy *</label><br />
        <input type="text" name="tenantName" id="tenantName" class="field-1" maxlength="75" value="<?= $data['tenantName'];?>"><br />

        <label for="tenantAddress" class="label_text">Adresa *</label><br />
        <input type="text" name="tenantAddress" id="tenantAddress" class="field-1" maxlength="75" value="<?= $data['tenantAddress'];?>"><br />

        <h2 class="subtitle">IV. Druh vyúčtování</h2>

        <div class="calc-type-div">
            <label class="label_text">Druh vyúčtování* </label>
            <select name="universalCalcType" class="select-list-calc-type load_php_calc_type" id="universalCalcType">
                <option value="<?= $data['universalCalcType'];?>"><?= $data['universalCalcType'];?></option>
            </select>
        </div>


        <h2 class="subtitle">IV. Dodavatel média</h2>

        <label for="universalSupplierName" class="label_text">Název firmy – dodavatele média</label><br />
        <input type="text" name="universalSupplierName" id="universalSupplierName" class="field-1" maxlength="75" value="<?= $data['universalSupplierName'];?>"><br />

        <h2 class="subtitle">V. Vyúčtování za období</h2>

        <div class="text-help">
            <h3 class="h3-subtitle">Vyúčtování spotřeby zpracováno za období:</h3>
            <svg class="icon_help help-right-text" data-hint="#real-hint-2">
                <use xlink: href="#help"></use>
            </svg>
        </div>
        <div class="date">
            <label for="rentStartDate" class="label_text">Počáteční datum vyúčtování*</label><br />
            <input type="date" name="rentStartDate" class="field-start-electro" id="rentStartDate" class="field" value="<?= $data['rentStartDate'];?>"><br />
        </div>
        <div class="date">
            <label for="rentFinishDate" class="label_text">Koneční datum vyúčtování*</label><br />
            <input type="date" name="rentFinishDate" class="field-finish-electro" id="rentFinishDate" class="field" value="<?= $data['rentFinishDate'];?>"><br />
        </div>

        <h2 class="subtitle">VI. Odečty meřidel </h2>

        <div class="text-help">
            <label class="label_text" id="label_text">Zadejte počáteční a koneční stavy meřidel *</label><br />
            <svg class="icon_help help-right-text" data-hint="#real-hint-3">
                <use xlink: href="#help"></use>
            </svg>
        </div>

        <div class="meters-universal">
            <input type="number" class="field meter-universal-field" name="initialValueUniversal" id="initialValueUniversal" step="any" placeholder="Počateční stav" value="<?= $data['initialValueUniversal'];?>" />
            <input type="number" class="field meter-universal-field" name="endValueUniversal" id="endValueUniversal" step="any" placeholder="Koneční stav" value="<?= $data['endValueUniversal'];?>" />
            <input type="text" class="field meter-universal-field" name="meterNumberUniversal" id="meterNumberUniversal" placeholder="Číslo meřiče" value="<?= $data['meterNumberUniversal'];?>" />
        </div>

        <div class="text-help">
            <label class="label_text" id="label_text">Vyber z uvedených možností zdroje odečtů meřidel</label>
        </div>
        <div class="origins">
            <label class="label_text">Zdroj počátečného stavu meřidel </label>
            <select name="originMeterStart" class="select-list-origin-electro-start" id="load_php_origin_electro_start" style="width: 32.5%">
                <option value="<?= $data['originMeterStart'];?>"><?= $data['originMeterStart'];?></option>
            </select>
        </div>
        <div class="origins">
            <label class="label_text">Zdroj konečného stavu meřidel </label>
            <select name="originMeterEnd" class="select-list-origin-electro-end" id="load_php_origin_electro_end" style="width: 32.5%">
                <option value="<?= $data['originMeterEnd'];?>"><?= $data['originMeterEnd'];?></option>
            </select>
        </div>

        <h2 class="subtitle">VII. Ceny utilit </h2>

        <div class="text-help" style="align-items:center;">
            <div class="text-help">
                <label class="label_text" id="label_text">Zadejte průměrné jednotkové ceny z faktury za utilitu nebo z ceníku  </label>
            </div>
        </div>


        <div class="cena_universal">
            <label for="universalPriceOne" class="label_text">Průměrná jednotková cena za měrnou jednotku</label>
            <input type="number" class="field field-ceny-universal" id="universalPriceOne" name="universalPriceOne" step="any" placeholder="Zadej cenu" value="<?= $data['universalPriceOne'];?>" />
        </div>

        <div class="cena_universal">
            <label for="universalPriceMonth" class="label_text">Průměrná jednotková cena za měsíc </label>
            <input type="number" class="field field-ceny-universal" id="universalPriceMonth" name="universalPriceMonth" step="any" placeholder="Zadej cenu" value="<?= $data['universalPriceMonth'];?>" />
        </div>

        <div class="cena_universal">
            <label for="universalPriceAdd" class="label_text">Jiné náklady (nepovinné)
                <svg class="icon_help" data-hint="#real-hint-4">
                    <use xlink: href="#help"></use>
                </svg>
            </label>

            <input type="number" class="field field-ceny-universal" id="universalPriceAdd" name="universalPriceAdd" step="any" placeholder="Zadej častku" value="<?= $data['universalPriceAdd'];?>" />
        </div>

        <div class="cena_electro">
            <label for="universalPriceAddDesc" class="label_text">Jiné náklady - popis (nepovinné) </label>
            <input type="text" class="field field-ceny-universal" id="universalPriceAddDesc" name="universalPriceAddDesc" placeholder="Zadej popis" value="<?= $data['universalPriceAddDesc'];?>" />
        </div>

        <h2 class="subtitle">VIII. Uhrazené zálohy</h2>

        <div class="zalohy_universal">
            <div class="zalohy_universal_label">
                <label for="advancedPayments" class="label_text">Součet záloh, zaplacených nájemníkem v rámcích účtovacího období*</label>
            </div>
            <input type="number" class="field field-ceny-universal" id="advancedPayments" name="advancedPayments" step="any" placeholder="Zadej součet záloh" value="<?= $data['advancedPayments'];?>" />
        </div>

        <div class="errors_field">

        </div>

        <div class="submit_button_div">
            <input type="button" class="submit_button_refresh" id="btn_clear" value="Očistit" />
            <input type="submit" class="submit_button" id="btn_submit" value="Odeslat" />
        </div>

    </form>
</div>

<div id="real-hint-1" class="real-hint">
    <span>Např. Byt 3kk + parking; Atelier 1kk; číslo jednotky; podlaží apod. </span>
</div>
<div id="real-hint-2" class="real-hint">
    <span>Zadejte období, za které potřebujete zpracovat vyúčtování. V případě, že období vyúčtování je stejné jako období ve faktuře od dodavatele, zadejte celou částku z faktury v pole „jiné náklady“.  Průměrné ceny za jednotku a za měsíc nezadávejte.</span>
</div>
<div id="real-hint-3" class="real-hint">
    <span>Použijte stavy z faktury od dodavatele nebo z předávacího protokolu. </span>
</div>
<div id="real-hint-4" class="real-hint">
    <span>Tady můžete zadat bud celou částku z faktury od dodavatele, pokud potřebujete ji celou přefakturovat na nájemníka. Nebo můžete toto pole použit na zadaní jiných nákladů, např, jestli používáte ceník. </span>
</div>
