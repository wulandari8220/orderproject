<?php 
 require_once('menu.php');

 $nasi = new Menu('Nasi Putih',4000,'Nasi-Putih.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fsains.kompas.com%2Fread%2F2016%2F09%2F15%2F201700223%2Fnasi.putih.lebih.berisiko.sebabkan.diabetes.ketimbang.minuman.manis&psig=AOvVaw1cYhtCN-TBQBYYraiLmIWV&ust=1596615662072000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIiHrqSPgesCFQAAAAAdAAAAABAV)
 
 $ayamPenyet = new Menu ('Ayam Penyet',13000,'foto-utama-ayam-penyet-78d36c30229c1894d4d5995542536d2c.jpg'); 
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.idntimes.com%2Ffood%2Frecipe%2Freza-iqbal%2Fresep-bikin-ayam-penyet-yang-enak&psig=AOvVaw15q70WgSqQXE0ydXH6AlSp&ust=1596617574787000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPjyw52WgesCFQAAAAAdAAAAABAD)

 $ayamBakar = new Menu ('Ayam Bakar',13000,'images_daging_ayam-bakar-kalasan.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fselerasa.com%2Fresep-dan-cara-membuat-ayam-bakar-kalasan-yang-enak-sedap-dan-gurih&psig=AOvVaw2a-equ36OozWlGdxj1tfGi&ust=1596617715468000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMClgOOWgesCFQAAAAAdAAAAABAd)
 
 $sateAyam = new Menu ('Sate Ayam',17000,'sateayam.jpg'); 
 //(https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.dapurkobe.co.id%2Fsate-ayam&psig=AOvVaw3aMHSk1_C2f55raXou74uu&ust=1596617974224000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPjcydKXgesCFQAAAAAdAAAAABAD)
 
 $mieAyamBakso = new Menu ('Mie Ayam Bakso',15000,'mie-ayambakso.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.reddoorz.com%2Fblog%2Fid%2Fplaces-to-eat%2Fmie-ayam-enak-di-jakarta&psig=AOvVaw0jzZgK_JcOx9lItwWZGpzR&ust=1596618069044000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJiHy4iYgesCFQAAAAAdAAAAABAD)
 
 $nasiGoreng = new Menu ('Nasi Goreng',12000,'images_nasi_nasi_goreng_nasi-goreng-biasa-nan-pedas.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fselerasa.com%2Fresep-dan-cara-memasak-nasi-goreng-biasa-nan-pedas&psig=AOvVaw3pkqzJYCFmJckp8VZwepIs&ust=1596618192194000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKi247uYgesCFQAAAAAdAAAAABAm)
 
 
 $tehManis = new Menu ('Teh Manis',5000,'es-teh-manis-🍺-pr_recookminumandingin-foto-resep-utama.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fcookpad.com%2Fid%2Fresep%2F3591216-es-teh-manis-%25F0%259F%258D%25BA-pr_recookminumandingin&psig=AOvVaw1lK1GGaAg_43nhxxnZQiCU&ust=1596618492472000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLjQytSZgesCFQAAAAAdAAAAABAD)
 
 $airMineral = new Menu ('Air Mineral',5000,'Air_Mineral_AQUA_600ml.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Freview.bukalapak.com%2Fothers%2Fmerek-air-mineral-kemasan-botol-terbaik-111785&psig=AOvVaw03HZVJorE4CCLbf-du5lm3&ust=1596618654972000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPiV_7GagesCFQAAAAAdAAAAABAD)
 
 $jusAlpukat = new Menu ('Jus Alpukat', 10000,'80804982-1633679013439729-4856995162210626944-n-e76c8100d5dd1d2e835cbc2edf086597.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fbali.idntimes.com%2Ffood%2Frecipe%2Fnaufal-al-rahman-1%2Fresep-minuman-segar-dari-alpukat-regional-bali&psig=AOvVaw3xXxJ6OyCow5BZUAXe1rhj&ust=1596618797548000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDe6teagesCFQAAAAAdAAAAABAD)
 
 $jusApel = new Menu ('Jus Apel',11000,'jus apel.jpg');
 //(https://www.google.com/url?sa=i&url=http%3A%2F%2Fcaramembuatjus36.blogspot.com%2F2015%2F08%2Fcara-membuat-jus-apel.html&psig=AOvVaw3k-er7LdUKHrYSoBCxMIqa&ust=1596618857918000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKiYnvmagesCFQAAAAAdAAAAABAJ)
 
 $kopi = new Menu ('Kopi',10000,'medium_f2b219f03afae94e715751ec101912c3.jpg');
 //(https://www.google.com/url?sa=i&url=https%3A%2F%2Fjuara.bolasport.com%2Fread%2F321493271%2Fdaripada-pakai-suplemen-lebih-baik-minum-kopi-untuk-tingkatkan-tenaga-saat-olahraga%3Fpage%3Dall&psig=AOvVaw1uItJF7H0xHFqESPdWRjnb&ust=1596618920110000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDnqpWbgesCFQAAAAAdAAAAABAD)
 
 $foodsMenu = array($nasi, $ayamPenyet, $ayamBakar, $sateAyam, $mieAyamBakso, $nasiGoreng);
 $drinksMenu = array($tehManis, $airMineral, $jusAlpukat, $jusApel, $kopi);
?>