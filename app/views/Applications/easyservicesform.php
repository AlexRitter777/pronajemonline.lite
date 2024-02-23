<svg style="display: none;">
    <symbol id="minus" viewBox="0 0 32 32">
        <!--icon Minus-->
        <g>
            <path d="M20,17h-8c-0.5522461,0-1-0.4472656-1-1s0.4477539-1,1-1h8c0.5522461,0,1,0.4472656,1,1S20.5522461,17,20,17z" />
        </g>
        <g>
            <path d="M24.71875,29H7.28125C4.9204102,29,3,27.0791016,3,24.71875V7.28125C3,4.9208984,4.9204102,3,7.28125,3h17.4375    C27.0795898,3,29,4.9208984,29,7.28125v17.4375C29,27.0791016,27.0795898,29,24.71875,29z M7.28125,5    C6.0234375,5,5,6.0234375,5,7.28125v17.4375C5,25.9765625,6.0234375,27,7.28125,27h17.4375    C25.9765625,27,27,25.9765625,27,24.71875V7.28125C27,6.0234375,25.9765625,5,24.71875,5H7.28125z" />
        </g>
    </symbol>
</svg>
<svg style="display: none;">
    <symbol id="plus" viewBox="0 0 96 96">
        <!--icon Plus-->
        <g>
            <path d="M80,4H16C9.37,4,4,9.37,4,16v64c0,6.63,5.37,12,12,12h64c6.63,0,12-5.37,12-12V16C92,9.37,86.63,4,80,4z M84,80  c0,2.21-1.79,4-4,4H16c-2.21,0-4-1.79-4-4V16c0-2.21,1.79-4,4-4h64c2.21,0,4,1.79,4,4V80z" />
            <path d="M64,44H52V32c0-2.209-1.791-4-4-4s-4,1.791-4,4v12H32c-2.209,0-4,1.791-4,4s1.791,4,4,4h12v12c0,2.209,1.791,4,4,4  s4-1.791,4-4V52h12c2.209,0,4-1.791,4-4S66.209,44,64,44z" />
        </g>
    </symbol>
</svg>
<svg style="display:none;">
    <!--icon Help-->
    <symbol id="help" viewBox="0 0 24 24">
        <g>
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z" />
        </g>
    </symbol>
</svg>



<div class="container">
    <h1 class="title">Zjednodušené vyúčtování služeb spojených s užíváním bytu </h1>
    <form method="POST" class="form" name="easyservices" action="/applications/services-calc">

        <h2 class="subtitle">I. Pronajímatel </h2>

        <label for="landlordName" class="label_text">Jméno a přímení / Název firmy *</label><br />
        <input type="text" name="landlordName" id="landlordName" class="field-1" maxlength="75" autocomplete="on" value="<?=$data['landlordName']?>"><br />

        <label for="landlordAddress" class="label_text">Adresa *</label><br />
        <input type="text" name="landlordAddress" id="landlordAddress" class="field-1" maxlength="75" autocomplete="on" value="<?=$data['landlordAddress']?>"><br />

        <label for="accountNumber" class="label_text">Číslo účtu </label><br />
        <input type="text" name="accountNumber" id="accountNumber" class="field-1" maxlength="75" autocomplete="on" value="<?=$data['accountNumber'] ?>"><br />

        <h2 class="subtitle">II. Nemovitost </h2>

        <label for="propertyAddress" class="label_text">Adresa nemovitosti *</label><br />
        <input type="text" name="propertyAddress" id="propertyAddress" class="field-1" maxlength="75" autocomplete="on" value="<?=$data['propertyAddress'] ?>"><br />

        <div class="text-help">
            <label for="propertyType" class="label_text">Popis nemovitosti *</label><br />
            <svg class="icon_help help-right-text" data-hint="#real-hint-1">
                <use xlink: href="#help"></use>
            </svg>
        </div>
        <input type="text" name="propertyType" id="propertyType" autocomplete="on" class="field-1" maxlength="75" value="<?=$data['propertyType'] ?>">

        <h2 class="subtitle">III. Nájemník </h2>

        <label for="tenantName" class="label_text">Jméno a přímení / Název firmy *</label><br />
        <input type="text" name="tenantName" id="tenantName" class="field-1" maxlength="75" autocomplete="on" value="<?= $data['tenantName'] ?>"><br />

        <label for="tenantAddress" class="label_text">Adresa *</label><br />
        <input type="text" name="tenantAddress" id="tenantAddress" class="field-1" maxlength="75" autocomplete="on" value="<?=$data['tenantAddress'] ?>"><br />

        <h2 class="subtitle">IV. Správce </h2>

        <label for="adminName" class="label_text">Název firmy, vykonávající správu domu</label><br />
        <input type="text" name="adminName" id="adminName" class="field-1" maxlength="75" autocomplete="on" value="<?= $data['adminName'] ?>"><br />

        <h2 class="subtitle">V. Vyúčtování za období</h2>

        <div class="text-help">
            <h3 class="h3-subtitle">Vyúčtování zpracováno za období:</h3>
            <svg class="icon_help help-right-text" data-hint="#real-hint-3">
                <use xlink: href="#help"></use>
            </svg>
        </div>

        <div class="origins">
            <label class="label_text">Období, za které se zpracovává vyúčtovaní *</label>
            <select name="rentYearDate" class="select-list-rent-date-year" id="rentYearDate" style="width: 32.5%">
                <option value="<?= $data['rentYearDate'];?>"><?= $data['rentYearDate'];?></option>
            </select>
        </div>

        <h2 class="subtitle">VI. Náklady za období </h2>

        <div class="text-help">
            <label class="label_text" id="label_text">Vyberte náklad a zadejte částku *</label><br />
            <svg class="icon_help help-right-text" data-hint="#real-hint-4">
                <use xlink: href="#help"></use>
            </svg>
        </div>

        <div class="add_input_fields">
            <div class="add_field first-field">
                <select name="pausalniNaklad[]" class="select-list" id="test1" style="width: 55%">
                    <option value="<?=$data['pausalniNaklad'][0]; ?>"><?=$data['pausalniNaklad'][0]; ?></option>
                </select>
                <input type="number" class="right-field" name="servicesCost[]" id="servicesCost1" step="any" placeholder="Zadej častku v Kč" value="<?=$data['servicesCost'][0] ?>" />
            </div>
            <!-- /.add_field first-field-->

            <?php for ($i = 1; $i <= count($data['pausalniNaklad']); $i++):?>
                <?php if(!empty($data['pausalniNaklad'][$i])): ?>

                    <div class="add_field costs_added_after" id="<?= ($i+1)?>">
                        <select name="pausalniNaklad[]" class="added-content select-list" id="test<?= ($i+1)?>" style="width: 55%">
                            <option value="<?=$data['pausalniNaklad'][$i]; ?>"><?=$data['pausalniNaklad'][$i]; ?></option>
                        </select>
                        <input type="number" class="right-field" name="servicesCost[]" id="servicesCost<?= ($i+1)?>" step="any" placeholder="Zadej častku v Kč" value="<?=$data['servicesCost'][$i]; ?>"/>
                        <a href="#" class="remove_field">
                            <svg class="icon_minus">
                                <use xlink: href = "#minus" ></use >
                            </svg >
                            <span class = "icon_title">Odebrat</span>
                        </a>
                    </div>
                    <!-- /.add_field costs_added_after -->
                <?php endif; ?>
            <?php endfor; ?>

        </div>
        <!-- /.add_input_fields -->

        <a href="#" class="add_input_fields_button">
            <svg class="icon_plus">
                <use xlink: href="#plus"></use>
            </svg>
            <span class="icon_title">Přidat náklad</span>
        </a>


        <h2 class="subtitle">VII. Uhrazené zálohy</h2>

        <div class="zalohy">
            <div class="zalohy_label">
                <label for="advancedPayments" class="label_text">Součet zaloh za služby, zaplacených najmeníkem v ramcích učtovácího období</label>
            </div>
            <input type="number" class="field field-slozky" id="advancedPayments" name="advancedPayments" step="any" placeholder="Zadej coučet záloh" value="<?= $data['advancedPayments']; ?>" />
        </div>

        <label for="advancedPaymentsDesc" class="label_text">Uhrazené zálohy – komentář </label><br />
        <input type="text" name="advancedPaymentsDesc" id="advancedPaymentsDesc" class="field-1" maxlength="75" placeholder="Např. Leden 2020 - Červen 2020 - 2000 Kč" value="<?=$data['advancedPaymentsDesc']?>"><br />

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
    <span>Obvykle 1.01. – 31.12, ale v některých případech se muže lišit, např. dům byl předan do správy uprostřed roku (u novostaveb), změna majitele, změna správce apod. Počáteční a koneční data jsou vždycky uvedené ve vyúčtování správce.</span>
</div>
<div id="real-hint-3" class="real-hint">
    <span>Období obvykle ohraničeno začátkem nebo koncem kalendářního roku a dnem nastehování/odstěhování nájemníka. V případě, jestli nájemník bydlil od 1.01-31.12 doporučujeme použit zjednodušené vyúčtování služeb.</span>
</div>
<div id="real-hint-4" class="real-hint">
    <span>Vyberte paušální náklady, které budete přefakturovat na nájemníka. Najdete jich seznam ve vyúčtování správce. Které náklady budou přefakturovány by měla určovat nájemní smlouva, pokud tomu tak není tak postupujte podle občanského zákoníku. Tady nezadávejte náklady na topení, teplou a studenou vodu. Ty budou spočítané dále dle aktuální spotřeby.</span>
</div>
<div id="real-hint-5" class="real-hint">
    <span>Nastehoval v průběhu roku a pokračuje bydlet: počáteční stavy – předávací protokol, koneční – vyúčtování správce (konec roku). Bydlel od začátku roku a odstěhoval v průběhu roku: počat. stavy – vyúčtování správce (začátek roku), koneční stavy – předávací protokol. Nastěhoval/odstěhoval v průběhu roku: stavy – předávací protokol. Bydlil celý rok: stavy  – vyúčtování správce.  </span>
</div>
<div id="real-hint-6" class="real-hint">
    <span>Pokud ve vyúčtování nákladů na vytápění správce používá jeden nebo několik koeficientů vyplníte pole s koeficientem/koeficienty. Koeficienty jsou obvykle uvedené v vypočtu spotřeby kalorimetrů a/nebo ve vypočtu spotřební složky topných nákladů.</span>
</div>
<div id="real-hint-7" class="real-hint">
    <span>Část nákladu na vytápění a ohřev teplé vody, která se vypočítavá na cely rok podle plochy jednotky. Tady zadejte částky za celý rok pro TUV a UT.</span>
</div>
<div id="real-hint-8" class="real-hint">
    <span>Část nákladu na vytápění a ohřev teplé vody, která se vypočítavá na základě aktuální spotřeby. Tady zadejte ceny za jednotku topení, a za 1m3 teplé nebo studené vody, které najdete ve vyúčtování správce.</span>
</div>
<div id="real-hint-9" class="real-hint">
    <span>Jedná se o náklady na studenou vodu, která byla ohřáta na teplou vodu. Ve většině případu cena je stejná jako u studené vody, ale může se stát , bude se o něco lišit. Ceny za 1m3 najdete ve vyúčtování správce.</span>
</div>
