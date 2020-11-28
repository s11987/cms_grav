---
title: 'O nas'
---
<center><h3>Witaj w Świecie Kartek! Znajdziesz u nas kartki okolicznościowe na każdą okazję. Posiadamy szeroką ofertę kartek urodzinowych, imieninowych, świątecznych i wielu innych! </h3?</center>
<div style="margin-top: 100px">
<div class="snipcart-summary">
    <a href="#" class="snipcart-user-email snipcart-user-profile">
        Zaloguj się
    </a>
</div>
<div>
    Lots of content
</div>
<div class="snipcart-summary">
    Number of items: <span class="snipcart-total-items"></span>
    Total price: <span class="snipcart-total-price"></span>
</div>
</div>



     Hey {{ order.billingAddress.fullName }},
     {{ #has_any order.items }}
  <span>Items contain some elements!</span>
{{ else }}
  <span>Nothing in this...</span>
{{ /has_any }}