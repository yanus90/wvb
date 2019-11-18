<ul class="list-unstyled">
    <li class="name">{!! get_field('naam', 'option') !!}</li>
    <li>{!! get_field('sportpark', 'option') !!}</li>
    <li>{!! get_field('adres', 'option') !!}</li>
    <li>{!! get_field('postcode', 'option') !!} {!! get_field('woonplaats', 'option') !!}</li>
</ul>
<ul class="list-unstyled fa-ul">
    <li><a href="tel:{!! get_field('telefoonnummer_link', 'option') !!}" title="Neem contact met ons op"><span class="fa-li"><i class="fal fa-phone"></i></span>{!! get_field('telefoonnummer', 'option') !!}</a></li>
    <li><a href="mailto:{!! get_field('emailadres', 'option') !!}" title="Neem contact met ons op"><span class="fa-li"><i class="fal fa-envelope"></i></span>{!! get_field('emailadres', 'option') !!}</a></li>
</ul>