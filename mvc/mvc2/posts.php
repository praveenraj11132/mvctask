
<table> 
    <tr>
        <th>BOOK ID </th>
        <th>BOOK NAME</th>
        <th>BOOK TITLE</th>
        <th>BOOK AUTHOR</th>
        <th>BOOK PRICE</th>
    </tr>
 <?php foreach($data['posts']as $post):?>
 
 <tr>
    <td>  <?= $post->bookid ?>  </td>
    <td>  <?= $post->bookname ?> </td>
    <td>  <?= $post->booktitle ?> </td>
    <td>  <?= $post->bookauthor ?> </td>
    <td>  <?= $post->bookprice ?>  </td> 
</tr>
 <?php endforeach ?>
</table>