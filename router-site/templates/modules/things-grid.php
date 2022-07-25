 <section>
 	<h2><?=$section['heading']?></h2>
 </section>

 <p>THINGS HELL YEAH</p>

<ul>
 <?php

 foreach($section['grid'] as $object) { ?>

   <li><h3><?=$object['title']?></h3>
   <p><?=$object['copy']?></p></li>

 <?php } ?>
</ul>