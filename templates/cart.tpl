{extends file="layout.tpl"}

{block name="localstyle"}
  <link href="css/table-display.css" rel="stylesheet" />
  <style type="text/css">
  </style>
{/block}

{block name="content"}

  <h2>My Cart</h2>

  {* iterate through the data, creating the tabular listing *}

  <pre>
    {$cart_data|@print_r}  {* a simple dump to see what you're getting *}
  </pre>

{/block}
