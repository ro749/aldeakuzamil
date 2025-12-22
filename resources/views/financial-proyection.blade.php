@php
    $field = new \Ro749\SharedUtils\Forms\Field(
        type: \Ro749\SharedUtils\Forms\InputType::NUMBER,
    );
    $weeks_field = new \Ro749\SharedUtils\Forms\Field(
        type: \Ro749\SharedUtils\Forms\InputType::NUMBER,
    );
@endphp

<div class="financial-projection" style="padding-left: 12rem; padding-right: 12rem; display: grid; grid-template-columns: repeat(2, 1fr); column-gap: 2rem; row-gap: .25rem;">
    <div class="section-title">Variables</div>
    <div></div>
    <div class="row">
        <div class="label">Fracciones</div>
        <div class="value"><x-field :field="$field" name="fracciones" type="number"/></div>
    </div>
    
    
    <div class="row">
        <div class="label">Semanas</div>
        <div class="value" id="weeks">6</div>
    </div>
    <div class="row">
        <div class="label">Inversión</div>
        <div class="value" id="inversion">80,000</div>
    </div>
    <div class="row">
        <div class="label">Semanas de uso personal</div>
        <div class="value"><x-field :field="$weeks_field" name="weeks-personal" type="number"/></div>
    </div>

    <div class="section-title">Proyección de Renta</div>
    <div class="section-title">Proyección de plusvalía y Renta</div>
    <div class="row">
        <div class="label">Noches Disponibles</div>
        <div class="value" id="nights-available">35</div>
    </div>
    <div class="row">
        <div class="label">Plusvalía</div>
        <div class="value">15%</div>
    </div>
    <div class="row">
        <div class="label">Ocupación Estimada</div>
        <div class="value">80%</div>
    </div>
    <div class="row">
        <div class="label">Cap Rate</div>
        <div class="value cap-rate">5.8%</div>
    </div>
    <div class="row">
        <div class="label">Valor Promedio Noche*</div>
        <div class="value" id="night-value">200</div>
    </div>
    <div class="row line bold">
        <div class="label">Rendimiento Anual total</div>
        <div class="value" id="anual_performance">20.8%</div>
    </div>
    <div class="row">
        <div class="label">Renta Bruta</div>
        <div class="value" id="rent">5,600</div>
    </div>
    <div></div>
    <div class="row">
        <div class="label">Costo de Administración</div>
        <div class="value" id="cost-admin">560</div>
    </div>
    <div class="row bold">
        <div class="label">Inversión a 1 año</div>
        <div class="value"></div>
    </div>
    <div class="row">
        <div class="label">Mantenimiento</div>
        <div class="value" id="#mantenimiento">400</div>
    </div>
    <div class="row">
        <div class="label">Valor de las Fracciones</div>
        <div class="value" id="fraction-value-1">92,000</div>
    </div>
    <div class="row line bold">
        <div class="label">Utilidad</div>
        <div class="value" id="utility">4,640</div>
    </div>
    <div class="row">
        <div class="label">Ingreso por Rentas</div>
        <div class="value" id="rent-earnings-1">4,640</div>
    </div>
    <div style="height: 2rem;"></div>
    <div></div>
    <div class="row bold">
        <div class="label">Cap Rate</div>
        <div class="value cap-rate">5.8%</div>
    </div>
    <div class="row bold">
        <div class="label">Inversión a 5 años</div>
        <div class="value"></div>
    </div>
    <div></div>
    <div class="row">
        <div class="label">Valor de las Fracciones</div>
        <div class="value" id="fraction-value-5"></div>
    </div>
    <div class="note">
        * Valor promedio de la zona y el tipo
    </div>

    <div class="row">
        <div class="label">Ingreso por Rentas*</div>
        <div class="value" id="rent-earnings-5">27,840</div>
    </div>
    <div></div>
    <div class="row line bold">
        <div class="label">ROI Acumulado**</div>
        <div class="value" id="roi">136%</div>
    </div>
    <div style="height: 2rem;"></div>
    <div></div>
    <div></div>
    <div class="note">
        * Considerando un incremento del 10% Anual
    </div>
    <div></div>
    <div class="note">
        ** Valor de las fracciones más la renta menos la inversión inicial
    </div>
</div>

<div style="padding-left: 12rem; padding-right: 12rem;" class="footer">
    Las proyecciones financieras presentadas se basan en estimaciones y supuestos actuales.
    Estos cálculos son únicamente informativos y no constituyen garantía de resultados futuros.
</div>


@push('scripts')
<script>
    $('#fracciones').on('input', function() {
        proyection_changed();
    });

    $('#weeks-personal').on('input', function() {
        proyection_changed();
    });

    function proyection_changed() {
        let fracciones = $('#fracciones').val();
        var weeks = fracciones * 6;
        var inversion = fracciones * data['price'];
        var weeks_personal = $('#weeks-personal').val();
        var nights_available = (weeks - weeks_personal) * 7;
        var rent_per_night = $('#night-value').html();
        var rent = nights_available * rent_per_night;
        var cost_admin = rent * 0.1;
        var mantenimiento = inversion * 0.005;
        var utility = rent - cost_admin - mantenimiento;
        var cap_rate = (utility / inversion) * 100;
        var fraction_value_1 = inversion * 1.15;
        var fraction_value_5 = inversion * (1.15 ** 5);
        var rent_earnings_5 = utility * 6;
        var roi = ((fraction_value_5 + rent_earnings_5 - inversion) / inversion) * 100;
        $('#inversion').set_money(inversion);
        $('#weeks').html(weeks);
        $('#nights-available').html(nights_available);
        $('#rent').set_money(rent);
        $('#cost-admin').set_money(cost_admin);
        $('#mantenimiento').set_money(mantenimiento);
        $('#utility').set_money(utility);
        $('.cap-rate').set_percent(cap_rate);
        $('#anual_performance').set_percent(cap_rate + 15);
        $('#fraction-value-1').set_money(fraction_value_1);
        $('#rent-earnings-1').set_money(utility);
        $('#fraction-value-5').set_money(fraction_value_5);
        $('#rent-earnings-5').set_money(rent_earnings_5);
        $('#roi').set_percent(roi);
    }
    $('#fracciones').val(1);
    $('#weeks-personal').val(1);
    @push('fill')
    proyection_changed();
    @endpush
</script>
@endpush