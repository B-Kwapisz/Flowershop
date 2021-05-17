{extends file="layout.tpl"}

{block name='localstyle'}
  <style type='text/css'>
    img.flower {
      width: 50px;
      height: 50px;
    }
    .showFlowers tr td:first-child {
      padding-right: 10px;
    }
    .setOrder {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
{/block}

{block name="content"}
  <h2>Listing (by ...)</h2>

  <form class='setOrder' action='setOrder.php'>
    SELECTION FORM: name, price
  </form>

  <table class='showFlowers'>
    {foreach $flowers as $flower}
      <tr>
        <td>
          <a href="showFlower.php?flower_id={$flower->id}">
            {$flower->name|escape: 'html'}</a>
          <br />
          price: ${$flower->price}
        </td>
        <td><img class='flower' src="img/flower/{$flower->imagefile}" /></td>
      </tr>
    {/foreach}
  </table>

{/block}
