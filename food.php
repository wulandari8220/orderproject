<?php
 require_once('menu.php');

 $nasi = new Menu('Nasi Putih',4000,'Nasi-Putih.jpg','food1');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fsains.kompas.com%2Fread%2F2016%2F09%2F15%2F201700223%2Fnasi.putih.lebih.berisiko.sebabkan.diabetes.ketimbang.minuman.manis&psig=AOvVaw1cYhtCN-TBQBYYraiLmIWV&ust=1596615662072000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIiHrqSPgesCFQAAAAAdAAAAABAV)
 
 $ayamPenyet = new Menu ('Ayam Penyet',13000,'foto-utama-ayam-penyet-78d36c30229c1894d4d5995542536d2c.jpg','food2'); 
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.idntimes.com%2Ffood%2Frecipe%2Freza-iqbal%2Fresep-bikin-ayam-penyet-yang-enak&psig=AOvVaw15q70WgSqQXE0ydXH6AlSp&ust=1596617574787000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPjyw52WgesCFQAAAAAdAAAAABAD)

 $ayamBakar = new Menu ('Ayam Bakar',13000,'images_daging_ayam-bakar-kalasan.jpg','food3');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fselerasa.com%2Fresep-dan-cara-membuat-ayam-bakar-kalasan-yang-enak-sedap-dan-gurih&psig=AOvVaw2a-equ36OozWlGdxj1tfGi&ust=1596617715468000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMClgOOWgesCFQAAAAAdAAAAABAd)
 
 $sateAyam = new Menu ('Sate Ayam',17000,'sateayam.jpg','foodd'); 
 //(https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.dapurkobe.co.id%2Fsate-ayam&psig=AOvVaw3aMHSk1_C2f55raXou74uu&ust=1596617974224000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPjcydKXgesCFQAAAAAdAAAAABAD)
 
 $mieAyamBakso = new Menu ('Mie Ayam Bakso',15000,'mie-ayambakso.jpg', 'food4');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.reddoorz.com%2Fblog%2Fid%2Fplaces-to-eat%2Fmie-ayam-enak-di-jakarta&psig=AOvVaw0jzZgK_JcOx9lItwWZGpzR&ust=1596618069044000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJiHy4iYgesCFQAAAAAdAAAAABAD)
 
 $nasiGoreng = new Menu ('Nasi Goreng',12000,'images_nasi_nasi_goreng_nasi-goreng-biasa-nan-pedas.jpg','food5');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fselerasa.com%2Fresep-dan-cara-memasak-nasi-goreng-biasa-nan-pedas&psig=AOvVaw3pkqzJYCFmJckp8VZwepIs&ust=1596618192194000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKi247uYgesCFQAAAAAdAAAAABAm)
 
 $foodsMenu = array($nasi, $ayamPenyet, $ayamBakar, $sateAyam, $mieAyamBakso, $nasiGoreng);
 ?>