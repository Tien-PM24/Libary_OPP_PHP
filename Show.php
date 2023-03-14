<?php
include "./Author.php";
include "./Book.php";
include "./Library.php";
include "./Loan.php";
include "./Category.php";
include "./Student.php";


$author=new Author();
$author->GetAuthor("A Tien","13-09-2003","Nam","Kon Tum");
echo $author->Display_AuthorInfo();
echo "###------###"."<br>";
$book=new Library_Book("A1","Truyện ma","C4",2020,34000.000,"U8",61,"Đà Nẵng","5");

echo $book->Display_Book_Infor();
echo "###------###"."<br>";
echo $book->Display_Libr_Boo();
echo "###------###"."<br>";

$loan=new Loan("98","14-03-2015",6);
echo $loan->Display_Loan_info();
echo "###------###"."<br>";
$student=new Student();
$student->Student("PO9","A Thi","12-09-2002","PNV24B","CNTT");
echo $student->Display_Student();
echo "###------###"."<br>";
$category=new Cetagory();
$category->Category("Hài","23M","Hay sôi động");
echo $category->Display_Category();
echo "###------###"."<br>";



?>