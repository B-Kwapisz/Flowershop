{*
flower.tpl: display of all flowers
*}

(extends file="layout")

{block name="localstyle"}
<link href="css/table-display.css" rel="stylesheet" />
{/block}
 
{block name="content"}
<h2>Flowers</h2>
 
<table>
  <tr>
    <th><a href="setOrderField.php?field=name">name</a></th>
    <th><a href="setOrderField.php?field=price">price</a></th>
    <th><a href="setOrderField.php?field=instock">quantity</a></th>
  </tr>
  {foreach $flower as $flower}
  <tr>
    <td>
      <a href="showBook.php?flower_id={$flower->id}">{$flower->name|escape: 'html'}</a>
    </td>
    <td>{$flower -> price}</td>
    <td>{$flower->quantity}</td>
  </tr>
  {/foreach}
</table>
{/block}