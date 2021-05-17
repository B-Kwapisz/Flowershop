{extends file="layout.tpl"}

{block name="localstyle"}
  <link href="css/table-display.css" rel="stylesheet" />
  <style type="text/css">
    .showFlower {
      margin-top: 20px;
    }
    .showFlower tr {
      vertical-align: top;
    }
    .showFlower tr td:first-child {
      padding-right: 10px;
    }
    img.flower {
      width: 220px;
      height: 220px;
    }
  </style>
{/block}

{block name="content"}

  <table class='showFlower'>
    <tr>
      <td><img class='flower' src="img/flower/{$flower->imagefile}" /></td>

      <td>
        <b>{$flower->name|escape: 'html'} (#{$flower->id})</b>
        <br />
        price: ${$flower->price}

        <br />
        <br />

        {$flower->description|escape: 'html'}

        <br />
        <br />

        <b>Cart</b>
        <form>
          THE QUANTITY ENTRY FORM
        </form>
      </td>
    </tr>
  </table>
{/block}
