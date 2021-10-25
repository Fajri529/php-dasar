<?php
//int bilangan bulat
echo "decimal : ";
var_dump(1234);

echo "octal : ";
var_dump(01234);

echo "hexadecimal : ";
var_dump(0x1A);

echo "binary : ";
var_dump(0b111111);

echo "undescore in number :";
var_dump(11_222_3245);

//float pecahan
echo "floating point : ";
var_dump(11.234);

echo "floating point dengan E Notation : (1.7 x 1000 ) : ";
var_dump(1.7e3);

echo "floating point dengan E Notation minus : (1.7 x 0.001 ) : ";
var_dump(1.7e-3);

echo "floating point garis bawah : ";
var_dump(12.35_56);

//batas int php
echo "int overflow ";
var_dump(9223372036854775808);

/*var_dump untuk menampilkan hasil serta jenis tipedatanya

Di PHP terdapat 2 jenis tipe data number
1.(int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2) dan
2.(float) Bilangan pecahan

Di PHP kita bisa menambahkan _ (garis bawah) di angka, untuk mempermudah mudah dibaca saat dijalankan, _ (garis bawah) tersebut akan di ignore
Untuk angka negatif, bisa menggunakan tanda - (minus) di depan angka

*/

?>