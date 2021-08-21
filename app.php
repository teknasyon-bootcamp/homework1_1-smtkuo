<?php

$age = 25;

if($age>=0 && $age<=14){
    // 0-14 yaş aralığında ise ekrana "Çocuk" yazdırır
    echo "Çocuk";
}elseif($age>=15 && $age<=24){
    // 15-24 yaş aralığında ise ekrana "Genç" yazdırır
    echo "Genç";
}elseif($age>=25 && $age<=64){
    // 25-64 yaş aralığında ise ekrana "Yetişkin" yazdırır
    echo "Yetişkin";
}elseif($age>64){
     // 64 yaşından büyük ise ekrana "Yaşlı" yazdırır
    echo "Yaşlı";
}

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */