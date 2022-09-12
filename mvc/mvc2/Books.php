<?php
class Books extends Database{
    public function binsert($postdata)
    {
        $bname=$postdata['bookname'];
        $bid=$postdata['bookid'];
        $btitle=$postdata['booktitle'];
        $bauthor=$postdata['bookauthor'];
        $bprice=$postdata['bookprice'];
$this->query("INSERT INTO book1(bookname,bookid,booktitle,bookauthor,bookprice)
values('$bname','$bid','$btitle','$bauthor','$bprice')");
$this->execute();

    }  

    public function display()
    {
        $this-> query("select * from book1");
        return $this->resultSet();
    }
}