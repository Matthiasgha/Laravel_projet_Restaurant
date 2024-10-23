@yield('header')  
@section('name')
        lorem ipsum
@show


{{-- 
0 nom
1 description
2 prix
3 image
 --}}

 

 echo $plat[0]; // margarita
 echo $plat[1]; //Tomate mozza basilic
 echo $plat[2]; //9.00
 echo $plat[3]; //margerita.jpg

 {{-- [0] [0] nom du premier plat --}}
 {{-- [0] [1] desciptio, du premier plat  --}}
 {{-- [0] [2] prix du premier plat --}}
 {{-- [0] [3] img du premier plat --}}

 echo $plat[0][0]; // margarita
 echo $plat[0][1]; //Tomate mozza basilic
 echo $plat[0][2]; //9.00
 echo $plat[0][3]; //margerita.jpg


 autre façon d'écrire 
 $plat = $plats[0];
 echo $plat[0];
 echo $plat[1];
 echo $plat[2];
 echo $plat[3];

 {{-- 
 0 premier plat
 1 deuxieme plat
 --}}

 {{-- objet simple --}}

 echo $plat->nom
 echo $plat->descr
 echo $plat->prix
 echo $plat->image

 {{-- objet dans un tableau --}}

 $plat = $plats[0];

 echo $plat->nom
 echo $plat->descr
 echo $plat->prix
 echo $plat->image

 {{-- tableau simple a clé alphanumérique  --}}

 $plat = $plats[0]
 
 echo $plat[nom];
 echo $plat[descr];
 echo $plat[prix];
 echo $plat[image];
