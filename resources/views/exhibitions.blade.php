@extends('layouts.app')
@section('content')
<!---->
<div class="clearfix">
    <div class="col4">
       <div class="flexslider">
          <div class="flex-viewport" style="overflow: hidden; position: relative; height: 427px;">
             <ul class="flexslides" style="width: 1600%; transition-duration: 0s; transform: translate3d(-640px, 0px, 0px);">
                <li class="clone" style="width: 640px; float: left; display: block;">
                   <img width="640px" src="/storage/images/_MG_1086.jpg" alt="_MG_1086.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;" class="flex-active-slide">
                   <img width="640px" src="/storage/images/_MG_0215.jpg" alt="_MG_0215.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;">
                   <img width="640px" src="/storage/images/_MG_38712.jpg" alt="_MG_38712.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;">
                   <img width="640px" src="/storage/images/_DSC0037 copia.jpg" alt="_DSC0037 copia.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;">
                   <img width="640px" src="/storage/images/_DSC0020 copia.jpg" alt="_DSC0020 copia.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;">
                   <img width="640px" src="/storage/images/_DSC0007 copia.jpg" alt="_DSC0007 copia.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;">
                   <img width="640px" src="/storage/images/_MG_1086.jpg" alt="_MG_1086.jpg">
                </li>
                <li style="width: 640px; float: left; display: block;" class="clone">
                   <img width="640px" src="/storage/images/_MG_0215.jpg" alt="_MG_0215.jpg">
                </li>
             </ul>
          </div>
          <ol class="flex-control-nav flex-control-paging">
             <li><a class="flex-active">1</a></li>
             <li><a>2</a></li>
             <li><a>3</a></li>
             <li><a>4</a></li>
             <li><a>5</a></li>
             <li><a>6</a></li>
          </ol>
          <ul class="flex-direction-nav">
             <li><a class="flex-prev" href="http://ngyngyst.com/exhibitions#">Previous</a></li>
             <li><a class="flex-next" href="http://ngyngyst.com/exhibitions#">Next</a></li>
          </ul>
       </div>
       <h2>EXHIBITIONS</h2>
       <p>
          2013 SpokeArt, San Francisco, EEUU (collective)
       </p>
       <p>
          &nbsp;
       </p>
       <p>
          2012 Miscelanea, Barcelona, Spain (collective)
       </p>
       <p>
          2012 Fifty24MX, Mexico DF, Mexico (collective)
       </p>
       <p>
          2012 IAMgallery, Madrid, Spain (collective)
       </p>
       <p>
          2012 Moca, Virigina, EEUU (colective)<br>
          2012 Artevistas, Barcelona, Spain<br>
          2012 Foresight Gallery, Amman, Jordan (collective)<br>
          2012 SpokeArt, San Francisco, EEUU (collective)
       </p>
       <p>
          2011 Pantocrator, Shangai, China<br>
          2011 Espai B, Barcelona, Spain (collective)<br>
          2011 London Miles, London, UK (collective)<br>
          2011 O Gallery, Oporto, Portugal (collective)<br>
          2011 Start/ stuff&amp;art, Sao Vicente, Cape verde<br>
          2011 TiposInfames, Madrid, Spain<br>
          2011 Pantocrator, Barcelona, Spain (collective)<br>
          2011 Miscelanea, Barcelona, Spain
       </p>
       <p>
          2010 Vaca i la lluna, Reus, Spain<br>
          2010 Baum Shop, Barcelona, Spain<br>
          2010 Apart gallery, London, UK (collective)<br>
          2009 Impaktes Visuals, Sabadell, Spain<br>
          2009 Els Amics de les arts, Terrassa, Spain
       </p>
    </div>
    <div class="col2">
       <div class="colcontent">
       </div>
    </div>
    <a id="toTop" href="http://ngyngyst.com/exhibitions#content" class="top" style="display: none;">Up ↑</a>
    @endsection